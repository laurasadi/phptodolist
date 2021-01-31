
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

<?php $title = 'Nauja užduotis';
?>

<div class="row m-lg-5">
<h1><?=$title?></h1>

<form method="post">
    <input type="text" name="subject" placeholder="Name task:"
    <label for="priority">Priority:</label>
    <select name="priority" id="priority">
        <option></option>
        <option>Low</option>
        <option>Normal</option>
        <option>High</option>
    </select>
    <label for="dueDate">Due date:</label>
    <input type="date" name ="duedate">
    <button type="submit" class="btn btn-dark" name="send">Submit</button>
</form>
</div>
</body>
</html>