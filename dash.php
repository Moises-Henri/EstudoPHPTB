<?php
 session_start(); 
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.7.1.min.js" defer></script>
    <script src="js/bootstrap.js" defer></script>
    <title>Dashboard</title>
</head>
<body>
    
<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-8 col-md-6">
            <div class="alert alert-info">
                <h4 class="text-center">                    
                    Dashboard do sistema 
                    <?php
 echo  "<br> Seja bem vindo ao sistema ". $_SESSION['nome'];

 ?>


                </h4>
            </div>
        </div>
    </div>
</div>
</body>
</html>