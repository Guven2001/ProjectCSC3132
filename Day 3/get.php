<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
        <table>
            <tr>
                <td align="right">Name:</td>
                <td><input type="text" name="name" /></td>
            </tr>
            <tr>
                <td > </td>
                <td > <input type="Submit" value="Search"/></td>
                    
            </tr>
        </table>
    </form>
    <?php
        require_once 'dbconf.php';
        require_once 'myfunction.php';

        //serach form
        echo $_SERVER['PHP_SELF'];
       
    ?>
    <?php
        if(isset($_GET['name']) && $_GET['name']!=''){
            SearchStudent($_GET['name'],$connect);
        }
        //PrintTable("students",$connect,['id','reg','name','age','course']);
    ?> 
    
</body>
</html>