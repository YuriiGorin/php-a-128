<h1 class="my-4">Список студентов</h1>
<form action="/lesson-11/index.php">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-sm-3">
          <div class="form-group">
            <label for="min">Возраст от</label>
            <input id="min" type="text" class="form-control">
          </div>
        </div>
        <div class="col-sm-3">

        </div>
        <div class="col-sm-3">

        </div>
      </div>
    </div>
  </div>
</form>
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
        <td><?= $student["firstName"] . " " . $student["lastName"]?></td>
        <td><?= $student["age"]?></td>
        <td><?= $student["iq"]?></td>
        <td><?= $student["salary"]?></td>
      </tr>
      <?php
    }
  ?>
</table>