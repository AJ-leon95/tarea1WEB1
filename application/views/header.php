<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante UTC</title> 
    <!-- importacion de Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <!-- importamos css de boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- importamos el js de boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <style>
    
        .logo{
            width: 150px;
            height: 75px;
        }
        .pieimg{
            width: 400px;
            height: 150px;

        }
        .mv{
            width: 300px;
            height: 200px;
        }
        .mapa{
            width: 450px;
            height: 200px;
        }
    </style>
</head>
<body>
    
<header class="contaner">
        <!-- aqui creo el navbar -->
        <div class="container"><!-- esta clase nos permite usar las 12 filas de boostrap -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <div>
                        <img src="<?php echo base_url(); ?>/assets/img/utc_logo.png" alt="" class="logo">
                        <a class="navbar-brand" href="<?php echo site_url(); ?>/welcome">Restaurante UTC</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0"><!-- 1.permite visualizar la barra 2.(me hace referencaia al inicio)el margin es automatico 
                        y si le ponemos (ms hace referencia al start) -->
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="<?php echo site_url(); ?>/nosotros/mv">NOSOTROS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url(); ?>/menus/desayunos">DESAYUNOS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url(); ?>/menus/almuerzos">ALMUERZOS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url(); ?>/menus/meriendas">MERIENDAS</a>
                            </li>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url(); ?>/menus/cartas">CARTAS</a>
                            </li>
                            
                            
                        </ul>

                    </div>
                </div>
            </nav>
        </div>
    </header>
<br><br>