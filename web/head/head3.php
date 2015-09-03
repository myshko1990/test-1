<html>
<head>
    <title>  php-кака!!! </title>
    <style type="text/css">
        .glavnuy {background-color: #c5e3f0;
            width: 80%;
            margin-left: 10%;
            margin-top: 5%;
            height:9%;
            border-radius: 10px;}
        .g1 {background-color: white;
            float: left;
            width: 20%;
            margin-left: 10%;
            margin-top: 3%;
            height:40%;
            border-radius: 10px;
            padding-top:2px;}
        .g2 {background-color: white;
            float: left;
            margin-left: %;
            width: 20%;
            margin-left: 10%;
            margin-top: 3%;
            height:40%;
            border-radius: 10px;
            padding-top:2px;}
        .g3 {background-color: red;
            margin-left: %;
            float: left;
            width: 20%;
            margin-left: 10%;
            margin-top: 3%;
            height:40%;
            border-radius: 10px;
            padding-top:2px;}
        .tablo {background-color: white;
            float: left;
            width: 80%;
            margin-left: 10%;
            margin-top: 3%;
            height:40%;
            border-radius: 10px;
            padding-top:30px;}
    </style>
</head>
<body background="../images/page-1.jpg">
<div class="glavnuy">
    <div class="g1" align="center"><a href="head1.php">test-1</a></div>
    <div class="g2" align="center"><a href="head2.php">Student +</a></div>
    <div class="g3" align="center"><a href="head3.php">Student</a></div>
</div>
<div class="tablo" align="center">
    <?php
    $popa1 = $_POST['p1'];
    $popa2 = $_POST['p2'];
    $popa3 = $_POST['p3'];
    $popa4 = $_POST['p4'];
    $popa5 = $_POST['p5'];
    $popa6 = $_POST['p6'];
    ?>
    <?php
    /* Скрипт показывает клиентов, которые яблоки любят больше чем апельсины */

    /* Переменные для соединения с базой данных */
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbName = "test";

    /* Таблица MySQL, в которой хранятся данные */
    $userstable = "`table`";

    /* создать соединение */
    mysql_connect($hostname,$username,$password) OR DIE("Не могу создать соединение ");
    /* выбрать базу данных. Если произойдет ошибка - вывести ее */
    mysql_select_db($dbName) or die(mysql_error());
    /* составить запрос для вставки информации о клиенте в таблицу */
    $query = "INSERT INTO $userstable (Name, Suname, Gender, Age, Groups, Faculty ) VALUES ('$popa1', '$popa2', '$popa3', '$popa4', '$popa5', '$popa6')";
    /* Выполнить запрос. Если произойдет ошибка - вывести ее. */
    mysql_query($query) or die(mysql_error());
    ?>
    <table>
        <tr>
            <td>id</td>
            <td>Name</td>
            <td>Suname</td>
            <td>Gender</td>
            <td>Age</td>
            <td>Group</td>
            <td>Faculty</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    </div>
</body>
</html>