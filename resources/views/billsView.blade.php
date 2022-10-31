<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Agreement</title>
</head>
<body>

<Center><div class="container" style="background-color:yellow;margin-bottom: 10px;padding-top: 20px;padding-bottom: 20px;box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;border-radius: 6px;"><h4>Invoice Bill</h4></div></Center>

<div class="container">

Reference : <span><b><?php echo $_GET['id'];?></b></span><br>
House Reference : <span><b><?php echo $_GET['HouseRef'];?></b></span><br>
Name of Tenant : <span><b><?php echo $_GET['Tenants'];?></b></span><br>
Email : <span><b></b><?php echo $_GET['Email'];?></span><br>
status : <span><b></b><?php echo $_GET['status'];?></span><br>
price : <span><b></b><?php echo $_GET['price'];?></span><br>


</div>


</body>
</html>