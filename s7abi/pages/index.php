<?php include('../database/users.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Home
  </title>
</head>

<body>
  <p>
    <?php if(isset($_SESSION['id'])): ?>
      <p>
        <?php echo $_SESSION['username']; ?>
      </p>
    <?php endif; ?>
  </p>

    <?php if(isset($_SESSION['message'])): ?>
    <div class="msg <?php echo $_SESSION['type']; ?>">
      <li>
        <?php echo $_SESSION['message']; ?>
      </li>
      <?php 
        unset($_SESSION['message']);
        unset($_SESSION['type']); 
      ?>
    </div>
    <?php endif; ?>
</body>

</html>