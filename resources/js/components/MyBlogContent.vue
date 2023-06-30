<template>
    <div class="d-flex flex-wrap">
      <div
        v-for="blog in blogs"
        :key="blog.id"
        class="col-md-4"
        data-aos="flip-left"
      >
        <div class="textfieldBlogTitle mx-2 mt-3 px-0 pb-2">
          <h2 class="display-6 mx-2"><strong>{{ blog.title }}</strong></h2>
          <p>{{ blog.user_id }}</p>
          <img
            :src="getImageUrl(blog.image)"
            class="img-fluid imageBlog mb-2"
            alt="Blog Image"
          />
          <div class="row justify-content-center">
            <div v-if="isAuthor(blog)" class="col-5 px-0 mt-4">
              <button
                class="btn btn-circleLibrary mt-2 mb-2 p-1"
                type="button"
                role="button"
                @click="deleteBlog(blog.id)"
              >
                <i class="fa-regular fa-trash-can"></i> Delete
              </button>
            </div>
            <div class="col-6 me-3 px-0">
              <button
                class="btn btn-circleBlogBig mt-2 mb-2 p-1"
                type="button"
                role="button"
                data-bs-toggle="modal"
                :data-bs-target="'#modal-' + blog.id"
              >
                Read More!
                <i class="fa-regular fa-newspaper fa-xl"></i>
              </button>
            </div>
          </div>
        </div>
  
        <!-- Modal -->
        <div
          class="modal fade"
          :id="'modal-' + blog.id"
          aria-labelledby="exampleModalLabel"
          aria-hidden="true"
          tabindex="-1"
        >
          <!-- Modal content -->
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import axios from "axios";
  import AOS from "aos";
  import "aos/dist/aos.css";
  
  export default {
    props: ["authUserId"],
    data() {
      return {
        blogs: [],
        loggedUser: document
          .querySelector("meta[name='user']")
          .getAttribute("content"),
      };
    },
    computed: {
      reversedMessages() {
        return this.messages.slice().reverse();
      },
      authUserId() {
        return this.$props.authUserId;
      },
    },
    mounted() {
      this.fetchBlogs();
      console.log(this.loggedUser);
      AOS.init(); // Initialize AOS
    },
    methods: {
      fetchBlogs() {
        axios
          .get("/blogosphere")
          .then((response) => {
            this.blogs = response.data;
          })
          .catch((error) => {
            console.error(error);
          });
      },
      getImageUrl(image) {
        if (image) {
          const baseUrl = "/assets/img/"; // Update the base URL to match your folder structure
          return baseUrl + image;
        }
        // Return a placeholder image URL or an empty string if no image is available
        return "/assets/img/ChapsChatLogo.png";
      },
      deleteBlog(id) {
        const csrfToken = document
          .querySelector('meta[name="csrf-token"]')
          .getAttribute("content");
  
        axios
          .delete(`/blogosphere/${id}`, {
            headers: {
              "X-CSRF-TOKEN": csrfToken,
            },
          })
          .then((response) => {
            this.blogs = this.blogs.filter((blog) => blog.id !== id);
          })
          .catch((error) => {
            console.error(error);
          });
      },
      isAuthor(blog) {
        return blog.user_id === this.loggedUser;
      },
    },
  };
  </script>
  