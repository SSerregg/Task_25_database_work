<article>
    <br>
<form action="route.php" method="post" class="btn btn-outline-secondary">
    <input type="hidden" name="delete" value="1">
    <input type="hidden" name="id" value=<?php echo $value;?>>
    <input type="submit" value="Удалить карточку" class="btn btn-danger">

    </form>
</article>