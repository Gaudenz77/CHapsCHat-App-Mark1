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

  <template>
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
  </template>
  

<script>
import axios from 'axios';
  
export default {
  data() {
    return {
      form: {
        topic: '',
        content: '',
      },
    };
  },
  methods: {
    submitForm() {
      axios.post('/mylibrary', this.form)
        .then(response => {
          console.log(response.data);
          // Reset the form
          this.form.topic = '';
          this.form.content = '';
          // Emit an event to the parent component
          this.$emit('saved');
          // Reload the page
          window.location.reload();
        })
        .catch(error => {
          console.log(error);
        });
    },
  },
};
</script>


  