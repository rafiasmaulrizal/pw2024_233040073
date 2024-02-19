<!DOCTYPE html>
<html lang="en">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>kotak rafi</title>
  <head>
  <style>
   .container {
    display: flex;
    flex-direction: column;
   }

   .baris {
    display: flex;
    justify-content: flex-start;
   }

   .kotak {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50px;
    height: 50px;
    background-color: yellow;
    border: 1.2px solid black;
    margin: 0;
    font-size: 20px;
    font-family: Arial;
   }
  </style>
</head>
<body>
  <div class="container">
    <div class="baris">
      <div class="kotak">1</div>
    </div>
    <div class="baris">
      <div class="kotak">2</div>
      <div class="kotak">2</div>
    </div>
    <div class="baris">
      <div class="kotak">3</div>
      <div class="kotak">3</div>
      <div class="kotak">3</div>
    </div>
  </div>
</body>
</html>