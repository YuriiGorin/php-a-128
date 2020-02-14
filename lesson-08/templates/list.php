<table cellpadding="10" cellspacing="0" border="1" width="100%">
  <colgroup>
    <col>
    <col width="200">
    <col width="50">
  </colgroup>
  <thead>
  <tr>
    <th>Имя пользователя</th>
    <th>Email</th>
    <th>Рассылка</th>
  </tr>
  </thead>
  <tbody>
  <?php
    foreach ($users as $user) {
      ?>
      <tr>
        <td><?= $user["name"]?></td>
        <td><?= $user["email"]?></td>
        <td><?= $user["subscribe"] === "1" ? "Участвует" : "Отписан" ?></td>
      </tr>
      <?php
    }
  ?>
  </tbody>
</table>