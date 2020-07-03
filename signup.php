<?php
    
    $name=$_REQUEST['name'];
    $usr=$_REQUEST['usr'];
    $mno=$_REQUEST['mno'];
    $addr=$_REQUEST['addr'];
    $role=$_REQUEST['role'];
    $vno=$_REQUEST['vno'];
    $lno=$_REQUEST['lno'];
    $pwd=$_REQUEST['pwd'];
   
    $connect=pg_connect("host=localhost user=postgres dbname=nccproject password=santoshsahu");
    pg_query($connect,"insert into registration values('$name','$usr','$mno','$addr','$role','$vno','$lno')");
    pg_query($connect,"insert into logindetails values('$usr','$pwd','$role')");
        
    ?>


