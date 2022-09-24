<?php include ('./includes/header-dashboard.php') ?>
<body class="body-manage-property">

<div class="container-dashboard mx-auto mt-4 ps-2 ">
    <h1 class="title-2">La Casa Azul</h1>
    <p> Este es tu panel de control, desde aquí podrás agregar propiedades y generar los manuales que tus huéspedes necesitan!</p>
    <div class="container-dashboard mx-auto mt-4  ">
        <div class=" d-flex justify-content-between align-items-center p-2 ">
            <a href="dashboard.php"class="add-button"><img class="plus-icon" src="icons/chevron-left.svg" alt="">  Volver </a>
            <div class="d-flex align-items-center justify-content-between ">
              <a class="btn-purple me-4" href="" > <img src="icons/eye.svg" alt=""></a>
              <a class="add-button"> Añadir Zona <img class="plus-icon" src="images/plus.svg" alt=""> </a>
            </div>


        </div>

    </div>
</div>

<div class="container-dashboard mx-auto mt-4 ps-2 ">

<table class=" dashboard-table table ">
  <thead>
   
      <th class="text-center header-table" scope="col"></th>
      <th class="text-left header-table " scope="col"> ZONA </th>
      <th class="text-left header-table d-none d-md-block " scope="col"> ESTADO </th>
      <th class="text-left header-table " scope="col"> ALERTAS  </th>
      <th class="text-center header-table" scope="col">EDITAR</th>
      <th class="text-center header-table d-none d-md-block" scope="col">ELIMINAR</th>

  
  </thead>
  <tbody>
    <tr class="">
    <th scope="row"><img src="icons/checkin.svg" width="30px" height="20px" alt=""></th>
      <td class="table-td-title">Check in</td>
      <td class="align-items-center d-none d-md-flex "> <img class="table-td-success" src="icons/red-dot.svg" alt=""> <span class="status-zone">Desactivado</span></td>      
      <td> <button type="button" class="item-card-badge-disabled position-relative"> Errores <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">1</button></td>
      <td class="text-center"> <img src="icons/pencil-alt.svg" alt=""></td>
      <td class="text-center d-none d-md-block"> <img src="icons/x.svg" alt=""></td>

      
    </tr>
    <tr>
    <th scope="row"><img src="icons/sun.svg" width="30px" height="20px" alt=""></th>
      <td class="table-td-title">Climatización</td>
      <td class="align-items-center d-none d-md-flex  "> <img class="table-td-success" src="icons/green-dot.svg" alt=""> <span class="status-zone">Activo</span></td>      
      <td> <button type="button" class="item-card-badge-active position-relative"> Correcto <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"></button></td>
      <td class="text-center"> <img src="icons/pencil-alt.svg" alt=""></td>
      <td class="text-center d-none d-md-block"> <img src="icons/x.svg" alt=""></td>

    </tr>
    <tr>
    <th scope="row"><img src="icons/wifi.svg" width="30px" height="20px" alt=""></th>
      <td class="table-td-title">Wifi</td>
      <td class="align-items-center d-none d-md-flex "> <img class="table-td-success" src="icons/green-dot.svg" alt=""> <span class="status-zone">Activo</span></td>      
      <td> <button type="button" class="item-card-badge-active position-relative"> Correcto <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"></button></td>
      <td class="text-center"> <img src="icons/pencil-alt.svg" alt=""></td>
      <td class="text-center d-none d-md-block"> <img src="icons/x.svg" alt=""></td>

    </tr>
    <tr>
      <th scope="row"><img src="icons/key.svg" width="30px" height="20px" alt=""></th>
      <td class="table-td-title">Check out</td>
      <td class="align-items-center d-none d-md-flex "> <img class="table-td-success" src="icons/green-dot.svg" alt=""> <span class="status-zone">Activo</span></td>      
      <td> <button type="button" class="item-card-badge-active position-relative"> Correcto <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"></button></td>
      <td class="text-center"> <img src="icons/pencil-alt.svg" alt=""></td>
      <td class="text-center d-none d-md-block"> <img src="icons/x.svg" alt=""></td>

    </tr>
    <tr>
    <th scope="row"><img src="icons/vitroceramic.svg" width="30px" height="20px" alt=""></th>
      <td class="table-td-title">Vitrocerámica</td>
      <td class="align-items-center d-none d-md-flex  "> <img class="table-td-success" src="icons/green-dot.svg" alt=""> <span class="status-zone">Activo</span></td>      
      <td> <button type="button" class="item-card-badge-active position-relative"> Correcto <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"></button></td>
      <td class="text-center"> <img src="icons/pencil-alt.svg" alt=""></td>
      <td class="text-center d-none d-md-block"> <img src="icons/x.svg" alt=""></td>
    </tr>
    <tr>
    <th scope="row"><img src="icons/hidromassage.svg" width="30px" height="20px" alt=""></th>
      <td class="table-td-title">Jacuzzi</td>
      <td class="align-items-center d-none d-md-flex "> <img class="table-td-success" src="icons/green-dot.svg" alt=""> <span class="status-zone">Activo</span></td>      
      <td> <button type="button" class="item-card-badge-active position-relative"> Correcto <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"></button></td>
      <td class="text-center"> <img src="icons/pencil-alt.svg" alt=""></td>
      <td class="text-center d-none d-md-block"> <img src="icons/x.svg" alt=""></td>
    </tr>
  </tbody>
