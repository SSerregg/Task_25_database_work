<article>
<form action="route.php" method="post" class="btn btn-primary">
    <input type="hidden" name="plusComm" value="1">
    <input type="hidden" name="id" value=<?php echo $delete;?>>
    <input type="hidden" name="pictureName" value=<?php echo $value;?>>

        <input name="comment" type="text" placeholder="коментарий" class="form-control" required>
        <input name="submit" type="submit" value="Отправить" >
    </form>
</article>