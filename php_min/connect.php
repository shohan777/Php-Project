<?php
// Create connection

function conn()
{
$con=mysqli_connect("sql200.byethost33.com","b33_14425459","66254442", "b33_14425459_shohan");


// Check connection
if (!$con)
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else
  {
      $result = mysqli_query($con,"SELECT * FROM person");
  if($result==0)
{
	echo "error";
	}
	else
	{
echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Salary</th>
<th>email</th>
</tr>";
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['first_name'] . "</td>";
  echo "<td>" . $row['last_name'] . "</td>";
  echo "<td>" . $row['salary'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
}
  }

 }
 return conn();

?>