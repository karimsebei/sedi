<?php
include("../database/users.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Formulaire de connexion</title>

   <!--   
   <link rel="stylesheet" href="styleregister.css"> -->
 
</head>
<body>
<div class="form-container">

<form role="form" class="text-start" action="form login.php" method="post">
                  <?php if(count($errors) > 0 ):?>
                    <div>
                      <?php foreach($errors as $error): ?>
                      <li><?php echo $error;?></li>
                      <?php endforeach;?>
                    </div>
                  <?php endif; ?>
                  <div class="input-group input-group-outline my-3">
                    <input type="text" name="username" value="<?php echo $username; ?>" class="form-control" placeholder="Nom d'utilisateur">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe">
                  </div>
                  <div class="text-center">
                    <button type="submit" name="login-btn" class="btn bg-gradient-primary w-100 my-4 mb-2">Se connecter</button>
                  </div>
                </form>
                
</div>
</div>
</body>
</html>
