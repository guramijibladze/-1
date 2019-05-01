<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="index.php" method="POST">
		<p>სახელი</p>
		<p>
		<input type="text" name="name">
		</p>
		<p>გვარი</p>
		<p>
		<input type="text" name="lastname">
		</p>
		<p>ასაკი</p>
		<p>
		<input type="text" name="age">
		</p>
		<p>სქესი</p>
		<select name="gender">
			<option>აირჩიეთ სქესი</option>
			<option value="1">მამრობითი</option>
			<option value="2">მდედრობითი</option>
		</select>
		<button>რეგისტრაცია</button>
	</form>

</body>
</html>