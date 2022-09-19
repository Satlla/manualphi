<?php include ('./includes/header-dashboard.php') ?>

<div class="container-dashboard mx-auto mt-4 ps-2 ">
    <h1 class="title-2">Hola Barriot</h1>
    <p> Este es tu panel de control, desde aquí podrás agregar propiedades y generar los manuales que tus huéspedes necesitan!</p>
    <div class="container-dashboard mx-auto mt-4  ">
        <div class=" d-flex justify-content-between align-items-center p-2 ">
            <h6> Tus propiedades: 4 </h6>
            <button class="add-button"> Añadir Propiedad <img class="plus-icon" src="images/plus.svg" alt=""> </button>


        </div>

    </div>
</div>


<!-- Bloque tarjetas del Dashboard -->

     <div class="wrapper d-flex justify-content-center ">
        
        <div class="row justify-content-left  ">

        <div class="col-12 col-sm-6 col-md-6 col-xl-4 p-2">
                <div class="item-card ">
                    

                    <div class="item-card-header">
                        <span class=" ">Hace 2 días</span>
                        <span class="item-card-badge-active"> Activo</span>
                    </div>
                    
                    <div class="item-card-body d-flex justify-content-left p-2">
                            <div class="item- d-flex justify-content-between container-lg">
                                <div>
                                    <h6 class="text-break"> La Casa Azul </h6>
                                    <p class="m-0"> Vistas: <strong> 3498</strong></p>
                                    <p class=""> Problemas: <strong>3</strong></p>
                                    <a class="btn-mn-primary" href="manage-property.php"> Gestionar</a>
                                </div>

                                <div>
                                    <img class="item-card-image" src="images/img.png" alt="img-apartment">
                                </div>
                            </div>
                        

                    </div>
                </div>

        </div>
        <div class="col-12 col-sm-6 col-md-6 col-xl-4 p-2">
                <div class="item-card ">
                    

                    <div class="item-card-header">
                        <span class=" ">Hace 2 días</span>
                        <span class="item-card-badge-active"> Activo</span>
                    </div>
                    
                    <div class="item-card-body d-flex justify-content-left p-2">
                            <div class="item- d-flex justify-content-between container-lg">
                                <div>
                                    <h6 class="text-break"> La Casa Azul </h6>
                                    <p class="m-0"> Vistas: <strong> 3498</strong></p>
                                    <p class=""> Problemas: <strong>3</strong></p>
                                    <a class="btn-mn-primary" href="manage-property.php"> Gestionar</a>
                                </div>

                                <div>
                                    <img class="item-card-image" src="images/img.png" alt="img-apartment">
                                </div>
                            </div>
                        

                    </div>
                </div>

        </div>

        <div class="col-12 col-sm-6 col-md-6 col-xl-4  p-2">
                <div class="item-card ">
                    

                    <div class="item-card-header">
                        <span class=" ">Hace 2 días</span>
                        <span class="item-card-badge-active"> Activo</span>
                    </div>
                    
                    <div class="item-card-body d-flex justify-content-left p-2">
                            <div class="item- d-flex justify-content-between container-lg">
                                <div>
                                    <h6 class="text-break"> La Casa Azul </h6>
                                    <p class="m-0"> Vistas: <strong> 3498</strong></p>
                                    <p class=""> Problemas: <strong>3</strong></p>
                                    <a class="btn-mn-primary" href="manage-property.php"> Gestionar</a>
                                </div>

                                <div>
                                    <img class="item-card-image" src="images/img.png" alt="img-apartment">
                                </div>
                            </div>
                        

                    </div>
                </div>

        </div>

        <div class="col-12 col-sm-6 col-md-6 col-xl-4 p-2">
                <div class="item-card ">
                    

                    <div class="item-card-header">
                        <span class=" ">Hace 2 días</span>
                        <span class="item-card-badge-disabled"> Desactivado</span>
                    </div>
                    
                    <div class="item-card-body d-flex justify-content-left p-2">
                            <div class="item- d-flex justify-content-between container-lg">
                                <div>
                                    <h6 class="text-break"> La Casa Azul </h6>
                                    <p class="m-0"> Vistas: <strong> 3498</strong></p>
                                    <p class=""> Problemas: <strong>3</strong></p>
                                    <a class="btn-mn-primary" href=""> Gestionar</a>
                                </div>

                                <div>
                                    <img class="item-card-image" src="images/img.png" alt="img-apartment">
                                </div>
                            </div>
                        

                    </div>
                </div>

        </div>
 

           </div>    
       
     </div>

     <!-- Termina bloque tarjetas Dashboard -->

     <!-- Comienza bloque añadir propiedad -->

    <div class="container-dashboard mx-auto mt-4 ps-2 ">
    <button class="add-button mb-4"> Añadir Propiedad <img class="plus-icon" src="images/plus.svg" alt=""> </button>

    </div>

    <!-- Termina bloque añadir propiedad -->

