<?php
// $con=mysqli_connect("localhost", "root", "","detsdb") or die(mysqli_error($conn));

// $result=mysqli_query($con,"SELECT * FROM tbluser");

// echo "<table border='1'>
// <tr>
// <th>ID</th>
// <th>Fullname</th>
// <th>Email</th>
// <th>Mobile no.</th>
// <th>Registerd Date</th>
// </tr>";

// while($row = mysqli_fetch_array($result)) {
//   echo "<tr>";
//   echo "<td>" . $row['id'] . "</td>";
//   echo "<td>" . $row['FullName'] . "</td>";
//   echo "<td>" . $row['Email'] . "</td>";
//   echo "<td>" . $row['MobileNumber'] . "</td>";
//   echo "<td>" . $row['RegDate'] . "</td>";
//   echo '<td><a href="delete.php?id='.$row['id'].'">Delete</a></td>';
//   echo "</tr>";
// }

// echo "</table>";

include_once('includes/admin-sidebar.php');
?>
