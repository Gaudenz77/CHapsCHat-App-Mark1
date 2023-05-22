<template>
  <div>
    <div v-for="blog in blogs" :key="blog.id" class="col-sm-3 bg-danger circleBlog mx-2">
      <div class="textfieldBlog">
        <h3>{{ blog.title }}</h3>
        <p><strong>Topic:</strong> {{ blog.topic }}</p>
        <p>{{ blog.content }}</p>
        <button  class="btn btn-circle mt-2 mb-2 p-1" @click="deleteBlog(blog.id)">Delete</button>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      blogs: [],
    };
  },
  mounted() {
    this.fetchBlogs();
  },
  methods: {
    fetchBlogs() {
      axios.get('/blogosphere')
        .then(response => {
          this.blogs = response.data;
        })
        .catch(error => {
          console.error(error);
        });
    },
    deleteBlog(id) {
      axios.delete(`/blogosphere/${id}`)
        .then(response => {
          this.blogs = this.blogs.filter(blog => blog.id !== id);
        })
        .catch(error => {
          console.error(error);
        });
    },
  },
};
</script>
