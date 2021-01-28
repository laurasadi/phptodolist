<?php $title = 'Nauja užduotis';

?>
<h1><?=$title?></h1>

<div class="form-group">
    <label for="priority">Priority:</label>
    <select class="form-control" id="priority">
        <option></option>
        <option>Low</option>
        <option>Normal</option>
        <option>High</option>
    </select>
    <label for="dueDate">Due date:</label>
    <input type="date" class="form-control" id="dueDate">
    <button type="button" class="btn btn-primary" name="send">Submit</button>
</div>

