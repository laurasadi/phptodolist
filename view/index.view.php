<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="/phptodolist/view/style.css" type="text/css">
  </head>
  <body>

    <div class="container">
        <div class="text-center">
            <img src="/phptodolist/view/media/logo.png" class="rounded" alt="logo" style="width: 120px">
        </div>
        <!-- cia bus mano submit forma -->
        <div class="row" id="form">
            <div class="col-md">
                <form>
                    <div class="form-group">
                        <label for="taskName">Task Name</label>
                        <input type="text" class="form-control" id="taskName">
                    </div>


                    <div class="form-group">
                        <label for="priority">Priority:</label>
                        <select class="form-control" id="priority" name="priority">
                            <option value="" disabled selected>Choose Priority</option>
                            <?php foreach ($prioritetas as $value): ?>
                            <option value="<?=$value?>"><?=$value?></option>
                            <?php endforeach;?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="dueDate">Due date:</label>
                        <input type="date" class="form-control" id="dueDate" name="duedate">
                    </div>

                    <div class="form-group">
                        <label for="progress">Progress</label>
                        <select class="form-control" id="progress" name="progress">
                            <option value="" disabled selected>Choose Progress</option>
                            <?php foreach ($procentai as $value):?>
                            <option value="<?=$value?>"><?=$value?></option>
                            <?php endforeach;?>
                        </select>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status">
                                <option value="" disabled selected>Choose Status</option>
                                <?php foreach ($statusas as $value):?>
                                    <option value="<?=$value?>"><?=$value?></option>
                                <?php endforeach;?>
                            </select>
                    </div>
                        <!-- pasidarau mygtuka -->
                        <div class="row mt-3 justify-content-center">
                            <button type="button" class="btn btn-dark" id="submit" value="submit" name="submit">Submit</button>
                        </div>
                </form>

                <!-- lentele kurioje islys ivesti duomenys -->
                <div class="row mt-5" id="finalForm">
                    <table class="table" >
                        <tbody id="tableForm">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">Done?</th>
                            <th scope="col">Task</th>
                            <th scope="col">Priority</th>
                            <th scope="col">Due Date</th>
                            <th scope="col">Done %</th>
                            <th scope="col">Status</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>