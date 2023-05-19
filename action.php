
<html>
<body>


 <?php

 $name = $_POST["name"];
 $age = $_POST["age"];
 $address = $_POST["address"];
 $school = $_POST["school"];
 if (!is_null($name) && !is_null($age) && !is_null($address)&& !is_null($school)){
 $host = "sql309.epizy.com";
 $username = "epiz_31383922";
 $password = "NbfeJzy0pRF";
 $db = "epiz_31383922_data";
 $conn = mysqli_connect($host,$username, $password, $db);
 $sql = "INSERT INTO `data` (`name`, `age`, `address`,`school`)
 VALUES ('$name', '$age', '$address','$school')";
 $result = mysqli_query($conn, $sql);
 echo '<table  style="width:100%; border: 1px solid;">';
 $sql = "SELECT * FROM `data`";
 $result = mysqli_query($conn, $sql);
 $colorit= "#7FB77E";
if (mysqli_num_rows($result) > 0) {
 // output data of each row
 while($row = mysqli_fetch_assoc($result)) {
   echo "<tr bgcolor=$colorit>";
   echo "<td> Name : " . $row["name"]. " </td><td> Age : " . $row["age"]. " </td><td> Address : " . $row["address"]. " </td><td> School : ".$row["school"]. "</td>";
   echo "</tr>";
   if($colorit == "#7FB77E"){
     $colorit = "#B1D7B4";
   }
   else{
     $colorit = "#7FB77E";
   }
 }
} else {
 echo "0 results";
}

mysqli_close($conn);



 }

 ?>
</body>
</html>
