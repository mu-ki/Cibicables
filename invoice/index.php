<?php

	if ( ! session_id() ) @ session_start();

?><!DOCTYPE HTML>
<html>
<head>
	<title>Invoice generator</title>

	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">

	<style type="text/css">
		.form-control {
			border: 1px solid black;
		}
		.invoicePopup {
		    position: absolute;
		    height: 90%;
		    width:75%;
		    float: left;
		    background-color: #fff;
		    border: 1px solid red;
		    vertical-align: middle; 
		    top:20px;
		}
	</style>

</head>
<body>


	<header class="container">
		<div class="row">
			<div class="col-md-6">
				<h1>CIBI CABLES - INOVICE</h1>
			</div>
			
			<div class="col-md-2" style="margin-top: 15px;">
				<div class="form-group">
					<input value="<?php echo isset($_SESSION['gstnumber']) ? $_SESSION['gstnumber'] : '' ?>" type="text" class="form-control gstnumber" id="gstnumber" placeholder="GST Number">
				</div>
			</div>
			<div class="col-md-2" style="margin-top: 15px;">
				<div class="form-group">
					<input value="<?php echo isset($_SESSION['invoiceNumber']) ? $_SESSION['invoiceNumber'] : '' ?>" type="text" class="form-control invoiceNumber" id="invoiceNumber" placeholder="Invoice Number">
				</div>
			</div>
			<div class="col-md-2" style="margin-top: 15px;">
				<div class="form-group">
					<input value="<?php echo isset($_SESSION['billingDate']) ? $_SESSION['billingDate'] : '' ?>" type="date" class="form-control billingDate" id="billingDate">
				</div>
			</div>
		</div>
	</header><br>

	<div class="container">

		<div class="row">
			<div class="col-md-6">
				<div class="row well">
					<h2>Seller Details</h2><hr style="border-top: 1px solid #8c8b8b;">

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="organisation">Organisation:</label>
								<input value="<?php echo isset($_SESSION['organisation']) ? $_SESSION['organisation'] : '' ?>" type="text" class="form-control organisation" id="organisation" placeholder="Organisation">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="website">Website:</label>
								<input value="<?php echo isset($_SESSION['website']) ? $_SESSION['website'] : '' ?>" type="text" class="form-control website" id="website" placeholder="Website">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="bankName">Adress:</label>
								<input value="<?php echo isset($_SESSION['bankName']) ? $_SESSION['bankName'] : '' ?>" type="text" class="form-control bankName" id="bankName" placeholder="Adress">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="yourEmail">Email:</label>
								<input value="<?php echo isset($_SESSION['yourEmail']) ? $_SESSION['yourEmail'] : '' ?>" type="text" class="form-control yourEmail" id="yourEmail" placeholder="Your Email">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="yourPhone">Phone:</label>
								<input value="<?php echo isset($_SESSION['yourPhone']) ? $_SESSION['yourPhone'] : '' ?>" type="text" class="form-control yourPhone" id="yourPhone" placeholder="Your Phone">
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row well">
					<h2>Buyer Details</h2><hr style="border-top: 1px solid #8c8b8b;">

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="companyName">Buyer First Name:</label>
								<input value="<?php echo isset($_SESSION['companyName']) ? $_SESSION['companyName'] : '' ?>" type="text" class="form-control companyName" id="companyName" placeholder="Company Name">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="clientName">Buyer Second Name:</label>
								<input value="<?php echo isset($_SESSION['clientName']) ? $_SESSION['clientName'] : '' ?>" type="text" class="form-control clientName" id="clientName" placeholder="Client Full Name">
							</div>
						</div>	
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="clientAddress">Address:</label>
								<input value="<?php echo isset($_SESSION['clientAddress']) ? $_SESSION['clientAddress'] : '' ?>" type="text" class="form-control clientAddress" id="clientAddress" placeholder="Address">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="clientPhone">Phone</label>
								<input value="<?php echo isset($_SESSION['clientPhone']) ? $_SESSION['clientPhone'] : '' ?>" type="text" class="form-control clientPhone" id="clientPhone" placeholder="Phone">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="clientEmail">Email:</label>
								<input value="<?php echo isset($_SESSION['clientEmail']) ? $_SESSION['clientEmail'] : '' ?>" type="text" class="form-control clientEmail" id="clientEmail" placeholder="Email">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row well articles">
			<h2>Product Details <small class="pull-right">Total: &#8377;<span class="total">0.00</span></small></h2><hr style="border-top: 1px solid #8c8b8b;">
		
			<div class="row">
				<div class="col-md-4">
					Items
				</div>
				<div class="col-md-2">
					Serial No
				</div>
				<div class="col-md-2">
					Unit Price
				</div>
				<div class="col-md-1">
					Quantity
				</div>
				<div class="col-md-2">
					Line Total
				</div>
				<div class="col-md-1">
				</div>
			</div>
		
			<div class="row item">
				<div class="col-md-4">
					<div class="form-group">
						<input value="<?php echo isset($_SESSION['arrArticles'][0]['item']) ? $_SESSION['arrArticles'][0]['item'] : '' ?>" type="text" class="form-control articlesName" placeholder="Item">
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<input value="<?php echo isset($_SESSION['arrArticles'][0]['date']) ? $_SESSION['arrArticles'][0]['date'] : '' ?>" type="text" class="form-control articleDate" placeholder="Details">
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<input value="<?php echo isset($_SESSION['arrArticles'][0]['unitPrice']) ? $_SESSION['arrArticles'][0]['unitPrice'] : '' ?>" type="number" class="form-control unitPrice" placeholder="Unit Price" value="" min="0">
					</div>
				</div>
				<div class="col-md-1">
					<div class="form-group">
						<input value="<?php echo isset($_SESSION['arrArticles'][0]['quantity']) ? $_SESSION['arrArticles'][0]['quantity'] : '' ?>" type="number" class="form-control quantity" placeholder="0" value="" min="0">
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<input value="<?php echo isset($_SESSION['arrArticles'][0]['lineTotal']) ? $_SESSION['arrArticles'][0]['lineTotal'] : '' ?>" type="text" class="form-control linetotal" placeholder="Line Total" value="0">
					</div>
				</div>
				<div class="col-md-1">
				</div>
			</div>

			<?php

				$rows = isset($_SESSION['arrArticles']) ? count($_SESSION['arrArticles']) : 1;

				if( $rows > 1 ) {
					for($i=1; $i<count($_SESSION['arrArticles']); $i++) {
						echo '<div class="row item"><div class="col-md-4"><div class="form-group"><input value="'.$_SESSION['arrArticles'][$i]['item'].'" type="text" class="form-control articlesName" placeholder="Item"></div></div><div class="col-md-2"><div class="form-group"><input value="'.$_SESSION['arrArticles'][$i]['date'].'" type="date" class="form-control articleDate" placeholder="Date"></div></div><div class="col-md-2"><div class="form-group"><input value="'.$_SESSION['arrArticles'][$i]['unitPrice'].'" type="number" min="0" class="form-control unitPrice" placeholder="Unit Price" value=""></div></div><div class="col-md-1"><div class="form-group"><input value="'.$_SESSION['arrArticles'][$i]['quantity'].'" type="number" min="0" value="" class="form-control quantity" placeholder="0"></div></div><div class="col-md-2"><div class="form-group"><input value="'.$_SESSION['arrArticles'][$i]['lineTotal'].'" type="text" class="form-control linetotal" placeholder="Line Total" value="0"></div></div><div class="col-md-1"><button class="btn btn-danger deleteItemBlock">&times;</div></div>';
					}					
				}

			?>
			
			<div class="row itemBeforeThis">
				<div class="col-md-12 addNewItem" style="background-color:#fff6d1;text-align: center;border-style: dotted dotted dotted dotted;cursor:pointer;border-radius: 10px;">
					<h4>+ Click to add more items</h4>
				</div>
			</div>

		</div>

		<div class="row">
			<div class="col-md-6 well">
				<h2>Discount</h2><hr style="border-top: 1px solid #8c8b8b;">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<input value="<?php echo isset($_SESSION['discountAmount']) ? $_SESSION['discountAmount'] : '' ?>" type="text" class="form-control discountAmount" placeholder="Amount">
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 well">
				<h2>Tax <small class="pull-right">Final: &#8377;<span class="final">0.00</span></small></h2><hr style="border-top: 1px solid #8c8b8b;">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<input value="<?php echo isset($_SESSION['taxName']) ? $_SESSION['taxName'] : '' ?>" type="text" class="form-control taxName" placeholder="Tax">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input value="<?php echo isset($_SESSION['taxPercent']) ? $_SESSION['taxPercent'] : '' ?>" type="text" class="form-control taxPercent" placeholder="Percentage">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row well">
			<div class="col-md-12">
				<button class="btn btn-lg btn-primary btn-block generate"><i class="fa fa-print"></i> GENERATE INVOICE</button>
			</div>
		</div>

	</div>


	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-notify.min.js"></script>
	<script type="text/javascript" src="assets/js/all.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){

			var item_block = '<div class="row item"><div class="col-md-4"><div class="form-group"><input type="text" class="form-control articlesName" placeholder="Item"></div></div><div class="col-md-2"><div class="form-group"><input type="date" class="form-control articleDate" placeholder="Date"></div></div><div class="col-md-2"><div class="form-group"><input type="number" min="0" class="form-control unitPrice" placeholder="Unit Price" value=""></div></div><div class="col-md-1"><div class="form-group"><input type="number" min="0" value="" class="form-control quantity" placeholder="0"></div></div><div class="col-md-2"><div class="form-group"><input type="text" class="form-control linetotal" placeholder="Line Total" value="0"></div></div><div class="col-md-1"><button class="btn btn-danger deleteItemBlock">&times;</div></div>';

			
			function numberToCurrency(number) {
				number=number.toString();
				var afterPoint = '';
				if(number.indexOf('.') > 0)
				   afterPoint = number.substring(number.indexOf('.'),number.length);
				number = Math.floor(number);
				number=number.toString();
				var lastThree = number.substring(number.length-3);
				var otherNumbers = number.substring(0,number.length-3);
				if(otherNumbers != '')
				    lastThree = ',' + lastThree;
				var res = otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree + afterPoint;
				return res;
			}

			updateTotal();

			function updateTotal() {
				var sumTotal = 0
				var sumFinal = 0
				$('.item').each( function(index) {
					sumTotal = parseInt(sumTotal) + parseInt($( this ).find('.linetotal').val());
				});

				var discount = $('.discountAmount').val();
				console.log('Discounted anount' + discount);
				if(!isNaN(discount)){
					sumFinal = sumTotal - discount;
				}

				console.log(sumFinal);

				var tax = $('.taxPercent').val();
				if(!isNaN(tax)) {
					sumFinal = sumFinal + ((sumFinal*tax)/100);
				}
				
				if(!isNaN(sumTotal)) {
					$('.total').html(numberToCurrency(sumTotal));
					$('.final').html(numberToCurrency(sumFinal));
				}
			}

			$('.addNewItem').click(function(){
				$(item_block).insertBefore('.itemBeforeThis');
				updateTotal();
			});

			$('.articles').on('click','.deleteItemBlock',function(){
				$(this).parent().parent().remove();
				updateTotal();
			});

			$('.articles').on('click focus keyup change focusout','.linetotal',function(){
				var unitPrice = $(this).parent().parent().parent().find('.unitPrice').val();
				var quantity = $(this).parent().parent().parent().find('.quantity').val();
				var articlesName = $(this).parent().parent().parent().find('.articlesName').val();

				if(articlesName=='') {
					$(this).parent().parent().parent().find('.articlesName').css('border','1px solid red');
					$(this).parent().parent().parent().find('.articlesName').css('background-color','#ffeaea');
				} else {
					$(this).parent().parent().parent().find('.articlesName').css('border','1px solid black');
					$(this).parent().parent().parent().find('.articlesName').css('background-color','#fff');
				}

				if(unitPrice!='' && quantity!='') {
					var lineTotalVal = unitPrice * quantity;
					$(this).parent().parent().parent().find('.linetotal').val(lineTotalVal);
				}
				updateTotal();
			});

			$('.articles').on('click focus keyup change focusout','.quantity',function(){
				var unitPrice = $(this).parent().parent().parent().find('.unitPrice').val();
				var quantity = $(this).parent().parent().parent().find('.quantity').val();
				var articlesName = $(this).parent().parent().parent().find('.articlesName').val();

				if(articlesName=='') {
					$(this).parent().parent().parent().find('.articlesName').css('border','1px solid red');
					$(this).parent().parent().parent().find('.articlesName').css('background-color','#ffeaea');
				} else {
					$(this).parent().parent().parent().find('.articlesName').css('border','1px solid black');
					$(this).parent().parent().parent().find('.articlesName').css('background-color','#fff');
				}

				if(unitPrice!='' && quantity!='') {
					var lineTotalVal = unitPrice * quantity;
					$(this).parent().parent().parent().find('.linetotal').val(lineTotalVal);
				}
				updateTotal();
			});

			$('.articles').on('click focus keyup change focusout','.unitPrice',function(){
				var unitPrice = $(this).parent().parent().parent().find('.unitPrice').val();
				var quantity = $(this).parent().parent().parent().find('.quantity').val();
				var articlesName = $(this).parent().parent().parent().find('.articlesName').val();

				if(articlesName=='') {
					$(this).parent().parent().parent().find('.articlesName').css('border','1px solid red');
					$(this).parent().parent().parent().find('.articlesName').css('background-color','#ffeaea');
				} else {
					$(this).parent().parent().parent().find('.articlesName').css('border','1px solid black');
					$(this).parent().parent().parent().find('.articlesName').css('background-color','#fff');
				}

				if(unitPrice!='' && quantity!='') {
					var lineTotalVal = unitPrice * quantity;
					$(this).parent().parent().parent().find('.linetotal').val(lineTotalVal);
				}
				updateTotal();
			});

			$('.articles').on('keyup focus keyup click focusout','.articlesName',function(){
				var articlesName = $(this).parent().parent().parent().find('.articlesName').val();

				if(articlesName=='') {
					$(this).parent().parent().parent().find('.articlesName').css('border','1px solid red');
					$(this).parent().parent().parent().find('.articlesName').css('background-color','#ffeaea');
				} else {
					$(this).parent().parent().parent().find('.articlesName').css('border','1px solid black');
					$(this).parent().parent().parent().find('.articlesName').css('background-color','#fff');
				}
				updateTotal();
			});

			$('.discountAmount').on('keyup focus keyup click focusout', function(){
					updateTotal();
			});

			$('.taxPercent').on('keyup focus keyup click focusout', function(){
					updateTotal();
			});

			$('.generate').click(function(){

				var arrArticles = [];

				$('.item').each( function(index) {
					var jsonItem = {
									"item"		:$( this ).find('.articlesName').val(),
									"date"		:$( this ).find('.articleDate').val(),
									"unitPrice"	:$( this ).find('.unitPrice').val(),
									"quantity"	:$( this ).find('.quantity').val(),
									"lineTotal"	:$( this ).find('.linetotal').val(),
									};
					arrArticles.push(jsonItem);
				});



				var json = {
							"gstnumber"		: $('.gstnumber').val(),//
							"invoiceNumber"	: $('.invoiceNumber').val(),
							"billingDate" 	: $('.billingDate').val(),
							"organisation" 	: $('.organisation').val(),//
							"website" 		: $('.website').val(),//
							"firstName" 	: $('.firstName').val(),
							"lastName" 		: $('.lastName').val(),
							"bankName" 		: $('.bankName').val(),
							"accountNumber" : $('.accountNumber').val(),
							"ifscCode" 		: $('.ifscCode').val(),
							"yourEmail" 	: $('.yourEmail').val(),
							"yourPhone" 	: $('.yourPhone').val(),
							"yourPanCard" 	: $('.yourPanCard').val(),
							"companyName" 	: $('.companyName').val(),
							"clientName" 	: $('.clientName').val(),
							"clientAddress" : $('.clientAddress').val(),
							"clientPhone" 	: $('.clientPhone').val(),
							"clientEmail" 	: $('.clientEmail').val(),
							"arrArticles"	: arrArticles,
							"discountAmount": $('.discountAmount').val(),//
							"taxName"		: $('.taxName').val(),//
							"taxPercent"	: $('.taxPercent').val(),//
						};

				console.log(json);

				$.post('invoice.php',json,function(res){
					console.log(res);
					if(res=="success") {
						window.location.replace("invoice.php");
					}
				})
			});

		});
	</script>
	
</body>
</html>