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
      <div class="text-center pt-3">
        <button type="submit" class="btn btn-circle mt-2 mb-2 p-1" v-text="editMode ? 'Update' : 'Submit'"></button>
      </div>
      <input type="hidden" name="_token" :value="form.csrfToken">
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
      editMode: false, // New property for edit mode
    };
  },
  methods: {
  submitForm() {
    if (this.editMode) {
      // Update existing library entry
      axios.put(`/mylibrary/${this.library.id}`, this.form)
        .then(response => {
          console.log(response.data);
          this.resetForm();
          this.$emit('library-updated');
        })
        .catch(error => {
          if (error.response && error.response.data) {
            console.log(error.response.data);
          } else {
            console.log(error);
          }
        });
    } else {
      // Create new library entry
      axios.post('/mylibrary', this.form)
        .then(response => {
          console.log(response.data);
          this.resetForm();
          this.$emit('edit-library', library);
        })
        .catch(error => {
          if (error.response && error.response.data) {
            console.log(error.response.data);
          } else {
            console.log(error);
          }
        });
    }
  },
    editLibrary(libraryId) {
      this.editMode = true;
      axios.get(`/mylibrary/${libraryId}/edit`)
        .then(response => {
          const library = response.data;
          this.form.topic = library.topic;
          this.form.content = library.content;
          this.library = library;
        })
        .catch(error => {
          console.log(error.response.data);
        });
    },
    resetForm() {
      this.editMode = false;
      this.form.topic = '';
      this.form.content = '';
    },
  },
};
</script>



