<template>
    <div class="d-flex flex-wrap justify-content-center">
        <div
            v-for="blog in blogs"
            :key="blog.id"
            class="col-md-6"
            data-aos="flip-left"
        >
            <div class="textfieldBlogTitle mx-1 mx-md-5 mt-3 px-0 pt-3 pb-2">
                <h2 class="display-6 mx-3 text-start">
                    <strong>{{ blog.title }}</strong>
                </h2>
                <!-- <p>User ID: {{ blog.user_id }}</p>
          <p>Auth User ID: {{ authUserId }}</p> -->
                <p>{{ authUserName }}</p>
                <img
                    :src="getImageUrl(blog.image)"
                    class="img-fluid imageBlog mb-2 px-3"
                    alt="Blog Image"
                />
                <div class="row justify-content-center">
                    <div class="col-5 px-0 mt-4">
                        <button
                            v-if="blog.user_id == authUserId"
                            class="btn btn-circleLibrary ms-4 mt-2 mb-2 p-1"
                            type="button"
                            role="button"
                            @click="deleteBlog(blog.id)"
                        >
                            <i class="fa-regular fa-trash-can fa-2x"></i>
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
                            <i class="fa-regular fa-newspaper fa-2x"></i>
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
                            <div class="container">
                                <div class="row justify-content-evenly">
                                    <div class="col">
                                        <h5 class="modal-title">
                                            {{ blog.title }}
                                        </h5>
                                    </div>
                                    <div class="col-1">
                                        <button
                                            type="button"
                                            class="btn-close btnXModal"
                                            data-bs-dismiss="modal"
                                            aria-label="Close"
                                        ></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <p>
                                <figcaption class="blockquote-footer pt-2 ps-3">
                                    {{ formatCreatedAt(blog.created_at) }}
                                </figcaption>
                                <!-- <strong>User ID:</strong> {{ blog.user_id }} -->
                            </p>
                            <!-- <p>Auth User ID: {{ authUserId }}</p> -->
                            <!-- <p><strong>Topic:</strong> {{ blog.topic }}</p> -->
                            <p class="textfieldBlogContent">
                                {{ blog.content }}
                            </p>
                            <img
                                :src="getImageUrl(blog.image)"
                                class="img-fluid imageBlog"
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
            authUserId: null,
        };
    },
    computed: {
        reversedMessages() {
            return this.messages.slice().reverse();
        },
        authUserId() {
            console.log("Auth User ID:", this.$props.authUserId); // Add this line
            return this.$props.authUserId;
        },
    },
    mounted() {
        console.log("Auth User ID:", this.authUserId);
        this.fetchBlogs();
        AOS.init(); // Initialize AOS
    },
    methods: {
        fetchBlogs() {
            axios
                .get("/blogosphere")
                .then((response) => {
                    this.blogs = response.data;
                    console.log("Blogs:", this.blogs);
                    /* console.log("Auth User ID:", this.authUserId); */
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
        formatCreatedAt(created_at) {
            const date = new Date(created_at);
            return date.toLocaleString(); // Adjust the format as per your requirements
        },
        deleteBlog(id) {
            console.log("Auth User ID:", this.authUserId);
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
