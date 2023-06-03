<template>
  <div class="input-group mb-3">
    <input
      id="btn-input"
      type="text"
      name="message"
      class="form-control"
      placeholder="Type your message here..."
      aria-label="Recipient's username" 
      aria-describedby="button-addon2"
      v-model="newMessage"
      @keyup.enter="sendMessage"
    />
    <button class="btn btn-outline-secondary" id="btn-chat" @click="sendMessage">
      Send
    </button>
  </div>
</template>
<script>
export default {
  emits: ['messagesent'],
  data() {
    return {
      newMessage: "",
    };
  },
  methods: {
    async sendMessage() {
      try {
        const response = await axios.post('/messages/', {
          message: this.newMessage
        });
        this.$emit("messagesent", {
  user: this.user,
  message: this.newMessage,
});

        console.log(response.data);
      } catch (error) {
        console.error(error);
      }

      this.newMessage = "";
    },
  },
};
</script>
