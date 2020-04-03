<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo list project</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <h1> TodoList Ajax</h1>
    </header>
    <main>
        <form action="" method="post">
            <div>
                <label for="title">titre de la tache </label>
                <input type="text" name="title" id="title">
            </div>
            <div>
                <label for="description">description de la tache </label>
                <input type="text" name="description" id="description">
            </div>
            <button>save </button>
        </form>
        <div class="todos"></div>
    </main>
    <script src="assets/js/main.js "></script>
    <footer>
    </footer>
</body>

</html>