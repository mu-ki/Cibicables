<?php include_once('config.php');
if(isset($_REQUEST['editId']) and $_REQUEST['editId']!=""){
	$row	=	$db->getAllRecords('users','*',' AND id="'.$_REQUEST['editId'].'"');
}

if(isset($_REQUEST['submit']) and $_REQUEST['submit']!=""){
	extract($_REQUEST);
	if($name==""){
		header('location:'.$_SERVER['PHP_SELF'].'?msg=un&editId='.$_REQUEST['editId']);
		exit;
	}elseif($telephone==""){
		header('location:'.$_SERVER['PHP_SELF'].'?msg=ut&editId='.$_REQUEST['editId']);
		exit;
	}elseif($vlan==""){
		header('location:'.$_SERVER['PHP_SELF'].'?msg=uv&editId='.$_REQUEST['editId']);
		exit;
	}elseif($musername==""){
		header('location:'.$_SERVER['PHP_SELF'].'?msg=umu&editId='.$_REQUEST['editId']);
		exit;
	}elseif($mpassword==""){
		header('location:'.$_SERVER['PHP_SELF'].'?msg=ump&editId='.$_REQUEST['editId']);
		exit;
	}elseif($ftthusername==""){
		header('location:'.$_SERVER['PHP_SELF'].'?msg=ufu&editId='.$_REQUEST['editId']);
		exit;
	}elseif($ftthpassword==""){
		header('location:'.$_SERVER['PHP_SELF'].'?msg=ufp&editId='.$_REQUEST['editId']);
		exit;
	}elseif($wifiname==""){
		header('location:'.$_SERVER['PHP_SELF'].'?msg=uwn&editId='.$_REQUEST['editId']);
		exit;
	}elseif($wifipassword==""){
		header('location:'.$_SERVER['PHP_SELF'].'?msg=uwp&editId='.$_REQUEST['editId']);
		exit;
	}
	$data	=	array(
					'name'=>$name,
					'telephone'=>$telephone,
					'vlan'=>$vlan,
					'musername'=>$musername,
					'mpassword'=>$mpassword,
					'ftthusername'=>$ftthusername,
					'ftthpassword'=>$ftthpassword,
					'wifiname'=>$wifiname,
					'wifipassword'=>$wifipassword,
					);
	$update	=	$db->update('users',$data,array('id'=>$editId));
	if($update){
		header('location:index.php?msg=rus');
		exit;
	}else{
		header('location:index.php?msg=rnu');
		exit;
	}
}
?>
<!doctype html>
<html lang="en-US" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec"
	prefix="og: http://ogp.me/ns#" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Cibicables FTTH Database</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
		integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
		integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
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
				<nav class="navbar navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand text-muted p-0 m-0"
						href="https://Cibicables.com"><img src='./include/logo.jpg' alt='Cibicables'></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
								id="menu-item-16" class="nav-item"><a title="FTTH Data" href="../"
									class="nav-link"><b>HOME</b></a></li>
							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
								id="menu-item-16" class="nav-item"><a title="FTTH Data" href="./index.php"
									class="nav-link"><b>FTTH DATA</b></a></li>
							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
								id="menu-item-558" class="nav-item"><a title="Invoice" href="../invoice/index.php"
									class="nav-link"><b>INVOICE</b></a></li>
						</ul>
						<form method="get" action="https://Cibicables.com" class="form-inline my-2 my-lg-0">
							<div class="input-group input-group-md">
								<input type="text" class="form-control search-width" name="s" id="search" value=""
									placeholder="Search..." aria-label="Search">
								<div class="input-group-append">
									<button type="submit" class="btn btn-primary" id="searchBtn"><i
											class="fa fa-search"></i></button>
								</div>
							</div>
						</form>
					</div>
				</nav>
			</header>
		</div>
		<!--/.container-->
	</div>


	<div class="container">
		<h1><a href="https://Cibicables.com/">
				<center>Cibicables FTTH Database</center>
			</a></h1>
			<?php

