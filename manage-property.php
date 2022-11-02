<?php include ('./includes/header-dashboard.php') ?>
<body class="body-manage-property">

<div class="container-dashboard mx-auto mt-4 ps-2 ">
    <h1 class="title-2">La Casa Azul</h1>
    <p> Este es tu panel de control, desde aquí podrás agregar propiedades y generar los manuales que tus huéspedes necesitan!</p>

    <div class="container-dashboard mx-auto  ">
        <div class=" d-flex justify-content-between align-items-center ">
            <a href="dashboard.php"class="add-button"><img class="plus-icon" src="icons/chevron-left.svg" alt="">  Volver </a>
            <div class="d-flex justify-content-end">
              <a class="btn-share text-decoration-none" href="" > <img class="me-2" src="icons/upload.svg" alt=""> Compartir </a>
              <a class="btn-share text-decoration-none" href="public-view.php" > <img class="me-2" src="icons/eye.svg" alt=""> Ver</a>
          </div>
        </div>
    </div>
</div>

<div class="container-dashboard mx-auto mt-4 ">

<table class=" dashboard-table table ">
  <thead>
   
      <th class="text-center header-table" scope="col"></th>
      <th class="text-left header-table " scope="col"> ZONA </th>
      <th class="text-left header-table d-none d-md-block " scope="col"> ESTADO </th>
      <th class="text-left header-table " scope="col"> ALERTAS  </th>
      <th class="text-center header-table" scope="col">EDITAR</th>

  
  </thead>
  <tbody>
    <tr class="">
    <th scope="row"><img src="icons/key.svg" width="30px" height="20px" alt=""></th>
      <td class="table-td-title">Check in</td>
      <td class="align-items-center d-none d-md-flex "> <img class="table-td-success" src="icons/red-dot.svg" alt=""> <span class="status-zone">Desactivado</span></td>      
      <td> <button type="button" class="item-card-badge-disabled position-relative"> Errores <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">1</button></td>
      <td class="text-center"> <a href="edit-zone.php" class="btn-edit ms-2" > Editar</a></td>
      
    </tr>
    <tr>
    <th scope="row"><img src="icons/sun.svg" width="30px" height="20px" alt=""></th>
      <td class="table-td-title">Climatización</td>
      <td class="align-items-center d-none d-md-flex  "> <img class="table-td-success" src="icons/green-dot.svg" alt=""> <span class="status-zone">Activo</span></td>      
      <td> <button type="button" class="item-card-badge-active position-relative"> Correcto <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"></button></td>
      <td class="text-center"> <button class="btn-edit ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal"> Editar</button></td>

    </tr>
    <tr>
    <th scope="row"><img src="icons/wifi.svg" width="30px" height="20px" alt=""></th>
      <td class="table-td-title">Wifi</td>
      <td class="align-items-center d-none d-md-flex "> <img class="table-td-success" src="icons/green-dot.svg" alt=""> <span class="status-zone">Activo</span></td>      
      <td> <button type="button" class="item-card-badge-active position-relative"> Correcto <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"></button></td>
      <td class="text-center"> <button class="btn-edit ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal"> Editar</button></td>

    </tr>
    <tr>
      <th scope="row"><img src="icons/key.svg" width="30px" height="20px" alt=""></th>
      <td class="table-td-title">Check out</td>
      <td class="align-items-center d-none d-md-flex "> <img class="table-td-success" src="icons/green-dot.svg" alt=""> <span class="status-zone">Activo</span></td>      
      <td> <button type="button" class="item-card-badge-active position-relative"> Correcto <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"></button></td>
      <td class="text-center"> <button class="btn-edit ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal"> Editar</button></td>

    </tr>
    <tr>
    <th scope="row"><img src="icons/vitroceramic.svg" width="30px" height="20px" alt=""></th>
      <td class="table-td-title">Vitrocerámica</td>
      <td class="align-items-center d-none d-md-flex  "> <img class="table-td-success" src="icons/green-dot.svg" alt=""> <span class="status-zone">Activo</span></td>      
      <td> <button type="button" class="item-card-badge-active position-relative"> Correcto <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"></button></td>
      <td class="text-center"> <button class="btn-edit ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal"> Editar</button></td>
    </tr>
    <tr>
    <th scope="row"><img src="icons/hidromassage.svg" width="30px" height="20px" alt=""></th>
      <td class="table-td-title">Jacuzzi</td>
      <td class="align-items-center d-none d-md-flex "> <img class="table-td-success" src="icons/green-dot.svg" alt=""> <span class="status-zone">Activo</span></td>      
      <td> <button type="button" class="item-card-badge-active position-relative"> Correcto <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"></button></td>
      <td class="text-center"> <button class="btn-edit ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal"> Editar</button></td>
    </tr>
  </tbody>
