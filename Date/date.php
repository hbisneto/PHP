<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<form class="text-center border border-light p-5" action="#!">
		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<label class="input-group-text" for="inputGroupSelect01">Selecione Uma Data:</label>
			</div>
			<select name="MyOptions" size="1" class="custom-select" id="inputGroupSelect01">
		</div>
<?php

$nova_data = new DateTime();
$Year = date("Y");
$Month = $nova_data->format("m");

for ($i = 0; $i <=3; $i++)
{
	$date = date('F/Y', mktime(0,0,0,$i + $Month,1, $Year));
	echo "<option value='$date'>" .$date.  "</option>";
}
?>
</form>
</body>
</html












