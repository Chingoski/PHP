<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View</title>
    <style>
        header{
            background: gray;
            text-align: center;
        }
    </style>
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="Public/AboutView.php">About</a></li>
            <li><a href="Public/ContactView.php">Contact</a></li>
        </ul>
    </nav>
    <h1><?= $greetings." ".$name." ".$surname ?></h1>
</header>

<ul>
    <?php foreach ($personTraits as $traits=>$val):?>
    <li><strong><?= ucwords($traits) ?></strong>:<?= $val ?></li>
    <?php endforeach; ?>
</ul>

<ul>
    <?php foreach ($tasks as $task): ?>
        <li>
        <?php if($task->isCompleted()): ?>
          <strike><?= $task->getDesc() ?></strike>
        <?php else: ?>
            <?= $task->getDesc()?>
        <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>