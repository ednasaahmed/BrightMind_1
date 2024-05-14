@extends('layout.inno')
@section('title','Brightmind')
@section('content')
<section class="section1">
<div class="opa" style="background-color:black;">
    <img src="images/n3.png" alt="logo" class="logo1 d-block w-100">
    </div>
</section>
<section id="nosotros" class="section">
    <h1>Nuestros servicios</h1>
    <br><br>
<div class="container d-flex align-items-center justify-content-center position-relative flex-wrap">
        <div class="card d-flex position-relative flex-column">
            <div class='imgContainer'>
                <img src='images/c8.jpg'>
            </div>
            <div class="content">
                <h2>Tutorías personalizadas</h2>
                <p>Ofrece sesiones uno a uno donde los tutores pueden adaptar el contenido y el ritmo de enseñanza según las necesidades específicas de cada estudiante.</p>
            </div>
        </div>
        <div class="card d-flex position-relative flex-column">
            <div class='imgContainer'>
                <img src='images/c9.jpg'>
            </div>
            <div class="content">
                <h2>Formación y desarrollo profesional</h2>
                <p>Con la plataforma los tutores pueden mejorar sus habilidades pedagógicas, actualizar su conocimiento en áreas específicas y aprender nuevas estrategias de enseñanza.</p>
            </div>
        </div>
        <div class="card d-flex position-relative flex-column">
            <div class='imgContainer'>
                <img src='images/c7.jpg'>
            </div>
            <div class="content">
                <h2>Selección de Materias</h2>
                <p>Los alumnos podrán escoger sus materias dependiendo de la calificación del usuariio según otros alumnos, además de ver sus grados de conocimiento de los mismos.</p>
            </div>
        </div>
    </div>
</section>
<section id="objetivo" class="section-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="images/n1.png" alt="Objetivo de Brightmind" class="img-fluid">
            </div>
            <div class="obj col-lg-6">
                <h2>Nuestros Objetivos</h2>
                <hr>
                <p class="li"><i class="bi bi-caret-right-fill" style="color: #610C27"></i> Aumentar la satisfacción del usuario al utilizar la plataforma de tutorías<p>
                <p class="li"><i class="bi bi-caret-right-fill" style="color: #610C27"></i>Implementar herramientas de análisis para evaluar el rendimiento del estudiante y la eficacia de los tutores. </p>
                <p class="li"><i class="bi bi-caret-right-fill" style="color: #610C27"></i> Garantizar la protección de la información personal y académica de los usuarios.</p>
            </div>
        </div>
    </div>
</section>

<section class="section2">
  <img src="images/c5.jpg" alt="logo" class="logo" style="width:100%; height:auto;">
</section>

<section class="client_section">
    <div class="container">
      <div class="heading_container">
        <h2>Opinión de nuestros Alumnos</h2>
      </div>
      <div id="carouselExample2Controls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/a1.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                      <h6>Mateo</h6>
                    </div>
                    <p>
                    "BrightMind es una plataforma muy fácil de usar y accesible. Me encanta que pueda encontrar un tutor, programar sesiones y acceder a recursos de aprendizaje desde la comodidad de mi hogar."
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/a2.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                      <h6>Mariana</h6>
                    </div>
                    <p>
                    "He utilizado BrightMind durante varios meses y estoy muy satisfecha con los resultados. He mejorado mucho mi comprensión de las materias que estoy estudiando y estoy segura de que podré alcanzar mis metas académicas."
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/a3.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                      <h6>Daniela</h6>
                    </div>
                    <p>
                    "Recomiendo BrightMind a cualquier estudiante que quiera mejorar su rendimiento académico. La plataforma ofrece una gran variedad de recursos y servicios que te pueden ayudar a alcanzar tus metas. Los tutores son muy profesionales y dedicados, y siempre están dispuestos a ayudarte."
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="carousel_btn-container">
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample2Controls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample2Controls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
</div>
      </div>
    </div>

  </section>

@endsection
