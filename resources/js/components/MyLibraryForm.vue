<!-- <template>
    <form method="POST" action="/mylibrary.store">
      @csrf
      <div class="input-group mb-3 mt-2">
        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-palette"></i></span>
        <input class="form-control" placeholder="Topic" aria-label="Topic" aria-describedby="basic-addon1" type="text" name="topic" v-model="form.topic" required>
      </div>
      
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-file-signature"></i>   </span>
        <textarea class="form-control" name="content" v-model="form.content" required></textarea>
      </div>
      
      <button type="submit" class="btn btn-primary mt-2 mb-2 p-1">submit</button>
    </form>
  </template> -->

<!-- <template>
  <form @submit.prevent="submitForm">
    @csrf
      <div class="input-group mb-3 mt-2">
        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-palette"></i></span>
        <input class="form-control" placeholder="Topic" aria-label="Topic" aria-describedby="basic-addon1" type="text" name="topic" v-model="form.topic" required>
      </div>
  
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-file-signature"></i></span>
        <textarea class="form-control" name="content" v-model="form.content" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary mt-2 mb-2 p-1">submit</button>
    </form>
</template> -->
<template>
  <div>
    <form @submit.prevent="submitForm">
      <div class="input-group mb-3 mt-2">
  <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-palette" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Select a topic"></i></span>
  <input type="text" class="form-control" placeholder="Topic" aria-describedby="basic-addon1" name="topic" id="topic" v-model="topic" required>
</div>

      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-file-signature" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Select a color"></i></span>
        <textarea class="form-control" placeholder="Content" name="content" id="content" v-model="content" required></textarea>
      </div>
      <input type="hidden" name="_token" :value="csrf_token">
      <button type="submit" class="btn btn-primary mt-2 mb-2 p-1">submit</button>
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
        axios.post('/mylibrary', {
          topic: this.topic,
          content: this.content
        })
        .then(response => {
          // Handle successful response
          console.log(response.data);
          this.$emit('library-added');
          this.topic = '';
          this.content = '';
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

  