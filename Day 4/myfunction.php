<?php
require_once 'dbconf.php';
function PrintTable($tableName,$connect){
    try {
        $sql = "SELECT * FROM $tableName";
    
        $result = mysqli_query($connect,$sql);
        if (mysqli_num_rows($result) > 0) {
            echo "<table border='1'>";
    
            $col = mysqli_fetch_fields($result);
            echo "<tr>";
    
            foreach ($col as $value){
                echo "<td>$value->name</td>";
            }
            echo "</tr>";
            
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                foreach ($row as $key => $value) {
                    echo "<td>$value</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
         else {
            echo "No results";
        }
        
    } 
    catch (Exception $e) {
        die($e->getMessage());
    }
    }
    
    
    PrintTable('students',$connect);
    echo "<br>";
    


    function GetStudentDetails($connect){
        //query
        try{
        
            $sql="select id,name from students  ";
            
        
            //$sq1="SELECT * FROM $name";
            
        
            //execute the query
            $result=mysqli_query($connect,$sql);
        
            //check if data exists in the table
            if(mysqli_num_rows($result)>0){
                echo "<table border='1'>";
                $col=mysqli_fetch_fields($result);
                echo "<tr>";
                foreach($col as $value){
                    echo "<td>$value->name</td>";
                }
                echo "<td>View Student's Details</td>";
                echo "</tr>";
                

               
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    foreach($row as $key=>$value){
                        echo "<td>$value</td>";
                    }
                    $id=$row['id'];
                    echo "<td><a href='StudentDetails.php?id=$id'>View</a></td>";
                    echo "</tr>";
                   
                }
                echo "</table>";
            }else{
                echo "No results";
            }
        }
        catch(Exception $e){
            die($e->getmessage());
        }
    }
    GetStudentDetails($connect);
        


    
        function GetStudentid($id,$connect){
            //query
            try{
            
                $sql="select * from students where id=$id  ";
                
            
                //execute the query
                $result=mysqli_query($connect,$sql);
            
                //check if data exists in the table
                if(mysqli_num_rows($result)>0){
                    echo "<table border='1'>";
                    $col=mysqli_fetch_fields($result);
                    echo "<tr>";
                    foreach($col as $value){
                        echo "<td>$value->name</td>";
                    }
                    //echo "<td>View Student's Details</td>";
                    echo "</tr>";
                    
    
                   
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                        foreach($row as $key=>$value){
                            echo "<td>$value</td>";
                        }
                       // $id=$row['id'];
                        //echo "<td><a href='StudentDetails.php?id=$id'>View</a></td>";
                        echo "</tr>";
                       
                    }
                    echo "</table>";
                }else{
                    echo "No results";
                }
            }
            catch(Exception $e){
                die($e->getmessage());
            }
            }
    


            ?>