

<?php include ('./includes/header-dashboard.php') ?>
<body class="body-manage-property">

<div class="container-dashboard mx-auto mt-3 ">
    <h1 class="title-2">La Casa Azul</h1>
    <p>Bienvenido a la Casa Azul, aqui encontrarás un manual entero de mi alojamiento. Por favor si tienes cualquier duda dale a la pestaña contacto para poder hablar conmigo.</p>
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
<div class="container-dashboard mx-auto  ">


    <div class="navigation-menu">
        <ul>
                <li class="item-menu">
                    <a href="details.php">

                        <div>
                            <img class="item-icon" src="icons/check-in.svg" alt="">
                        </div>
                        <a class="link-item " href=""> Check In</a>
                    </a>

                </li>
                
                <li class="item-menu">
                    <div>
                        <img class="item-icon" src="icons/clima.svg" alt="">
                    </div>
                    <a class="link-item" href=""> Climatización</a>

                </li>
                <li class="item-menu">
                    <div>
                        <img class="item-icon" src="icons/keys.svg" alt="">
                    </div>
                    <a class="link-item" href=""> Check-Out</a>

                </li>
                <li class="item-menu">
                    <div>
                        <img class="item-icon" src="icons/vitroceramic.svg" alt="">
                    </div>
                    <a class="link-item" href=""> Vitrocerámica</a>

                </li>
                <li class="item-menu">
                    <div>
                        <img class="item-icon" src="icons/hidromassage.svg" alt="">
                    </div>
                    <a class="link-item" href=""> Jacuzzi</a>

                </li>
                <li class="item-menu">
                    <div>
                        <img class="item-icon" src="icons/tv-screen.svg" alt="">
                    </div>
                    <a class="link-item" href=""> Smart TV</a>

                </li>
                <li class="item-menu">
                    <div>
                        <img class="item-icon" src="icons/washingmachine.svg" alt="">
                    </div>
                    <a class="link-item" href=""> Lavadora Smart</a>

                </li>   
                <li class="item-menu">
                    <div>
                        <img class="item-icon" src="icons/yellow-card.svg" alt="">
                    </div>
                    <a class="link-item" href=""> Normas</a>

                </li>             
           
        </ul>


    </div>




</div>

  <div class="container-dashboard mx-auto  ">
      <div class=" d-flex justify-content-end align-items-center p-2 ">

            <a href="dashboard.php" class="add-button"> Reportar un Error <img class="plus-icon" src="images/plus.svg" alt=""> </a>

      </div>


  </div>

<!-- FAQ Manage dashboard -->
<div class="bg-light mx-auto mt-4 ps-2 ">

