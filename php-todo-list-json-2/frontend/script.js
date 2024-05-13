const { createApp } = Vue;

createApp({
    data() {
      return {
        todoList: [],
        task: '',
      }
    },
    mounted () {
        axios
            .get('http://localhost/REPO-backend/php-todo-list-json-2/backend/api.php')
            .then((res) => {
                // console.log(res);

                this.todoList = res.data;
                // console.log(this.todoList);
            });
    },
    methods: {
        addTodo () {
            axios
                .post('http://localhost/REPO-backend/php-todo-list-json-2/backend/create-todo.php',
                    {   
                        id: 0,
                        task: this.task,
                        completed: false
                    },
                    {
                        headers: {
                            'Content-Type' : 'multipart/form-data'
                        }
                    }
                )
                .then((res) => {
                    console.log(res.data);
                })
        },
        changeStatus (index) {
            axios
                .post('http://localhost/REPO-backend/php-todo-list-json-2/backend/status-todo.php',
                    {   
                        'index': index
                    },
                    {
                        headers: {
                            'Content-Type' : 'multipart/form-data'
                        }
                    }
                )
                .then((res) => {
                    // console.log(res.data);
                })
        }
    }
}).mount('#app')