<!DOCTYPE html>
    <?php
        include 'connection.php';
        
        $query="SELECT * FROM office";
        $result=  mysql_query($query);
        
        while($people=  mysql_fetch_array($result))
        {
            echo "<h3>" . $people['id'] . "</h3>";
            echo "<h3>" . $people['name'] . "</h3>";
            echo "<h3>" . $people['email_id'] . "</h3>";
            echo "<h3>" . $people['date'] . "</h3>";
            echo "<h3>" . $people['in_time'] . "</h3>";
            echo "<h3>" . $people['out_time'] . "</h3>";
        }
        
    ?>
        
<h1>CREATE A USER</h1>
 <form action="create.php" method="POST">
     <br>
     Id:<input type='int' name='inputId' value="">
     Name:<input type="text" name="inputName" value=" ">
     Email:<input type="text" name="inputEmail" value=" ">
     Date:<input type="date" name='inputDate' value=" ">
     Intime:<input type='time' name='inputTime' value="">
     Outtime:<input type='time' name='inputOtime' value="" >
     </br>
     
     <input type='submit' name ='submit' id="submit">
 </form>
     
       
               
