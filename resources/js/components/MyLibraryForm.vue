<template>
  <div>
    <form @submit.prevent="submitForm">
      <label class="form-label formOwnOne">Email</label>
      <div class="input-group mb-3">
        <span class="input-group-text formOwnOne" id="basic-addon1"><i class="fa-solid fa-palette" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Select a topic"></i></span>
        <input type="text" class="form-control formOwnOne" placeholder="Topic" aria-describedby="basic-addon1" name="topic" id="topic" v-model="form.topic" required>
      </div>

      <label class="form-label formOwnOne">Content</label>
      <div class="input-group">
        <span class="input-group-text formOwnOne"><i class="fa-solid fa-file-signature" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Enter your content"></i></span>
        <textarea class="form-control formOwnOne" placeholder="Content" name="content" id="content" v-model="form.content" required></textarea>
      </div>

      <input type="hidden" name="_token" :value="form.csrfToken">
      <div class="text-center pt-3">
        <button type="submit" class="btn btn-circle mt-2 mb-2 p-1">submit</button>
      </div>
    </form>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      form: {
        topic: '',
        content: '',
        csrfToken: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
      },
    };
  },
  methods: {
    submitForm() {
      axios.post('/mylibrary', this.form)
        .then(response => {
          // Handle successful response
          console.log(response.data);
          this.$emit('library-added');
          this.form.topic = '';
          this.form.content = '';
          // Reload the page
          window.location.reload();
        })
        .catch(error => {
          // Handle error
          console.log(error.response.data);
        });
    }
  }
}
</script>


