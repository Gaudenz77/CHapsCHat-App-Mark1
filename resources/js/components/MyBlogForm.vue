<template>
    <div class="mx-3">
        <form @submit.prevent="submitForm" enctype="multipart/form-data">
            <label class="form-label formOwnOne" for="title"></label>
            <div class="input-group mb-4">
                <span class="input-group-text formOwnOne" id="basic-addon1">
                    <i
                        class="fa-solid fa-palette formIcons"
                        data-bs-custom-class="custom-tooltip"
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        data-bs-html="true"
                        title="Select<br>your title"
                    ></i
                ></span>
                <input
                    type="text"
                    name="title"
                    class="form-control formOwnOne"
                    placeholder="Title"
                    id="title"
                    v-model="form.title"
                    required
                />
            </div>

            <label class="form-label" for="topic"></label>
            <div class="input-group mb-4">
                <span class="input-group-text formOwnOne">
                    <i
                        class="fa-solid fa-book-bookmark formIcons"
                        data-bs-custom-class="custom-tooltip pt-3"
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        data-bs-html="true"
                        title="Select  <br>your topic"
                    ></i
                ></span>
                <select
                    class="form-control formOwnOne"
                    id="topic"
                    v-model="form.topic"
                    required
                >
                    <option value="general">General</option>
                    <option value="resources">Resources</option>
                    <option value="techtalk">Tech Talk</option>
                    <option
                        data-content="<i class='fa-solid fa-heart' aria-hidden='true'></i>"
                    >
                    <i class='fa-solid fa-heart' aria-hidden='true'></i>Varoious/Awkward
                    </option>
                </select>
            </div>

            <label class="form-label formOwnOne" for="content"></label>
            <div class="input-group mb-4">
                <span class="input-group-text formOwnOne"
                    ><i
                        class="fa-solid fa-file-signature formIcons"
                        data-bs-custom-class="custom-tooltip"
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        data-bs-html="true"
                        title="Enter <br>your content"
                    ></i
                ></span>
                <textarea
                    class="form-control formOwnOne"
                    placeholder="Content"
                    name="content"
                    id="content"
                    rows="5"
                    v-model="form.content"
                    required
                ></textarea>
            </div>

            <div class="input-group mb-4">
                <input
                    type="file"
                    name="image"
                    class="form-control formOwnOne"
                    accept="image/*"
                    @change="onFileChange"
                />
            </div>

            <input type="hidden" name="_token" :value="form.csrfToken" />

            <div id="sendLibrary" class="text-center pt-0">
                <button
                    type="submit"
                    id=""
                    class="btn btn-circle mt-2 mb-2 p-1"
                    v-html="
                        editMode
                            ? '<i class=\'fa-regular fa-edit\'></i> Update'
                            : '<i class=\'fa-regular fa-save fa-2xl\'></i><br>'
                    "
                ></button>
            </div>
        </form>

        <div
            v-if="successMessage"
            class="py-2 alert alert-warning alert-dismissible fade show"
        >
            {{ successMessage }}
            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="alert"
                aria-label="Close"
            ></button>
        </div>
        <button
            type="button"
            id="closeButton2"
            class="btn-close"
            aria-label="Close"
        ></button>
        <p>Close Create Blog</p>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            form: {
                title: "",
                topic: "general",
                content: "",
                image: null,
                csrfToken: document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
            successMessage: "", // Variable to store the success message
        };
    },
    methods: {
        onFileChange(event) {
            this.form.image = event.target.files[0];
        },
        submitForm() {
            axios
                .post("/blogosphere", this.form, {
                    headers: {
                        "Content-Type": "multipart/form-data",
                    },
                })
                .then((response) => {
                    // Handle success
                    console.log(response.data);
                    // Reset the form fields
                    this.form.title = "";
                    this.form.topic = "general";
                    this.form.content = "";
                    this.form.image = null;
                    // Set the success message
                    this.successMessage = response.data.message;
                    // Reload the page after a delay
                    setTimeout(() => {
                        location.reload();
                    }, 2000); // Adjust the delay time (in milliseconds) as needed
                })
                .catch((error) => {
                    console.log("ERRRR:: ", error.response.data);
                });
        },
    },
};
</script>
