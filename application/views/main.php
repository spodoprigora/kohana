<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>">
    <link href="<?php echo URL::base(); ?>public/css/<?php echo $style; ?>.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="main">
    <div class="container">
        <div class="menu">
            <h3>Меню</h3>
            <br/>
            <ul>
                <li><a href="<?php echo URL::site(); ?>">Главная</a></li>
                <li><a href="<?php echo URL::site('index/add'); ?>">Добавить статью</a></li>
            </ul>
        </div>
        <div class="content"><?php echo $content; ?></div>
        <div class="clearing"></div>
    </div>
</div>
</body>
</html>