<?php include("../database/users.php")?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    regist
  </title>

</head>

<body>
  <main class="main-content  mt-0">
                  <form action="register1.php" method="post">
                    
                    <?php if(count($errors) > 0 ):?>
                      <div>
                        <?php foreach($errors as $error): ?>
                          <li><?php echo $error;?></li>
                          <?php endforeach;?>
                      </div>
                    <?php endif; ?>

                    <div class="input-group input-group-outline mb-3">
                      <input type="text" name="username" value="<?php echo $username; ?>" class="form-control" placeholder="Name">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <input type="email" name="email" value="<?php echo $email; ?>" class="form-control"placeholder="Email">
                    </div>
                    <div class="input-group input-group-outline mb-3" >
                      <input type="password" name="password" value="<?php echo $password; ?>" class="form-control" placeholder="Password">
                    </div>
                    <div class="text-center">
                      <button type="submit" name="register-btn" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Sign Up</button>
                    </div>
                  </form>
  </main>
</body>

</html>