<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<style>
	body {
		background: #ccc;
		font-family: monaco;
	}
	.box {
		width: 90%;
		margin: 70px auto;
		text-align: center;
	}
	a {
		font-weight: bold;
		text-decoration: none;
		color: dodgerblue;
		font-size: 40px;
		border: 2px solid dodgerblue;
		border-radius: 10px;
		padding: 5px;
	}
</style>


<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<div class="box">
		<a href="<?= base_url(); ?>barang/listbarang">Barang</a> - 
		<a href="<?= base_url(); ?>supplier/listsupplier">Supplier</a>
		<a href="<?= base_url(); ?>customer/listcustomer">Customer</a>
	</div>
</body>
</html>