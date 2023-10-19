<!DOCTYPE html>
<html>
<head>
    <title>Сортировка пользователей</title>
</head>
<body>
    <?php

    include 'user.php';
    include 'userservise.php';


    // Пример данных
    $user1 = new User('Пользователь1', 'qwerty', new DateTime('1990-05-15'));
    $user2 = new User('Пользователь12', 'qwerty', new DateTime('1985-12-03'));
    $user3 = new User('Пользователь123', 'qwerty', new DateTime('1995-02-20'));

    $users = [$user1, $user2, $user3];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["sort_username"])) {
            $users = UserService::sortByUsername($users, $_POST["sort_username"] === "ascending");
        } elseif (isset($_POST["sort_birthday"])) {
            $users = UserService::sortByBirthday($users, $_POST["sort_birthday"] === "ascending");
        }
    }
    ?>
    <h1>Сортировка пользователей</h1>
    <form method="post">
        <button type="submit" name="sort_username" value="ascending">Сортировать по имени (возрастание)</button>
        <button type="submit" name="sort_username" value="descending">Сортировать по имени (убывание)</button>
        <button type="submit" name="sort_birthday" value="ascending">Сортировать по дате рождения (возрастание)</button>
        <button type="submit" name="sort_birthday" value="descending">Сортировать по дате рождения (убывание)</button>
    </form>
    <table>
        <tr>
            <th>Имя пользователя</th>
            <th>Пароль</th>
            <th>Дата рождения</th>
        </tr>
        <?php
        foreach ($users as $user) {
            echo "<tr>";
            echo "<td>" . $user->username . "</td>";
            echo "<td>" . $user->password . "</td>";
            echo "<td>" . $user->birthday->format('Y-m-d') . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
