<template>
  <div>
    <figure class="left clearfix chatbody animate__animated animate__fadeInLeft" v-for="message in messages" :key="message.id">
      <div class="clearfix">
        <div class="header">
          <blockquote class="lead blockquote ps-2">
            {{ message.message }}
          </blockquote>
        </div>
        <figcaption class="blockquote-footer px-2 me-2 text-end">
          {{ message.user.name }}
        </figcaption>
        <div class="text-end">
          <button v-if="message.user.id === authUserId" class="btn btn-danger btn-sm me-2 text-end" @click="deleteMessage(message.id)">
          Delete
        </button>
        </div>
      </div>
      <div class="dividerone"></div>
    </figure>
  </div>
</template>

<style>

.dividerone {
  height: 2px;
  background-color: black;
  margin: 10px 0;
}
</style>

<script>

import axios from 'axios';
import Echo from 'laravel-echo';

export default {
  props: ['authUserId', 'messages'],
  data() {
    return {
      messages: [],
    };
  },
  computed: {
    reversedMessages() {
      return this.messages.slice().reverse();
    },
    authUserId() {
      return this.$props.authUserId;
    },
  },
  created() {
    try {
      window.Echo = new Echo({
        broadcaster: 'pusher',
        key: import.meta.env.VITE_PUSHER_APP_KEY,
        cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
        encrypted: true,
        authEndpoint: '/broadcasting/auth',
        auth: {
          headers: {
            Authorization: `Bearer ${localStorage.getItem('access_token')}`
          }
        }
      });
      window.Echo.private('your-channel-name')
  .listen('.pusher:subscription_succeeded', (e) => {
    // Handle subscription success
    console.log('Subscription succeeded:', e);
  })
  .listen('MessageSent', (e) => {
    // Handle MessageSent event
    console.log('Message received:', e);
    this.messages.unshift({
      message: e.message.message,
      user: e.user
    });
  });
    } catch (error) {
      console.error('Error initializing Echo:', error);
    }
  },
  mounted() {
    axios.get('/messages', {
    headers: {
      Authorization: `Bearer ${localStorage.getItem('access_token')}`
    }
  }).then((response) => {
    this.messages = response.data.reverse();
  });
  },
  methods: {
    sendMessage() {
      this.$emit('messagesent', {
        user: this.user,
        message: this.newMessage
      });
      this.newMessage = '';
    },
    addMessage(message) {
      this.messages.unshift(message);
    },
    deleteMessage(messageId) {
  if (typeof messageId !== 'undefined') {
    // If the message has an ID, it is saved in the database
    axios.delete(`/messages/${messageId}`)
      .then(response => {
        // Handle successful deletion
        console.log('Message deleted:', response.data);
        // Find the index of the message in the messages array
        const index = this.messages.findIndex(message => message.id === messageId);
        // Remove the message from the messages array
        if (index !== -1) {
          this.messages.splice(index, 1);
        }
      })
      .catch(error => {
        // Handle deletion error
        console.error('Error deleting message:', error);
      });
  } else {
    // If the message doesn't have an ID, it is unsaved and can be directly removed from the messages array
    this.messages = this.messages.filter(message => message.id !== undefined);
  }
}
  }
};
</script>