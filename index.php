<?php
$server="localhost";
$username="Harshad";
$password="Harshad041104";
$database="maindb";

$conn=mysqli_connect($server,$username,$password,$database);
  
  if($_SERVER['REQUEST_METHOD']=="POST"){
    $id=$_POST['id'];
    $sname=$_POST['name'];
    $spassword=$_POST["password"];
    $Gender=$_POST['Gender'];
    $email=$_POST['email'];
    $corues=$_POST['Corues'];
   
    $sql="INSERT INTO `data` (`id`, `name`, `password`, `gender`, `email`, `course`) VALUES ('$id', '$sname', '$spassword', '$Gender', '$email', '$corues')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('The data is inseted in database');</script>";
    }else{
        echo "<script>alert('The data is not inseted in database);</script>". mysqli_error($conn);
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Ditels</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<center>
<div class="contener" id="datafrom">
<form action="" method="post">

<h1>Form Ditels</h1>
<table>
<tr><td>
<label>1.ID </label></td><td><label>:</label></td>
<td>
<input type="number" name="id" id="id" required>
</td>
</tr>
<tr>
<td>
<label>2.Name</label>
</td>
<td><label>:</label></td><td><input type="text" name="name" id="name" required></td>
</tr>
<tr>
<td>
<label>3.Password</label></td><td>:</td><td><input type="password" name="password" id="password" required></td>
</tr>
<tr>
<td>
<label>4.Gender</label></td><td><label>:</label></td><td><input type="radio" name="Gender" id="Gender" value="Male"><label>Male</label><input type="radio" name="Gender" id="Gender" value="Female"><label>Female</label><input type="radio" name="Gender" id="Gender" value="Other"><label>Other</label></td>
</tr>
<tr>
<td><label>5.Email ID</label></td><td><label>:</label></td><td><input type="email" name="email" id="email" required></td>
</tr>
<tr>
<td>
<label>6.Corues</label><td><label>:</label></td>
<td>
<select id="Corues" name="Corues">
<option value="Select">Select</option>
<option value="BCA">BCA</option>
<option value="BBA">BBA</option>
<option value="MCA">MCA</option>
<option value="BSCIT">BSCIT</option>
</select>
</td>
</tr>
<tr><th>
<input type="submit" name="submit" id="submit">
</th><td></td>
<td><button id="formtable" name="table">Table</button></td>
</tr>
</table>
</form>
</div>
<div class="contener1" id="table" >
<?php
      $sql="SELECT * FROM `data`";
      $result=mysqli_query($conn,$sql);
      $num=mysqli_num_rows($result);
      echo "<center><table>";
      echo "<tr><h2>Student Table </h2></tr>";
      echo "<tr><td>No.</td><td>ID</td><td>Name</td><td>Password</td><td>Gender</td><td>Email ID</td><td>Corues</td></tr>";
      if($result->num_rows>0){
          for($i=1;$i<=$num;$i++){
          while($row=$result->fetch_assoc()){
              echo "<tr>
              <td>".$i."</td><td>". $row['id']."</td><td>". $row['name']."</td><td>".$row['password']."</td><td>". $row['gender']."</td><td>". $row['email']."</td><td>". $row['course']."</td>
              </tr>";
              $i++;
          }
          }
          
          }
      echo "</table></center>";
    ?><br>
    <button id="Formbutton">Form</button>
</div>
</center>   
<script src="script.js"></script>
</body>
</html>