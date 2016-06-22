<?php
require_once 'func.php';

$errors = array();
if (!empty($_POST)){
    // Full Name field
        if (empty($_POST['fullName'])){
            $errors['fullName'] = "Vous n'avez pas entre votre nom et prenom";
        }

    // email field
        if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $errors['email'] = "Vous n'avez pas entre votre email";
        }

    // password field
        if (empty($_POST['password']) || $_POST['password'] != $_POST['re-password']){
            $errors['password'] = "Votre mot de pass n'est pas valide :(";
        }

    if (empty($errors)){
        require_once "../App/Database.php";
        $req = $DB->prepare('INSERT INTO users SET fullName = ?, email = ?, password = ?');
        $result = $req->execute([$_POST['fullName'], $_POST['email'], $_POST['password']]);
        debug($result);
    }
}
debug($errors);
?>
<h2>S'incrire</h2>
<br>
<form action="" method="post">
    <div class="form-group">
        <label>Type your full name</label>
        <br>
        <input type="text" name="fullName" class="form-group">
    </div>

    <div class="form-group">
        <label>Type your email</label> <br>
        <input type="email" name="email" class="form-group">
    </div>
    <div class="form-group">
        <label>Type your password</label> <br>
        <input type="password" name="password" class="form-group">
    </div>
    <div class="form-group">
        <label>re-Type your password</label> <br>
        <input type="password" name="re-password" class="form-group">
    </div>
    <button class="btn btn-primary">Envoyer</button>
</form>