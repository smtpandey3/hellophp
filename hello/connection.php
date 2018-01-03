<?php
$servername = "localhost";
$username = "root";
$password = "";
$database   = "client";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}
else {
    echo "Connected successfully <br>";
}
$sql = "SELECT *  FROM clientdetail;";
$result = $conn ->query($sql);
$num_rows = mysqli_num_rows($result);
if($num_rows>0){
while ($row = $result->fetch_assoc()) {
    echo "id: ".$row['client_id']."  Name: ".$row["client_name"]."<br>";
}
}
else{
    echo "0 Results found";
}
//if(!$result){;
//    echo $result;
//    // output data of each  row 
////    while ($row = $result -> fetch_assoc()){
////        echo "id: ".$row["client_id"]." - Name: ".$row["client_name"]."<br>";
////    }
//}
//    else{
//        echo "0 results";
//    }
$conn ->close();
?>

