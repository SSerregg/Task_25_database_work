
<form action="modules/plusComm.php" method="post" class="btn btn-primary">
    <input type="hidden" name="id" value=<?php echo $delete;?>>

        <input name="comment" type="text" placeholder="коментарий" class="form-control" required>
        <input name="submit" type="submit" value="Отправить" >
    </form>