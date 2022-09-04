<?php
include 'connection.php';

$find_count = mysqli_query("SELECT*FROM hits_count");

while($row = mysqli_fetch_assoc($find_count))
{
	
		$current_counts =$row['count'];
		$new_count = $current_counts+1;
		$update_count = mysqli_query ("UPDATE `newvote` . `hits_count` SET `count`= $new_count");
	
	echo $new_count;
}

?>