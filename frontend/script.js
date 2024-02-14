const { createApp } = Vue;

createApp({
    data() {
      return {
        todoList: [],
        newTodo: ''
      }
    },
    methods: {
        addTodo(){
            // Al click deve partire una chiamata api per inviare dei dati
            axios
                .post('http://localhost/REPO_PHP/php-todo-list-json/backend/create-todo.php',
                    // Argomento - Dato da inviare
                    {
                        task: this.newTodo,
                        completed: false
                    },
                    // Altre configurazioni della richiesta
                    {
                        headers: {
                            'Content-Type' : 'multipart/form-data'
                        }
                    }
                )
                .then(response => {
                    console.log(response);

                    // Aggiungo al mio array iniziale il dato che mi è tornato
                    this.todoList.push(
                        {
                            task: this.newTodo,
                            completed: false
                        }
                    );

                    this.newTodo = '';
                })
        },
        changeStatus(i){
            axios
                .post('http://localhost/REPO_PHP/php-todo-list-json/backend/switch-status.php',
                    {
                        'index': i
                    },
                    {
                        headers: {
                            'Content-Type' : 'multipart/form-data'
                        }
                    }
                )
                .then(res => {
                    console.log(res);
                })
        }
    },
    mounted(){
        // Chiamata api per prendere i dati dal file json
        axios
            .get('http://localhost/REPO_PHP/php-todo-list-json/backend/api-todo.php')
            .then(response => {
                // Metto i data della risposta nell'array frontend
                this.todoList = response.data;
            })
    }
}).mount('#app')