if(isset($_REQUEST['msg']) and $_REQUEST['msg']=="un"){

	echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Username is mandatory field!</div>';

}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="ut"){

	echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Telephone is mandatory field!</div>';

}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="uv"){

	echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Vlan is mandatory field!</div>';

}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="ume"){

	echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Modem Username is mandatory field!</div>';

}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="ump"){

	echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Modem Password is mandatory field!</div>';

}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="ufu"){

	echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> FTTH Username is mandatory field!</div>';

}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="ufp"){

	echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> FTTH Pawword is mandatory field!</div>';

}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="uwn"){

	echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Wifi Username is mandatory field!</div>';

}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="uwp"){

	echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Wifi Pasword is mandatory field!</div>';


}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="rus"){

	echo	'<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> Record updated successfully!</div>';


}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="rnu"){

	echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Record not updated<strong>Please try again!</strong></div>';

}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="dsd"){

	echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Please delete a user and then try again <strong>We set limit for security reasons!</strong></div>';

}
?>
		<div class="card">
			<div class="card-header"><i class="fa fa-fw fa-plus-circle"></i> <strong>Edit User</strong> <a
					href="index.php" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-globe"></i> Browse
					Users</a></div>
			<div class="card-body">
				<div class="col-sm-12">

					<h5 class="card-title">Fields with <span class="text-danger">*</span> are mandatory!</h5>

					<form method="post">
						<div class="form-group">
							<div class="fieldBlock">

								<label>User Name <span class="text-danger">*</span></label>

								<input type="text" name="name" id="name" class="form-control"
									value="<?php echo $row[0]['name']; ?>" placeholder="Enter user name" required>

							</div>

							<div class="fieldBlock">

								<label>TelePhone <span class="text-danger">*</span></label>

								<input type="number" class="tel form-control" name="telephone"
									value="<?php echo $row[0]['telephone']; ?>" id="telephone"
									placeholder="Enter Telephone Number Without STD" required>

							</div>

							<div class="fieldBlock">

								<label>Vlan <span class="text-danger">*</span></label>

								<input type="text" name="vlan" id="vlan" class="form-control"
									value="<?php echo $row[0]['vlan']; ?>" placeholder="Enter Vlan Id" required>

							</div>
						</div>

						<div class="fieldBlock1">

							<label>Modem User Name <span class="text-danger">*</span></label>

							<input type="text" name="musername" id="musername"
								value="<?php echo $row[0]['musername']; ?>" class="form-control"
								placeholder="Enter Modem User name" required>

						</div>

						<div class="fieldBlock1">

							<label>Modem Password <span class="text-danger">*</span></label>

							<input type="text" name="mpassword" id="mpassword"
								value="<?php echo $row[0]['mpassword']; ?>" class="form-control"
								placeholder="Enter Modem password" required>

						</div>
						<div class="fieldBlock1">

							<label>Ftth User Name <span class="text-danger">*</span></label>

							<input type="email" name="ftthusername" id="ftthusername"
								value="<?php echo $row[0]['ftthusername']; ?>" class="form-control"
								placeholder="Enter Ftth User name" required>

						</div>
						<div class="fieldBlock1">

							<label>Ftth Password <span class="text-danger">*</span></label>

							<input type="text" name="ftthpassword" id="ftthpassword"
								value="<?php echo $row[0]['ftthpassword']; ?>" class="form-control"
								placeholder="Enter Ftth Password" required>

						</div>
						<div class="fieldBlock1">

							<label>Wifi Name <span class="text-danger">*</span></label>

							<input type="text" name="wifiname" id="wifiname" value="<?php echo $row[0]['wifiname']; ?>"
								class="form-control" placeholder="Enter Wifi name" required>

						</div>
						<div class="fieldBlock1">

							<label>Wifi Password <span class="text-danger">*</span></label>

							<input type="text" name="wifipassword" id="wifipassword" class="form-control"
								value="<?php echo $row[0]['wifipassword']; ?>" placeholder="Enter Wifi Password"
								required>

						</div>
						<div class="form-group">
							<input type="hidden" name="editId" id="editId" value="<?php echo $_REQUEST['editId']?>">
							<button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary"><i
									class="fa fa-fw fa-edit"></i> Update User</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
		integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
		integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
	</script>

</body>

</html>