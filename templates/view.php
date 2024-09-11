<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <header>
        <h1></h1>
        <form action="" method="get" class="btn btn-primary">

        <input name="username" type="text" placeholder="имя">

        <input  type="submit" value="Авторизироваться" >
    </form>
    <br>
    <br>
    <form action="" method="get" class="btn btn-primary">


        <input name="submit" type="submit" value="Деавторизироваться" >
    </form>
</header>
<section>
  <br>
  <?php include_once CONTROLLER;?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</section>
  </body>
</html>