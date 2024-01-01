<?php
session_start();
//echo "welcome " .$_SESSION['username'];
?>
<html>
    <head>
    <title>Display</title>
    <style>
        body
        {
            background: #D071f9;
        }
        table
        {
            background-color: white;
        }
        .update, .Delete
        {
            background-color: green;
            color: white;
            border: 0;
            outline: none;
            border-radius: 5px;
            height: 22px;
            width: 80px;
            font-weight: bold;
            cursor: pointer;
        }
        .Delete
        {
            background-color: red;
        }
    </style>
    </head>
</html>














<?php
include("connection.php");
error_reporting(0);

$userprofile = $_SESSION['username'];

if($userprofile == true)
{

}
else
{
    header('location:login.php');
}
$query = "SELECT * FROM form";
$data = mysqli_query($conn, $query); 

$total = mysqli_num_rows($data);


 
//echo $total;

if($total != 0)
{
    ?>

    <h2 align="center"><mark>Displaying All Recoeds</mark></h2>
    <center> <table border="1px" cellspacing="7" width="100%">
        <tr>
        <th width="5%">ID</th>  
        <th width="5%">image</th>    
        <th width="8%">first name</th>
        <th width="8%">last name</th>
        <th width="10%">Gender</th>
        <th width="10%">phone</th>
        <th width="10%">caste</th>
        <th width="10%">language</th>
        <th width="22%">gmail</th>
        <th width="22%">Address</th>
        <th width="15%">operations</th>

        </tr>

    <?php
    while($result = mysqli_fetch_assoc($data))
    {
       echo "<tr>
             <td>".$result['ID']."</td>
             <td><img src= '".$result['stdimg']."' height='100px' width='100px' ></td>
             <td>".$result['fname']."</td>
             <td>".$result['lname']."</td>
             <td>".$result['Gender']."</td>
             <td>".$result['phone']."</td>
             <td>".$result['caste']."</td>
             <td>".$result['language']."</td>
             <td>".$result['gmail']."</td>
             <td>".$result['Address']."</td>
                <td><a href='update_design.php?ID=$result[ID]'><input
                 type='submit' value='edit/updat' class='update'></a>

                 
                <a href='Delete.php?ID=$result[ID]'><input
                type='submit' value='Delete' class='Delete' onclick = 'return check_delete()'></a></td>
            </tr>
                ";
    }
}
else
{
    echo "no record found";
}

?>
 </table>
 </center>

 <a href="logout.php"><input type="submit" name="" value="logout" style="background: blue; color: white; height: 35px; width: 100px; margin-top: 20px; font-size: 18px; border: 0; border-radius: 5px; cursor: pointer;"></a>

 <script>
    function check_delete()
    {
        return confirm('are you sure you want to delete this deta?')
    }
 </script>
 