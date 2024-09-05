<div class="card" style="width: 18rem;">
  <img src=<?php echo $correct;?> class="card-img-top" alt="Возможно имя загружаемого файла содержит пробелы!">
  <div class="card-body">
    <h5 class="card-title">Коментарии:</h5>
  
    <form action="modules/plusComm.php" method="post" class="btn btn-primary">
    <input type="hidden" name="id" value=<?php echo $delete;?>>
        <input name="username" type="text" placeholder="имя">
        <input name="comment" type="text" placeholder="коментарий" class="form-control" required>
        <input name="submit" type="submit" value="Отправить" >
    </form>
    
