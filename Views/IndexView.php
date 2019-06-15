<?php require ('partials/head.php'); ?>

    <h1 class="display-1" style="text-align: center"><?= $greetings." ".$name." ".$surname ?></h1>
<ul >
    <?php foreach ($personTraits as $traits=>$val):?>
    <li><strong><?= ucwords($traits) ?></strong>:<?= $val ?></li>
    <?php endforeach; ?>
</ul>
<div class="row">
    <div class="col col-md-4 ">
        <ul class="list-group ">
            <?php foreach ($tasks as $task): ?>
                <li class="list-group-item list-group-item-dark">
                    <?php if($task->isCompleted()): ?>
                        <strike><?= $task->getDesc() ?></strike>
                    <?php else: ?>
                        <?= $task->getDesc()?>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>


<?php require ('partials/footer.php'); ?>