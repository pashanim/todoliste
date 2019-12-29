<head>
    <title>Marlon's To-Do Liste</title>

    <style>
        a {
            text-decoration: none;
            /* no underline */
        }
    </style>

</head>

<body>
    <h1>Marlon's To-Do Liste</h1>

    <hr>
    <a href="index.php">Startseite </a>
    <b>|</b>
    <a href="addTask.php"><b>Aufgabe hinzufügen</b></a>
    <hr>

    <br>
    <b>Zieltitel:</b>
    <br>
    <form action="add.php" method="POST">

        <input type="text" name="Ziel">

        </input>
        <br>
        <input type="submit" value="Hinzufügen">
        </input>
    </form>
</body>