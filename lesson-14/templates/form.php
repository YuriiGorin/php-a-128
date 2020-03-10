<?php
  $action = "/lesson-14/create.php";
  if ($pageName === "edit") {
    $action = "/lesson-14/edit.php?id=$id";
  }
?>
<form action="<?= $action?>" method="post">
  <div class="form-group">
    <label for="author">Ваше имя</label>
    <input value="<?=$author?>" name="author" id="author" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label for="content">Текст записи</label>
    <textarea name="content" id="content" class="form-control"><?= $content?></textarea>
  </div>
  <button type="submit" class="btn btn-success btn-lg">Сохранить запись</button>
</form>