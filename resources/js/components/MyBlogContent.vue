<template>
  <div>
    <!-- <div v-for="blog in blogs" :key="blog.id" class="col-sm-3 bg-danger circleBlog mx-2">
      <div class="textfieldBlog">
        <h3>{{ blog.title }}</h3>
        <p><strong>Topic:</strong> {{ blog.topic }}</p>
        <p>{{ blog.content }}</p>
        <button @click="deleteBlog(blog.id)">Delete</button>
      </div>
    </div> -->
  
    <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Topic</th>
        <th scope="col">Content</th>
        <th scope="col">Created At</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="blog in filteredLibraries" :key="blog.id">
        <td>{{ blog.title }}</td>
        <td>{{ blog.topic }}</td>
        <td>{{ blog.content }}</td>
        <td>{{ formatDate(blog.created_at) }}</td>
        <td>
          <div class="text-center" type="button" @click="deleteBlog(blog.id)">
            <i class="fa-regular fa-trash-can"></i> Delete
          </div>
        </td>
      </tr>
    </tbody>
  </table>

  </div>
</template>
  
  <script>
import axios from 'axios';

export default {
    data() {
      return {
        title:'',
        topic: '',
        content:'',

        blogs: [],
      };
    },
    mounted() {
    axios.get('/myblog')
    .then(response => {
      this.libraries = response.data;
    })
    .catch(error => {
      console.log(error);
    });
  },
  /*   created() {
      this.fetchBlogs();
    }, */
    methods: {
      fetchBlogs() {
        // Make an HTTP request to fetch the blogs
        // Assuming you have an API endpoint to retrieve blogs at '/api/blogs'
        axios.get('/blogoSphere')
          .then(response => {
            this.blogs = response.data;
          })
          .catch(error => {
            console.error(error);
          });
      },
      deleteBlog(id) {
        // Make an HTTP request to delete the blog
        // Assuming you have an API endpoint to delete a blog at '/api/blogs/{id}'
        axios.delete(`/blogoSphere/${id}`)
          .then(response => {
            // Remove the deleted blog from the local array
            this.blogs = this.blogs.filter(blog => blog.id !== id);
          })
          .catch(error => {
            console.error(error);
          });
      },
    },
  };
  </script>