</table>


</div>

  <div class="container-dashboard mx-auto  ">
      <div class=" d-flex justify-content-end align-items-center p-2 ">

            <a href="dashboard.php" class="add-button m-2"> Descargar Etiquetas <img class="plus-icon" src="icons/qrcode.svg" alt=""> </a>
            <a href="dashboard.php" class="add-button"> Añadir Zona <img class="plus-icon" src="images/plus.svg" alt=""> </a>
   
          </div>
  </div>

<!-- FAQ Manage dashboard -->
<div class="bg-light mx-auto mt-4 ps-2 ">

<div class="container-dashboard mx-auto mt-4 ps-2 py-2">
  <div class="d-flex align-items-center justify-content-left mt-2">
    <h1 class=""> Consejos</h1>
    <img class="height:40px ms-2" src="icons/question-mark-circle.svg" alt="">
  </div>

    <h2> Antes de su llegada </h2>
    <p> Explica a tus huéspedes todo lo que deberían saber antes de que lleguen a tu alojamiento. Por ejemplo <strong> ¿Cual es la mejor forma de llegar al alojamiento desde el aeropuerto?</strong> </p>

    <div class="container-dashboard mx-auto">
        <div class=" d-flex justify-content-start align-items-center p-2 ">
          <a href="dashboard.php" class="add-button"data-bs-toggle="modal" data-bs-target="#exampleModal"> Añadir Consejo <img class="plus-icon" src="images/plus.svg" alt=""> </a>
   
    </div>

    </div>
    
    <div class="slider-dashboard-light">
  
            <div class="dashboard-card-steps">          
                <div class=" card-step border">
                    <div class="item-header my-2"> <h5> <img class="md-2" src="icons/light-bulb.svg" alt=""> ¿Cómo llego al alojamiento (3 formas)? </h5></div>
                    <hr class="bg-danger border-2 border-top border-dark">
                    <p class=" mt-2">  Aquí tienes las mejores formas de llegar al alojamiento según como prefieras venir</p>

                <!-- Button trigger modal -->
                <!-- Button trigger modal -->
                
                      <button class="btn-edit ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal"> Editar</button>

          

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        
                        <div class="modal-header">
                          <h5 class="modal-title w-75 fw-bold" id="exampleModalLabel">¿Sobre qué es tu consejo?</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                        <label for="exampleFormControlInput1" class="form-label">Dale un título a tu consejo</label>       
                        <input class="input-form w-100 " type="text" placeholder="Por ejemplo: ¿Cual es la mejor manera de llegar al alojamiento?">
                        <label for="exampleFormControlInput1" class="form-label mt-2">Escribe un slogan sobre el consejo</label>

                        <textarea class="input-form w-100" placeholder="Por ejemplo: ' Descubre la mejor manera de llegar al alojamiento '" name="" id="" cols="30" rows="2"></textarea>

                        <label for="exampleFormControlInput1" class="form-label mt-2">Escribe una descripción del FAQ</label>
                        <textarea class="input-form w-100" name="" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn-edit me-4" data-bs-dismiss="modal">Eliminar</button>
                        <button type="button" class="btn-mn-primary ml-4" data-bs-dismiss="modal">Guardar</button>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                
                <!-- Modal -->
                
                    
                    </div>
                </div>
                <div class=" card-step border">
                <div class="item-header my-2"> <h5> <img class="md-2" src="icons/light-bulb.svg" alt=""> ¿Dónde puedo dejar mis maletas antes del check in? </h5></div>
                    <hr class="bg-danger border-2 border-top border-dark">

                    <p class=" mt-2"> Descubre como poder disfrutar de tu viaje mucho antes</p>
                    <button class="btn-edit ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal"> Editar</button>
                </div>
                <div class=" card-step border">
                <div class="item-header my-2"> <h5> <img class="md-2" src="icons/light-bulb.svg" alt=""> ¿Recogerme del aeropuerto? </h5></div>
                    <hr class="bg-danger border-2 border-top border-dark">
                    <p class=" mt-2"> Te contamos como ponerte en contacto con Transfers de la ciudad </p>
                    <button class="btn-edit ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal"> Editar</button>

                </div>
                <div class=" card-step border">
                <div class="item-header my-2"> <h5> <img class="md-2" src="icons/light-bulb.svg" alt=""> Pueden enviarme un transfer al aeropuerto? </h5></div>
                    <hr class="bg-danger border-2 border-top border-dark">
                    <p class=" mt-2"> Te contamos como ponerte en contacto con Transfers de la ciudad </p>
                    <button class="btn-edit mt-2"> Editar</button>
                </div>
                <div class=" card-step border">
                <div class="item-header my-2"> <h5> <img class="md-2" src="icons/light-bulb.svg" alt=""> ¿Recogerme del aeropuerto? </h5></div>
                    <hr class="bg-danger border-2 border-top border-dark">
                    <p class=" mt-2"> Te contamos como ponerte en contacto con Transfers de la ciudad </p>
                    <button class="btn-edit ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal"> Editar</button>

                </div>
            </div>
           
        </div>

  
 <!-- Durante tu estancia -->
 <div class="container-dashboard mx-auto mt-4 ps-2 py-2">
    <h2> Durante su estancia </h2>
    <p> Resuelve las dudas mas frecuente de tus huéspedes durante la estancia en tu alojamiento. Por ejemplo <strong>"¿Dónde encuentro mantas adicionales? </strong></p>
    
    <div class="slider-dashboard-light">
  
            <div class="dashboard-card-steps">          
                <div class=" card-step border">
                    <div class="item-header my-2"> <h5> <img class="md-2" src="icons/light-bulb.svg" alt=""> ¿Cómo llego al alojamiento (3 formas)? </h5></div>
                    <hr class="bg-danger border-2 border-top border-dark">
                    <p class=" mt-2">  Aquí tienes las mejores formas de llegar al alojamiento según como prefieras venir</p>

                <!-- Button trigger modal -->
                <!-- Button trigger modal -->
                  <button type="button" class="btn-edit" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Editar
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">¿Cómo llego al alojamiento?</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        Si llegas desde el aeropuerto deberás coger el autobús C-6 hasta la Avda Alfonso X el Sabio.
                        Después deberás cruzar la calle y coger el autobús 01 hasta la parada Maestro Alonso (Rafelet).
                        Desde ahí puedes caminar durante un par de minutos hasta el apartamento en Calle Músico Pau Casals 16.

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn-mn-primary" data-bs-dismiss="modal">Cerrar</button>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                
                <!-- Modal -->
                
                    
                    </div>
                </div>
                <div class=" card-step border">
                <div class="item-header my-2"> <h5> <img class="md-2" src="icons/light-bulb.svg" alt=""> ¿Dónde puedo dejar mis maletas antes del check in? </h5></div>
                    <hr class="bg-danger border-2 border-top border-dark">

                    <p class=" mt-2"> Descubre como poder disfrutar de tu viaje mucho antes</p>
                    <button class="btn-edit mt-2"> Editar</button>
                </div>
                <div class=" card-step border">
                <div class="item-header my-2"> <h5> <img class="md-2" src="icons/light-bulb.svg" alt=""> ¿Recogerme del aeropuerto? </h5></div>
                    <hr class="bg-danger border-2 border-top border-dark">
                    <p class=" mt-2"> Te contamos como ponerte en contacto con Transfers de la ciudad </p>
                    <button class="btn-edit mt-2"> Editar</button>
                </div>
                <div class=" card-step border">
                <div class="item-header my-2"> <h5> <img class="md-2" src="icons/light-bulb.svg" alt=""> Pueden enviarme un transfer al aeropuerto? </h5></div>
                    <hr class="bg-danger border-2 border-top border-dark">
                    <p class=" mt-2"> Te contamos como ponerte en contacto con Transfers de la ciudad </p>
                    <button class="btn-edit mt-2"> Editar</button>
                </div>
                <div class=" card-step border">
                <div class="item-header my-2"> <h5> <img class="md-2" src="icons/light-bulb.svg" alt=""> ¿Recogerme del aeropuerto? </h5></div>
                    <hr class="bg-danger border-2 border-top border-dark">
                    <p class=" mt-2"> Te contamos como ponerte en contacto con Transfers de la ciudad </p>
                    <button class="btn-edit mt-2"> Editar</button>
                </div>
               
            </div>
           
        </div>

    
 
    </div>

    <!-- Fin durante tu estancia -->
    </div>
</div>



<!-- Final FAQ -->








      


    
</body>
</html>