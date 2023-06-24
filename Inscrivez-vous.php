<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Institut Supérieur d'Informatique du Kef</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/isi.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <link href="assets/css/style1.css" rel="stylesheet">

  <script src="assets/js/inscricnx.js"></script>

</head>
<body>
  <div class="container">
    <div class="title">Inscrivez-vous</div>
    <div class="content">
      
      <form action="php/ajouter.php"  method="POST" >
        <div class="user-details">
          <div class="input-box">
            <span class="details">cin</span>
            <input type="text" placeholder="Tapez votre Cin" id="cin" name="cin">
            <span id="cin-error" class="error-message"></span>
          </div>
          <div class="input-box">
            <span class="details">Nom d'utilisateur</span>
            <input type="text" placeholder="Tapez votre Nom et prénom" id="np" name="np">
            <span id="np-error" class="error-message"></span>
          </div>
          <div class="input-box">
            <span class="details">Email personnel</span>
            <input type="text" placeholder="Tapez votre email" id="mp" name="mp">
            <span id="mp-error" class="error-message"></span>
          </div>
          <div class="input-box">
            <span class="details">Email Etudiant</span>
            <input type="text" placeholder="Tapez votre email Etudiant" id="me" name="me">
            <span id="me-error" class="error-message"></span>
          </div>
          <div class="input-box">
            <span class="details">Mot de passe</span>
            <input type="password" placeholder="Tapez votre mot de passe" id="pass" name="pass">
            <span id="pass-error" class="error-message"></span>
          </div>
          <div class="input-box">
            <span class="details">Confirmez le mot de passe</span>
            <input type="password" placeholder="Confirmer votre mot de passe" id="confpass" name="confpass">
            <span id="confpass-error" class="error-message"></span>
          </div>
        </div>
           <div class="Role-details">
          <span class="gender-title">Role</span>
          <div class="category">
            <select name="user">
            <option >Select Role</option>
              <option value="admin">Admin</option>
              <option value="Ens">Enseignant</option>
              <option value="Etud">Etudiant</option>
            </select>
            <br>
            <span id="role-error" class="error-message"></span>
          </div>
        </div>
        <div class="button">
          <input type="submit" onclick="return inscri()" value="Inscrivez-vous">
          <br><br>
          <input type="reset"  value="Annuler">
        </div>
        <br><br>
          <span class="button">
            Vous avez déjà un compte?
            &nbsp;
            <a href="connexion.php">Connexion</a>
          </span>
          <div class="back-button">
            <div class="arrow-wrap">
              <span class="arrow-part-1"></span>
              <span class="arrow-part-2"></span>
              <span class="arrow-part-3"></span>
            </div>
          </div>
        </div>
      </form>
      <br>
      <form>
        <a href="index.php"><img src="assets/img/back.png" height="40"></a>
        </form>
    </div>
  </div>

</body>
</html>
