@extends('layouts.main')
@section('content')
<div class="m_header_wrapper">
<!--BARRA DE NAVEGACION PRINCIPAL-->
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand text-white text-uppercase" href="#"><!--SE LIGA A UNA PAGINA#-->
    <img src="https://image.flaticon.com/icons/svg/25/25663.svg"  width="30" height="30" alt=""><!--SE AGREGA UNA IMAGEN A LADO DEL LOGOTIPO-->
    LEARNY</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link text-white" href="#">Register <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link text-white" href="#">Login</a>
            </li>
            <li class="nav-item"><!--titulo tipo boton-->
                <a class="btn btn btn-outline-light" href="#">Become a teacher</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-uppercase text-white text-center titulo-1"><small>Do you want to improve your English skills?</small></h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h2 class="text-uppercase text-white text-center titulo-2"><strong> Find someone to talk to </strong></h2><!--TITULO EN NEGRITAS-->
        </div>
    </div>
    <form><!--FORMULARIO-->
        <div class="row align-items-center m_bor-1">
            <div class="col m_col-2">
                <input type="text" class="form-control " placeholder="COUNTRY">
            </div>
            <div class="col m_col-2">
                <input type="text" class="form-control" placeholder="STATE">   
            </div>
            <div class="col m_col-2">
                <button type="button" class="btn btn-primary btn-block  text-uppercase text-center">Find an instructor</button>
            </div>
        </div>
    </form>
    <div class="row bg-spacing">
    </div>
</div>
</div>
<!--CONTAINER:TITULO CON PADDING-->
<div class="container"> 
    <div class="row">
        <div class="col titulo-3">
            <h1 class="text-center">BENEFITS</h1>
        </div>
    </div>
    <div class="row  m_space">
        <div class="col">
            <img src="https://es.vector.me/files/images/3/3/337022/blue_circle_preview"class="rounded mx-auto d-block" width="100" height="100"alt="">
            <p class="text-center"><strong>Safe</strong></p>
            <p class="text-center m_desc_option">With faded secondary text</p>
        </div>
        <div class="col">
            <img src="https://es.vector.me/files/images/3/3/337022/blue_circle_preview"class="rounded mx-auto d-block" width="100" height="100"alt="">
            <p class="text-center"><strong>Immersive</strong></p>
            <p class="text-center m_desc_option">With faded secondary text</p>
        </div>
        <div class="col">
            <img src="https://es.vector.me/files/images/3/3/337022/blue_circle_preview"class="rounded mx-auto d-block" width="100" height="100"alt="">
            <p class="text-center"><strong>Effective</strong></p>
            <p class="text-center m_desc_option">With faded secondary text</p>
        </div>
    </div>
</div>
<div class="m_fondo-2">
    <div class="container">
        <div class="row bg-spacing ">
            <div class="col text-center text-white">
                <h1>HOW IT WORKS?</h1>
                <p class="m_section-3">This is Photoshop's version of Lorem Ipsum</p>
                <button type="button" class="btn btn-primary text-uppercase">See our prices</button>
            </div>
        </div>
        <div class="row bg-spacing">
        </div>
    </div>
</div>
<div class="m_fondo-3">
    <div class="container">
        <div class="row titulo-3">
            <div class="col">
                <h1 class="text-center"><strong>MEET OUR INSTRUCTORS</strong></h1>
            </div>
        </div>
        <div class="row text-center m_spacio-3">
            <div class="col text-center">
            
                <img src="https://cde.peru.com//ima/0/1/0/7/6/1076597/380x300/emma-watson.jpg" class="img-circle" width="141" height="141" alt="" >
                <h5 class="text-uppercase"><strong>Mia Madison</strong></h5>
                <p class="m_letter">Auckland,New Zealand</p>
                <p class="m_letter"><img src="https://images.emojiterra.com/google/android-pie/512px/2b50.png" width="30" height="30" alt="">(22 reviews)</p>
               
            </div>
            <div class="col text-center">
            
                <img src="https://aws.revistavanityfair.es/prod/designs/v1/assets/785x589/140687.jpg" class="img-circle"width="141" height="141" alt="">
                <h5 class="card-title text-uppercase"><strong>Roddy Stegemann</strong></h5>
                <p class="card-text m_letter">Wellington,New Zealand</p>
                <p class="m_letter"><img src="https://images.emojiterra.com/google/android-pie/512px/2b50.png" width="30" height="30" alt="">(16 reviews)</p>
               
            </div>    
            <div class="col text-center">
            
                <img src="https://www.codigounico.com/wp-content/uploads/sites/2/2018/10/jim-parsons-ni-mi-madre-creia-que-fuera-a-ganar-tantos-emmys.jpg" class="img-circle" width="141" height="141" alt="">
                <h5 class="card-title text-uppercase"><strong>Aaron Richmond</strong></h5>
                <p class="card-text m_letter">Invercargill,New Zealand</p>
                <p class="m_letter"><img src="https://images.emojiterra.com/google/android-pie/512px/2b50.png" width="30" height="30" alt="">(31 reviews)</p>
                
            </div>
        </div>
        
    </div>
</div>

    
</div>
@endsection 