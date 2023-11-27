const {createApp} = Vue 

createApp({
    data(){
        return{
            todos: [],
        }
    },

    methods: {
        fetchTodos(){
            axios.get('server.php').then(res =>{
                console.log(res.data.results)
                this.todos = res.data.results;
            })
        }
    },
    created(){
        this.fetchTodos()
    },
}).mount('#app')