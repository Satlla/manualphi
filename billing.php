

<?php include ('./includes/header-dashboard.php') ?>
<body class="body-manage-property">



<div class="container-dashboard d-flex justify-content-center mx-auto ">
    <div class="col-12 col-md-6 mt-4 ">

        <h1 class="title-2">Facturación</h1>
        <p> Aqui podrás editar y modificar tus datos de empresa, ver tus facturas, planes y estado de cuentas.</p>
        <div">
            <h5> Tu plan actual es: <strong> Anual HOUSING PREMIUM</strong></h5>
            <h5> Propiedades <strong> 6</strong></h5>
            <button class="btn-mn-primary mt-4 "> Cambiar Plan</button>
           
        </div>

</div>
</div>
<div class="container-dashboard d-flex justify-content-center mx-auto   ">


<form class="col-12 col-md-6 ">
  <div class=" mt-4 mb-3">
    <h4 class="title-2"> Detalles de Facturación</h4>
    <label for="comercial-name" class="form-label">Nombre Comercial</label>
    <input type="email" class="form-control" id="comercial-name" aria-describedby="emailHelp" placeholder="Manualphi S.L">
  </div>
  <div class=" mt-4 mb-3">
    <label for="billing-address" class="form-label">Dirección de Facturación</label>
    <input type="email" class="form-control" id="billing-address" aria-describedby="emailHelp" placeholder="Calle Arjona 23">
    <div id="emailHelp" class="form-text"> Nunca compartiremos tu dirección de correo electrónico con nadie.</div>
  </div>
  <div class="mb-3">
    <label for="cif" class="form-label">Cif</label>
    <input type="text" class="form-control" id="cif">
  </div>
  <div class="mb-3">
    <label for="country" class="form-label">País</label>
    <input type="text" class="form-control" id="country">
  </div>
  <div class="mb-3">
    <label for="city" class="form-label">City</label>
    <input type="text" class="form-control" id="city">
  </div>
  <div class="mb-3">
    <label for="code" class="form-label">ZIP Code</label>
    <input type="text" class="form-control" id="code">
  </div>
  <div class="mb-3">
    <label for="vat" class="form-label">Tipo de VAT</label>
    <input type="text" class="form-control" id="vat">
  </div>


  <button type="submit" class="btn-mn-primary">Guardar Información Facturación</button>
</form>




</div>


</div>



</div>




    </div>
</div>



<div class="container-dashboard d-flex justify-content-center mx-auto ">
    <div class="col-12 col-md-6 mt-4 ">

        <h1 class="title-2">Historial de Transacciones</h1>
        <p> Aqui podrás editar y modificar tus datos de empresa, ver tus facturas, planes y estado de cuentas.</p>
        <div class="container-dashboard mx-auto mt-4 ">

<table class=" dashboard-table table ">
  <thead>
   
      <th class="text-left header-table" scope="col">Fecha</th>
      <th class="text-left header-table d-none d-md-block " scope="col"> Coste </th>
      <th class="text-center header-table " scope="col"> Descargar  </th>

  
  </thead>
  <tbody>
    <tr class="">
        <td class="table-td-title">14/02/2021</td>
        <td class="align-items-center d-none d-md-flex "> 12,99€</td>      
        <td class="text-center"> <button class="btn-edit ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal"> Descargar</button></td>
        
      </tr>
      <tr class="">
      <td class="table-td-title">14/02/2021</td>
      <td class="align-items-center d-none d-md-flex "> 12,99€</td>      
      <td class="text-center"> <button class="btn-edit ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal"> Descargar</button></td>
      
    </tr>
    
  </tbody>
</table>


</div>


</div>
</div>








      


    
</body>
</html>