<?php

$list = glob('tests/*.json');
$i=0;

?>

<!doctype html>
<html lang="en">
<head>

<meta charset="UTF-8">
             <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                         <meta http-equiv="X-UA-Compatible" content="ie=edge">
             <title>Список файлов</title>
</head>
<body>

<br><b>Список загруженных файлов:</b><br><br>

<?php foreach($list as $files) { $text = 'test.php' . '?q=' . substr($files,6); ?>
<?php $i++; echo $i . ') ' . '<a ' . 'href=' . "$text" . '>' . substr($files,6) . '</a>' . '<br>'; }?>

<br><hr>
<a href="admin.php">Загрузить файлы</a>

</body>
</html>