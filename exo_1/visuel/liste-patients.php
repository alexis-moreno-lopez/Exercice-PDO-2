
<?php
include_once('../partials/header.php');

require_once('../database.connect.php');

$request = $database->query("SELECT * FROM patients");

$patients = $request->fetchAll();

var_dump($patients);

?>
<main class="container-md">
  <div class="d-flex justify-content-center mb-5">
<h2>Liste patient</h2>
</div>

<table>
  <caption>
    liste-patients
  </caption>
  <tr>
    <th scope="col">id</th>
    <th scope="col">lastname</th>
    <th scope="col">birthdate</th>
    <th scope="col">phone</th>
    <th scope="col">mail</th>
  </tr>
  <?php foreach($patients as $patient){ ?>
  <tr>
    <th scope="row"><?php echo $patient["id"] ?></th>
    <td><?php echo $patient["firstname"] ?></td>
    <td>7,223</td>
  </tr>

  <?php }?>
</table>
