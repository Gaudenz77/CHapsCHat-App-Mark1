<template>
    <div class="filters">
        <div class="row justify-content-center">
            <div class="col-11 col-md-2 pt-0 pt-md-3">
                <button
                    class="btn btn-own"
                    type="button"
                    role="button"
                    id="createButton"
                >
                    <i class="fa-solid fa-circle-plus fa-3x"></i><br /><small
                        >Add Knowledge!</small
                    >
                </button>
            </div>

            <div class="col-11 col-md-4 mb-1 pt-0">
                <label class="form-label" for="filter">Filter by:</label>
                <select
                    class="selectKnow form-control mb-3"
                    aria-label="Default select example"
                    v-model="selectedFilter"
                    id="filter"
                >
                    <option value="all">All</option>
                    <option value="topic">Topic</option>
                    <option value="content">Content</option>
                    <option value="created_at">Date</option>
                </select>
                <div class="mb-3" v-if="selectedFilter === 'created_at'">
                    <label class="form-label" for="date">Date:</label>
                    <input
                        class="form-control"
                        type="date"
                        v-model="selectedDate"
                        id="date"
                        format="mm/dd/yyyy"
                    />
                </div>
                <div class="mb-3" v-if="selectedFilter === 'topic'">
                    <label class="form-label" for="topic">Topic:</label>
                    <input
                        class="form-control"
                        type="text"
                        v-model="selectedTopic"
                        id="topic"
                    />
                </div>
                <div class="mb-3" v-if="selectedFilter === 'content'">
                    <label class="form-label" for="content">Content:</label>
                    <input
                        class="form-control"
                        type="text"
                        v-model="selectedContent"
                        id="content"
                    />
                </div>
            </div>

            <div class="col-11 col-md-6 mb-4 mb-sm-0">
                <label class="form-label" for="filter">Search on the Web</label>
                <form id="searchForm" @submit.prevent="search">
                    <div class="input-group mb-3">
                        <input
                            type="text"
                            class="form-control"
                            id="searchTerm"
                            style="width: 40%"
                            placeholder="Enter search term"
                            v-model="searchTerm"
                        />
                        <select
                            class="custom-select form-control form-select"
                            aria-label="Default select example"
                            id="searchSource"
                            v-model="searchSource"
                        >
                            <option
                                v-if="searchSource === ''"
                                value=""
                                disabled
                            >
                                Library
                            </option>
                            <option value="google">Google</option>
                            <option value="wikipedia">Wikipedia</option>
                            <option value="stackoverflow">
                                Stack Overflow
                            </option>
                            <option value="database">Database</option>
                        </select>
                        <button
                            type="submit"
                            id="searchOne"
                            class="btn btn-searchOne"
                        >
                            <i
                                class="magnfGlassIcon fa-solid fa-magnifying-glass fa-xl"
                            ></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-hover table-striped rounded ownTable">
            <thead>
                <tr>
                    <th scope="col" style="width: 25%">Title/Topic</th>
                    <th scope="col">Content</th>
                    <th
                        scope="col"
                        style="width: 10%"
                        class="d-none d-sm-table-cell"
                    >
                        Updated At
                    </th>
                    <th scope="col" style="width: 10%">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="library in filteredLibraries" :key="library.id">
                    <td class="sm:text-sm lg:text-lg">
                        <b>
                            <template v-if="editMode === library.id">
                                <input
                                    class="form-control"
                                    type="text"
                                    v-model="libraryEditTopic"
                                />
                            </template>
                            <template v-else>
                                <span v-html="renderHTML(library.topic)"></span>
                            </template>
                        </b>
                    </td>
                    <td id="contentKnowledge" style="max-width: 500px">
                        <template v-if="editMode === library.id">
                            <textarea
                                class="form-control"
                                rows="5"
                                v-model="libraryEditContent"
                            ></textarea>
                        </template>
                        <template v-else>
                            <div
                                class="text-start mx-2"
                                style="word-break: break-word"
                            >
                                <span
                                    v-html="renderHTML(library.content)"
                                ></span>
                            </div>
                        </template>
                    </td>
                    <td class="d-none d-sm-table-cell">
                        {{ formatDate(library.updated_at) }}
                    </td>
                    <td>
                        <div class="">
                            <button
                                class="btn btn-circleLibrary text-center mx-3 mx-md-0"
                                type="button"
                                role="button"
                                @click="deleteLibrary(library.id)"
                            >
                                <i class="fa-regular fa-trash-can fa-2x"></i>
                            </button>
                            <button
                                class="btn btn-circleLibrary text-center mx-3 mx-md-0"
                                type="button"
                                role="button"
                                @click="toggleEditMode(library.id)"
                            >
                                <i
                                    class="fa-regular"
                                    :class="{
                                        'fa-edit': editMode !== library.id,
                                        'fa-circle-check':
                                            editMode === library.id,
                                        'fa-2x': editMode === library.id,
                                    }"
                                ></i>
                                <span v-if="editMode !== library.id">Edit</span>
                                <span v-else>Exit</span>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<style scoped>
/* ... Rest of the original CSS ... */

/* Add the new CSS here */
@media screen and (max-width: 600px) {
    table {
        width: 100%;
    }
    thead {
        display: none;
    }
    tr:nth-of-type(2n) {
        background-color: inherit;
    }
    tr td:first-child {
        background: #f0f0f0;
        font-weight: bold;
        font-size: 1.3em;
    }
    tbody td {
        display: block;
        text-align: center;
    }
    tbody td:before {
        content: attr(data-th);
        display: block;
        text-align: center;
    }
}
</style>

<script>
import axios from "axios";
import moment from "moment";

