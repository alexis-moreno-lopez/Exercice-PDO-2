<?php
include_once('../partials/header.php')

?>



<main class="container-md">
  <div class="d-flex justify-content-center">
  <h2>Ajout-patient</h2>
  </div>

  <section class="d-flex justify-content-center">
  <form action="../process/traitement-ajout-patient.php" method="post">
   <label>Votre nom :</label>
   <input name="lastname" id="lastname" type="text" /></p>

   <label>Votre prénom :</label>
   <input name="firstname" id="firstname" type="text" /></p>

   <label>Date de naissance :</label>
   <input name="birthdate" id="birthdate" type="date" /></p>

   <label>Votre numéro :</label>
   <input name="phone" id="phone" type="tel" pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" /></p>

   <label>Votre email :</label>
   <input name="mail" id="mail" type="email" /></p>
   

<div class="d-flex justify-content-center">
   <button type="submit">Valider</button>
  </div>
</form>
</section>
</main>

<?php

include_once('../partials/footer.php')
?>
