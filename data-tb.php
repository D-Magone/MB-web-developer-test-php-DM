<?php
    require_once ('viewuser.php');
    require_once ('deleteuser.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/table.css">
    <title>pineapple data</title>
</head>
<body>
    <h1>All data from database</h1>
    <table class="table-style table-hover">
            <?php 
                $delete = new DeleteUser();
                $delete->Delete();

                if($delete->Delete() == TRUE) {
                    header("Location: data-tb.php");
                }

                $users = new ViewUser();
                $users->showAllUsers();
            ?>
        </tbody>
    </table>
</body>
</html>