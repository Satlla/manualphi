


<section class="">

<div class="row g-0 d-flex flex-column-reverse flex-lg-row">
    <div class="col-lg-7 carou-caption">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="20000">
      <img src="images/image-banner.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="font-weight-bold">Nueva Funcionalidad</h5>
        <p>Registra a tus viajeros en policia con Manuaphi</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="20000">
    <img src="images/image-banner.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="20000">
    <img src="images/image-banner.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


    </div>
    <div class="col-lg-5">
        <div class="px-lg-5 pt-lg-4 pb-lg-3 p-4">
        <?php include ('./includes/header-transparent.php') ?>

        </div>

        <div class="px-lg-5 py-lg-4 p-4">


            <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="tucorreo@mail.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingresa tu contraseña">
                    </div>
                    <span class="d-flex justify-content-center align-items-center m-3">
                <a href="register.php"> ¿Has olvidado tu contraseña?</a>
            </span>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Acepto los términos y condiciones de uso</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Acepto recibir comunicaciones por parte de Manualphi</label>
                    </div>

                    <button type="submit" class="btn-mn-primary w-100">Entrar</button>

                    <span class="d-flex justify-content-center align-items-center m-3">
                        <p> ¿No tienes cuenta? <a href="/register.php"> Regístrate </a> </p> 
                    </span>
            </form>
           
        </div>



    </div>
</div>
</section>