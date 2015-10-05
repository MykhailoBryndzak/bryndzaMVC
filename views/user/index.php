<h1>Користувачi</h1>
<form method="post" action="<?php echo URL; ?>user/create">
    <label>Вхід</label><input type="text" name="login">
    <br>
    <label>Пароль</label><input type="text" name="password">
    <br>
    <label>Права доступу</label>
    <select name="role">
        <option value="default">Дефолт</option>
        <option value="admin">Адмін</option>
    </select>
    <br>
    <label> </label><input type="submit">
</form>
<hr>
<table>
    <?php
    foreach($this->userList as $key => $value) {
        echo '<tr>';
        echo '<td>'.$value['id'].'</td>';
        echo '<td>'.$value['login'].'</td>';
        echo '<td>'.$value['role'].'</td>';
        echo '<td><a $href="#">Редагувати</a>
                  <a href="#">Видалити</a>
              </td>';
        echo '<br>';
    }
    ?>
</table>
