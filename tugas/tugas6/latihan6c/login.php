<?php
if (isset($_POST["submit"])) {
  if ($_POST["username"] == "admin" && $_POST["password"] == "admin") {
    header("Location: admin.php");
    exit;
  } else {
    $error = true;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oleo+Script" rel="stylesheet">
  <title>Login</title>
  <style>
    body {
      padding: 100px;
      background-color: fff;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: "oleo script";
    }
    .container {
      width: 370px;
      height: 400px;
      display: flex;
      background-color: #a9a9a9;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
    img {
      width: auto;
      height: 150px;
    }
    h1 {
      text-align: center;
    }
    p {
      color: red;
    }
    input {
      width: 50%;
      border: none;
      border-radius: 3px;
      margin: 3px;
    }
    button {
      cursor: pointer;
      background-color: #00ff00;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Login Admin</h1>
    <img src="img/logo.png" alt="">
    <?php
    if (isset($error)) : ?>
      <p> Username / Password salah</p>
    <?php endif; ?>
    <ul>
      <form action="" method="post">
        <label for="username">Username :</label>
        <input type="text" name="username" id="username">
        <br>
        <label for="password">Password :</label>
        <input type="password" name="password" id="password">
        <br>
        <button type="submit" name="submit">Login</button>
      </form>
    </ul>
  </div>
</body>
</html>