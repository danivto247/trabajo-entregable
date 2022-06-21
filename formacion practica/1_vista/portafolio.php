<?php
require_once "../3_modelo/conexion.php";

session_start();
$usuario = $_SESSION["username"]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto x</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/stylep.css">

</head>
<body>

<!-- custom cursors  -->
<div class="cursor-1"></div>
<div class="cursor-2"></div>


<div id="menu-bars" class="fas fa-bars"></div>
    
<!-- header section starts  -->

<header>

    <a href="#" class="logo"> <span>Proyecto</span> X </a>

    <nav class="navbar">
        <a href="#home">Inicio</a>
        <a href="#about">Sobre nostros</a>
        <a href="#service">Nuestros Servicios</a>
        <a href="#experience">Experiencia</a>
        <a href="#portfolio">Portafolio</a>
        <a href="#contact">Contactanos</a>
        <?php
        //boton admin
        $q="SELECT *from usuarios WHERE usuario = '$usuario'";
        $consulta = mysqli_query($conexion, $q);
        $array = mysqli_fetch_array($consulta);
        if($array['admin']==1){
            echo "<a href='admin.php'>admin</a>";
        }
        //boton salir
        echo "<a href='../3_modelo/salir.php'>salir</a>";
        ?>
    </nav>

    <div class="follow">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
    </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <span class="hi"> Hola!!!   </span>
        <h3> Somos <span> Proyecto x </span> </h3>
        <p class="info"> Un sitio web para todas tus necesidades </p>
        <p class="text"> Nos entusiasma en presentar nuestra pagina dedicada especificamente recordarle cuando y como pagar vuestras paginas de streaming. </p>
        <a href="#about" class="btn">Sobre nosotros</a>
    </div>

    <div class="image">
        <img src="css/assets/home-img.png" alt="">
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading"> Sobre <span> nosotros </span> </h1>

<div class="row-1">

    <div class="image">
        <img src="css/assets/about-img.jpg" alt="">
    </div>

    <div class="content">
        <h3> Nuestro nombre: Proyecto x </h3>
        <p>Proyecto dedicado a cada uno de nuestros supcriptores</p>
        <div class="box-container">
            <div class="box">
                <p> <span> Grupo : </span> 2 </p>
                <p> <span> Somos : </span> 5 personas </p>
                <p> <span> Idiomas : </span> Ingles , Español </p>
                <p> <span> Trabajo : </span>  </p>
            </div>
            <div class="box">
                <p> <span> freelance : </span> available </p>
                <p> <span> telefonos : </span> +123-456-7890 </p>
                <p> <span> email : </span> @gmail.com </p>
                <p> <span> Nacionalidad : </span> Peru </p>
            </div>
        </div>
        <a href="#" class="btn">download CV</a>
        <a href="#" class="btn">hire me</a>
    </div>

</div>

<h1 class="heading"> <span> my </span> skills </h1>

<div class="row-2">

    <div class="skills">
        <div class="progress">
            <h3> web design <span> 95% </span> </h3>
            <div class="bar"> <span></span> </div>
        </div>
        <div class="progress">
            <h3> web development <span> 80% </span> </h3>
            <div class="bar"> <span></span> </div>
        </div>
        <div class="progress">
            <h3> UI design <span> 75% </span> </h3>
            <div class="bar"> <span></span> </div>
        </div>
        <div class="progress">
            <h3> seo marketing <span> 85% </span> </h3>
            <div class="bar"> <span></span> </div>
        </div>
    </div>

    <div class="box-container">

        <div class="box">
            <h3> >> 2+ </h3>
            <p>un año de experiencia</p>
        </div>
        <div class="box">
            <h3> >> 200+ </h3>
            <p>clientes sadisfechos</p>
        </div>
        <div class="box">
            <h3> >> 300+ </h3>
            <p>Proyectos completados</p>
        </div>
        <div class="box">
            <h3> >> 5+ </h3>
            <p>Premios ganados</p>
        </div>

    </div>

</div>

</section>

<!-- about section ends -->

<!-- service section starts  -->

<section class="service" id="service">

<h1 class="heading"> <span> my </span> services </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-code"></i>
            <h3>web design</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, facere?</p>
        </div>

        <div class="box">
            <i class="fas fa-paint-brush"></i>
            <h3>graphic design</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, facere?</p>
        </div>

        <div class="box">
            <i class="fas fa-mobile"></i>
            <h3>responsive design</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, facere?</p>
        </div>

        <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>seo marketing</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, facere?</p>
        </div>

        <div class="box">
            <i class="fas fa-chart-line"></i>
            <h3>digital marketing</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, facere?</p>
        </div>

        <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>email marketing</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, facere?</p>
        </div>

    </div>

</section>

<!-- service section ends -->

<!-- experience section starts  -->

