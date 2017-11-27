<!DOCTYPE html>
<html lang=en-us>
	<head>
		<title>Trang chủ</title>
	</head>
	<style>
	table, th, td, tr {
		border: 1px solid black;
		border-collapse: collapse;
	}
	</style>
	<body>
		<h1 style="font-size:30px">WIRE FRAME</h1>
		<table style="width:100%">
			<tr>
				<th></th>
				<td><form action="" method="POST">
				<span title="input"><pre style="font-size:14px">Name:       <input type=text style="width:400px" name="name" required>   <input type=submit value=SEND style="width:60px"></input></span>
				<p style="font-size:14px">Message:    <input name="msg" type=text style="width:400px;height:100px" required></p></pre></form></td>
			</tr>
			<tr>
				<th><center>Name</center></th>
				<td id="1"></td>
				<td><center>Date</center></td>
			</tr>
			<tr><th><center>Name</center></th>
				<td id="2"></td>
				<td><center>Date</center></td>
			</tr>
			<tr><th><center>Name</center></th>
				<td id="3"></td>
				<td><center>Date</center></td>
			</tr>
		</table>
		<?php
		?>
	</body>
</html>
		
