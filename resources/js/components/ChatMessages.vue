<template>
  <div>
    <figure class="left clearfix chatbody" v-for="message in messages" :key="message.id">
      <div class="clearfix">
        <div class="header">
          <blockquote class="lead blockquote ps-2">
            {{ message.message }}
          </blockquote>
        </div>
        <figcaption class="blockquote-footer text-end">
          {{ message.user.name }}
        </figcaption>
        <div class="text-end">
          <button v-if="message.user.id === authUserId" class="btn btn-danger btn-sm text-end" @click="deleteMessage(message.id)">
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
  props: ['authUserId'],
  data() {
    return {
      messages: []
    };
  },
  computed: {
    reversedMessages() {
      return this.messages.slice().reverse();
    },
    authUserId() {
      // Assuming you have access to the authenticated user's ID
      // Return the authenticated user's ID here
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
      window.Echo.private('playground').listen('MessageSent', (e) => {
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
    axios.get("/messages").then((response) => {
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
            // Remove the deleted message from the messages array
            this.messages = this.messages.filter(message => message.id !== messageId);
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
