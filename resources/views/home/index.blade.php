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
    <div class="row titulo-1 text-white">
        <div class="col">
            <h1 class="text-uppercase  text-center "><small>Do you want to improve your English skills?</small></h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h2 class="text-uppercase text-white text-center titulo-2"><strong> Find someone to talk to </strong></h2><!--TITULO EN NEGRITAS-->
        </div>
    </div>
    <form><!--FORMULARIO-->
        <div class="row align-items-center m_bor-1">
            <div class="col m_col-2 form-group">
                <label for="exampleFormControlSelect1"></label>
                <select class="form-control" id="Countryselect">
                    <option selected>Country</option>
                    @foreach($countries as $country)
                        <option>{{ $country->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col m_col-2 form-group">
                <label for="exampleFormControlSelect1"></label>
                <select class="form-control" id="Stateselect">
                    <option selected>State</option>
                    <option>Aguascalientes</option>
                    <option>Baja California</option>
                    <option>Chiapas</option>
                    <option>Alabama</option>
                    <option>Alaska</option>
                    <option>Arizona</option>
                    <option>Ontario</option>
                    <option>Alberta</option>
                    <option>Quebec</option>
                </select> 
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

@section('jquery_script')
<script>
$( document ).ready(function() {
    //Al hacer clic en tal selector se cambia por lo asignado
    $('.titulo-1').click(function() {//.clase
        var html = $(this).html();
        $(this).html('Michelle');
    });
    //Escucha lo que es una seleccion
    $('#Countryselect').change(function() {//#id change=cambio de seleccion
        var country= $(this).val();
        console.log('country', country);//printf
        //BOTONES DEPENDIENTES
        /*
        if(country =='México'){
            var cone="<option>Aguascalientes</option><option>Baja California</option><option>Chiapas</option>";
            $('#Stateselect').html(cone);//sustituye los valores del id stateselect por los de cone
            
        }else if(country=='Estados Unidos'){
            var st= "<option>Alabama</option><option>Alaska</option><option>Arizona</option>";
            $('#Stateselect').html(st);
        } else{
            var cn="<option>Ontario</option><option>Alberta</option><option>Quebec</option>";
            $('#Stateselect').html(cn);
        }*/
    });
    // Colocar el get dentro del cambio de país
    // Consultar solo los estados del país indicado
    // Mostrar los estados del país
    $.get("{{ route('states.ajaxindex',['country'=>$country]) }}")//checar !!!!!
        .done(function(data) {
            var html="";
            for(var i  = 0; i < data.states.length; i++) {
                html=html+ "<option>"+ data.states[i].name +"</option>";
                
            }
            console.log(data);
            $('#Stateselect').html(html);
        });
    
});
</script>
@endsection

