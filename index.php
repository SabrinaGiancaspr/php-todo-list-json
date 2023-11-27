<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="./css/app.css">
</head>
<body>
    <div id="app">
        <main>
            <section>
                <div class="container">
                    <h1>Todo</h1>
                    <input type="text" v-model="newTask" @keyup.enter="storeNewTask">
                </div>
            </section>

            <section>
                <div class="container">
                    <ul>
                        <li v-for="task in todos">{{task.text}}</li>
                    </ul>
                </div>
            </section>
        </main>
    </div>
    <script src="./js/app.js"></script>
</body>
</html>