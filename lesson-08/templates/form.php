<form action="/lesson-08/create.php" method="get">
  <input name="count" type="text" placeholder="Кол-во пользователей">
  <button type="submit">Заполнить данные</button>
</form>
<hr>
<form action="/lesson-08/create.php?count=<?= $rowCount?>" method="post">
<?php
  for ($i=0; $i<$rowCount; $i++) {

    if (count($errors) > 0) {
      if (isset($errors["users[$i][name]"])) {
        $nameError = true;
      } else {
        $nameError = false;
      }

      if (isset($errors["users[$i][email]"])) {
        $emailError = true;
      } else {
        $emailError = false;
      }
    }

    ?>
    <input class="<?= $nameError ? "error" : ""?>" name="users[<?=$i?>][name]" type="text">
    <input class="<?= $emailError ? "error" : ""?>" name="users[<?=$i?>][email]" type="text">
    <label>
      <input name="users[<?=$i?>][subscribe]" type="checkbox">
      Подписать на рассылку
    </label>
    <hr>
    <?php
  }
?>
  <button type="submit">Сохранить данные</button>
</form>
