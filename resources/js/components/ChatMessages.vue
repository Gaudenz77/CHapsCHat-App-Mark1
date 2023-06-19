<template>
  <div>
    <figure
      class="left clearfix chatBody"
      v-for="(message, index) in messages"
      :key="`message-${index}`"
      :class="getMessageAnimationClass(message)"
    >
      <div class="clearfix">
        <div class="header">
          <div class="row">
  <div class="col">
    <div class="header">
      <blockquote class="lead blockquote m-3 ps-2">
        {{ message.message }}
      </blockquote>
    </div>
  </div>
  <div class="col-auto">
    <div class="text-end mt-2">
      <button v-if="message.user.id === authUserId" class="btn btn-circleChat text-sm me-2 text-center" @click="deleteMessage(message.id)">
        <i class="fa-solid fa-trash-can fa-1x deletIcon"></i><small>Delete</small>
      </button>
    </div>
  </div>
</div>
</div>

        <figcaption class="blockquote-footer  pb-0 pt-3 px-2 my-1 me-1 text-end">
          {{ message.user.name }}
        </figcaption>
      </div>
      <div class="dividerone"></div>
    </figure>
  </div>
</template>

<style>
.dividerone {
  height: 4px;
  text-decoration: dotted;
  background-color: #4e80b7;
  margin: 10px 0;
}

body.dark-mode .dividerone {
  height: 4px;
  text-decoration: dotted;
  background-color: #022342;
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
            Authorization: `Bearer ${localStorage.getItem('access_token')}`,
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
    axios.get('messages', {
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
},
getMessageAnimationClass(message) {
    if (message.user.id === this.authUserId) {
      // Message belongs to the current user, animate from left
      return 'animate__animated animate__fadeInLeft';
    } else {
      // Message belongs to another user, animate from right
      return 'animate__animated animate__fadeInRight';
    }
  },
  }
};
</script>