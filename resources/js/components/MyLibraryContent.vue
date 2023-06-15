<template>
    <div class="filters">
      <div>
        <button class="btn btn-own" type="button" role="button" id="createButton"><i class="fa-solid fa-circle-plus fa-3x"></i> Create</button>
      </div>
      <label for="filter">Filter by:</label>
      <select v-model="selectedFilter" id="filter">
        <option value="all">All</option>
        <option value="topic">Topic</option>
        <option value="content">Content</option>
        <option value="created_at">Date</option>
      </select>
      <div v-if="selectedFilter === 'created_at'">
        <label for="date">Date:</label>
        <input type="date" v-model="selectedDate" id="date" format="mm/dd/yyyy">
      </div>
      <div v-if="selectedFilter === 'topic'">
        <label for="topic">Topic:</label>
        <input type="text" v-model="selectedTopic" id="topic">
      </div>
      <div v-if="selectedFilter === 'content'">
        <label for="content">Content:</label>
        <input type="text" v-model="selectedContent" id="content">
      </div>
    </div>
      <table class="table table-danger table-hover table-striped">
      <thead>
        <tr>
          <!-- <th scope="col">Id</th> -->
          <th scope="col" style="width:14%;">Topic</th>
          <th scope="col">Content</th>
          <!-- <th scope="col">Created At</th> -->
          <th scope="col" style="width:14%;">Updated At</th>
          <th scope="col" style="width:20%;">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="library in filteredLibraries" :key="library.id">
          <!-- <td>{{ library.id }}</td> -->
          <td>
            <template v-if="editMode === library.id">
              <input type="text" v-model="libraryEditTopic" />
            </template>
            <template v-else>
              {{ library.topic }}
            </template>
          </td>
          <td id="contentKnowledge" style="max-width: 500px;">
            <template v-if="editMode === library.id">
              <textarea class="col-12 form-controll" type="text" rows="5" v-model="libraryEditContent"></textarea>
            </template>
            <template v-else>
              <div style="word-break: break-word;">{{ library.content }}</div>
            </template>
          </td>
          <!-- <td>{{ formatDate(library.created_at) }}</td> -->
          <td>{{ formatDate(library.updated_at) }}</td>
          <td>
            <div class="">
              <button class="btn text-center" type="button" role="button" @click="deleteLibrary(library.id)">
                <i class="fa-regular fa-trash-can"></i> Delete
              </button>
              <button class="btn text-center" type="button" role="button" @click="toggleEditMode(library.id)">
                <i class="fa-regular fa-edit"></i> Edit
              </button>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
</template>


  
<script>
import axios from 'axios';
import moment from 'moment';


export default {
  data() {
    return {
      selectedFilter: 'all',
      selectedDate: moment().format('YYYY-MM-DD'),
      selectedTopic: '',
      selectedContent: '',
      searchTerm: '',
      libraries: [],
      editMode: null,
      libraryEditTopic: '',
      libraryEditContent: '',
    }
  },  
  mounted() {
    axios.get('/mylibrary')
    .then(response => {
      this.libraries = response.data;
    })
    .catch(error => {
      console.log(error);
    });
  },
  computed: {
    filteredLibraries() {
      let libraries = this.libraries;
      if (this.selectedFilter === 'created_at' && this.selectedDate !== null) {
        const selectedDateFormatted = moment(this.selectedDate, 'MM/DD/YYYY').format('YYYY-MM-DD');
        libraries = libraries.filter(library => {
          return library.created_at.slice(0, 10) === selectedDateFormatted;
        });
      } else if (this.selectedFilter === 'topic' && this.selectedTopic !== '') {
        libraries = libraries.filter(library => {
          return library.topic.toLowerCase().includes(this.selectedTopic.toLowerCase());
        });
      } else if (this.selectedFilter === 'content' && this.selectedContent !== '') {
        libraries = libraries.filter(library => {
          return library.content.toLowerCase().includes(this.selectedContent.toLowerCase());
        });
      }
      return libraries;
    },

  },
  methods: {
    deleteLibrary(id) {
      axios.delete(`/mylibrary/${id}`)
        .then(response => {
          this.libraries = this.libraries.filter(library => library.id !== id)
        })
        .catch(error => {
          console.log(error)
        })
    },
    editLibrary(library) {
      console.log('Editing library:', library);
      this.$emit('edit-library', library.id);
    },
  submitForm() {
    if (this.editMode) {
      // Update existing library entry
      axios.put(`/mylibrary/${this.library.id}`, this.form)
        .then(response => {
          console.log(response.data);
          this.resetForm();
          this.$emit('library-updated'); // Emit custom event for library update
        })
        .catch(error => {
          // ...error handling...
          console.log(error.response.data);

        });
    } else {
      // Create new library entry
      axios.post('/mylibrary', this.form)
        .then(response => {
          console.log(response.data);
          this.resetForm();
          this.$emit('library-created'); // Emit custom event for library creation
        })
        .catch(error => {
          // ...error handling...
          console.log(error.response.data);
        });
    }
  },
    formatDate(date) {
      return moment(date).format('  MM/DD/YYYY');
    },
    toggleEditMode(libraryId) {
      if (this.editMode === libraryId) {
        this.updateLibrary(libraryId, this.libraryEditTopic, this.libraryEditContent);
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
        .then(response => {
          const library = this.getLibraryById(libraryId);
          if (library) {
            library.topic = newTopic;
            library.content = newContent;
          }
          this.editMode = null;
        })
        .catch(error => {
          console.log(error.response.data);
          console.log(error.response.status);
        });
    },
    getLibraryById(libraryId) {
        return this.libraries.find(library => library.id === libraryId);
    },

  },
}
</script>
