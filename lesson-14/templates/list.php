<form action="" class="my-4 card border-dark">
  <div class="card-header">Поиск постов</div>
  <div class="card-body">
    <div class="form-group">
      <label>Имя автора</label>
      <input name="author" type="text" class="form-control">
    </div>
    <div class="form-group">
      <label>Контент</label>
      <input name="content" type="text" class="form-control">
    </div>
    <div class="radio">
      <label class="mr-2"><input type="radio" name="sort" value="asc"> Сначала новые </label>
      <label><input type="radio" name="sort" value="desc"> Сначала старые </label>
    </div>
  </div>
  <div class="card-footer">
    <button type="submit" class="btn btn-info">Найти записи</button>
    <a href="/lesson-14/" type="submit" class="btn btn-outline-secondary">Сбросить</a>
  </div>
</form>
<?php
  if (count($posts) > 0) {
    foreach ($posts as $post) {
      $status = $post["status"];
      ?>
      <div class="card mb-4 <?= $status === "archive" ? "border-info" : ""?>">
        <div class="card-header">
          Пост от <strong><?= $post["author"]?></strong> (<?= $post["createdAt"]?>)
          <?php
            if ($status === "archive") {
              ?>
                <span class="text-muted small">// в архиве</span>
              <?php
            }
          ?>
        </div>
        <div class="card-body">
          <?= $post["content"]?>
        </div>
        <div class="card-footer text-right">
          <a href="/lesson-14/edit.php?id=<?=$post["id"]?>" class="btn btn-outline-info btn-sm">Изменить пост</a>
          <a href="/lesson-14/delete.php?id=<?=$post["id"]?>" class="btn btn-danger btn-sm">Удалить пост</a>
          <a href="/lesson-14/toArchive.php?id=<?=$post["id"]?>" class="btn btn-warning btn-sm">В архив</a>
        </div>
      </div>
      <?php
    }
  } else {
    ?>
      <div class="alert alert-warning">Список постов пуст :(</div>
    <?php
  }