<div class="container-dashboard mx-auto mt-4 ">


    <h2 class="mt-4"> Antes de tu llegada </h2>
    <p> Descubre lo que debes saber ante de llegar al apartamento gracias a las dudas de huéspedes que han visitado antes del alojamiento. Por ejemplo <strong> ¿Cual es la mejor forma de llegar al alojamiento desde el aeropuerto?</strong> </p>

    <div class="container-dashboard mx-auto">
        <div class=" d-flex justify-content-start align-items-center p-2 ">
          <a href="dashboard.php" class="add-button"data-bs-toggle="modal" data-bs-target="#exampleModal"> Sugerir Consejo <img class="plus-icon" src="images/plus.svg" alt=""> </a>
   
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
                
                      <button class="btn-edit ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal"> Ver más</button>

          

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
                    <button class="btn-edit ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal"> Ver más</button>

                </div>
                <div class=" card-step border">
                <div class="item-header my-2"> <h5> <img class="md-2" src="icons/light-bulb.svg" alt=""> ¿Recogerme del aeropuerto? </h5></div>
                    <hr class="bg-danger border-2 border-top border-dark">
                    <p class=" mt-2"> Te contamos como ponerte en contacto con Transfers de la ciudad </p>
                    <button class="btn-edit ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal"> Ver más</button>

                </div>
                <div class=" card-step border">
                <div class="item-header my-2"> <h5> <img class="md-2" src="icons/light-bulb.svg" alt=""> Pueden enviarme un transfer al aeropuerto? </h5></div>
                    <hr class="bg-danger border-2 border-top border-dark">
                    <p class=" mt-2"> Te contamos como ponerte en contacto con Transfers de la ciudad </p>
                    <button class="btn-edit mt-2"> Ver más</button>
                </div>
                <div class=" card-step border">
                <div class="item-header my-2"> <h5> <img class="md-2" src="icons/light-bulb.svg" alt=""> ¿Recogerme del aeropuerto? </h5></div>
                    <hr class="bg-danger border-2 border-top border-dark">
                    <p class=" mt-2"> Te contamos como ponerte en contacto con Transfers de la ciudad </p>
                    <button class="btn-edit ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal"> Ver más</button>

                </div>
            </div>
           
        </div>

  
 <!-- Durante tu estancia -->
 <div class="container-dashboard mx-auto mt-4 ps-2 py-2">
    <h2> Durante tu estancia </h2>
    <p> ¡Descubre las dudas mas frecuentes de viajeros anteriores para una estancia 10!. Por ejemplo:<strong> "¿Dónde encuentro mantas adicionales? </strong></p>
    
    <div class="slider-dashboard-light">
  
            <div class="dashboard-card-steps">          
                <div class=" card-step border">
                    <div class="item-header my-2"> <h5> <img class="md-2" src="icons/light-bulb.svg" alt=""> ¿Cómo llego al alojamiento (3 formas)? </h5></div>
                    <hr class="bg-danger border-2 border-top border-dark">
                    <p class=" mt-2">  Aquí tienes las mejores formas de llegar al alojamiento según como prefieras venir</p>

                <!-- Button trigger modal -->
                <!-- Button trigger modal -->
                  <button type="button" class="btn-edit" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Ver más
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
                    <button class="btn-edit mt-2"> Ver más</button>
                </div>
                <div class=" card-step border">
                <div class="item-header my-2"> <h5> <img class="md-2" src="icons/light-bulb.svg" alt=""> ¿Recogerme del aeropuerto? </h5></div>
                    <hr class="bg-danger border-2 border-top border-dark">
                    <p class=" mt-2"> Te contamos como ponerte en contacto con Transfers de la ciudad </p>
                    <button class="btn-edit mt-2"> Ver más</button>
                </div>
                <div class=" card-step border">
                <div class="item-header my-2"> <h5> <img class="md-2" src="icons/light-bulb.svg" alt=""> Pueden enviarme un transfer al aeropuerto? </h5></div>
                    <hr class="bg-danger border-2 border-top border-dark">
                    <p class=" mt-2"> Te contamos como ponerte en contacto con Transfers de la ciudad </p>
                    <button class="btn-edit mt-2"> Ver más</button>
                </div>
                <div class=" card-step border">
                <div class="item-header my-2"> <h5> <img class="md-2" src="icons/light-bulb.svg" alt=""> ¿Recogerme del aeropuerto? </h5></div>
                    <hr class="bg-danger border-2 border-top border-dark">
                    <p class=" mt-2"> Te contamos como ponerte en contacto con Transfers de la ciudad </p>
                    <button class="btn-edit mt-2"> Ver más</button>
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

<div class="container-dashboard mx-auto ps-2 ">


    <div class="navigation-menu">
        <ul>
                <li class="item-menu">
                    <div>
                        <img class="item-icon" src="icons/key.svg" alt="">
                    </div>
                    <a class="link-item" href=""> Check in</a>

                </li>
                <li class="item-menu">
                    <div>
                        <img class="item-icon" src="icons/sun.svg" alt="">
                    </div>
                    <a class="link-item" href=""> Climatización</a>

                </li>
                <li class="item-menu">
                    <div>
                        <img class="item-icon" src="icons/key.svg" alt="">
                    </div>
                    <a class="link-item" href=""> Check-Out</a>

                </li>
                <li class="item-menu">
                    <div>
                        <img class="item-icon" src="icons/vitroceramic.svg" alt="">
                    </div>
                    <a class="link-item" href=""> Vitrocerámica</a>

                </li>
                <li class="item-menu">
                    <div>
                        <img class="item-icon" src="icons/hidromassage.svg" alt="">
                    </div>
                    <a class="link-item" href=""> Jacuzzi</a>

                </li>
                <li class="item-menu">
                    <div>
                        <img class="item-icon" src="icons/tv-screen.svg" alt="">
                    </div>
                    <a class="link-item" href=""> Smart TV</a>

                </li>          
           
        </ul>


    </div>




</div>

  <div class="container-dashboard mx-auto  ">
      <div class=" d-flex justify-content-end align-items-center p-2 ">

            <a href="dashboard.php" class="add-button"> Reportar un Error <img class="plus-icon" src="images/plus.svg" alt=""> </a>

      </div>


  </div>

<!-- FAQ Manage dashboard -->
<div class="bg-light mx-auto mt-4 ps-2 ">

