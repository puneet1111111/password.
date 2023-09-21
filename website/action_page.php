<?php
if(isset($_POST['submit'])){
    $AgentId = $_POST['AgentId'];
    $Password =$_POST['Password'];

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'rava';

    $conn = mysqli_connect($host, $user, $pass, $dbname);

    $sql = "INSERT INTO detail(AgentId,Password) values ('$AgentId','$Password')";
    mysqli_query($conn,$sql);
    

}

?>