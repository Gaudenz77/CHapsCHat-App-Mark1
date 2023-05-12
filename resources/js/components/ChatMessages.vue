<template>

    <figure class="left clearfix" v-for="message in messages" :key="message.id">
      <div class="clearfix">
        <div class="header">
          <figcaption class="blockquote-footer">
            {{ message.user.name }}
          </figcaption>
        </div>
        <blockquote class="blockquote">
          {{ message.message }}
        </blockquote>
      </div>

  </figure>
</template>


<script>
import Echo from 'laravel-echo';

/* import Pusher from 'pusher-js'; */

/* Pusher.logToConsole = true; */

/* window.Pusher = Pusher; */

export default{
  data() {
    return {
      messages: []
    };
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
    window.Echo.private("playground")
      .listen("MessageSent", (e) => {
        console.log('Message sent event received!');
        this.messages.push({
          message: e.message.message,
          user: e.user
        });
      });
  } catch (error) {
    console.error('Error initializing Echo:', error);
  }
},
  methods: {
    sendMessage() { 
      console.log('sendMessage method called!');
      this.$emit("messagesent", {
        user: this.user,
        message: this.newMessage,
      });
      this.newMessage = "";
    }
  },
// when import of old messages from db is needed...i guess...
  /* mounted() {
    axios.get("/messages").then((response) => {
      this.messages = response.data;
    });
  }, */
};
</script>

 






