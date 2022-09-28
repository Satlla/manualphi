

<?php include ('./includes/header-dashboard.php') ?>
<body class="body-manage-property">



<div class="container-dashboard d-flex justify-content-center mx-auto ">
  <div class="col-12 col-md-6 mt-4 ">

    <h1 class="title-2">Información personal</h1>
    <p> Esta es tu cuenta, aquí podrás modificar tus datos personales o de empresa.</p>
    <div class="d-flex justify-content-around">

      <!-- Profile images -->
        <div class="d-flex col-12 col-md-6 align-items-center">
            <img class="image-profile-xl" src="images/user.png" alt="image-profile">
            <div class="d-flex flex-column items-profile align-items-center  ">
            <span class="btn-edit ">Editar</span>
            
          </div>
        </div>
        <!-- Fin profile image -->
        <div class="row ">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
          <label class="form-check-label" for="flexRadioDefault1">Gestor</label>
          
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
          <label class="form-check-label" for="flexRadioDefault1">Propietario</label>
          
        </div>

        </div>
    </div>

   
            </div>
</div>
<div class="container-dashboard d-flex justify-content-center mx-auto   ">


<form class="col-12 col-md-6 ">
  <div class=" mt-4 mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Antonio Martinez">
  </div>
  <div class=" mt-4 mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Antonio@manualphi.com">
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

  <button type="submit" class="btn-mn-primary">Guardar</button>
</form>


<div class="">

</div>



</div>
</div>



</div>




    </div>
</div>



<!-- Final FAQ -->








      


    
</body>
</html>