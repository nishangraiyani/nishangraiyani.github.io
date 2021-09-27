<?php
$con=mysqli_connect("localhost", "root", "","detsdb") or die(mysqli_error($conn));

$result=mysqli_query($con,"SELECT * FROM tbluser");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Daily Expense Tracker || Add Expense</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/datepicker3.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  
  <!--Custom Font-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
   <body >

  <?php include_once('includes/admin-sidebar.php');?>

<table border='5'  class="panel panel-default" style="background-color: rgba(1, 19, 19, 0.6);
    border-radius: 12px;
    border: 1px solid rgba(209, 213, 219, 0.3);
    display: grid;
    border-radius: 55px;
    backdrop-filter: blur(11px);
  align-items: center;
  justify-content: center;
  height: auto;
 width: auto;
 color: white;
">
<tr>
<th>ID</th>
<th>Fullname</th>
<th>Email</th>
<th>Mobile no.</th>
<th>Registerd Date</th>
</tr>";

<?php
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['FullName'] . "</td>";
  echo "<td>" . $row['Email'] . "</td>";
  echo "<td>" . $row['MobileNumber'] . "</td>";
  echo "<td>" . $row['RegDate'] . "</td>";
  echo '<td><a href="delete.php?id='.$row['id'].'">Delete</a></td>';
  echo "</tr>";
}

echo "</table></div>";


?>
</div><!--/.main-->
  
<script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/chart.min.js"></script>
  <script src="js/chart-data.js"></script>
  <script src="js/easypiechart.js"></script>
  <script src="js/easypiechart-data.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/custom.js"></script>
  
</body>
</html>