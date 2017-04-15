<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>To Do List</title>


<!-- Adpted from https://v4-alpha.getbootstrap.com/components/navbar/ -->
    <nav class="navbar navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"><h2>To Do List</h2></a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav navbar-nav">
                <li class="dropdwon">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Add List <span class="sr-only">(current)</span></a>
                        <div class="dropdown-menu" style="padding: 15px; padding-bottom: 15px;">
                            <form method="post">
                                <input style="margin-bottom: 15px;" type="text" placeholder="List Name" id="listname" name="listname"/>
                                <input style="margin-bottom: 15px;" type="text" placeholder="List Items" id="listitems" name="listitems"/>
                                <input class="btn btn-primary btn-block" type="button" id="addlist" value="Add List"/>
                                <input class="btn btn-primary btn-block" type="button" id="cancel" value="Cancel"/>
                            </form>
                        </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Edit List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Delete List</a>
                </li>
            </ul>
        </div>
    </nav> 

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>
  <body>    

    <div class="sidebar top"></div>
    
    <script>
        // Sidebar on top side
        $(".sidebar.top").sidebar({side: "top"});

    </script>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    
    <!--jQuery sidebar from https://github.com/jillix/jQuery-sidebar/ -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sidebar/3.3.2/jquery.sidebar.min.js"></script>

    <?php
        $host = "localhost\sqlexpress";
        $user = "laura";
        $pwd = "ABCd1234";
        $db = "tdldatabase";
        /* Connect to database.
        try {
            $conn = new PDO("sqlsrv:server = tcp:tdldatabase.database.windows.net,1433; Database = todolist", "laura", "ABCd1234");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e) {
            print("Error connecting to SQL Server.");
            die(print_r($e));
        }*/
    ?>
    </body>
 </html>