<?php require ('partials/head.php'); ?>

    <h1 class="display-1" style="text-align: center"><?= $greetings." ".$name." ".$surname ?></h1>
    <h1 class="display-2">Insert User Into Db</h1>

<div class="row">
    <div class="col col-md-4">
        <form method="POST" action="/names">
            <div class="form-group ">
                <input  name="Name" placeholder="Name" class="form-control" required>
            </div>
            <div class="form-group">
                <input  name="Surname" placeholder="Surname" class="form-control" required>
            </div>
            <div class="form-group">
                <input  name="Age" placeholder="Age" class="form-control" required>
            </div>
            <div class="form-group">
                <input  name="Gender" placeholder="Gender" class="form-control" required>
            </div>
            <div class="form-group">
                <input  name="Proffession" placeholder="Proffession" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="col col-md-4">
        <table class="table table-dark table-hover">
            <thead>
                <th>Name</th>
                <th>Surname</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Proffession</th>
            </thead>
            <tbody>
            <?php foreach ($users as $item):?>
            <tr>
                <td>
                    <?= $item->first_name ?>
                </td>
                <td>
                    <?= $item->Suranme ?>
                </td>
                <td>
                    <?= $item->Age ?>
                </td>
                <td>
                    <?= $item->Gender ?>
                </td>
                <td>
                    <?= $item->Proffession ?>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!--<div class="row">-->
<!--    <div class="col col-md-4 ">-->
<!--        <table class="table  table-dark table-hover">-->
<!--            <thead>-->
<!--            <th>Task</th>-->
<!--            </thead>-->
<!--            <tbody>-->
<!--            --><?php //foreach ($tasks as $task): ?>
<!--            <tr>-->
<!--            <td>-->
<!--                --><?php //if($task->isCompleted()): ?>
<!--                    <strike>--><?//= $task->getDesc() ?><!--</strike>-->
<!--                --><?php //else: ?>
<!--                    --><?//= $task->getDesc()?>
<!--                --><?php //endif; ?>
<!--                --><?php //endforeach; ?>
<!--            </td>-->
<!--            </tr>-->
<!--            </tbody>-->
<!--        </table>-->
<!--    </div>-->
<!--</div>-->
<?php require ('partials/footer.php'); ?>