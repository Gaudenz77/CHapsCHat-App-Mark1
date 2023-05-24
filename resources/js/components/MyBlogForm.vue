<template>
    <div>
        <form @submit.prevent="submitForm">


            <label class="form-label formOwnOne" for="title">Title</label>
            <div class="input-group mb-3">
                <span class="input-group-text formOwnOne" id="basic-addon1"><i class="fa-solid fa-palette formIcons" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Select a topic"></i></span>
                <input type="text" name="title" class="form-control formOwnOne" placeholder="Title" id="title" v-model="form.title" required>
            </div>

            <label for="topic">Topic</label>
            <div class="input-group">
                <span class="input-group-text formOwnOne"><i class="fa-solid fa-book-bookmark formIcons" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Enter your content"></i></span>
                <select class="form-control" id="topic" v-model="form.topic" required>
                    <option value="general"> General</option>
                    <option value="resources">Resources</option>
                    <option value="techtalk">Tech Talk</option>
                    <option data-content="<i class='fa-solid fa-heart' aria-hidden='true'></i>Option3"></option>
                </select>
            </div>

            <label class="form-label formOwnOne" for="content">Content</label>
            <div class="input-group">
                <span class="input-group-text formOwnOne"><i class="fa-solid fa-file-signature formIcons" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Enter your content"></i></span>
                <textarea class="form-control formOwnOne" placeholder="Content" name="content" id="content" rows="5" v-model="form.content" required></textarea>
            </div>
            <input type="hidden" name="_token" :value="form.csrfToken">
            
            <div class="text-center pt-3">
                <!-- <button type="submit" class="btn btn-circle mt-2 mb-2 p-1">Create Blog</button> -->
                <button type="submit" class="btn btn-circle mt-2 mb-2 p-1" v-html="editMode ? '<i class=\'fa-regular fa-edit\'></i> Update' : '<i class=\'fa-regular fa-save fa-2xl\'></i><br> Create'"></button>
            </div>
        </form>

        <div v-if="successMessage" class="alert alert-success alert-dismissible fade show">
        {{ successMessage }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <button type="button" id="closeButton2" class="btn-close" aria-label="Close"></button>
    <p>Close Create Blog</p>
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
