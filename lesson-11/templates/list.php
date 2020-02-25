<h1 class="my-4">Список студентов</h1>
<a href="/lesson-11/add.php" class="btn btn-warning">Добавить пользователя</a>
<form class="mt-4" action="/lesson-11/index.php">
  <div class="card mb-4">
    <div class="card-body">
      <div class="row">
        <div class="col-sm-3">
          <div class="form-group">
            <label for="min">Возраст от</label>
            <input value="<?= $min?>" name="min" id="min" type="text" class="form-control">
          </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group">
            <label for="max">Возраст до</label>
            <input value="<?= $max?>" name="max" id="max" type="text" class="form-control">
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Найти</button>
    </div>
  </div>
</form>
<?php
  if (count($students) > 0) {
    ?>
    <table class="table table-bordered table-hover">
      <tr>
        <th>Имя</th>
        <th>Возраст</th>
        <th>IQ</th>
        <th>Стипендия</th>
      </tr>
      <?php
        foreach ($students as $student) {
          ?>
          <tr>
            <td><?= $student["firstName"] . " " . $student["lastName"] ?></td>
            <td><?= $student["age"] ?></td>
            <td><?= $student["iq"] ?></td>
            <td><?= $student["salary"] ?></td>
          </tr>
          <?php
        }
      ?>
    </table>
    <?php
  } else {
    ?>
      <div class="alert alert-info">Не удалось найти ни одного студента</div>
    <?php
  }
?>