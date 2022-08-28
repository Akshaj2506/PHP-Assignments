<!-- <?php 
	$conn = mysqli_connect('localhost','root','','collegedatabase');
	$file = fopen('table.txt','r');
	while (!feof($file)) 
	{
		$getTextLine = fgets($file);
		$explodeLine = explode(" | ",$getTextLine);	
		list($name, $size, $resolution, $operatingsystem) = $explodeLine;
		$query = "insert into laptop_details values('".$name."','".$size."','".$resolution."','".$operatingsystem."')";
		mysqli_query($conn,$query);
	}
	echo "Details successfully added"; 
	fclose($file);
?> -->
<?php
	$conn = mysqli_connect('localhost','root','','collegedatabase');
	if ($conn -> connect_error) {
		die("Error ".$conn -> connect_error);
	}
	$file = fopen('product_info.txt','w');
	$sql = "SELECT * FROM product_info";
	$result = $conn -> query($sql);
	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		$id = $row["pid"];
		$name = $row["name"];
		$price = $row["price"];
		$qty = $row["qty"];
		$comp = $row["mfg_comp_name"];
		fwrite($file, $id." | ".$name." | ".$price." | ".$qty." | ".$comp."\n");
	}
	echo "Added content successfully to txt file";
?>
