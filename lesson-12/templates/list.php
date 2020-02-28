<?php
  if (count($posts) > 0) {
    foreach ($posts as $post) {
      ?>
      <div class="card mb-4">
        <div class="card-header">Пост от <strong><?= $post["author"]?></strong> (<?= $post["createdAt"]?>) </div>
        <div class="card-body">
          <?= $post["content"]?>
        </div>
        <div class="card-footer text-right">
          <a href="/lesson-12/edit.php?id=<?=$post["id"]?>" class="btn btn-outline-info btn-sm">Изменить пост</a>
          <a href="/lesson-12/delete.php?id=<?=$post["id"]?>" class="btn btn-danger btn-sm">Удалить пост</a>
        </div>
      </div>
      <?php
    }
  } else {
    ?>
      <div class="alert alert-warning">Список постов пуст :(</div>
    <?php
  }