<?php include '../views/partials/header.php';?>

<?php include '../controllers/data/get-league-info.php';?>
<?php include '../controllers/data/get-league-user-info.php';?>
<?php include '../controllers/data/get-user-info.php';?>

<?php include '../controllers/data/league-handler.php';?>


  <main class="main--league">
    <section class="section--1">
      <div class="container">
        <h2 class="title">Créer ta ligue</h2>
      </div>
    </section>

    <div class="container--message">
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
  </div>

    <section class="section--2">
      <div class="container--form">
        <h3 class="title--form">Nouvelle league</h3>
        <form action="#" method="post">
          <div class="field">
            <label class="js-label" for="league_name" data-active="<?= !empty($_POST['league_name'])?>">Nom de la ligue</label>
            <input class="input js-input" type="text" name="league_name" value="<?= $_POST['league_name']?>">
          </div>
          <p class="info">
            Saisis l’adresse mail ou le pseudo de tes amis pour les inviter à rejoindre ta league :
          </p>
          <div class="field">
            <label class="js-label" for="friend_mail_1" data-active="<?= !empty($_POST['friend_mail_1'])?>">Mail de ton ami</label>
            <input class="input js-input" type="text" name="friend_mail_1" value="<?= $_POST['friend_mail_1']?>">
          </div>
          <div class="field">
            <label class="js-label" for="friend_mail_2" data-active="<?= !empty($_POST['friend_mail_2'])?>">Mail de ton ami</label>
            <input class="input js-input" type="text" name="friend_mail_2" value="<?= $_POST['friend_mail_2']?>">
          </div>
          <div class="field--new js-new-field">
            <div class="field hidden js-field-1">
              <label class="js-label" for="friend_mail_3" data-active="<?= !empty($_POST['friend_mail_3'])?>">Mail de ton ami</label>
              <input class="input js-input" type="text" name="friend_mail_3" value="<?= $_POST['friend_mail_3']?>">
            </div>
            <div class="field hidden js-field-2">
              <label class="js-label" for="friend_mail_4" data-active="<?= !empty($_POST['friend_mail_4'])?>">Mail de ton ami</label>
              <input class="input js-input" type="text" name="friend_mail_4" value="<?= $_POST['friend_mail_4']?>">
            </div>
          </div>
          <div class="button--add js-add-friend">
            <p class="text">+ Ajouter un ami</p>
          </div>
          <div class="field">
          <input class="submit" type="submit"  name="creation_submit" value="Créer">
        </div>
        </form>
      </div>
      <div class="container--illu">
        <div class="illu--bg"></div>
      </div>
    </section>
  </main>


<?php include '../views/partials/footer.php' ?>
