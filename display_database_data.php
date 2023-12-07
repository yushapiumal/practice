<?php
include_once 'connect_database.php';
?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>


</body>

<?php
// access data
$sql="SELECT * FROM users;";
$result = mysqli_query($connect,$sql); //add variable in  connected database and selected table
$check_result = mysqli_num_rows($result); // save num of rows in database for variable

// output data
if($check_result>0) // check have arows in database
{
    while($row = mysqli_fetch_assoc($result))
    {
     echo $row['email']."<br>";
    }
}
?>
</html>