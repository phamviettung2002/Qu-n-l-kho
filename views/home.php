<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0 , shrink-to-fit=no">
	<title>ToYoTa VN</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="file.css/home.css">
</head>

<body>
	
	
	<div class="container-fluid" style = "padding-left: 30px; padding-right: 30px;">
		<div class ="row">
			<div class = "col title" style="text-align: center; padding-top: 50px;">
				<h1>Product List of <?php echo $_SESSION['username'] ?></h1>
				
			</div>
	
		</div>

		<div class ="row">
			<div class = "col-md-6" style="padding-top: 20px; padding-bottom: 20px;">
				<a href = "createproduct.php" ><button class = "btn-create" style="background-color: #21dd97; border:0px; border-radius: 5px; height: 100%">Create Product</button></a>
			</div>

			<div class = "col-md-6" style="padding-top: 20px; padding-bottom: 20px; text-align: right;">
				<button style="background-color: red; border:0px; border-radius: 5px">
					<form action="" method="post">
						<input class="btn btn-outline-light" style="border: 0px;  " type="submit" name="logout" value="Log out">
					</form>
				</button>
			</div>
		</div>

		<div class ="row">
			<div class="col">
				<table border="1" width="100%">
					<tr style="text-align: center;">
						<th>Tên</th>
						<th>Số lượng</th>
						<th>Xuất kho</th>
						<th></th>
						<th></th>
						<th></th>
					</tr>
				<?php
				foreach ($products as $product)
					echo "
						<tr>
							<td>".$product->getnameproduct()."</td>
							<td>".$product->getquantityproduct()."</td>
							<td style = 'text-align: center'><a href = 'index.php?idproduct=".$product->getidproduct()."'>Chọn</a></td>
							<td style = 'text-align: center'><a href = 'updateproduct.php?idproduct=".$product->getidproduct()."'>Update</a></td>
							<td style = 'text-align: center'><a href = 'removeproduct.php?idproduct=".$product->getidproduct()."'>Remove</a></td>
							<td style = 'text-align: center'><button name='button' value='OK' type='button' style = 'background-color: #fbff00; border:0px; border-radius: 5px;' style =>Cảnh báo</button></td>
						</tr>
					";
				?>
				</table>
			</div>

		</div>

		<div class ="row">
			<div class = "col" style="padding-top: 40px; padding-bottom: 20px; height: 110px">
				<a href = "listinvoice.php"><button class = "btn-create" style="background-color: #219bdd; border:0px; border-radius: 5px; height: 100%">Danh sách phiếu xuất kho</button></a>
			</div>
		</div>
		



	</div>

	
	

</body>

</html>