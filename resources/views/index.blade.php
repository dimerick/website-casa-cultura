@extends('template')
@section('title')
    Casa de la Cultura Francisco de Paula Santander
@endsection
@section('keywords')
    Arte, Cultura y Libertad
@endsection
@section('description')
    “La casa de la cultura es un “Espacio de Libertad” allí se realiza un ejercicio por lo humano, por la sensibilización de la cotidianidad del cuerpo y el espíritu mediante el descubrimiento y el aprendizaje de habilidades - aptitudes culturales, artísticas y artesanales con el propósito principal de “Fomentar la cultura de nuestro barrio a través de las expresiones artísticas y artesanales”.
@endsection

@section('css')

@endsection

@section('main-content')

<section class="video-intro">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <iframe class="video" width="100%" height="315" src="https://www.youtube.com/embed/Cztr7zKihHs?autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

            {{--width="100%" height="400"--}}
        </div>
        <div class="col-md-3">

        </div>
    </div>
</section>


    <!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
            <li data-target="#carousel-example-2" data-slide-to="2"></li>
            <li data-target="#carousel-example-2" data-slide-to="3"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="view view-color-blue">
                    <div class="row">
                        <div class="col-md-8">
                            <img class="d-block w-100" src="{{asset('assets/images/slider/slider1.jpg')}}" alt="First slide">
                        </div>
                        <div class="col-md-4">

                            <div class="info-slider">
                                <div class="container-fluid">

                                    <h3 class="h3-responsive">RENDICIÓN PÚBLICA DE CUENTAS</h3>
                                    <p>La Corporación Casa de la Cultura Francisco de Paula Santander  tiene como Compromiso social dar claridad de sus iniciativas sociales </p>
                                    <a class="btn btn-outline-white" href="/rendicion-cuentas">Ver Mas</a>


                            </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

            <div class="carousel-item">
                <div class="view view-color-orange">
                    <div class="row">
                        <div class="col-md-8">
                            <img class="d-block w-100" src="{{asset('assets/images/slider/slider2.jpg')}}" alt="First slide">
                        </div>
                        <div class="col-md-4">

                            <div class="info-slider">
                                <div class="container-fluid">

                                    <h3 class="h3-responsive">CASA DE LA CULTURA FPS</h3>
                                    <p>Somos la casa de la cultura</p>
                                    <a class="btn btn-outline-white" href="#">Ver Mas</a>


                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

            <div class="carousel-item">
                <div class="view view-color-green">
                    <div class="row">
                        <div class="col-md-8">
                            <img class="d-block w-100" src="{{asset('assets/images/slider/slider3.jpg')}}" alt="First slide">
                        </div>
                        <div class="col-md-4">

                            <div class="info-slider">
                                <div class="container-fluid">

                                    <h3 class="h3-responsive">CASA DE LA CULTURA FPS</h3>
                                    <p>Somos la casa de la cultura</p>
                                    <a class="btn btn-outline-white" href="#">Ver Mas</a>


                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

            <div class="carousel-item">
                <div class="view view-color-violet">
                    <div class="row">
                        <div class="col-md-8">
                            <img class="d-block w-100" src="{{asset('assets/images/slider/slider4.jpg')}}" alt="First slide">
                        </div>
                        <div class="col-md-4">

                            <div class="info-slider">
                                <div class="container-fluid">

                                    <h3 class="h3-responsive">CASA DE LA CULTURA FPS</h3>
                                    <p>Somos la casa de la cultura</p>
                                    <a class="btn btn-outline-white" href="#">Ver Mas</a>


                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->


    <section class="section-page" id="quienes-somos">
        <div class="container-fluid">
            <h1 class="title-section">QUIENES SOMOS</h1>
            <div class="row">
                <div class="col-md-6">
<img src="{{asset('assets/images/about-us.jpg')}}" class="image-w">
                </div>
                <div class="col-md-6">
