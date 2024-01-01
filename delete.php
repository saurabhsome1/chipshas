<?php

include("connection.php");

$ID = $_GET['ID'];

$query = "DELETE FROM form WHERE ID = '$ID'";
$data = mysqli_query($conn,$query);

if($data)
{
    echo "<script>alert('record Deleted')</script>";
    ?>

<meta http-equiv="refresh" content="0; url =http://localhost/crud/display.php" />

    <?php
}
else
{
    echo "<script>alert('faild to Delete')</script>";
}
?>