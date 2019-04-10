<?php include '../views/partials/home-header.php' ?>

<?php require '../controllers/data/database.php'; ?>
<?php require '../controllers/data/get-user-info.php'; ?>
<?php include '../controllers/data/registration-handler.php';?>

<main class="main--connexion">
  <section class="section--1">
    <div class="container">
      <h2 class="title">Connecte toi</h2>
    </div>
  </section>

  <section class="section--2">
    <div class="container--form container--inscription">
      <h4 class="title--form">Inscription</h4>
      <form class="registration" action="#" method="post">
        <div class="container--name">
            <!-- firs_name -->
          <div class="field">
            <label class="js-label" for="first_name">Prénom</label>
            <input class="input js-input" type="text" name="first_name" value="<?= $_POST['first_name']?>">
          </div>
          <!-- last_name -->
          <div class="field">
            <label class="js-label" for="last_name">Nom</label>
            <input class="input js-input" type="text" name="last_name" value="<?= $_POST['last_name']?>">
          </div>
        </div> 
        <!-- team_name -->
        <div class="field">
          <label class="js-label" for="team_name">Nom d'équipe</label>
          <input class="input js-input" type="text" name="team_name" value="<?= $_POST['team_name']?>">
        </div>
        <!-- mail -->
        <div class="field">
          <label class="js-label" for="mail">Adresse mail</label>
          <input class="input js-input" type="mail" name="mail" value="<?= $_POST['mail']?>">
        </div>
        <!-- password -->
        <div class="field">
          <label  class="js-label" for="password">Mot de passe</label>
          <input class="input js-input" type="password" name="password" value="<?= $_POST['password']?>">
        </div>
        <!-- password_confirmation  -->
        <div class="field">
          <label class="js-label" for="password_confirmation">Confiration de votre mot de passe</label>
          <input class="input js-input" type="password" name="password_confirmation" value="<?= $_POST['password_confirmation']?>">
        </div>
        <!-- submit -->
        <div class="field">
          <input class="submit" type="submit" name="register_submit" value="Inscription">
        </div>
      </form>
    </div>
    <div class="container--form container--connexion">
      <h4 class="title--form">Connexion</h4>
      <form action="#" method="post">
        <div class="field">
          <label  class="js-label" for="connexion_mail">Adresse mail</label>
          <input class="input js-input" type="text" name="connexion_mail" value="<?= $_POST['connexion_mail']?>">
        </div>
        
        <div class="field">
          <label  class="js-label" for="connexion_password">Mot de passe</label>
          <input class="input js-input" type="password" name="connexion_password" value="<?= $_POST['connexion_password']?>">
        </div>

        <div class="field">
          <input class="submit" type="submit"  name="connexion_submit" value="Connexion">
        </div>
      </form>
    </div>
  </section>

</main>

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

<?php include '../views/partials/footer.php' ?>