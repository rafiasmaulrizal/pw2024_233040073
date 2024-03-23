
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oleo+Script" rel="stylesheet">
  <style>
     body {
      font-family: "oleo script";
      padding: 0;
      margin: 0;
      height: 100vh;
      display: flex;
      text-align: center;
      align-items: center;
      background-color: #fff;
      flex-direction: column;
      justify-content: center;
    }
    .container {
      width: 570px;
      height: 200px;
      font-size: 1.2rem;
      display: flex;
      color: #623a18;
      background-color: yellow;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
    button {
      padding: 10px 7%;
      border-radius: 5px;
      border: none;
      cursor: pointer;
      background-color: #623a18;
      color: #fff;
    }
    a {
      text-decoration: none;
      color: #fff;
    } 
  </style>

</head>
<body>
  <div class="container"> 
  <h1>Selamat datang Admin</h1>
  <button type="submit" name="submit"><a href="login.php">Logout</a></button>
  </div>
</body>
</html>