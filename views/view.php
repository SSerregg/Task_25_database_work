<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <header>
        <h1></h1>
  <form method='post' action="modules/server.php" enctype="multipart/form-data">          
<input type="hidden" name="MAX_FILE_SIZE" value="5000000">
<input type='file' name='file[]' class="btn btn-success" id='file-drop' multiple required><br> 
<input type='submit' value='Загрузить' class="btn btn-warning" >
</form>
</header>
<section>
  <br>
  <?php include_once 'controller.php';?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</section>
  </body>
</html>