<?php
$servername = "localhost";
$username = "mamp";
$password = "1234";
$dbname = "my_knorr";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "SELECT food FROM list_data ";
$result = $conn->query($sql);
?>
<DOCTYPE>
<html>
<head>

</head>

<body>
<?php
$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str));
?>

</body>
</html>

<form>
<input type="name">
</form>