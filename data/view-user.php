<?php include_once('config.php');
// echo $_GET['dataId'];
if(isset($_GET['dataId']) and $_GET['dataId']!=""){
	$row	=	$db->getAllRecords('users','*',' AND id="'.$_GET['dataId'].'"');
	// echo "Viewed";
}else{
	// echo "Not viewed";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Cibicables FTTH Database</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<style>
		.fieldBlock {
			display: block;
			width: 33%;
			float: left;
			padding: 10px;
		}

		.fieldBlock1 {
			display: block;
			width: 49.5%;
			float: left;
			padding: 10px;
		}
	</style>
</head>

<body>

	
<p>
<div class="modal-header">
                    <h5 class="modal-title">User Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
					<form method="post">
						<div class="form-group">
							<div class="fieldBlock">

								<label>User Name <span class="text-danger">*</span></label>

								<input class="form-control"
									value="<?php echo $row[0]['name']; ?>" disabled>

							</div>

							<div class="fieldBlock">

								<label>TelePhone <span class="text-danger"></span></label>

								<input class="tel form-control" 
									value="<?php echo $row[0]['telephone']; ?>" disabled>

							</div>

							<div class="fieldBlock">

								<label>Vlan <span class="text-danger"></span></label>

								<input class="form-control"
									value="<?php echo $row[0]['vlan']; ?>" disabled>

							</div>
						</div>

						<div class="fieldBlock1">

							<label>Modem User Name <span class="text-danger"></span></label>

							<input 
								value="<?php echo $row[0]['musername']; ?>" class="form-control" disabled>
							

						</div>

						<div class="fieldBlock1">

							<label>Modem Password <span class="text-danger"></span></label>

							<input value="<?php echo $row[0]['mpassword']; ?>" class="form-control" disabled>

						</div>
						<div class="fieldBlock1">

							<label>Ftth User Name <span class="text-danger"></span></label>

							<input  value="<?php echo $row[0]['ftthusername']; ?>" class="form-control" disabled>

						</div>
						<div class="fieldBlock1">

							<label>Ftth Password <span class="text-danger"></span></label>

							<input  value="<?php echo $row[0]['ftthpassword']; ?>" class="form-control" disabled>

						</div>
						<div class="fieldBlock1">

							<label>Wifi Name <span class="text-danger"></span></label>

							<input  value="<?php echo $row[0]['wifiname']; ?>"class="form-control" disabled>

						</div>
						<div class="fieldBlock1">

							<label>Wifi Password <span class="text-danger"></span></label>

							<input  class="form-control" value="<?php echo $row[0]['wifipassword']; ?>" disabled>

						</div>
						
					</form>

					</p>
					<div class="modal-footer">
                    <button onclick="location.href='index.php'" type="button" class="btn btn-primary" >Close</button>
                </div>


	<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">User Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/jquery.caret/0.1/jquery.caret.js"></script>
	<script src="https://www.solodev.com/_/assets/phone/jquery.mobilePhoneNumber.js"></script>
	<script
  src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
  integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
  crossorigin="anonymous"></script>
    <script>
		$(document).ready(function() {
			jQuery(function($){
				  var input = $('[type=text]')
				  input.mobilePhoneNumber({allowPhoneWithoutPrefix: '+1'});
				  input.bind('country.mobilePhoneNumber', function(e, country) {
					$('.country').text(country || '')
				  })
			 });
			 
			 //From, To date range start
			var dateFormat	=	"yy-mm-dd";
			fromDate	=	$(".fromDate").datepicker({
				changeMonth: true,
				dateFormat:'yy-mm-dd',
				numberOfMonths:2
			})
			.on("change", function(){
				toDate.datepicker("option", "minDate", getDate(this));
			}),
			toDate	=	$(".toDate").datepicker({
				changeMonth: true,
				dateFormat:'yy-mm-dd',
				numberOfMonths:2
			})
			.on("change", function() {
				fromDate.datepicker("option", "maxDate", getDate(this));
			});
			
			
			function getDate(element){
				var date;
				try{
					date = $.datepicker.parseDate(dateFormat,element.value);
				}catch(error){
					date = null;
				}
				return date;
			}
			//From, To date range End here	
			
		});
		
	</script>
</body>
</html>
