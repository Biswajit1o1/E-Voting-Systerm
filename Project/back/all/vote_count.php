<html>
<head>
	<title>Vote Count
	</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<style>
    body {
        padding: 0px;
        margin: 0;
		background: url(b1.jpg) no-repeat center;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    
    table {
        position: absolute;
        left: 50%;
        top: 30%;
        transform: translate(-50%, -50%);
        border-collapse: collapse;
        width: 800px;
        height: 200px;
		border: 1px solid #bdc3c7;
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    .t2 {
        position: absolute;
        left: 50%;
        top: 70%;
        transform: translate(-50%, -50%);
        border-collapse: collapse;
        width: 800px;
        height: 200px;
        border: 1px solid #bdc3c7;
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
	
    tr {
        transition: all .2s ease-in;
        cursor: pointer;
    }
    
    th{
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
		background-color: #74b9ff;
    }
	
    td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
		background-color: #c8d6e5;
    }
    
    #header {
        background-color: #74b9ff;
        color: #fff;
    }
    
    h1 {
        font-weight: 600;
        text-align: center;
        background-color: #74b9ff;
        color: #fff;
        padding: 10px 0px;
    }
    
    tr:hover {
        background-color: #f5f5f5;
        transform: scale(1.02);
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    
    @media only screen and (max-width: 768px) {
        table {
            width: 90%;
        }
    }
</style>
<h1>Current Vote Count</h1>
<table>
<tr id="header">
	<th>National People's Party</th>
	<th>Communist Party of India</th>
	<th>Indian National Lok Dal</th>
	<th>Rashtriya Lok Dal</th>
</tr>
<?php	
	include("connection.php");
	$query ="SELECT * FROM umbrella ,cycle ,candel ,chair ";

	$data=mysqli_query($conn,$query);
	
	
	
	while($result=mysqli_fetch_assoc($data))
	{
		echo "
		<tr>
			<td>".$result['umbrella']."</td>
			<td>".$result['cycle']."</td>
			<td>".$result['candel']."</td>
			<td>".$result['chair']."</td>
		</tr>
		";
	}
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<h1>Previous year Vote Count</h1>
<table class="t2">
	<tr id="header">
		<th>National People's Party</th>
		<th>Communist Party of India</th>
		<th>Indian National Lok Dal</th>
		<th>Rashtriya Lok Dal</th>
	</tr>
	<tr>
		<td>10435</td>
		<td>43432</td>
		<td>95445</td>
		<td>84356</td>
	</tr>
</table>
</body>
</html>