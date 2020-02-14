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

    if (count($users) > 0) {
      $nameValue = $users[$i]["name"];
      $emailValue = $users[$i]["email"];
      if (isset($users[$i]["subscribe"])) {
        $checked = true;
      } else {
        $checked = false;
      }
    } else {
      $nameValue = "";
      $emailValue = "";
      $checked = true;
    }

    ?>
    <input
      value="<?= $nameValue?>"
      class="<?= $nameError ? "error" : ""?>"
      name="users[<?=$i?>][name]"
      type="text"
    >
    <input
      value="<?= $emailValue?>"
      class="<?= $emailError ? "error" : ""?>"
      name="users[<?=$i?>][email]"
      type="text"
    >
    <label>
      <input
        <?= $checked ? "checked" : "" ?>
        name="users[<?=$i?>][subscribe]"
        type="checkbox"
      >
      Подписать на рассылку
    </label>
    <hr>
    <?php
  }
?>
  <button type="submit">Сохранить данные</button>
</form>
