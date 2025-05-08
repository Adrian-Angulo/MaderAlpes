<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Maderalpes Pasto</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="keywords" content="madera, tableros, herrajes, Pasto, MaderAlpes">
    <meta name="description"
        content="MaderAlpes: Distribuidor de tableros, herrajes y accesorios en Pasto, Ipiales y Túquerres.">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Google Web Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container position-relative" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 display-5 text-white"><span class="text-primary">MADER</span>ALPES</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <li class="nav-item"><a href="/" class="nav-link active">Inicio</a></li>
                        <li class="nav-item"><a href="{{ route('nosotros') }}" class="nav-link">Nosotros</a></li>
                        <li class="nav-item"><a href="{{ route('pqrs') }}" class="nav-link">PQRS</a></li>
                        <li class="nav-item"><a href="{{ route('ubicacion') }}"class="nav-link">Ubicación</a></li>
                        <li class="nav-item"><a href="{{ route('contacto') }}"class="nav-link">Contacto</a></li>
                    </div>
                </div>
                @auth

                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ Auth::user()->nombre }}
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        this.closest('form').submit();">Cerrar Session
                                        </a>

                                </form>
                            </li>
                        </ul>
                    </div>
                @else
                    <div class="d-flex align-items-center gap-2 ms-auto py-1">
                        <a href="{{ route('login') }}" class="btn btn-outline-secondary btn-sm">
                            Iniciar Sesión
                        </a>
                        <a href="{{ route('register') }}" class="btn btn-success btn-sm">
                            Registrarse
                        </a>
                    </div>
                @endauth

            </nav>
        </div>
    </div>
    <!-- Navbar End -->
    <!-- Under Nav Start -->
    <div class="container-fluid bg-white py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-left mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-office font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Nuestra Oficina</h5>
                            <p class="m-0">Cl. 17 #1545, Centro, Pasto, Nariño</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-left text-lg-center mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-email font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Gmail</h5>
                            <p class="m-0">info@maderalpes.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-left text-lg-right mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-telephone font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Llamanos</h5>
                            <p class="m-0">317 5151701</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Under Nav End -->
    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/Fondo1Maderalpess.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 800px;">
                            <h4 class="text-primary text-uppercase font-weight-normal mb-md-3">Desarrollo creativo de
                                interiores</h4>
                            <h3 class="display-3 text-white mb-md-4">Haz de tu hogar un lugar mejor</h3>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/fondo2Maderalpes.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 800px;">
                            <h4 class="text-primary text-uppercase font-weight-normal mb-md-3">Desarrollo creativo de
                                interiores</h4>
                            <h3 class="display-3 text-white mb-md-4">Sientete en paz en tu hogar</h3>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->
    <!-- About Start -->
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div
                        class="d-flex flex-column align-items-center justify-content-center bg-primary h-100 py-5 px-3">
                        <img src="img/añosexperiencia.png" alt="Icono de madera"
                            class="display-1 text-secondary mb-3" style="width: 80px; height: 80px;">
                        <h4 class="display-3 mb-3">2+</h4>
                        <h1 class="m-0">Años de experiencia</h1>
                    </div>
                </div>
                <div class="col-lg-7 m-0 my-lg-5 pt-5 pb-5 pb-lg-2 pl-lg-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Aprenda de nosotros</h6>
                    <h1 class="mb-4 section-title">Expertos en Diseño y Carpintería a Medida en la Región</h1>
                    <p>En MaderAlpes nos especializamos en la fabricación de muebles y estructuras de madera de alta
                        calidad, combinando técnicas tradicionales con innovación moderna. Con más de dos años de
                        experiencia, nos hemos consolidado como una empresa confiable, apasionada por el diseño
                        personalizado y el trabajo bien hecho. Nos enorgullece trabajar con materiales sostenibles y
                        ofrecer soluciones únicas para hogares, negocios y proyectos arquitectónicos.</p>
                    <div class="row py-2">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-house font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Diseño de Proyectos</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-stairs font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Interiores y Exteriores</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-office font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Diseño Comercial</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-living-room font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Diseño Residencial</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Servicios Inicio -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 pr-lg-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Nuestros Servicios</h6>
                    <h1 class="mb-4 section-title">Diseños de Carpintería e Interiorismo para Tu Hogar</h1>
                    <p>En MaderAlpes ofrecemos soluciones únicas en carpintería y diseño de interiores, adaptadas a cada
                        espacio y estilo de vida. Transformamos ambientes con madera de alta calidad, un diseño
                        cuidadoso y un acabado impecable que refleja calidez, funcionalidad y elegancia.</p>
                    <a href="#" class="btn btn-primary mt-3 py-2 px-4">Ver más</a>
                </div>
                <div class="col-lg-6 p-0 pt-5 pt-lg-0">
                    <div class="owl-carousel service-carousel position-relative">
                        <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                            <h3 class="flaticon-bedroom display-3 font-weight-normal text-primary mb-3"></h3>
                            <h5 class="mb-3">Diseño de Dormitorios</h5>
                            <p class="m-0">Creamos espacios de descanso acogedores y funcionales, con mobiliario
                                personalizado y acabados de alta calidad.</p>
                        </div>
                        <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                            <h3 class="flaticon-kitchen display-3 font-weight-normal text-primary mb-3"></h3>
                            <h5 class="mb-3">Diseño de Cocinas</h5>
                            <p class="m-0">Diseñamos cocinas prácticas y elegantes, optimizando cada centímetro para
                                tu comodidad y estilo de vida.</p>
                        </div>
                        <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                            <h3 class="flaticon-bathroom display-3 font-weight-normal text-primary mb-3"></h3>
                            <h5 class="mb-3">Diseño de Baños</h5>
                            <p class="m-0">Renovamos baños con muebles de madera hechos a medida, combinando
                                funcionalidad, estética y durabilidad.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Servicios Fin --><!-- Características Inicio -->
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mt-5 py-5 pr-lg-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">¿Por qué elegirnos?</h6>
                    <h1 class="mb-4 section-title">Más de 2 Años de Experiencia en Diseño y Carpintería Personalizada
                    </h1>
                    <p class="mb-4">En MaderAlpes, combinamos creatividad, precisión y pasión por la madera para
                        transformar espacios. Cada proyecto es una oportunidad para crear ambientes funcionales, cálidos
                        y estéticamente únicos, siempre con materiales de calidad y un compromiso auténtico con el
                        cliente.</p>
                    <ul class="list-inline">
                        <li>
                            <h5><i class="far fa-check-square text-primary mr-3"></i>Diseños personalizados para cada
                                cliente</h5>
                        </li>
                        <li>
                            <h5><i class="far fa-check-square text-primary mr-3"></i>Materiales duraderos y de alta
                                calidad</h5>
                        </li>
                        <li>
                            <h5><i class="far fa-check-square text-primary mr-3"></i>Atención al detalle y satisfacción
                                garantizada</h5>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden">
                        <img class="h-100" src="img/imagenGrandePQElegirnos3.png"
                            alt="MaderAlpes diseño carpintería">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Características Fin -->
    <!-- Proyectos Inicio -->
    <style>
        .portfolio-img img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }
    </style>
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col text-center mb-4">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Nuestros Proyectos</h6>
                    <h1 class="mb-4">Algunos de Nuestros Trabajos en Carpintería y Diseño de Interiores</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-outline-primary m-1 active" data-filter="*">Todos</li>
                        <li class="btn btn-outline-primary m-1" data-filter=".first">Completados</li>
                    </ul>
                </div>
            </div>
            <div class="row mx-1 portfolio-container">
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item first">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="img/Proyectos1.2Maderalpes.png"
                                alt="Cocina Moderna en Madera">
                        </div>
                        <div
                            class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4">Cocina Moderna Color Roble natural</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-outline-primary m-1" href="img/Proyectos1Maderalpes.png"
                                    data-lightbox="Proyectos1"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item second">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="img/Proyectos2.1Maderalpes.png" alt="Dormitorio Rústico">
                        </div>
                        <div
                            class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4">Closet a Medida</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-outline-primary m-1" href="img/Proyectos2Maderalpes.png"
                                    data-lightbox="Proyectos2"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item third">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="img/Proyectos1.png" alt="Baño Elegante en Madera">
                        </div>
                        <div
                            class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4">Cocina Moderna Color Nogal</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-outline-primary m-1" href="img/Proyectos1.png"
                                    data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item first">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="img/Proyectos4.png" alt="Estudio Minimalista">
                        </div>
                        <div
                            class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4">Muebles Personalizados</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-outline-primary m-1" href="img/Proyectos4.png"
                                    data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item second">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="img/Proyectos3.png" alt="Closet Personalizado">
                        </div>
                        <div
                            class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4">Closet a Medida</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-outline-primary m-1" href="img/Proyectos3.png"
                                    data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item third">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="img/Proyectos5.png" alt="Comedor Familiar">
                        </div>
                        <div
                            class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4">Cocina Moderna Color Blanco Lacado</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-outline-primary m-1" href="img/Proyectos5.png"
                                    data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Proyectos Fin -->
    <!-- Team Start -->
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div
                        class="py-5 px-4 h-100 bg-primary d-flex flex-column align-items-center justify-content-center">
                        <h6 class="text-white font-weight-normal text-uppercase mb-3">Nuestro Equipo</h6>
                        <h1 class="mb-0 text-center">Conoce a los miembros de Maderalpes</h1>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6 p-0 py-sm-5">
                    <div class="owl-carousel team-carousel position-relative p-0 py-sm-5">
                        <!-- Diseñador -->
                        <div class="team d-flex flex-column text-center mx-3">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="img/team-1.jpg" alt="Diseñador">
                            </div>
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <h5 class="text-white">Diseñador</h5>
                                <p class="m-0">Encargado del diseño de productos</p>
                            </div>
                        </div>
                        <!-- Operador de maquinarias -->
                        <div class="team d-flex flex-column text-center mx-3">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="img/team-2.jpg" alt="Operador de Maquinarias">
                            </div>
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <h5 class="text-white">Operador de Maquinarias</h5>
                                <p class="m-0">Manejo y control de equipos de producción</p>
                            </div>
                        </div>
                        <!-- Vendedor puerta a puerta -->
                        <div class="team d-flex flex-column text-center mx-3">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="img/team-3.jpg" alt="Vendedor">
                            </div>
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <h5 class="text-white">Vendedor puerta a puerta</h5>
                                <p class="m-0">Promoción directa de productos</p>
                            </div>
                        </div>
                        <!-- Ensamblador de partes -->
                        <div class="team d-flex flex-column text-center mx-3">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="img/team-4.jpg" alt="Ensamblador">
                            </div>
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <h5 class="text-white">Ensamblador de partes</h5>
                                <p class="m-0">Montaje y armado de productos</p>
                            </div>
                        </div>
                        <!-- Contador -->
                        <div class="team d-flex flex-column text-center mx-3">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="img/team-5.jpg" alt="Contador">
                            </div>
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <h5 class="text-white">Contador</h5>
                                <p class="m-0">Gestión contable y financiera</p>
                            </div>
                        </div>
                        <!-- Transportador 1 -->
                        <div class="team d-flex flex-column text-center mx-3">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="img/team-6.jpg" alt="Transportador">
                            </div>
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <h5 class="text-white">Transportador</h5>
                                <p class="m-0">Entrega de productos</p>
                            </div>
                        </div>
                        <!-- Transportador 2 -->
                        <div class="team d-flex flex-column text-center mx-3">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="img/team-7.jpg" alt="Transportador">
                            </div>
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <h5 class="text-white">Transportador</h5>
                                <p class="m-0">Apoyo logístico en despachos</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fin del equipo uwu -->
    <!-- Testimonial Start -->
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-7 py-5 pr-md-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3 pt-5">Testimonios</h6>
                    <h1 class="mb-4 section-title">Lo que dicen nuestros clientes</h1>
                    <div class="owl-carousel testimonial-carousel position-relative pb-5 mb-md-5">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg"
                                    style="width: 60px; height: 60px;" alt="Cliente 1">
                                <div class="ml-3">
                                    <h5>Juan Rodríguez</h5>
                                    <i>Cliente residencial</i>
                                </div>
                            </div>
                            <p>“El mueble que me hicieron superó mis expectativas. Maderalpes se encargó de cada detalle
                                con mucha dedicación.”</p>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg"
                                    style="width: 60px; height: 60px;" alt="Cliente 2">
                                <div class="ml-3">
                                    <h5>Laura Gómez</h5>
                                    <i>Diseñadora de interiores</i>
                                </div>
                            </div>
                            <p>“Trabajar con Maderalpes ha sido una experiencia excelente. Siempre cumplen los tiempos y
                                la calidad es insuperable.”</p>
                        </div>
                    </div>
                </div>
                <style>
                    .estrellas-img img {
                        width: 200%;
                        max-height: 350px;
                        object-fit: contain;
                    }
                </style>
                <div class="col-md-5 estrellas-img">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden">
                        <img src="img/5Estrellas.png" alt="Clientes felices">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Testimonial End -->
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <!-- Información de contacto -->
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Contáctanos</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Cl. 17 #1545, Centro, Pasto, Nariño</p>
                <p><i class="fa fa-phone-alt mr-2"></i>317 5151701</p>
                <p><i class="fa fa-envelope mr-2"></i>info@maderalpes.com</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;"
                        href="https://www.facebook.com/profile.php?id=61555494215461"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;"
                        href="https://www.instagram.com/maderalpes_pasto?igsh=eXlta2kyYzJ5eDBu"><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
            <!-- Enlaces rápidos -->
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Enlaces Rápidos</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Inicio</a>
                    <a class="text-white mb-2" href="nosotros.html"><i class="fa fa-angle-right mr-2"></i>Sobre
                        Nosotros</a>
                    <a class="text-white mb-2" href="catalogo.html"><i class="fa fa-angle-right mr-2"></i>Nuestro
                        Catalogo</a>
                    <a class="text-white mb-2" href="ubicacion.html"><i class="fa fa-angle-right mr-2"></i>Ubicanos
                        Mejor</a>
                    <a class="text-white" href="contacto.html"><i class="fa fa-angle-right mr-2"></i>Contáctanos</a>
                </div>
            </div>
            <!-- Información institucional -->
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Nuestra Empresa</h4>
                <p><strong>Registrada:</strong> 7 de enero de 2023</p>
                <p><strong>Filial de:</strong> MADERATLAS</p>
                <p><strong>Sucursales:</strong> Tuquerres e Ipiales</p>
                <p><strong>NIT:</strong> 1086103024-3</p>
            </div>
            <!-- Formulario de boletín -->
            <div class="col-lg-3 col-md-6 mb-5 text-center">
                <img src="img/logoMaderalpes.png" alt="Logotipo Maderalpes" class="img-fluid"
                    style="max-width: 200px;">
                <p class="mt-3">Distribuidor líder de tableros, herrajes y soluciones para mobiliario en el sur de
                    Colombia.</p>
            </div>
        </div>

        <div class="container border-top border-secondary pt-5">
            <p class="m-0 text-center text-white">
                &copy; <a class="text-white font-weight-bold" href="#">Maderalpes</a>. All Rights Reserved.
                Designed by
                <a class="text-white font-weight-bold" href="https://htmlcodex.com">HTML Codex</a>
            </p>
        </div>
    </div>
    <!-- Footer End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
