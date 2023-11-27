const {createApp} = Vue 

createApp({
    data(){
        return{
            todos: [],
            newTask: '',
        }
    },

    methods: {
        fetchTodos(){
            axios.get('server.php').then(res =>{
                console.log(res.data.results)
                this.todos = res.data.results;
            })
        },

        storeNewTask(){
            if(this.newTask){

                const data = {
                    "text": this.newTask,
                }
                axios.post('./store.php', data,{ 
                    headers: {
                        'Content-Type': 'multipart/form-data',
                    }})
                .then((res) =>{
                    // console.log(res.data.results)
                    this.todos = res.data.results;
                })
            }else {
                return
            }
           this.newTask = ''
        },
    },

    created(){
        this.fetchTodos()
    },
}).mount('#app')