<section class="experience" id="experience">

    <h1 class="heading"> <span> Nuestros </span> servicios </h1>

    <div class="box-container">

        <div class="box">
            <div class="content">
                <span> 2022 - 2025 </span>
                <h3>Cuente con nosotros</h3>
                <p>Nosotros nos encargamos en recordarle cuando pagar y usted es libre de elegir esa fecha</p>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <span> 2022 - 2025 </span>
                <h3>Siempre a su lado</h3>
                <p>Nosotros nos encargaremos de que usted tenga ordenada sus paginas de streaming</p>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <span> 2022 - 2025 </span>
                <h3>Formas de pago</h3>
                <p>Por el momento solo se reciben pagos por medio paypal y tarjeta de creditos.</p>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <span> 2022 - 2025 </span>
                <h3>No dude en escribinos</h3>
                <p>Si usted tiene alguna duda sobre nuestro servicio no dude en escribinos para resolver todas sus dudas.</p>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <span> 2022 - 2025 </span>
                <h3>Servicio tecnico</h3>
                <p>Contamos con el mejor soporte tecnico.</p>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <span> 2022 - 2025 </span>
                <h3>El primer mes es gratis</h3>
                <p>Porque pensamos en usted y queremos que se sienta bien comodo con nuestra web le brindamos este gran beneficio.</p>
            </div>
        </div>

    </div>

</section>

<!-- experience section ends -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

    <h1 class="heading"> <span> my </span> portfolio </h1>

    <div class="box-container">

        <div class="box">
            <img src="css/assets/netflix-logo.jpeg" alt="">
            <h3> NETFLIX </h3>
            <div class="icons">
                <a href="https://www.netflix.com/" class="fas fa-link"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="https://www.netflix.com/browse" class="fas fa-search"></a>
                <a>+</a>
                
            </div>
        </div>

        <div class="box">
            <img src="css/assets/Disney plus logo.jpg" alt="">
            <h3> DISNEY PLUS </h3>
            <div class="icons">
                <a href="https://www.disneyplus.com/" class="fas fa-link"></a>
                <a href="https://www.disneyplus.com/es-419/login" class="fas fa-share"></a>
                <a href="#" class="fas fa-search"></a>
                <a>+</a>
                
            </div>
        </div>

        <div class="box">
            <img src="css/assets/Prime video logo.jpg" alt="">
            <h3> AMAZON PRIME VIDEO </h3>
            <div class="icons">
                <a href="https://www.primevideo.com/" class="fas fa-link"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-search"></a>
                <a>+</a>
                
            </div>
        </div>

        <div class="box">
            <img src="css/assets/HBO logo.webp" alt="">
            <h3> HBOMAX </h3>
            <div class="icons">
                <a href="https://www.hbomax.com/" class="fas fa-link"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-search"></a>
                <a>+</a>
                
            </div>
        </div>

        <div class="box">
            <img src="css/assets/STAR-PLUS-1.jpg" alt="">
            <h3> Star+ </h3>
            <div class="icons">
                <a href="http://www.starplus.com/" class="fas fa-link"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-search"></a>
                <a>+</a>
                
            </div>
        </div>

        <div class="box">
            <img src="css/assets/spotify-brand.png" alt="">
            <h3> Spotify </h3>
            <div class="icons">
                <a href="https://www.spotify.com/" class="fas fa-link"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-search"></a>
                <a href="../3_modelo/sus.php">+</a>
            </div>
        </div>

    </div>

</section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> contact <span> me </span> </h1>

    <div class="icons-container">

        <div class="icons">
            <i class="fas fa-envelope"></i>
            <h3>Nuestros Email</h3>
            <p>@gmail.com</p>
            <p>@gmail.com</p>
        </div>

        <div class="icons">
            <i class="fas fa-phone"></i>
            <h3>my number</h3>
            <p>+123-456-7890</p>
            <p>+111-222-3333</p>
        </div>

        <div class="icons">
            <i class="fas fa-map-marker-alt"></i>
            <h3>my address</h3>
            <p>ajis class, jogeshwaris west, mumbai, india - 400104</p>
        </div>

    </div>

    <div class="row">

        <form action="">

            <input type="text" placeholder="name" class="box">
            <input type="email" placeholder="email" class="box">
            <input type="number" placeholder="number" class="box">

            <textarea name="" placeholder="message" id="" cols="30" rows="10"></textarea>

            <input type="submit" class="btn" value="send message">

        </form>
        
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61410.99043837451!2d-70.05140784356105!3d-15.846771118738415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915d6985f4e74135%3A0x1e341dd8f24d32cf!2sPuno!5e0!3m2!1ses-419!2spe!4v1654525051661!5m2!1ses-419!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>


</section>

<!-- contact section ends -->

<!-- footer section  -->
<footer class="footer"> creado por el<span> grupo 2 </span> | todos los derechos reservados! </footer>



<!-- custom js file link  -->
<script src="js/scriptp.js"></script>

</body>
</html>