<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/style/main.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/font-awesome/css/all.css">

    <title><?=$title;?></title>
  </head>
  <body>
    <?php $this->load->view('main/navbar'); ?>
    <div class="pt-5">
      <?php $this->load->view($content);  ?>
    </div>
    <?php $this->load->view('main/footer'); ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?=base_url()?>assets/bootstrap/js/jquery-3.4.1.js"></script>
    <script src="<?=base_url()?>assets/bootstrap/js/popper.min.js"></script>
    <script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>