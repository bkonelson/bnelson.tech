&lt;?php<br />
<br />
$link =  new mysqli("localhost", "user", "password","database");<br />
 <br />
// Check connection<br />
if(mysqli_connect_error()){<br />
    die("Could not connect: " . mysqli_connect_error());<br />
	echo "could not connect";<br />
}<br />
<br />
$user_input = strtolower($_GET['q']);<br />
$sql = "SELECT City, State, Median_Income, Price_per_sqft, BPTL_Rank FROM bptl";<br />
$result = $link-&gt;query($sql);<br />
echo "&lt;table&gt; <br />
	&lt;tr&gt;<br />
		&lt;th&gt;City&lt;/th&gt;<br />
		&lt;th&gt;State&lt;/th&gt;<br />
		&lt;th&gt;Average Income&lt;/th&gt;<br />
		&lt;th&gt;Price/sqft&lt;/th&gt;<br />
		&lt;th&gt;Rank (701 total)&lt;/th&gt;<br />
	&lt;/tr&gt;";<br />
if ($result-&gt;num_rows &gt; 0) {<br />
	while ($row = $result-&gt;fetch_assoc()) {<br />
		if (strlen($user_input) == 1 || strlen($user_input) == 2) {<br />
			if (strpos(strtolower($row["City"]),$user_input) === 0) {<br />
				echo "&lt;tr&gt;&lt;td&gt;".$row["City"]."&lt;/td&gt;&lt;td&gt;".$row["State"]."&lt;/td&gt;&lt;td&gt;".$row["Median_Income"]."&lt;/td&gt;&lt;td&gt;".$row["Price_per_sqft"]."&lt;/td&gt;&lt;td&gt;".$row["BPTL_Rank"]."&lt;/td&gt;&lt;/tr&gt;";<br />
			}<br />
		}<br />
		else {<br />
			if (strpos(strtolower($row["City"]),$user_input) !== false) {<br />
				echo "&lt;tr&gt;&lt;td&gt;".$row["City"]."&lt;/td&gt;&lt;td&gt;".$row["State"]."&lt;/td&gt;&lt;td&gt;".$row["Median_Income"]."&lt;/td&gt;&lt;td&gt;".$row["Price_per_sqft"]."&lt;/td&gt;&lt;td&gt;".$row["BPTL_Rank"]."&lt;/td&gt;&lt;/tr&gt;";<br />
			}<br />
		}<br />
	}<br />
}<br />
echo "&lt;/table&gt;";	<br />
$link-&gt;close();<br />
?&gt;