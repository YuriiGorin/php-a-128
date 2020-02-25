<h1 class="my-4">Список студентов</h1>
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