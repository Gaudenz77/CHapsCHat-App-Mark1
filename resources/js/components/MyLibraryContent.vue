<template>
    <div>
      <h2>My Library</h2>
      <div class="filters">
        <label for="filter">Filter by:</label>
        <select v-model="selectedFilter" id="filter">
          <option value="all">All</option>
          <option value="date">Date</option>
          <option value="type">Type</option>
          <option value="content">Content</option>
        </select>
        <div v-if="selectedFilter === 'date'">
          <label for="date">Date:</label>
          <input type="date" v-model="selectedDate" id="date">
        </div>
        <div v-if="selectedFilter === 'type'">
          <label for="type">Type:</label>
          <select v-model="selectedType" id="type">
            <option value="note">Note</option>
            <option value="url">URL</option>
            <option value="snippet">Code Snippet</option>
          </select>
        </div>
        <div v-if="selectedFilter === 'content'">
          <label for="content">Content:</label>
          <input type="text" v-model="selectedContent" id="content">
        </div>
      </div>
      <ul>
        <li v-for="library in filteredLibraries" :key="library.id">
          <h3>{{ library.topic }}</h3>
          <p>{{ library.content }}</p>
          <p>{{ library.created_at }}</p>
          <button @click="deleteLibrary(library.id)">Delete</button>
        </li>
      </ul>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        libraries: [],
        selectedFilter: 'all',
        selectedDate: '',
        selectedType: '',
        selectedContent: '',
      };
    },
    methods: {
      fetchLibraries() {
        axios.get('/mylibrary')
          .then(response => {
            this.libraries = response.data;
          })
          .catch(error => {
            console.log(error);
          });
      },
      deleteLibrary(id) {
        axios.delete(`/mylibrary/${id}`)
          .then(response => {
            this.fetchLibraries();
          })
          .catch(error => {
            console.log(error);
          });
      },
    },
    computed: {
      filteredLibraries() {
        if (this.selectedFilter === 'all') {
          return this.libraries;
        } else if (this.selectedFilter === 'date') {
          return this.libraries.filter(library => library.created_at.includes(this.selectedDate));
        } else if (this.selectedFilter === 'type') {
          return this.libraries.filter(library => library.type === this.selectedType);
        } else if (this.selectedFilter === 'content') {
          return this.libraries.filter(library => library.content.toLowerCase().includes(this.selectedContent.toLowerCase()));
        }
      },
    },
    mounted() {
      this.fetchLibraries();
    },
  };
  </script>
  