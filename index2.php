<?php
    session_start();
    // Getting Data For Actions In ToDo
    if(isset($_GET['to'])){
        $key = $_GET['to'];
        if($_GET['action'] == 'done'){
           $_SESSION['todo'][$key]['done']=true; 
        }else if($_GET['action'] == 'cancel'){
          $_SESSION['todo'][$key]['done']=false;   
        }else{
            unset( $_SESSION['todo'][$key]);
        }
    }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <title>THINGS TO DO</title>
    <link href="https://fonts.googleapis.com/css?family=Courgette|Shadows+Into+Light&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
    <h1 class="head">Welcome to my to do list :</h1>
    <!-- Start Bootstrap columns -->
    <div class="text-center mt-5 container">
        <div class="row">
            <div class="col-sm-2"></div>
                <div class="col-sm-8">
                <!-- Creating A Form -->
                <form method="post" action="todo.php">
                        <div class="input-group mt-5 mb-3">
                            <input type="text" class="form-control" name="todo_input" placeholder="add to list" aria-label="Todo Item" aria-describedby="button-addon2">
                            <input type="date" class="form-control" name="todo_date" aria-label="Todo Date" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-danger" name="submit" type="submit" id="button-addon2">
                                        Add item
                                    </button>
                                </div>
                        </div>
                    </form>
                    <!-- Ending A Form -->

                    </div>


<!-- Start Scripts -->
<!-- Script Libraries -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script> 
<!-- Main JS -->
<script src="js/main.js"></script>

</body>
</html>



