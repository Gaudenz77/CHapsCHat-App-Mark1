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
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-between">
                    <div class="col-auto">
                        <figcaption
                            class="blockquote-footer pb-0 pt-3 ps-4 px-2 my-1 me-1"
                        >
                            {{ message.user.name }}
                        </figcaption>
                    </div>

                    <div class="col-auto">
                        <button
                            v-if="message.user.id === authUserId"
                            class="btn btn-circleChat text-sm me-2 text-center"
                            @click="deleteMessage(message.id)"
                        >
                            <i class="fa-solid fa-trash-can fa-1x deletIcon"></i
                            ><small>Delete</small>
                        </button>
                    </div>
                </div>
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
import axios from "axios";
import Echo from "laravel-echo";

export default {
  props: ["authUserId"],
  data() {
    return {
      messages: [],
      temporaryId: 1, // Initial value of temporaryId
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
        broadcaster: "pusher",
        key: import.meta.env.VITE_PUSHER_APP_KEY,
        cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
        encrypted: true,
        authEndpoint: "/broadcasting/auth",
        auth: {
          headers: {
            Authorization: `Bearer ${localStorage.getItem("access_token")}`,
          },
        },
      });
      window.Echo.private("playground").listen("MessageSent", (e) => {
        if (e.message.id === undefined) {
          // If the received message doesn't have an ID, assign a temporary ID
          e.message.id = `temp_${this.temporaryId}`;
          this.temporaryId++;
        }
        this.messages.unshift({
          message: e.message.message,
          user: e.user,
          id: e.message.id,
        });
      });
    } catch (error) {
      console.error("Error initializing Echo:", error);
    }
  },
  mounted() {
    axios
      .get("messages", {
        headers: {
          Authorization: `Bearer ${localStorage.getItem("access_token")}`,
        },
      })
      .then((response) => {
        this.messages = response.data.reverse();
      });
    this.$parent.$on("messagesent", (message) => {
      // Assign a temporary ID to the message if it doesn't have an ID
      if (message.id === undefined) {
        message.id = `temp_${this.temporaryId}`;
        this.temporaryId++;
      }
      // Add the new message to the messages array
      this.messages.unshift(message);
    });
  },
  methods: {
    deleteMessage(messageId) {
      if (typeof messageId !== "undefined") {
        axios
          .delete(`/messages/${messageId}`)
          .then((response) => {
            // Handle successful deletion
            console.log("Message deleted:", response.data);

            // Find the index of the message in the messages array
            const index = this.messages.findIndex(
              (message) => message.id === messageId
            );

            // Remove the message from the messages array
            if (index !== -1) {
              this.messages.splice(index, 1);
            }

            console.log("Message deleted"); // Display a console message
            // Show a success message in the UI
            // Example: this.$toast.success('Message deleted');
          })
          .catch((error) => {
            // Handle deletion error
            console.error("Error deleting message:", error);
            console.log("Message deletion failed"); // Display a console message
            // Show an error message in the UI
            // Example: this.$toast.error('Failed to delete message');
          });
      } else {
        // If the message doesn't have an ID, it is unsaved and can be directly removed from the messages array
        this.messages = this.messages.filter(
          (message) => message.id !== undefined
        );
      }
    },
    getMessageAnimationClass(message) {
      if (message.user.id === this.authUserId) {
        // Message belongs to the current user, animate from left
        return "animate__animated animate__fadeInLeft";
      } else {
        // Message belongs to another user, animate from right
        return "animate__animated animate__fadeInRight";
      }
    },
  },
};
</script>