export default {
    data() {
        return {
            selectedFilter: "all",
            selectedDate: moment().format("YYYY-MM-DD"),
            selectedTopic: "",
            selectedContent: "",
            searchTerm: "",
            libraries: [],
            editMode: null,
            libraryEditTopic: "",
            libraryEditContent: "",
            searchTerm: "",
            searchSource: "",
        };
    },
    mounted() {
        axios
            .get("/mylibrary")
            .then((response) => {
                this.libraries = response.data;
                this.applyTableAttributes();
            })
            .catch((error) => {
                console.log(error);
            });
    },
    computed: {
        defaultSearchSource() {
            return this.searchSource || "";
        },
        filteredLibraries() {
            let libraries = this.libraries;
            if (
                this.selectedFilter === "created_at" &&
                this.selectedDate !== null
            ) {
                const selectedDateFormatted = moment(
                    this.selectedDate,
                    "MM/DD/YYYY"
                ).format("YYYY-MM-DD");
                libraries = libraries.filter((library) => {
                    return (
                        library.created_at.slice(0, 10) ===
                        selectedDateFormatted
                    );
                });
            } else if (
                this.selectedFilter === "topic" &&
                this.selectedTopic !== ""
            ) {
                libraries = libraries.filter((library) => {
                    return library.topic
                        .toLowerCase()
                        .includes(this.selectedTopic.toLowerCase());
                });
            } else if (
                this.selectedFilter === "content" &&
                this.selectedContent !== ""
            ) {
                libraries = libraries.filter((library) => {
                    return library.content
                        .toLowerCase()
                        .includes(this.selectedContent.toLowerCase());
                });
            }
            return libraries;
        },
    },
    methods: {
        deleteLibrary(id) {
            axios
                .delete(`/mylibrary/${id}`)
                .then((response) => {
                    this.libraries = this.libraries.filter(
                        (library) => library.id !== id
                    );
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        editLibrary(library) {
            console.log("Editing library:", library);
            this.$emit("edit-library", library.id);
        },
        submitForm() {
            if (this.editMode) {
                // Update existing library entry
                axios
                    .put(`/mylibrary/${this.library.id}`, this.form)
                    .then((response) => {
                        console.log(response.data);
                        this.resetForm();
                        this.$emit("library-updated"); // Emit custom event for library update
                    })
                    .catch((error) => {
                        // ...error handling...
                        console.log(error.response.data);
                    });
            } else {
                // Create new library entry
                axios
                    .post("/mylibrary", this.form)
                    .then((response) => {
                        console.log(response.data);
                        this.resetForm();
                        this.$emit("library-created"); // Emit custom event for library creation
                    })
                    .catch((error) => {
                        // ...error handling...
                        console.log(error.response.data);
                    });
            }
        },
        formatDate(date) {
            return moment(date).format("  MM/DD/YYYY");
        },
        toggleEditMode(libraryId) {
            if (this.editMode === libraryId) {
                this.updateLibrary(
                    libraryId,
                    this.libraryEditTopic,
                    this.libraryEditContent
                );
            } else {
                this.editMode = libraryId;
                const library = this.getLibraryById(libraryId);
                if (library) {
                    this.libraryEditTopic = library.topic;
                    this.libraryEditContent = library.content;
                }
            }
        },
        updateLibrary(libraryId, newTopic, newContent) {
            axios
                .put(`/mylibrary/${libraryId}`, {
                    topic: newTopic,
                    content: newContent,
                })
                .then((response) => {
                    const library = this.getLibraryById(libraryId);
                    if (library) {
                        library.topic = newTopic;
                        library.content = newContent;
                    }
                    this.editMode = null;
                })
                .catch((error) => {
                    console.log(error.response.data);
                    console.log(error.response.status);
                });
        },
        getLibraryById(libraryId) {
            return this.libraries.find((library) => library.id === libraryId);
        },
        search() {
            const searchTerm = this.searchTerm.trim();
            if (searchTerm === "") {
                return;
            }

            let searchUrl = "";

            switch (this.searchSource) {
                case "google":
                    searchUrl = `https://www.google.com/search?q=${encodeURIComponent(
                        searchTerm
                    )}`;
                    break;
                case "wikipedia":
                    searchUrl = `https://en.wikipedia.org/wiki/Special:Search/${encodeURIComponent(
                        searchTerm
                    )}`;
                    break;
                case "stackoverflow":
                    searchUrl = `https://stackoverflow.com/search?q=${encodeURIComponent(
                        searchTerm
                    )}`;
                    break;
                case "database":
                    // Handle search in the database
                    break;
                default:
                    // Invalid search source
                    return;
            }

            // Open the search URL in a new window or tab
            window.open(searchUrl, "_blank");
        },
        renderHTML(content) {
            return content; // Return content as-is (assuming it contains valid HTML)
        },
        applyTableAttributes() {
            var headertext = [];
            var headers = document.querySelectorAll("thead");
            var tablebody = document.querySelectorAll("tbody");

            for (var i = 0; i < headers.length; i++) {
                headertext[i] = [];
                for (
                    var j = 0, headrow;
                    (headrow = headers[i].rows[0].cells[j]);
                    j++
                ) {
                    var current = headrow;
                    headertext[i].push(current.textContent);
                }
            }

            for (var h = 0, tbody; (tbody = tablebody[h]); h++) {
                for (var i = 0, row; (row = tbody.rows[i]); i++) {
                    for (var j = 0, col; (col = row.cells[j]); j++) {
                        col.setAttribute("data-th", headertext[h][j]);
                    }
                }
            }
        },
    },
};
</script>
