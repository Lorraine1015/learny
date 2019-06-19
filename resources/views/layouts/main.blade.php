<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--tIPOS DE DISEÑO QUE SE ASIGNARA A CIERTOS OBJETOS-->
<style>  
.bg-red {
    background: red;
}
.titulo-1 {
    padding-top: 150px;
    padding-bottom: 42px;

}
.titulo-2 {
    padding-bottom: 120px;
    font-size: 40px;
}
.m_col-2 {
    padding-left: 0px !important;
    padding-right: 0px !important;
}
</style>
</head>
<body>
<!--BARRA DE NAVEGACION PRINCIPAL-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><!--SE LIGA A UNA PAGINA#-->
    <img src="https://image.flaticon.com/icons/svg/25/25663.svg" width="30" height="30" alt=""><!--SE AGREGA UNA IMAGEN A LADO DEL LOGOTIPO-->
    Learny</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Register <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Login</a>
            </li>
            <li class="nav-item"><!--titulo tipo boton-->
                <a class="btn btn-outline-dark" href="#">Become a teacher</a>
            </li>
        </ul>
    </div>
</nav>
<!--CONTAINER:TITULO CON PADDING-->
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-uppercase text-center titulo-1"><small>Do you want to improve your English skills?</small></h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h2 class="text-uppercase text-center titulo-2"><strong> Find someone to talk to </strong></h2><!--TITULO EN NEGRITAS-->
        </div>
    </div>
    <form><!--FORMULARIO-->
        <div class="row align-items-center">
            <div class="offset-2 col m_col-2">
                <input type="text" class="form-control " placeholder="COUNTRY">
            </div>
            <div class="col m_col-2">
                <input type="text" class="form-control" placeholder="STATE">   
            </div>
            <div class="col m_col-2 ">
                <button type="button" class="btn btn-primary text-uppercase text-center">Find an instructor</button>
            </div>
        </div>
    </form>
</div>

    
</div>
    Hola mundo
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>