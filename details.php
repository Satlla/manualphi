<?php include ('./includes/header-dashboard.php') ?>
<body class="body-manage-property">

<div class="container-dashboard mx-auto mt-3 ps-2 ">
<div class="container-dashboard mx-auto  ">
        <div class=" d-flex justify-content-between align-items-center p-2 ">
            <a href="public-view.php"class="add-button"><img class="plus-icon" src="icons/chevron-left.svg" alt="">  Volver </a>
            <div class="d-flex justify-content-end">
              <button class="btn btn-share text-decoration-none" data-bs-toggle="modal" data-bs-target="#shareModal"> <img class="me-2" src="icons/upload.svg" alt=""> Compartir </button>

              <!-- Inicio Modal compartir -->


                <!-- Modal -->
                <div class="modal fade " id="shareModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bolder" id="exampleModalLabel">Comparte esta zona del alojamiento </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                       <div class=" d-flex justify-content-around">
                           <div class="cardshare">
                           <img src="icons/duplicate.svg" alt="">
                            <span class="ms-2"> Copiar</span>
                           </div>
                           <div class="cardshare">
                            <img src="icons/whatsapp.svg" width="30" alt="">
                            <span class="ms-2"> Whatsapp</span>
                           </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn-mn-primary" data-bs-dismiss="modal">Aceptar</button>
                    </div>
                    </div>
                </div>
                </div>



              <!-- Fin modal compartir -->
      
          </div>
        </div>
    </div>

    <div class="container-dashboard mx-auto  ">
        <div>
            <div class="d-flex align-items-center ms-4">

                <h1 class="my-4"> Check In</h1>            
            </div>
            <hr>
            <div class="container">
                <Primero> A continuación tienes como hacer check in en el apartamentPrimero deberás dirigirte a Calle trafalgar 99, planta baja justo entonces tendrás que hacer lo que aparece a continuación</p>
            </div>
         
        </div>
        <video class="video-details w-100 rounded" controls>
        <source src="videos/checkincasazul.mp4" type="video/mp4">
       
       
        </video>
    </div>

</div>





      


    
</body>
</html>