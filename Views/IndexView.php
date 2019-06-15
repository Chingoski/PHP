<?php require ('partials/head.php'); ?>

    <h1 class="display-1" style="text-align: center"><?= $greetings." ".$name." ".$surname ?></h1>
<ul >
    <?php foreach ($personTraits as $traits=>$val):?>
    <li><strong><?= ucwords($traits) ?></strong>:<?= $val ?></li>
    <?php endforeach; ?>
</ul>
<div class="row">
    <div class="col col-md-4 ">
        <table class="table  table-dark table-hover">
            <thead>
            <th>Task</th>
            </thead>
            <tbody>
            <?php foreach ($tasks as $task): ?>
            <tr>
            <td>
                <?php if($task->isCompleted()): ?>
                    <strike><?= $task->getDesc() ?></strike>
                <?php else: ?>
                    <?= $task->getDesc()?>
                <?php endif; ?>
                <?php endforeach; ?>
            </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>


<?php require ('partials/footer.php'); ?>