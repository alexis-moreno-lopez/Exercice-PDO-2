
<?php
include_once('../partials/header.php');

require_once('../database.connect.php');

$request = $database->query("SELECT * FROM patients");

$patients = $request->fetchAll();



?>
<main class="container-md">
  <div class="d-flex justify-content-center mb-5">
<h2>Liste patient</h2>
</div>

<table class="d-flex justify-content-center">

  <tr>
    <th scope="col">id</th>
    <th scope="col">lastname</th>
    <th scope="col">birthdate</th>
    <th scope="col">phone</th>
    <th scope="col">mail</th>
  </tr>
  <?php foreach($patients as $patient) { ?>
  <tr>
    <th scope="row"><?php echo $patient["id"] ?></th>
    <td><?php echo $patient["firstname"] ?></td>
    <td><?php echo $patient["lastname"] ?></td>
    <td><?php echo $patient["birthdate"] ?></td>
    <td><?php echo $patient["phone"] ?></td>
    <td><?php echo $patient["mail"] ?> <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> </td>
    
  </tr>

  <?php }?>
  
</table>
