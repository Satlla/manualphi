

<?php include ('./includes/header-dashboard.php') ?>
<body class="body-manage-property">

<div class="container-dashboard mx-auto mt-3 ">
    <h1 class="title-2">Cuenta</h1>
    <p> Esta es tu cuenta, aquí podrás modificar tus datos personales o de empresa.</p>
    <div class="container-dashboard mx-auto  ">
        <div class=" d-flex justify-content-between  ">
            <div class="d-flex w-100 align-items-center">
                    <img class="image-profile" src="images/user.png" alt="image-profile">
                    <div class="d-flex flex-column items-profile align-items-center  ">
                        <span class="profile-name">Antonio M</span>
                        <span >Gestor</span>                     
                    </div>
                </div>

                <div class="d-flex ">
                    <a class="btn-share text-decoration-none" href="" > <img class="me-2" src="icons/upload.svg" alt=""> Compartir </a>
                    <a class="btn-share text-decoration-none" href="" > <img class="me-2" src="icons/globe-alt.svg" alt=""> Idioma</a>
                </div>
        </div>
    </div>
</div>
<div class="container-dashboard d-flex mx-auto  ">


<form class="col-12 col-md-6 ">
  <div class=" mt-4 mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class=" mt-4 mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"> Nunca compartiremos tu dirección de correo electrónico con nadie.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Repite Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="politicas">
    <label class="form-check-label" for="exampleCheck1">Acepto las políticas de privacidad</label>

  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="politicas">
    <label class="form-check-label" for="exampleCheck1">Acepto recibir información por correo </label>

  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<div class="col-12 col-md-6">
<div class="accordion accordion-flush" id="accordionFlushExample">

  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <span> Alejandro Santalla</span>
        </div>
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
    </div>
  </div>




</div>
</div>



</div>

  <div class="container-dashboard mx-auto  ">
      <div class=" d-flex justify-content-end align-items-center p-2 ">

            <a href="dashboard.php" class="add-button"> Reportar un Error <img class="plus-icon" src="images/plus.svg" alt=""> </a>

      </div>


  </div>


    </div>
</div>



<!-- Final FAQ -->








      


    
</body>
</html>