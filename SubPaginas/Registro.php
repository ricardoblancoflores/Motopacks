<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
        // put your code here
        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../estilos/sere.css">
        <title>Inicia sesion Administrador</title>
    </head>
    <body>
        <div class="contenedor">
            <div class="caja">
                <div class="insesion">
                    <img src="../ImgIcons/if_Rounded-31_2024644.png" class="insi">
                    <form class="insi"> 
                        <label>Correo:</label><br>
                        <input type="email" name="firstname" style="width: 100%" required=""><br>
                            <label>Contraseña:</label><br>
                            <input type="password" name="pass" style="width: 100%" required=""><br>
                            <label>Confirmar contraseña:</label><br>
                            <input type="password" name="confirm" style="width: 100%" required=""><br>
                    </form>
                    <button type="button" onclick="alert('Hello World!')" class="insi">Registrar</button>
                    <br>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script  src="js/bootstrap.min.js"></script>
    </body>
</html>
