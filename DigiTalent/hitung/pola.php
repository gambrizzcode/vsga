<!DOCTYPE html>
<html>
<head>
	<title>Pola</title>
</head>
<body>

<form action="jadipola.php" method="post">
	<table>
		<tr>
			<td>Angka</td>
			<td> : </td>
			<td><input type="text" name="angka"></td>
		</tr>
		<tr>
			<td>Pola Bangun</td>
			<td> : </td>
			<td>
				<select name="pola">
					<option value="1">Segitiga</option>
					<option value="2">Pyramid</option>
					<option value="3">Belah Ketupat</option>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="submit" value="SUBMIT"></td>
		</tr>
	</table>
</form>

</body>
</html>