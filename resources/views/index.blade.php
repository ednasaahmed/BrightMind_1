@extends('layout.interno')
@section('title','Brightmind')
@section('content')

<section class="one" >
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" >
    <div class="carousel-inner">
    @foreach($slides as $key => $slide)
        <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
            <img class="d-block w-100" src="{{ asset('images/'.$slide['image']) }}" alt="{{$slide['title']}}" >
            <div class="carousel-caption d-none d-md-block" >
                <h5>{{$slide['title']}}</h5>
                <p>{{$slide['content']}}</p>
                @if(isset($slide['button_text']) && isset($slide['button_url']))
                    <a href="{{route('login')}}" class="btn" >{{$slide['button_text']}} </a>
                @endif
            </div>
        </div>
    @endforeach
</div>
        <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<section class="about_section layout_padding ">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/about-img.jpg" alt="" height="400">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                QUIENES SOMOS
              </h2>
            </div>
            <p>
            Brightmind es una plataforma educativa en línea diseñada para conectar a estudiantes y docentes en un entorno virtual colaborativo. Ofrecemos una amplia gama de recursos y herramientas educativas para ayudar a los estudiantes a mejorar sus habilidades académicas y alcanzar sus metas educativas.
            </p>
            <a href="">
              Leer más
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="services_section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="service">
                    <div class="service-image">
                        <img src="images/e2.jpg" alt="Estudiantes" />
                    </div>
                    <h2>Para Estudiantes</h2>
                    <p>¡Mejora tus habilidades académicas con Brightmind! Nuestra plataforma te ofrece acceso a una amplia variedad de recursos educativos, tutoriales y herramientas interactivas para ayudarte a alcanzar tus metas académicas. Además, puedes conectarte con docentes expertos para recibir asesorías personalizadas.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service">
                    <div class="service-image">
                        <img src="images/e1.jpg" alt="Docentes" />
                    </div>
                    <h2>Para Docentes</h2>
                    <p>¿Eres un docente apasionado por ayudar a los estudiantes a tener éxito? ¡Únete a Brightmind! Con nuestra plataforma, puedes ofrecer asesorías a estudiantes que necesitan ayuda extra en sus estudios. Además, ¡obtén una paga por tus servicios y contribuye al éxito académico de tus estudiantes!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="teacher_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Registrate para conocer a tus tutores
        </h2>
      </div>
      <div class="row">
        <div class="col-sm-6 col-lg-3">
          <div class="box">
            <div class="img-box">
              <img src="images/t1.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Alice Stark
              </h5>
              <h6>
                Tutora
              </h6>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="box">
            <div class="img-box">
              <img src="images/t2.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Martin Evans
              </h5>
              <h6>
                Tutor
              </h6>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="box">
            <div class="img-box">
              <img src="images/t3.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Jane Dunn
              </h5>
              <h6>
                Tutora
              </h6>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="box">
            <div class="img-box">
              <img src="images/t4.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Clara Mark
              </h5>
              <h6>
                Tutora
              </h6>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          Sign up
        </a>
      </div>
    </div>
  </section>
@endsection