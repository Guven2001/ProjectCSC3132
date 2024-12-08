<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Details of the Students</title>
</head>
<body>
    <?php
        require_once 'myfunction.php';
        require_once 'dbconf.php';

        GetStudentDetails($connect);
    ?>
</body>
</html>