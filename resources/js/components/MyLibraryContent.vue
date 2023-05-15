<template>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Topic</th>
        <th scope="col">Content</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="library in libraries" :key="library.id">
        <td>{{ library.topic }}</td>
        <td>{{ library.content }}</td>
        <td>
          <button @click="deleteLibrary(library.id)">Delete</button>
        </td>
      </tr>
    </tbody>
  </table>
</template>


  
<script>
  import axios from 'axios';

  export default {
    data() {

      return {
      libraries: [],
    }
     /*  return {
        selectedFilter: 'all',
        selectedDate: null,
        selectedType: 'note',
        selectedContent: '',
        searchTerm: '',
        libraries: [],
      } */
    },  
    mounted() {
      axios.get('/mylibrary')
      .then(response => {
        this.libraries = response.data;
      })
      .catch(error => {
        console.log(error);
      });
      /* this.fetchLibraries() */
    },
    methods: {
      fetchLibraries() {
        axios.get('/mylibraries')
          .then(response => {
            this.libraries = response.data
          })
          .catch(error => {
            console.log(error)
          })
      },
      deleteLibrary(id) {
        axios.delete(`/mylibrary/${id}`)
          .then(response => {
            this.libraries = this.libraries.filter(library => library.id !== id)
          })
          .catch(error => {
            console.log(error)
          })
        },
      filterLibraries() {
        let filteredLibraries = this.libraries

        if (this.selectedFilter === 'date' && this.selectedDate) {
          filteredLibraries = filteredLibraries.filter(library => {
            const libraryDate = new Date(library.created_at)
            const selectedDate = new Date(this.selectedDate)
            return libraryDate.toDateString() === selectedDate.toDateString()
          })
        }

        if (this.selectedFilter === 'type' && this.selectedType !== 'all') {
          filteredLibraries = filteredLibraries.filter(library => {
            return library.type === this.selectedType
          })
        }

        if (this.selectedFilter === 'content' && this.selectedContent) {
          filteredLibraries = filteredLibraries.filter(library => {
            return library.content.toLowerCase().includes(this.selectedContent.toLowerCase())
          })
        }

        if (this.searchTerm) {
          filteredLibraries = filteredLibraries.filter(library => {
            return library.content.toLowerCase().includes(this.searchTerm.toLowerCase())
          })
        }

        return filteredLibraries
      }
    },
    computed: {
      filteredLibraries() {
        let libraries = this.libraries

        if (this.selectedFilter !== 'all') {
          libraries = this.filterLibraries()
        }

        if (this.searchTerm) {
          libraries = libraries.filter(library => {
            return library.content.toLowerCase().includes(this.searchTerm.toLowerCase())
          })
        }

        return libraries
      }

    },
  }
  </script>
  
  