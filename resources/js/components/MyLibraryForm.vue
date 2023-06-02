<template>
  <div>
    <form @submit.prevent="submitForm">
      <label class="form-label formOwnOne">Topic</label>
      <div class="input-group mb-3">
        <span class="input-group-text formOwnOne" id="basic-addon1"><i class="fa-solid fa-palette formIcons" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Select a topic"></i></span>
        <input type="text" class="form-control formOwnOne" placeholder="Topic" aria-describedby="basic-addon1" name="topic" id="topic" v-model="form.topic" required>
      </div>

      <label class="form-label formOwnOne">Content</label>
      <div class="input-group">
        <span class="input-group-text formOwnOne"><i class="fa-solid fa-file-signature formIcons" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Enter your content"></i></span>
        <textarea class="form-control formOwnOne" placeholder="Content" name="content" id="content" v-model="form.content" required></textarea>
      </div>
      
      <div class="text-center pt-3">
        <!-- <button type="submit" class="btn btn-circle mt-2 mb-2 p-1" v-text="editMode ? 'Update' : 'Submit'"></button> -->
        <button type="submit" class="btn btn-circle mt-2 mb-2 p-1" v-html="editMode ? '<i class=\'fa-regular fa-edit\'></i> Update' : '<i class=\'fa-regular fa-save fa-2xl\'></i><br> Submit'"></button>
      </div>

      <input type="hidden" name="_token" :value="form.csrfToken">
    </form>
    <button type="button" id="closeButton" class="btn-close" aria-label="Close"></button>
    <p>Close Create Library</p>
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
            this.$emit('create-library');
            window.location.reload(); // Reload the page
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



