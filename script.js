const { createApp } = Vue;

  createApp({
    data() {
      return {
        todoList: []
      }
    },
    mounted(){
        axios
            .get('http://localhost/REPO_PHP/php-todo-list-json/index.php')
            .then(response => {
                console.log(response);
            })
    }   
  }).mount('#app')