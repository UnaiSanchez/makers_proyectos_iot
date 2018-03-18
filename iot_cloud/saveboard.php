<?php
    $serverName  = "localhost";
    $userName = "unaisanrod";
    include 'password.php';
    $dbName = 'unaisanrod';


    $name = $_GET['name'];
    $description = $_GET['description'];
    $sensor1 = $_GET['sensor1'];
    $sensor2 = $_GET['sensor2'];
    $noSensors = $_GET['nosensor'];


    $conn = new mysqli($serverName, $userName, $password, $dbName);
    if($conn->connect_error){
        die("Connection failed: ". $conn->connect_error);
    }

    $sql = "INSERT INTO cloud_board (Name, Description, Sensor1, Sensor2, NoSensor) VALUES ('$name', '$description', '$sensor1', '$sensor2', '$noSensors')";

    if($conn->query($sql) === TRUE){
        //echo "Bien";
    }else{
        echo "error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Board saved</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/bulma.css">
    <script src="scripts/script.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>
<body>
    <nav class="navbar is-primary">
        <div class="navbar-brand">             
        <a class="navbar-item title is-5">  
            <span class="icon">
                <i class="fas fa-cloud"></i>
            </span>
            <span>Techcloud</span>    
            </a>         
        </div>
        <div class="navbar-end"> 
            <div class="navbar-item">
                <a href="" class="navbar-link">Inicio</a>
            </div>
           <div class="navbar-item">
                <a href="https://github.com/UnaiSanchez/makers_proyectos_iot" class="navbar-item button is-dark" target="_blank">
                <span class="icon"><i class="fab fa-github-square"></i>
            </span>
            <span>Github</span></a>         
            <div>
        </div>
    </nav>
    <br>
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-half is-narrow">
                <div class="box has-text-centered">
                <span class="icon is-large has-text-primary">
                    <i class="fas fa-check-circle fa-3x"></i>
                </span>
                   <h4 class="title is-4">Añadida correctamente</h4>
                <a href="index.php" class="button is-primary is-medium is-rounded is-centered">
                    <span class="icon is-large">
                        <i class="fas fa-caret-square-left"></i>
                    </span>
                    <span>Home</span>
                </a>
                
                
                </div>
            </div>
        </div>
    </div>
</body>
</html>