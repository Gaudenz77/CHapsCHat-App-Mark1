<template>
    <div>
        <form @submit.prevent="submitForm">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" v-model="form.title" required>
            </div>
            <div class="form-group">
                <label for="topic">Topic</label>
                <select class="form-control" id="topic" v-model="form.topic" required>
                    <option value="general">General</option>
                    <option value="resources">Resources</option>
                    <option value="techtalk">Tech Talk</option>
                </select>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" name="content" id="content" rows="5" v-model="form.content" required></textarea>
            </div>
            <input type="hidden" name="_token" :value="form.csrfToken">
            
            <div class="text-center pt-3">
                <button type="submit" class="btn btn-circle mt-2 mb-2 p-1">Create Blog</button>
            </div>
        </form>

        <div v-if="successMessage" class="alert alert-success alert-dismissible fade show">
        {{ successMessage }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    </div>
</template>

<script>
import axios from 'axios';

export default {
data() {
    return {
        form: {
            title: '',
            topic: 'general',
            content: '',
            csrfToken: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        },
        successMessage: '', // Variable to store the success message
        };
    },
    methods: {
        submitForm() {
            axios.post('/blogosphere', this.form)
                .then(response => {
                    // Handle success
                    console.log(response.data);
                    // Reset the form fields
                    this.form.title = '';
                    this.form.topic = 'general';
                    this.form.content = '';
                    // Set the success message
                    this.successMessage = response.data.message;
                    // Reload the page after a delay
                    setTimeout(() => {
                    location.reload();
                }, 2000); // Adjust the delay time (in milliseconds) as needed
            })
        .catch(error => {
                // Handle error
                console.log(error);
            });
        }
    }
};
</script>
