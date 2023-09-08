<?php include("conexiondb.php")?>
<!---------------------------------------------------------------->
<?php include("envia_mail.php")?>
<!---------------------------------------------------------------->
<?php include("./includes/header.php")?>

<!--esta seccion contiene los elementos de hero--->

<section class="hero ">
    <div >
    <h1 class="container-fluid hero__tittle" >Escuela de formacion deportiva sjv</h1>
    </div>
<!------------------------------------------------------------------------------------------------------------------------------>


</section> <!--esta seccion contiene los elementos del carousel--->
<section class="carousel">
    <h2 class="carouse__tittle container-fluid">nuestras participaciones</h2>

    <div id="carouselExampleControls" class="carousel slide carousel-fade container" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item carousel__item active" data-bs-interval="2000">
                <img class="carousel__item" src="./css/img/briseida-acosta-en-los-panamericanos-de-lima-2019.png" class="d-block w-100  " alt="">
            </div>
            
    
            <div class="carousel-item " data-bs-interval="2000">
                <img class="carousel__item" src="./css/img/karate.jpg" class="d-block w-100  " alt="...">
            </div>
    

            <div class="carousel-item " data-bs-interval="2000">
                <img class="carousel__item" src="./css/img/ciclomontañismo-bicycle-mountain-exercise.jpg" class="d-block w-100  " alt="...">
            </div>

            <div class="carousel-item carousel__item " data-bs-interval="2000">
                <img class="carousel__item" src="./css/img/deporte-luchas-taekwondo-wallpaper-preview.jpg" class="d-block w-100  " alt="">
            </div>
            
    
            <div class="carousel-item " data-bs-interval="2000">
                <img class="carousel__item" src="./css/img/karate2.jpg" class="d-block w-100  " alt="...">
            </div>
    

            <div class="carousel-item " data-bs-interval="2000">
                <img class="carousel__item" src="./css/img/ciclomontañismo-bicycle-mountain-exercise-2.jpg" class="d-block w-100  " alt="...">
            </div>


 
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>
      </div>    
</section>
<!------------------------------------------------------------------------------------------------------------------------------>

<section class="container container-fluid"><!--esta seccion contiene los elementos de la seccion nuestros servicios--->
    <div><h2 class="services__tittle">NUESTROS SERVICIOS</h2></div>
    <div class="row w-75 mx-auto my-6">
        <div class="col-lg-4 col-md-12 col-sm-12">
            <img src="./css/img/karate_logo.png" alt="karate_logo" width="200" height="160">
            
        <div>
        <h3 class="fs-5 mt-4 px-4 pb-1 ">KARATE</h3>
        <p class="px-4">práctica karate, fomenta la constancia y disciplina, mejora la condición física-atlética, la coordinación, fuerza y reflejos, permitiendo llevar una vida saludable</p>
        </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12">
            <img src="./css/img/taekwondo_logo.png" alt="taekwondo_logo" width="200" height="160">
        
        <div>
        <h3 class="fs-5 mt-4 px-4 pb-1 ">TAEKWONDO</h3>
        <p class="px-4">Inculcar a los niños, jovenes y adultos mediante la practica del taekwondo los valores, la disciplina y el respeto</p>
        </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12">
            <img src="./css/img/ciclomontanismo_logo.png" alt="ciclomontanismo_logo" width="200" height="160">
        
        <div>
        <h3 class="fs-5 mt-4 px-4 pb-1 ">MOUNTAIN BIKE</h3>
        <p class="px-4">Inculcar a los niños, jovenes y adultos mediante la practica del ciclo montañismo con enfoque ecologico sentido de pertencia y cuidado de los recursos naturales.</p>
        </div>
        </div>   
    </div>
</section>



<!------------------------------------------------------------------------------------------------------------------------------>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

<?php include("./includes/formulario.php");?>

<?php include("./includes/footer.php")?>

