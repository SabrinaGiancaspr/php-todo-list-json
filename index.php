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
                        <li class="tasks" v-for="(task, index) in todos">
                            <span class="item"  :class="{ 'completed': task.done == true }"  @click="toggleTaskStatus(index)">{{ task.text }}</span>
                            <button class="btn" @click="deleteTask(index)">Delete</button>
                            <label class="toggle">
                                <input class="toggle-input" type="checkbox" />
                                <span class="toggle-label" data-off="OFF" data-on="ON"></span>
                                <span class="toggle-handle"></span>
                            </label>
                        </li>
                    </ul>
                </div>
            </section>
        </main>
    </div>
    <script src="./js/app.js"></script>
</body>
</html>