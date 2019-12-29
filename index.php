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
    <a href="index.php"><b>Startseite</b> </a>
    <b>|</b>
    <a href="addTask.php">Aufgabe hinzufügen</a>
    <hr>

    <br>
    <b>Legende: </b>
    <br>
    <font color="green"><b>Erledigt</b></font>
    <br>
    <font color="red"><b>Nicht erledigt</b></font>
    <br> um eine Aufgabe zu erledigen einfach drauf klicken
    <br>
    <ul>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$db = "todolist";
		$con = new mysqli($servername, $username, $password, $db);
		$result = mysqli_query($con, "SELECT id, text, erledigt FROM todolist ORDER BY erledigt DESC;");
		
		while($row = mysqli_fetch_array($result))
		{
			$erledigt = $row['erledigt'];
		if($erledigt == "0") 	{
			echo("<font color='red'><b>");	
			echo("<li><a href='erledige.php?id=".$row['id']."'><font color='red'>".$row['text']."</li>");
		
		} else {
			echo("<font color='green'><b>");
			echo("<li><font color='green'>".$row['text']."</li>");
		}
	
	}
	?>
       
    </ul>
  

</body>