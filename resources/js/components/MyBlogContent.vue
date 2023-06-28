<template>
    <div>
        <div
            v-for="blog in blogs"
            :key="blog.id"
            class="col circleBlog ms-0 me-5 mb-2"
            data-aos="flip-left"
        >
            <div class="textfieldBlogTitle">
                <h3>{{ blog.title }}</h3>
                <p>{{ blog.user_id }}</p>
                <p><strong>Topic:</strong> {{ blog.topic }}</p>
                <p class="textfieldBlogContent">{{ blog.content }}</p>
                <img :src="getImageUrl(blog.image)" class="img-fluid" alt="Blog Image" />
                <button
                    class="btn mt-2 mb-2 p-1"
                    type="button"
                    role="button"
                    @click="deleteBlog(blog.id)"
                >
                    <i class="fa-regular fa-trash-can"></i> Delete
                </button>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
import AOS from "aos";
import "aos/dist/aos.css";

export default {
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
            const baseUrl = window.location.origin; // Get the base URL of the Laravel application
            return `${baseUrl}/assets/img/${image}`;
        }
        // Return a placeholder image URL or an empty string if no image is available
        return `${window.location.origin}/assets/img/ChapsChatLogo.png`;
        },
        deleteBlog(id) {
        axios
            .delete(`/blogosphere/${id}`)
            .then((response) => {
            // Retrieve the image filename from the deleted blog
            const deletedBlog = this.blogs.find((blog) => blog.id === id);
            const image = deletedBlog.image;

            // Remove the image file from the folder
            if (image) {
                const imageUrl = this.getImageUrl(image);
                axios.delete(imageUrl)
                .then(() => {
                    console.log('Image deleted successfully');
                })
                .catch((error) => {
                    console.error('Error deleting image', error);
                });
            }

            // Remove the deleted blog from the list
            this.blogs = this.blogs.filter((blog) => blog.id !== id);
            })
            .catch((error) => {
            console.error(error);
            });
        },

    },
};
</script>