<!-- Empieza tus próximos pasos Dashboard-->

<div class="bg-light mx-auto mt-4 ps-2 ">

<div class="container-dashboard mx-auto mt-4 ps-2 py-2">
    <h2> Tus próximos pasos</h2>


        <div class="slider-dashboard-light">
  
            <div class="dashboard-card-steps">
                
                
                <div class=" card-step border">
                    <div class="item-header my-2"> <h5> Añade tu check in  </h5></div>
                    <hr class="bg-danger border-2 border-top border-dark">
                    <p class=" mt-2"> Danos mas detalles de como entrar a tu alojamiento, si tienes una caja de seguridad, o si por el contrario los recibirás personalmente</p>

                <!-- Button trigger modal -->
                <button type="button" class="btn-rounded" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Mas información
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">A</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        Manualphi entiende que hay determinadas zonas obligatorias para crear tu manual, Check in es una de ellas, dirígete a tu anuncio, y en la pestaña Check in podrás configurar como entran tus huéspedes.
                        <a href=""> Gestionar Check in</a>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn-rounded" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn-mn-primary">Aceptar</button>
                        </div>
                        </div>
                    </div>
                    </div>
                    
                    </div>
                </div>
                <div class=" card-step border">
                    <div class="item-header my-2"> <h5> Añade tu climatización  </h5></div>
                    <hr class="bg-danger border-2 border-top border-dark">

                    <p class=" mt-2"> Explica a tus huéspedes como funciona tu aire acondicionado o calefacción</p>
                    <button class="btn-rounded mt-2"> Añade información</button>
                </div>
                <div class=" card-step border">
                    <div class="item-header my-2"> <h5> Añade tu check out  </h5></div>
                    <hr class="bg-danger border-2 border-top border-dark">
                    <p class=" mt-2"> Dile a tus huéspedes como deben abandonar el alojamiento, si tienen que dejar las llaves en algún lugar o apagar algo en concreto</p>
                    <button class="btn-rounded mt-2"> Añade información</button>
                </div>
               


            </div>
           
        </div>

    
 
</div>
</div>

    <!-- Termina el bloque tus próximos pasos Dashboard -->



    <!-- Bloque slider consejos para tu anuncio -->

    <div class=" mx-auto mt-4 ps-2 border bg-dark ">

    <div class="container-dashboard mx-auto mt-4 ps-2 bg-dark">
        <h2 class="text-light"> Consejos y novedades para anfitriones</h2>


            <div class="slider-dashboard-dark">
      
                <div class="item">
                    <img class="img-fluid  " src="images/image-banner.jpg" alt="">
                    
                    <div class="item-text">
                        <div class="item-header my-2"> <h4> Crea tu primer Manualphi</h4></div>
                        <p class=" mt-2"> Aprender a crear un manual para tus huéspedes en esta sencilla guía y consigue automatizar tus tareas de forma fácil y sencilla! Crea el manual una vez, y disfruta de el para toda la vida!</p>
                        <button class="btn-rounded-bg-white mt-2"> Ver más </button>
                    </div>

                </div>
                <div class="item">
                    <img class="img-fluid  " src="images/image-banner.jpg" alt="">
                    
                    <div class="item-text">
                        <div class="item-header my-2"> <h4> Como enviar tu manual a un huésped</h4></div>
                        <p class=" mt-2"> Tus huéspedes no podrán ver el manual de tu alojamiento hasta que les envíes el enlace o imprimas los códigos QR, descubre como enviárselo!</p>
                        <button class="btn-rounded-bg-white mt-2"> Ver más </button>
                    </div>

                </div>
                <div class="item">
                    <img class="img-fluid  " src="images/image-banner.jpg" alt="">
                    
                    <div class="item-text">
                        <div class="item-header my-2"> <h4> Tu primer Manualphi</h4></div>
                        <p class=" mt-2"> Aprender a crear un manual para tus huéspedes en esta sencilla guía y consigue automatizar tus tareas de forma fácil y sencilla!</p>
                        <button class="btn-rounded-bg-white mt-2"> Ver más </button>
                    </div>

                </div>
                <div class="item">
                    <img class="img-fluid  " src="images/image-banner.jpg" alt="">
                    
                    <div class="item-text">
                        <div class="item-header my-2"> <h4> Tu primer Manualphi</h4></div>
                        <p class=" mt-2"> Aprender a crear un manual para tus huéspedes en esta sencilla guía y consigue automatizar tus tareas de forma fácil y sencilla!</p>
                        <button class="btn-rounded-bg-white mt-2"> Ver más </button>
                    </div>

                </div>
            </div>

        
     
    </div>
    </div>


    <!-- Acaba Bloque consejos para tu anuncio -->





      


    
</body>
</html>