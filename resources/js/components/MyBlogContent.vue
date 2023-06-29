<template>
  <div class="d-flex flex-wrap">
      <div
          v-for="blog in blogs"
          :key="blog.id"
          class="col-md-4"
          data-aos="flip-left"
          >
          <div class="textfieldBlogTitle mx-3">
              <h3>{{ blog.title }}</h3>
              <p>{{ blog.user_id }}</p>
              <img
                  :src="getImageUrl(blog.image)"
                  class="img-fluid"
                  alt="Blog Image"
              />
              <div class="row justify-content-center">
                <div class="col-3">
                  <button
                  class="btn btn-circleLibrary mt-2 mb-2 p-1"
                  type="button"
                  role="button"
                  @click="deleteBlog(blog.id)"
                  >
                  <i class="fa-regular fa-trash-can"></i> Delete
                  </button>
                </div>
                <div class="col-3">
                  <button
                  class="btn btn-circleLibrary mt-2 mb-2 p-1"
                  type="button"
                  role="button"
                  data-bs-toggle="modal"
                  :data-bs-target="'#modal-' + blog.id"
                  >
                  Open Modal
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
              <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title">{{ blog.title }}</h5>
                          <button
                              type="button"
                              class="btn-close"
                              data-bs-dismiss="modal"
                              aria-label="Close"
                          ></button>
                      </div>
                      <div class="modal-body">
                          <p><strong>User ID:</strong> {{ blog.user_id }}</p>
                          <p><strong>Topic:</strong> {{ blog.topic }}</p>
                          <p class="textfieldBlogContent">
                              {{ blog.content }}
                          </p>
                          <img
                              :src="getImageUrl(blog.image)"
                              class="img-fluid"
                              alt="Blog Image"
                          />
                      </div>
                      <div class="modal-footer">
                          <button
                              type="button"
                              class="btn btn-circleLibrary"
                              data-bs-dismiss="modal"
                          >
                              Close
                          </button>
                      </div>
                  </div>
              </div>
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
      };
  },
  computed: {
      reversedMessages() {
          return this.messages.slice().reverse();
      },
  },
  mounted() {
      this.fetchBlogs();
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
  },
};
</script>
