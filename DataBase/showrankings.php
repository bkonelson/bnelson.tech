<?php

$link =  new mysqli("localhost", "root", "Turkey1000","Median_Income");
 
// Check connection
if(mysqli_connect_error()){
    die("Could not connect: " . mysqli_connect_error());
	echo "could not connect";
}

$sql = "SELECT City, State, Median_Income, Price_per_sqft, BPTL_Rank FROM bptl ORDER BY bptl.BPTL_Rank ASC";
$result = $link->query($sql);
echo "<table> 
	<tr>
		<th>City</th>
		<th>State</th>
		<th>Average Income</th>
		<th>Price/sqft</th>
		<th>Rank (701 total)</th>
	</tr>";
if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		echo "<tr><td>".$row["City"]."</td><td>".$row["State"]."</td><td>".$row["Median_Income"]."</td><td>".$row["Price_per_sqft"]."</td><td>".$row["BPTL_Rank"]."</td></tr>";	
	}
}
echo "</table>";	
$link->close();
?>