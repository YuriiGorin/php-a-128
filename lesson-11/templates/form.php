<a href="/lesson-11/">Вернуться к списку</a>

<?php
  if ($error !== "") {
    echo "<div class='alert alert-danger'>$error</div>";
  }

  if ($success !== "") {
    echo "<div class='alert alert-success'>$success</div>";
  }
?>

<form method="post" action="/lesson-11/add.php" class="card mt-4">
  <div class="card-header">Добавление пользователя</div>
  <div class="card-body">
    <div class="form-group">
      <label for="firstName">Имя</label>
      <input name="firstName" id="firstName" type="text" class="form-control">
    </div>
    <div class="form-group">
      <label for="lastName">Фамилия</label>
      <input name="lastName" id="lastName" type="text" class="form-control">
    </div>
    <div class="form-group">
      <label for="age">Возраст</label>
      <input name="age" id="age"  type="text" class="form-control">
    </div>
    <div class="form-group">
      <label for="iq">IQ</label>
      <input name="iq" id="iq"  type="text" class="form-control">
    </div>
    <div class="form-group">
      <label for="salary">Стипендия</label>
      <input name="salary" id="salary"  type="text" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Добавить пользователя</button>
  </div>
</form>