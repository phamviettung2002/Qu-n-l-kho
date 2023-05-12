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
	<?php 
		require_once ("models/model.php");
		session_start();
		$invoicelist = new Model();
		$invoices = $invoicelist -> getinvoicelist();
		
    ?>
	
	<div class="container-fluid" style = "padding-left: 30px; padding-right: 30px; ">
		<div class ="row">
			<div class = "col title" style="text-align: center; padding-top: 50px; padding-bottom:50px">
				<h1>Invoice List of <?php  echo $_SESSION['username'] ?></h1>
				
			</div>
	
		</div>

		<div class ="row">
			<div class="col">
				<table border="1" width="100%">
					<tr style="text-align: center;">
						<th>Phiếu</th>
                        <th>Tên</th>
						<th>Số lượng</th>
					</tr>
				<?php
				foreach ($invoices as $invoice)
					echo "
						<tr>
							<td style='text-align: center;'>".$invoice->getnameinvoice()."</td>
                            <td>".$invoice->getnameproduct()."</td>
							<td style='text-align: center;'>".$invoice->getquantityproduct_choice()."</td>
							
						</tr>
					";
				?>
				</table>
			</div>

		</div>

	</div>

	
	

</body>

</html>