<div class="container-dashboard mx-auto mt-4 ps-2 py-2">
  <div class="d-flex align-items-center justify-content-left mt-2">
    <h1 class=""> Consejos</h1>
    <img class="height:40px ms-2" src="icons/question-mark-circle.svg" alt="">
  </div>

    <h2> Antes de tu llegada </h2>
    <p> Descubre lo que debes saber ante de llegar al apartamento gracias a las dudas de huéspedes que han visitado antes del alojamiento. Por ejemplo <strong> ¿Cual es la mejor forma de llegar al alojamiento desde el aeropuerto?</strong> </p>

    <div class="container-dashboard mx-auto">
        <div class=" d-flex justify-content-start align-items-center p-2 ">
          <a href="dashboard.php" class="add-button"data-bs-toggle="modal" data-bs-target="#exampleModal"> Sugerir Consejo <img class="plus-icon" src="images/plus.svg" alt=""> </a>
   
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
                
                      <button class="btn-edit ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal"> Ver más</button>

          

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
                    <button class="btn-edit ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal"> Ver más</button>

                </div>
                <div class=" card-step border">
                <div class="item-header my-2"> <h5> <img class="md-2" src="icons/light-bulb.svg" alt=""> ¿Recogerme del aeropuerto? </h5></div>
                    <hr class="bg-danger border-2 border-top border-dark">
                    <p class=" mt-2"> Te contamos como ponerte en contacto con Transfers de la ciudad </p>
                    <button class="btn-edit ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal"> Ver más</button>

                </div>
                <div class=" card-step border">
                <div class="item-header my-2"> <h5> <img class="md-2" src="icons/light-bulb.svg" alt=""> Pueden enviarme un transfer al aeropuerto? </h5></div>
                    <hr class="bg-danger border-2 border-top border-dark">
                    <p class=" mt-2"> Te contamos como ponerte en contacto con Transfers de la ciudad </p>
                    <button class="btn-edit mt-2"> Ver más</button>
                </div>
                <div class=" card-step border">
                <div class="item-header my-2"> <h5> <img class="md-2" src="icons/light-bulb.svg" alt=""> ¿Recogerme del aeropuerto? </h5></div>
                    <hr class="bg-danger border-2 border-top border-dark">
                    <p class=" mt-2"> Te contamos como ponerte en contacto con Transfers de la ciudad </p>
                    <button class="btn-edit ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal"> Ver más</button>

                </div>
            </div>
           
        </div>

  
 <!-- Durante tu estancia -->
 <div class="container-dashboard mx-auto mt-4 ps-2 py-2">
    <h2> Durante tu estancia </h2>
    <p> ¡Descubre las dudas mas frecuentes de viajeros anteriores para una estancia 10!. Por ejemplo:<strong> "¿Dónde encuentro mantas adicionales? </strong></p>
    
    <div class="slider-dashboard-light">
  
            <div class="dashboard-card-steps">          
                <div class=" card-step border">
                    <div class="item-header my-2"> <h5> <img class="md-2" src="icons/light-bulb.svg" alt=""> ¿Cómo llego al alojamiento (3 formas)? </h5></div>
                    <hr class="bg-danger border-2 border-top border-dark">
                    <p class=" mt-2">  Aquí tienes las mejores formas de llegar al alojamiento según como prefieras venir</p>

                <!-- Button trigger modal -->
                <!-- Button trigger modal -->
                  <button type="button" class="btn-edit" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Ver más
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
                    <button class="btn-edit mt-2"> Ver más</button>
                </div>
                <div class=" card-step border">
                <div class="item-header my-2"> <h5> <img class="md-2" src="icons/light-bulb.svg" alt=""> ¿Recogerme del aeropuerto? </h5></div>
                    <hr class="bg-danger border-2 border-top border-dark">
                    <p class=" mt-2"> Te contamos como ponerte en contacto con Transfers de la ciudad </p>
                    <button class="btn-edit mt-2"> Ver más</button>
                </div>
                <div class=" card-step border">
                <div class="item-header my-2"> <h5> <img class="md-2" src="icons/light-bulb.svg" alt=""> Pueden enviarme un transfer al aeropuerto? </h5></div>
                    <hr class="bg-danger border-2 border-top border-dark">
                    <p class=" mt-2"> Te contamos como ponerte en contacto con Transfers de la ciudad </p>
                    <button class="btn-edit mt-2"> Ver más</button>
                </div>
                <div class=" card-step border">
                <div class="item-header my-2"> <h5> <img class="md-2" src="icons/light-bulb.svg" alt=""> ¿Recogerme del aeropuerto? </h5></div>
                    <hr class="bg-danger border-2 border-top border-dark">
                    <p class=" mt-2"> Te contamos como ponerte en contacto con Transfers de la ciudad </p>
                    <button class="btn-edit mt-2"> Ver más</button>
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