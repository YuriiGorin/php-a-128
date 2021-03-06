<form action="" class="my-4 card border-dark">
  <div class="card-header">Поиск постов</div>
  <div class="card-body">
    <div class="form-group">
      <label>Имя автора</label>
      <input name="author" type="text" class="form-control" value="<?= $author?>">
    </div>
    <div class="form-group">
      <label>Контент</label>
      <input name="content" type="text" class="form-control" value="<?= $content?>">
    </div>
    <div class="radio">
      <label class="mr-2">
        <input type="radio" <?= $sortType === "desc" ? "checked" : ""?> name="sort" value="desc">
        Сначала новые
      </label>
      <label>
        <input type="radio" <?= $sortType === "asc" ? "checked" : ""?> name="sort" value="asc">
        Сначала старые
      </label>
    </div>
  </div>
  <?php
    if ($pageName === "index-archive") {
    ?>
      <input type="hidden" name="only-archive" value="true">
    <?php
    }
  ?>

  <div class="card-footer">
    <button type="submit" class="btn btn-info">Найти записи</button>
    <a href="/lesson-14/" type="submit" class="btn btn-outline-secondary">Сбросить</a>
  </div>
</form>
<?php
  if (count($posts) > 0) {
    foreach ($posts as $post) {
      $status = $post["status"];
      $createdAt = strtotime($post["createdAt"]);
      ?>
      <div class="card mb-4 <?= $status === "archive" ? "border-info" : ""?>">
        <div class="card-header">
          Пост от <a href="?author=<?= $post["author"]?>"><strong><?= $post["author"]?></strong></a>

          (<?= date("d.m.Y в H:i", $createdAt)?>)
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
          <a href="/lesson-14/setStatus.php?status=deleted&id=<?=$post["id"]?>" class="btn btn-danger btn-sm">Удалить пост</a>
          <?php
            if ($pageName === "index") {
              ?>
                <a href="/lesson-14/setStatus.php?status=archive&id=<?= $post["id"] ?>" class="btn btn-warning btn-sm">В архив</a>
              <?php
            } else {
              ?>
              <a href="/lesson-14/setStatus.php?status=active&id=<?= $post["id"] ?>" class="btn btn-warning btn-sm">Восстановить</a>
              <?php
            }
          ?>
        </div>
      </div>
      <?php
    }
    ?>
    <?php
      if ($pagesCount > 1) {
        ?>
          <ul class="pagination">
            <li class="page-item <?= $pageNumber <= 1 ? "disabled" : ""?>">
              <?php
                if ($pageNumber > 1) {
                ?>
                  <a href="<?= getQueryString($currentQueryString, 'page=' . ($pageNumber - 1)) ?>" class="page-link">&laquo;</a>
                <?php
                } else {
                ?>
                  <span class="page-link">&laquo;</span>
                <?php
                }
              ?>
            </li>
            <?php
              for ($i=1; $i<=$pagesCount; $i++) {
                ?>
                <li class="page-item <?= $i === $pageNumber ? "active" : "" ?>">
                  <a href="<?= getQueryString($currentQueryString, 'page=' . $i) ?>" class="page-link"><?=$i?></a>
                </li>
                <?php
              }
            ?>
            <li class="page-item <?= $pagesCount <= 1 || $pageNumber == $pagesCount ? "disabled" : ""?>">
              <?php
                if ($pageNumber < $pagesCount) {
                  ?>
                  <a href="<?= getQueryString($currentQueryString, 'page=' . ($pageNumber + 1)) ?>" class="page-link">&raquo;</a>
                  <?php
                } else {
                  ?>
                  <span class="page-link">&raquo;</span>
                  <?php
                }
              ?>
            </li>
          </ul>
        <?php
      }
    ?>

    <?php
  } else {
    ?>
      <div class="alert alert-warning">Список постов пуст :(</div>
    <?php
  }