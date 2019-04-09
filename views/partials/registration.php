<?php require '../controllers/data/database.php'; ?>
<?php include '../controllers/data/registration-handler.php';?>

<?php foreach($messages['error'] as $_message): ?>
    <div class="message--error">
        <?= $_message ?>
    </div>
<?php endforeach; ?>

<?php foreach($messages['success'] as $_message): ?>
    <div class="message--success">
        <?= $_message ?>
    </div>
<?php endforeach; ?>


<form class="registration" action="#" method="post">
  
  <!-- firs_name -->
  <div class="field">
    <label for="first_name">Prénom</label>
    <input type="text" name="first_name" value="<?= $_POST['first_name']?>">
  </div>

  <!-- last_name -->
  <div class="field">
    <label for="last_name">Nom</label>
    <input type="text" name="last_name" value="<?= $_POST['last_name']?>">
  </div>

  <!-- team_name -->
  <div class="field">
    <label for="team_name">Nom d'équipe</label>
    <input type="text" name="team_name" value="<?= $_POST['team_name']?>">
  </div>

  <!-- mail -->
  <div class="field">
    <label for="mail">Adresse mail</label>
    <input type="mail" name="mail" value="<?= $_POST['mail']?>">
  </div>

  <!-- password -->
  <div class="field">
    <label for="password">Mot de passe</label>
    <input type="password" name="password" value="<?= $_POST['password']?>">
  </div>

  <!-- password_confirmation  -->
  <div class="field">
    <label for="password_confirmation">Confiration de votre mot de passe</label>
    <input type="password" name="password_confirmation" value="<?= $_POST['password_confirmation']?>">
  </div>

  <!-- submit -->
  <div class="field">
    <input type="submit">
  </div>

</form>