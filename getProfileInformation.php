<?php

    session_start();
    $userid=$_SESSION['username'];
    $connect=pg_connect("host=localhost user=postgres dbname=nccproject password=santoshsahu");
    $result=pg_query($connect,"select * from registration where userid='".$userid."'");

    while(($row=pg_fetch_row($result))){
        
       /* if($row[0]==$user_name && $row[1]==$password && $row[2]==$role){
            
            $flag=1;
            break;
        }*/
        echo"<table border=2>";
        
        echo"<tr>";
        echo"<td>";
        echo"name = ";
        echo"</td>";
        echo"<td>";
        echo"".$row[0];
        echo"</td>";
        echo"</tr>";
        echo"<tr>";
        echo"<td>";
        echo"userid = ";
        echo"</td>";
        echo"<td>";
        echo"".$row[1];
        echo"</td>";
        echo"</tr>";
        echo"<tr>";
        echo"<td>";
        echo"mobileno= ";
        echo"</td>";
        echo"<td>";
        echo"".$row[2];
        echo"</td>";
        echo"</tr>";
        echo"<tr>";
        echo"<td>";
        echo"address= ";
        echo"</td>";
        echo"<td>";
        echo"".$row[3];
        echo"</td>";
        echo"</tr>";
        echo"<tr>";
        echo"<td>";
        echo"role= ";
        echo"</td>";
        echo"<td>";
        echo"".$row[4];
        echo"</td>";
        echo"</tr>";
        
        if($row[4]=='cu'){
            
        }else{
            
        
        echo"<tr>";
        echo"<td>";
        echo"vehicle no= ";
        echo"</td>";
        echo"<td>";
        echo"".$row[5];
        echo"</td>";
        echo"</tr>";
        echo"<tr>";
        echo"<td>";
        echo"licence no= ";
        echo"</td>";
        echo"<td>";
        echo"".$row[6];
        echo"</td>";
        echo"</tr>";
            
        }
        echo"</table>";
        
        
    }

    
    
?>
