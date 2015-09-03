<html>
<head>
    <title>php-кака!!!</title>
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
            .g3 {background-color: white;
                margin-left: %;
                float: left;
                width: 20%;
                margin-left: 10%;
                margin-top: 3%;
                height:40%;
                border-radius: 10px;
                padding-top:2px;}
        .tablica {
            background-color: #c5e3f0;
            float: left;
            width: 80%;
            margin-left: 10%;
            margin-top: 3%;
            height:40%;
            border-radius: 10px;
            padding-top:30px;}
        .test1 {background-color:yellow;}
        .test2 {background-color:red;}
    </style>
</head>
<body>
<div class="glavnuy">
    <div class="g1" align="center"><a href="web/head/head1.php">test1</a></div>
    <div class="g2" align="center"><a href="web/head/head2.php">Student +</a></div>
    <div class="g3" align="center"><a href="web/head/head3.php">Student</a></div>
</div>
<?php $nana = $_POST; ?>
<div class="tablica" align="center">
    <table cellspacing="20px" bgcolor="#dadbf0">
        <tr bgcolor="white">name
            <td bgcolor="white"><?php echo($nana[a])?></td>
            <td><?php echo($nana[b])?></td>
        </tr>
        <tr bgcolor="white">surname
            <td bgcolor="white"><?php echo($nana[v])?></td>
            <td> <?php if($nana[a]>$nana[b]){ ?>
                    <div class="test1"> имя длиннее</div>
               <?php }else{ ?> <div class="test2"> фамилия длиннее </div><?php } ?></td>
        </tr>
        <tr bgcolor="white">fathername
        <td bgcolor="white"><?php echo($nana[a])?></td>
        <td><?php echo($nana[b])?>
        </td>
        </tr>
    </table>
</div>
</body>
</html>