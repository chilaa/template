<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title><?php echo $title?></title>
    <style>
        .navigate li{
            display: inline;
        }
        .navigate{
            background-color: powderblue;
            padding: 30px;
            font-size: 50px;
        }

    </style>

</head>
<body>
<head>
    <nav class="navigate">
        <li><a href="main.php">main</a></li>
        <li><a href="news.php">news</a></li>
        <li><a href="files.php">files</a></li>
    </nav>
</head>
<p>
    <?php
    echo $text
    ?>
</p>
</body>
</html>