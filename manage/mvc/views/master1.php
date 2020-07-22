<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">

h1{
	color:red;
}

ul{
	text-align: center;
}


</style>
</head>
<body>
	<div>
		<?php require_once "./mvc/views/blocks/header.php" ?>
	</div>
	<div>
		<?php require_once "./mvc/views/pages/".$data["page"].".php"; ?>
	</div>
	</div>
</body>
</html>