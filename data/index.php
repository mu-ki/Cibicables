<?php include_once('config.php');

if(isset($_REQUEST['editId1']) and $_REQUEST['editId1']!=""){
	$row	=	$db->getAllRecords('users','*',' AND id="'.$_REQUEST['editId1'].'"');
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
	
	<div class="bg-light border-bottom shadow-sm sticky-top">
		<div class="container">
			<header class="blog-header py-1">
				<nav class="navbar navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand text-muted p-0 m-0" href="https://Cibicables.com"><img src='./include/logo.jpg' alt='Cibicables'></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
						<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-16" class="nav-item"><a title="FTTH Data" href="../" class="nav-link"><b>HOME</b></a></li>
						<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-16" class="nav-item"><a title="FTTH Data" href="./index.php" class="nav-link"><b>FTTH DATA</b></a></li>
						<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-558" class="nav-item"><a title="Invoice" href="../invoice/index.php" class="nav-link"><b>INVOICE</b></a></li>
						</ul>
						<form method="get" action="https://Cibicables.com" class="form-inline my-2 my-lg-0">
							<div class="input-group input-group-md">
								<input type="text" class="form-control search-width" name="s" id="search" value="" placeholder="Search..." aria-label="Search">
								<div class="input-group-append">
									<button type="submit" class="btn btn-primary" id="searchBtn"><i class="fa fa-search"></i></button>
								</div>
							</div>
						</form>
					</div>
				</nav>
			</header>
		</div> <!--/.container-->
	</div>
	
	<?php
	$condition	=	'';
	if(isset($_REQUEST['name']) and $_REQUEST['name']!=""){
		$condition	.=	' AND name LIKE "%'.$_REQUEST['name'].'%" ';
	}
	if(isset($_REQUEST['telephone']) and $_REQUEST['telephone']!=""){
		$condition	.=	' AND telephone LIKE "%'.$_REQUEST['telephone'].'%" ';
	}
	if(isset($_REQUEST['vlan']) and $_REQUEST['vlan']!=""){
		$condition	.=	' AND vlan LIKE "%'.$_REQUEST['vlan'].'%" ';
	}
	// if(isset($_REQUEST['df']) and $_REQUEST['df']!=""){

	// 	$condition	.=	' AND DATE(dt)>="'.$_REQUEST['df'].'" ';

	// }
	// if(isset($_REQUEST['dt']) and $_REQUEST['dt']!=""){

	// 	$condition	.=	' AND DATE(dt)<="'.$_REQUEST['dt'].'" ';

	// }
	
	$userData	=	$db->getAllRecords('users','*',$condition,'ORDER BY id DESC');
	?>
   	<div class="container">
		<h1><a href="https://Cibicables.com/"><center>Cibicables FTTH Database</center></a></h1>
		<div class="card">
			<div class="card-header"><i class="fa fa-fw fa-globe"></i> <strong>Browse User</strong> <a href="add-users.php" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-plus-circle"></i> Add Users</a></div>
			<div class="card-body">
				<?php
				if(isset($_REQUEST['msg']) and $_REQUEST['msg']=="rds"){
					echo	'<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> Record deleted successfully!</div>';
				}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="rus"){
					echo	'<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> Record updated successfully!</div>';
				}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="rnu"){
					echo	'<div class="alert alert-warning"><i class="fa fa-exclamation-triangle"></i> You did not change any thing!</div>';
				}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="rna"){
					echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> There is some thing wrong <strong>Please try again!</strong></div>';
				}
				?>
				<div class="col-sm-12">
					<h5 class="card-title"><i class="fa fa-fw fa-search"></i> Find User</h5>
					<form method="get">
						<div class="row">
							<div class="col-sm-3">
								<div class="form-group">
									<label>User Name</label>
									<input type="text" name="name" id="name" class="form-control" value="<?php echo isset($_REQUEST['name'])?$_REQUEST['name']:''?>" placeholder="Enter user name">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Telephone</label>
									<input type="number" name="telephone" id="telephone" class="form-control" value="<?php echo isset($_REQUEST['telephone'])?$_REQUEST['telephone']:''?>" placeholder="Enter 6 Digit Telephone number">
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label>Vlan</label>
									<input type="number" name="vlan" id="vlan" class="form-control" value="<?php echo isset($_REQUEST['vlan'])?$_REQUEST['vlan']:''?>" placeholder="Enter Vlan">
								</div>
							</div>
							<!-- <div class="col-sm-4">

								<div class="form-group">

									<label>Date</label>
									<div class="input-group">
										<input type="text" class="fromDate form-control hasDatepicker" name="df" id="df" value="" placeholder="Enter from date">
										<div class="input-group-prepend"><span class="input-group-text">-</span></div>
										<input type="text" class="toDate form-control hasDatepicker" name="dt" id="dt" value="" placeholder="Enter to date">
										<div class="input-group-append"><span class="input-group-text"><a href="javascript:;" onclick="$('#df,#dt').val('');"><i class="fa fa-fw fa-sync"></i></a></span></div>
									</div>

								</div>

							</div> -->
							<div class="col-sm-4">
								<div class="form-group">
									<label>&nbsp;</label>
									<div>
										<button type="submit" name="submit" value="search" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-search"></i> Search</button>
										&nbsp; <a href="<?php echo $_SERVER['PHP_SELF'];?>" class="btn btn-danger"><i class="fa fa-fw fa-sync"></i> Clear</a>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<hr>
		
		<div >
			<table class="table table-striped table-bordered">
				<thead>
					<tr align="center" class="bg-primary text-white">
						<th>S.no #</th>
						<th>User Name</th>
						<th>Telephone</th>
						<th>Vlan</th>
						<!-- <th>Modem Username</th>
						<th>Modem Passsword</th>
						<th>Ftth Username</th>
						<th>Ftth Passsword</th>
						<th>Wifi Name</th>
						<th>Wifi Passsword</th>
						<th class="text-center">Record Date</th> -->
						<th class="text-center">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					if(count($userData)>0){
						$s	=	'';
						foreach($userData as $val){
							$s++;
					?>
					<tr align="center">
						<td><?php echo $s;?></td>
						<td><?php echo $val['name'];?></td>
						<td><?php echo $val['telephone'];?></td>
						<td><?php echo $val['vlan'];?></td>
						<!-- <td><?php echo $val['musername'];?></td>
						<td><?php echo $val['mpassword'];?></td>
						<td><?php echo $val['ftthusername'];?></td>
						<td><?php echo $val['ftthpassword'];?></td>
						<td><?php echo $val['wifiname'];?></td>
						<td><?php echo $val['wifipassword'];?></td>
						<td><?php echo $val['date'];?></td> -->

						<td align="center">
						<a data-toggle="modal" viewId=<?php echo $val['id'];?> data-target="#myModal" class="text-success"><i class="fa fa-book fa-fw"></i> View</a> | 

						<a href="edit-users.php?editId=<?php echo $val['id'];?>" class="text-primary"><i class="fa fa-fw fa-edit"></i> Edit</a> | 
						
						<a href="delete.php?delId=<?php echo $val['id'];?>" class="text-danger" onClick="return confirm('Are you sure to delete this user?');"><i class="fa fa-fw fa-trash"></i> Delete</a>
						</td>

					</tr>
					<?php 
						}
					}else{
					?>
					<tr><td colspan="6" align="center">No Record(s) Found!</td></tr>
					<?php } ?>
				</tbody>
			</table>
		</div> <!--/.col-sm-12-->
		
	</div>
	<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">User Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>
					<form method="post">
						<div class="form-group">
							<div class="fieldBlock">

								<label>User Name <span class="text-danger">*</span></label>

								<input class="form-control"
									value="<?php echo $val['name']; ?>" disabled>

							</div>

							<div class="fieldBlock">

								<label>TelePhone <span class="text-danger"></span></label>

								<input class="tel form-control" 
									value="<?php echo $val['telephone']; ?>" disabled>

							</div>

							<div class="fieldBlock">

								<label>Vlan <span class="text-danger"></span></label>

								<input class="form-control"
									value="<?php echo $val['vlan']; ?>" disabled>

							</div>
						</div>

						<div class="fieldBlock1">

							<label>Modem User Name <span class="text-danger"></span></label>

							<input 
								value="<?php echo $val['musername']; ?>" class="form-control" disabled>
							

						</div>

						<div class="fieldBlock1">

							<label>Modem Password <span class="text-danger"></span></label>

							<input value="<?php echo $val['mpassword']; ?>" class="form-control" disabled>

						</div>
						<div class="fieldBlock1">

							<label>Ftth User Name <span class="text-danger"></span></label>

							<input  value="<?php echo $val['ftthusername']; ?>" class="form-control" disabled>

						</div>
						<div class="fieldBlock1">

							<label>Ftth Password <span class="text-danger"></span></label>

							<input  value="<?php echo $val['ftthpassword']; ?>" class="form-control" disabled>

						</div>
						<div class="fieldBlock1">

							<label>Wifi Name <span class="text-danger"></span></label>

							<input  value="<?php echo $val['wifiname']; ?>"class="form-control" disabled>

						</div>
						<div class="fieldBlock1">

							<label>Wifi Password <span class="text-danger"></span></label>

							<input  class="form-control" value="<?php echo $val['wifipassword']; ?>" disabled>

						</div>
						
					</form>

					</p>
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
	<script
  src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
  integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
  crossorigin="anonymous"></script>
    <!-- <script>
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
		
	</script> -->
</body>
</html>