</table>


</div>

<!-- FAQ Manage dashboard -->
<div class="bg-light mx-auto mt-4 ps-2 ">

<div class="container-dashboard mx-auto mt-4 ps-2 py-2">
    <h2> Antes de llegar</h2>
    <p> Preguntas más comunes de los viajeros que los viajeros tienen antes de llegar a nuestro alojamiento</p>
    
    <div class="slider-dashboard-light">
  
            <div class="dashboard-card-steps">          
                <div class=" card-step border">
                    <div class="item-header my-2"> <h5> <img class="md-2" src="icons/light-bulb.svg" alt=""> ¿Cómo llego al alojamiento (3 formas)? </h5></div>
                    <hr class="bg-danger border-2 border-top border-dark">
                    <p class=" mt-2">  Aquí tienes las mejores formas de llegar al alojamiento según como prefieras venir</p>

                <!-- Button trigger modal -->
                <!-- Button trigger modal -->
                  <button type="button" class="btn-rounded" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Saber Cómo
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
                    <button class="btn-rounded mt-2"> Saber Cómo</button>
                </div>
                <div class=" card-step border">
                <div class="item-header my-2"> <h5> <img class="md-2" src="icons/light-bulb.svg" alt=""> ¿Recogerme del aeropuerto? </h5></div>
                    <hr class="bg-danger border-2 border-top border-dark">
                    <p class=" mt-2"> Te contamos como ponerte en contacto con Transfers de la ciudad </p>
                    <button class="btn-rounded mt-2"> Saber Cómo</button>
                </div>
                <div class=" card-step border">
                <div class="item-header my-2"> <h5> <img class="md-2" src="icons/light-bulb.svg" alt=""> Pueden enviarme un transfer al aeropuerto? </h5></div>
                    <hr class="bg-danger border-2 border-top border-dark">
                    <p class=" mt-2"> Te contamos como ponerte en contacto con Transfers de la ciudad </p>
                    <button class="btn-rounded mt-2"> Saber Cómo</button>
                </div>
                <div class=" card-step border">
                <div class="item-header my-2"> <h5> <img class="md-2" src="icons/light-bulb.svg" alt=""> ¿Recogerme del aeropuerto? </h5></div>
                    <hr class="bg-danger border-2 border-top border-dark">
                    <p class=" mt-2"> Te contamos como ponerte en contacto con Transfers de la ciudad </p>
                    <button class="btn-rounded mt-2"> Saber Cómo</button>
                </div>
               


            </div>
           
        </div>

  
 <!-- Durante tu estancia -->
 <div class="container-dashboard mx-auto mt-4 ps-2 py-2">
    <h2> Durante tu estancia </h2>
    <p> Preguntas más comunes de los viajeros que los viajeros tienen antes de llegar a nuestro alojamiento</p>
    
    <div class="slider-dashboard-light">
  
            <div class="dashboard-card-steps">          
                <div class=" card-step border">
                    <div class="item-header my-2"> <h5> <img class="md-2" src="icons/light-bulb.svg" alt=""> ¿Cómo llego al alojamiento (3 formas)? </h5></div>
                    <hr class="bg-danger border-2 border-top border-dark">
                    <p class=" mt-2">  Aquí tienes las mejores formas de llegar al alojamiento según como prefieras venir</p>

                <!-- Button trigger modal -->
                <!-- Button trigger modal -->
                  <button type="button" class="btn-rounded" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Saber Cómo
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
                    <button class="btn-rounded mt-2"> Saber Cómo</button>
                </div>
                <div class=" card-step border">
                <div class="item-header my-2"> <h5> <img class="md-2" src="icons/light-bulb.svg" alt=""> ¿Recogerme del aeropuerto? </h5></div>
                    <hr class="bg-danger border-2 border-top border-dark">
                    <p class=" mt-2"> Te contamos como ponerte en contacto con Transfers de la ciudad </p>
                    <button class="btn-rounded mt-2"> Saber Cómo</button>
                </div>
                <div class=" card-step border">
                <div class="item-header my-2"> <h5> <img class="md-2" src="icons/light-bulb.svg" alt=""> Pueden enviarme un transfer al aeropuerto? </h5></div>
                    <hr class="bg-danger border-2 border-top border-dark">
                    <p class=" mt-2"> Te contamos como ponerte en contacto con Transfers de la ciudad </p>
                    <button class="btn-rounded mt-2"> Saber Cómo</button>
                </div>
                <div class=" card-step border">
                <div class="item-header my-2"> <h5> <img class="md-2" src="icons/light-bulb.svg" alt=""> ¿Recogerme del aeropuerto? </h5></div>
                    <hr class="bg-danger border-2 border-top border-dark">
                    <p class=" mt-2"> Te contamos como ponerte en contacto con Transfers de la ciudad </p>
                    <button class="btn-rounded mt-2"> Saber Cómo</button>
                </div>
               


            </div>
           
        </div>

    
 
</div>

 <!-- Fin durante tu estancia -->
</div>


<p>holi</p>

</div>
 -->


<!-- Final FAQ -->








      


    
</body>
</html>