<article>
<form action="modules/delComment.php" method="post" class="btn btn-outline-secondary">

<input type="hidden" name="id" value=<?php echo $delete;?>>
<input type="submit" value="Удалить коментарии" class="btn btn-success">

</form>  
</article>
<article>
    <br>
<form action="modules/delete.php" method="post" class="btn btn-outline-secondary">

    <input type="hidden" name="id" value=<?php echo $delete;?>>
    <input type="submit" value="Удалить карточку" class="btn btn-danger">

    </form>
</article>
</div>
</div>