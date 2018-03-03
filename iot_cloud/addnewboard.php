<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add new board</title>
    <title>Home</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/bulma.css">
    <script src="scripts/script.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>
<body>
    <nav class="navbar is-primary">
        <div class="navbar-brand">             
            <a class="navbar-item title is-5">Techcloud   
            <span class="icon">
                <i class="fas fa-cloud"></i>
            </span>    
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
                <div class="box">
                    <form>
                        <div class="field">
                            <label for="" class="label">Nomre de la placa</label>
                            <div class="control">
                                <input type="text" class="input" placeholder="Nombre">
                            </div>
                        </div>
                    </form>
                    <br>
                    <form>
                        <div class="field">
                            <label for="" class="label">Descripción de la placa</label>
                            <div class="control">
                                <input type="text" class="input" placeholder="Pequeña descripción">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>