<template>
  <div>
    <!-- <div class="text-end mt-2">
      <button class="btn btn-own mt-md-0 mt-5 text-end" type="button" role="button" id="createButton2"><i class="fa-solid fa-circle-plus fa-2xl formOwnOne"></i> Create</button>
    </div> -->
      
    <div v-for="blog in blogs" :key="blog.id" class="col bg-danger rounded circleBlog mx-2 mb-2" data-aos="flip-left">
      <div class="textfieldBlogTitle">
        <h3>{{ blog.title }}</h3>
        <p><strong>Topic:</strong> {{ blog.topic }}</p>
        <p class="textfieldBlogContent">{{ blog.content }}</p>
        <button class="btn mt-2 mb-2 p-1"  type="button" role="button" @click="deleteBlog(blog.id)"><i class="fa-regular fa-trash-can"></i> Delete</button>
      </div>  
    </div>
  </div>
</template>

<script>
import axios from 'axios';
import AOS from 'aos';
import 'aos/dist/aos.css';

export default {
  data() {
    return {
      blogs: [],
    };
  },
  mounted() {
    this.fetchBlogs();
    AOS.init(); // Initialize AOS
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