<p>
    “La casa de la cultura es un “Espacio de Libertad” allí se realiza un ejercicio por lo humano, por la sensibilización de la cotidianidad del cuerpo y el espíritu mediante el descubrimiento y el aprendizaje de habilidades - aptitudes culturales, artísticas y artesanales con el propósito principal de “Fomentar la cultura de nuestro barrio a través de las expresiones artísticas y artesanales”.
    La casa de la cultura propone como alternativa de tiempo libre y de opción de vida el arte y la cultura mediante cursos, eventos, toma artística y cultural, serenata para los abuelos que invitan a la gente del barrio a relacionarse colectivamente entorno a una agenda cultural.

</p>
                    <h3>MISIÓN</h3>
                    <p>Incidir en la transformación socio-cultural de las personas para que reconozcan su libertad y así construya su proyecto de vida.</p>

                    <h3>VISIÓN: ¿Que se busca a futuro?</h3>
                    <p>
                        Adquirir capacidad conceptual y experiencia suficiente para ampliar la cobertura del servicio a otros espacios donde se pueda hacer incidencia en el mejoramiento de la calidad de vida.

                    </p>

                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <p>El 60%  de los beneficiarios de las actividades y programas de la casa de la cultura Santander son personas que están en el estrato 0,1 y 2 de comunidades vulnerables; en un rango de edades entre 50 y 90 años, siendo los más beneficiados en su mejoramiento de la calidad de vida (Visto desde el punto de vista del grado de importancia y la transformación de actitudes) por el impacto del espacio de  esparcimiento y libertad que se le proporciona.</p>

                    <p>
                        El  25% son niños  de estratos 1 y 2 que oscilan entre los 5 hasta los 12 años, estos son impactados en el mejoramiento de la  utilización del tiempo libre y de ocio ya que en el sector donde viven hay un contexto difícil donde se  percibe El alcoholismo, Consumo de Sustancias Adictivas.

                    </p>


                </div>
                <div class="col-md-6">
                    <iframe class="video" width="100%" height="315" src="https://www.youtube.com/embed/bvl-zLXxr84" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

                </div>
            </div>

        </div>


    </section>




    <section class="section-page" id="programas">
<div class="container-fluid">
    <h1 class="title-section">NUESTROS EVENTOS PERMANENTES CON LA COMUNIDAD</h1>

    <div class="cont-programs">
        <div class="card" onclick="openModal();currentSlide(1)">
            <img class="card-img-top" src="{{asset('assets/images/programas/serenata.jpg')}}"
                 class="hover-shadow" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">SERENATA PARA LOS ABUELOS</h4>
                <p class="card-text">Actividad cultural comunitaria que se realiza desde hace 7 años todos los miércoles a las 4pm...</p>
            </div>
        </div>

        <div class="card">
            <img class="card-img-top" src="{{asset('assets/images/programas/kdk.jpg')}}" onclick="openModal();currentSlide(2)"
                 class="hover-shadow" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">BIBLIOTECA KDK</h4>
                <p class="card-text">Actividad cultural del fomento del arte y la lectura...</p>
            </div>
        </div>

        <div class="card">
            <img class="card-img-top" src="{{asset('assets/images/programas/toma-artistica.jpg')}}" onclick="openModal();currentSlide(3)"
                 class="hover-shadow" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">TOMA ARTÍSTICA Y CULTURAL</h4>
                <p class="card-text">Intervenciones recreativas y artísticas en las esquinas del Barrio Santander con los niños y adolescentes....</p>
            </div>
        </div>

    </div>


    <div>
        <h3></h3>
    </div>

