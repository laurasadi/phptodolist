<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="/phptodolist/view/style.css" type="text/css">
    <title>Hello, world!</title>
</head>
<body>

<?php include("view/_partials/header.view.php"); ?>
<?php $title = "Užduočių sąrašas"; ?>

<div class="row mt-5 p-5" id="finalForm">
    <img src="/phptodolist/view/media/logo.png" class="rounded" alt="logo" style="width: 120px">
    <h3><?= $title ?></h3>
    <p><a href="/phptodolist/new-task" class="btn btn-dark">Nauja Užduotis</a></p>

<?php if(isset($_SESSION['phptodolist/new-task'])): ?>
    <div class="alert alert-primary" role="alert">
        Užduotis sukurta: <?= ucfirst($_SESSION['phptodolist/new-task'][0]);
        unset($_SESSION['phptodolist/new-task']);?>
    </div>
    <?php endif;?>
    <table class="table">
        <tbody id="tableForm">
        <thead class="thead-light">
        <tr>
            <th scope="col">Task</th>
            <th scope="col">Priority</th>
            <th scope="col">Due Date</th>
            <th scope="col">Done?</th>
            <th scope="col">Delete</th>
        </tr>
        <tr>
            <?php foreach ($tasks->allTasks() as $task): ?>
            <td scope="col"><?= $task['subject']; ?></td>
            <td scope="col"><?= $task['priority']; ?></td>
            <td scope="col"><?= $task['dueDate']; ?></td>
            <td scope="col"><a href="complete-task/id/<?= $task['id']; ?>" class="btn btn-dark"</a>Done</td>
            <td scope="col"><a href="delete-task/id/<?= $task['id'];?>" class="btn btn-dark" </a>Delete</td>
        </tr>
        <?php endforeach; ?>
        <?php include("view/_partials/footer.view.php"); ?>
        </thead>
        </tbody>
    </table>
</div>

</body>
</html>

<!---->
<!--<ul>-->
<!--    --><?php //foreach($tasks -> allTasks() as $task):?>
<!--    <li>--><? //=$task['subject'];?>
<!--        <ul>-->
<!--            <li>--><? //=$task['priority'];?><!--</li>-->
<!--            <li>--><? //=$task['dueDate'];?><!--</li>-->
<!--            <li><a href="/complete-task/id/--><? //=$task['id'];?><!--">Done</a></li>-->
<!--            <li><a href="/edit-task/id/--><? //=$task['id'];?><!--">Delete</a></li>-->
<!--        </ul>-->
<!---->
<!--    </li>-->
<!--    --><?php //endforeach;?>
<!--    --><?php //include ("view/_partials/footer.view.php");?>
<!--</ul>-->
<!---->
