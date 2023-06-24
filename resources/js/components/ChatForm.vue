<template>
    <div class="input-group mb-3">
        <input
            id="btn-input"
            type="text"
            name="message"
            class="form-control formOwnOne"
            placeholder="Type your message here..."
            aria-label="Recipient's username"
            aria-describedby="button-addon2"
            v-model="newMessage"
            @keyup.enter="sendMessage"
        />
        <button
            class="btn btn-outline-secondary"
            id="btn-chat"
            @click="sendMessage"
        >
            <i class="fa-solid fa-paper-plane"></i>
        </button>
    </div>
</template>
<script>
export default {
    emits: ["messagesent"],
    data() {
        return {
            newMessage: "",
            user: {
                id: this.authUserId,
            },
            nextId: 1, // Initial value of nextId
        };
    },
    methods: {
        async sendMessage() {
            try {
                const response = await axios.post("messages", {
                    id: this.nextId, // Include the nextId in the message data
                    message: this.newMessage,
                });
                this.$emit("messagesent", {
                    id: this.nextId, // Emit the nextId as part of the message data
                    user: this.user,
                    message: this.newMessage,
                });
                console.log(response.data);
                this.nextId++; // Increment the nextId for the next message
            } catch (error) {
                console.error(error);
            }
            this.newMessage = "";
        },
    },
};
</script>
