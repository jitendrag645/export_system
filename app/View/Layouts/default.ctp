<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <?php
  echo $this->Html->css(array(
  	'vendor/bootstrap/css/bootstrap.min.css',
  	'vendor/font-awesome/css/font-awesome.min.css',
  	'vendor/datatables/dataTables.bootstrap4.css',
  	'vendor/datatables/dataTables.bootstrap4.css','css/sb-admin.css'
  	));
  ?>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
	<?php echo $this->element('admin_sidebar'); ?>
  <div class="content-wrapper">
  	<div class="container">
  	<?php echo $this->Session->flash(); ?>
    <?php echo $this->fetch('content');?>
    </div>
    </div>
    <?php echo $this->element('footer');?>
</body>

</html>
