<?php
require(dirname(__FILE__)."/../config.php");
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <title>WORTEX | ADMIN</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        
        <base href="<?php echo ADMIN_WORTEX; ?>">
        
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/default.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet">
        
		
        <script src="assets/js/modernizr.min.js"></script>
        
    </head>
    

    <?php 
		$Menu = new Menu();	
		$Menu->PermissaoMenu();
	?>
	