</div>


    </section>

    <section class="section-page donaciones" id="donaciones">

        <div class="row">
            <div class="col-md-1">

            </div>
            <div class="col-md-10">
                <div class="container-fluid">
                    <h1 class="title-section">DESEO APOYAR EL PROCESO</h1>

                    <div class="row">

                        <div class="col-md-6">
                            {{--<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FCasa-de-la-Cultura-Santander-Medell%25C3%25ADn-213743438639983%2F&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=false&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>--}}
                            <div class="fb-page" data-href="https://www.facebook.com/Casa-de-la-Cultura-Santander-Medell%C3%ADn-213743438639983/" data-tabs="timeline" data-width="500" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false"><blockquote cite="https://www.facebook.com/Casa-de-la-Cultura-Santander-Medell%C3%ADn-213743438639983/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Casa-de-la-Cultura-Santander-Medell%C3%ADn-213743438639983/">Casa de la Cultura Santander - Medellín.</a></blockquote></div>
                        </div>
                        <div class="col-md-6">
                            <p>Si deseas apoyar nuestro proceso puedes realizar una donación a las siguientes cuentas:</p>
                            <p>
                                Cuenta de ahorros<br>
                                Cooperativa confiar<br>
                                #207821604<br>
                                Beneficiario Casa de la Cultura Santander
                            </p>

                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-1">

            </div>
        </div>




    </section>




    <!--Modal-->

    <div id="myModal" class="modal">
        <span class="close-modal cursor" onclick="closeModal()">&times;</span>


        <div class="modal-content">

            <div class="mySlides">
                <div class="numbertext">1 / 3</div>
                <img src="{{asset('assets/images/programas/serenata.jpg')}}" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">2 / 3</div>
                <img src="{{asset('assets/images/programas/kdk.png')}}"  style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">3 / 3</div>
                <img src="{{asset('assets/images/programas/toma-artistica.jpg')}}" style="width:100%">
            </div>


            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <div class="caption-container">
                <p id="caption"></p>
            </div>
            <div>
                <div class="column">
                    <img class="demo" src="{{asset('assets/images/programas/serenata.jpg')}}" onclick="currentSlide(1)" alt="
      <b>Serenata para los abuelos</b>
      <p>Serenata para los abuelos es una actividad cultural comunitaria que se realiza los días miércoles a las 4pm con 4 años de proceso permanente como adultos y personas mayores del barrio Santander y barrios vecinos. <br> Beneficiarios: 120 adultos y abuelos.
</p>
">
                </div>

                <div class="column">
                    <img class="demo" src="{{asset('assets/images/programas/kdk.jpg')}}" width="50%" onclick="currentSlide(2)" alt="
      <b>Biblioteca kdk y su programa biblioteca kdk en la calle</b>
      <p>Actividad cultural del fomento del arte y la lectura con los niños en un sector del barrio llamado los ranchos lugar con un contexto difícil.<br>
Beneficiarios: de 30  niños.
</p>
">
                </div>

                <div class="column">
                    <img class="demo" src="{{asset('assets/images/programas/toma-artistica.jpg')}}" onclick="currentSlide(3)" alt="
      <b>Toma Artística y Cultural</b>
      <p>han sido intervenciones recreativas y artísticas en las esquinas del Barrio Santander con los niños y adolescentes.
Se  salen a una esquina del barrio llevando diferentes actividades recreativas, artísticas y artesanales para compartirlas con las personas de ese sector. Estas actividades no tienen ningún costo y durante el evento, personas voluntarias donan insumos o alimentos para compartirlas ahí mismo.

<br>Beneficiarios: 70 niños  en cada jornada
</p>

">
                </div>


            </div>



        </div>


    </div>

    <!--Modal-->

    <section class="section-page" id="galeria">
        <h1 class="title-section">GALERIA</h1>

        <div class="galery-photos">
            <div id="flickrembed_87"></div><div style="position:absolute; top:-70px; display:block; text-align:center; z-index:-1;"><a  href="https://www.workingvouchers.co.uk/tui.co.uk">your holiday package</a></div><script src='https://flickrembed.com/embed_v2.js.rand.php?container=flickrembed_87&source=flickr&layout=responsive&input=72157692781331902&sort=0&by=album&theme=default&scale=fill&limit=10&skin=default&autoplay=true'></script><small style="display: block; text-align: center; margin: 0 auto;">Powered by <a href="https://flickrembed.com">flickr embed</a>.</small>
        </div>
    </section>

@endsection


@section('scripts')

        <div id="fb-root"></div>
            <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.12';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

    <script>
        $("#menu-inicio").addClass("active");
    </script>
@endsection