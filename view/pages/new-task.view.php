<?php $title = 'Nauja užduotis';

?>
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
    <button type="submit" class="btn btn-primary" name="send">Submit</button>
</form>

