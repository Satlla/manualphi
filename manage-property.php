<?php include ('./includes/header-dashboard.php') ?>
<body class="body-manage-property">

<div class="container-dashboard mx-auto mt-4 ps-2 ">
    <h1 class="title-2">La Casa Azul</h1>
    <p> Este es tu panel de control, desde aquí podrás agregar propiedades y generar los manuales que tus huéspedes necesitan!</p>
    <div class="container-dashboard mx-auto mt-4  ">
        <div class=" d-flex justify-content-between align-items-center p-2 ">
            <a href="dashboard.php"class="add-button"><img class="plus-icon" src="icons/chevron-left.svg" alt="">  Volver </a>
            <a class="add-button"> Añadir Zona <img class="plus-icon" src="images/plus.svg" alt=""> </a>


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
    <th scope="row"><img src="images/img.png" width="30px" height="20px" alt=""></th>
      <td class="table-td-title">Check in</td>
      <td class="align-items-center d-none d-md-flex "> <img class="table-td-success" src="icons/red-dot.svg" alt=""> <span class="status-zone">Desactivado</span></td>      
      <td> <button type="button" class="item-card-badge-disabled position-relative"> Errores <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">1</button></td>
      <td class="text-center"> <img src="icons/pencil-alt.svg" alt=""></td>
      <td class="text-center d-none d-md-block"> <img src="icons/x.svg" alt=""></td>

      
    </tr>
    <tr>
    <th scope="row"><img src="images/img.png" width="30px" height="20px" alt=""></th>
      <td class="table-td-title">Climatización</td>
      <td class="align-items-center d-none d-md-flex  "> <img class="table-td-success" src="icons/green-dot.svg" alt=""> <span class="status-zone">Activo</span></td>      
      <td> <button type="button" class="item-card-badge-active position-relative"> Correcto <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"></button></td>
      <td class="text-center"> <img src="icons/pencil-alt.svg" alt=""></td>
      <td class="text-center d-none d-md-block"> <img src="icons/x.svg" alt=""></td>

    </tr>
    <tr>
    <th scope="row"><img src="images/img.png" width="30px" height="20px" alt=""></th>
      <td class="table-td-title">Vitrocerámica</td>
      <td class="align-items-center d-none d-md-flex "> <img class="table-td-success" src="icons/green-dot.svg" alt=""> <span class="status-zone">Activo</span></td>      
      <td> <button type="button" class="item-card-badge-active position-relative"> Correcto <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"></button></td>
      <td class="text-center"> <img src="icons/pencil-alt.svg" alt=""></td>
      <td class="text-center d-none d-md-block"> <img src="icons/x.svg" alt=""></td>

    </tr>
    <tr>
      <th scope="row"><img src="images/img.png" width="30px" height="20px" alt=""></th>
      <td class="table-td-title">Check out</td>
      <td class="align-items-center d-none d-md-flex "> <img class="table-td-success" src="icons/green-dot.svg" alt=""> <span class="status-zone">Activo</span></td>      
      <td> <button type="button" class="item-card-badge-active position-relative"> Correcto <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"></button></td>
      <td class="text-center"> <img src="icons/pencil-alt.svg" alt=""></td>
      <td class="text-center d-none d-md-block"> <img src="icons/x.svg" alt=""></td>

    </tr>
    <tr>
    <th scope="row"><img src="images/img.png" width="30px" height="20px" alt=""></th>
      <td class="table-td-title">Chimenea</td>
      <td class="align-items-center d-none d-md-flex  "> <img class="table-td-success" src="icons/green-dot.svg" alt=""> <span class="status-zone">Activo</span></td>      
      <td> <button type="button" class="item-card-badge-active position-relative"> Correcto <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"></button></td>
      <td class="text-center"> <img src="icons/pencil-alt.svg" alt=""></td>
      <td class="text-center d-none d-md-block"> <img src="icons/x.svg" alt=""></td>
    </tr>
    <tr>
    <th scope="row"><img src="images/img.png" width="30px" height="20px" alt=""></th>
      <td class="table-td-title">Cafetera</td>
      <td class="align-items-center d-none d-md-flex "> <img class="table-td-success" src="icons/green-dot.svg" alt=""> <span class="status-zone">Activo</span></td>      
      <td> <button type="button" class="item-card-badge-active position-relative"> Correcto <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"></button></td>
      <td class="text-center"> <img src="icons/pencil-alt.svg" alt=""></td>
      <td class="text-center d-none d-md-block"> <img src="icons/x.svg" alt=""></td>
    </tr>
  </tbody>
</table>


</div>







      


    
</body>
</html>