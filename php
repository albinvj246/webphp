//search

<?php
$conn = mysqli_connect("localhost", "root", "", "details");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
<form action="#" method="POST">
    name : <input type="text" name="namee">
    <input type="submit" value="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namee = $_POST['namee'];
    
    $sql = "SELECT * FROM details WHERE namee LIKE '%$namee%'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        while ($row = $result->fetch_assoc()) {
            echo $row['namee'] . ", " . $row['email'] . ", " . $row['phonenumber'] . ", " . $row['addresss'] . "<br>";
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>


//database connection
<?php
$conn = mysqli_connect("localhost","root","","details");
if(!$conn){
    die("connection failed".mysqli_connect_error());
}
$nam=$_POST['namee'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];
$add=$_POST['addresss'];

$sql= "INSERT INTO details (namee,email,phonenumber,addresss) values ('$nam','$email','$phonenumber','$add')";
if(mysqli_query($conn,$sql))
{
    echo "information successfully added";
    ?><a href="phpp.html">enter/search</a><?php
}
else
{
    echo "error". mysqli_error($conn);
}
mysqli_close($conn);
?>
