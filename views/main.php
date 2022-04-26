<!DOCTYPE html>
<html>
<head>
	<title>turzo-ahsan-sami</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/toastr.min.css">
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/summernote.min.css">
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style.css?ver=1.0">

	

</head>
<body>
	
  <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo ROOT_PATH; ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo ROOT_PATH; ?>buyers">Buyers Info</a>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">
        <?php if(isset($_SESSION['is_logged_in'])) : ?>
          <li class="nav-item">
            <span class="navbar-text text-capitalize"><?php echo $_SESSION['user_data']['name']; ?></span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_PATH; ?>users/logout">Logout</a>
          </li>
        <?php else : ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_PATH; ?>users/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_PATH; ?>users/register">Register</a>
          </li>
        <?php endif; ?>
      </ul>

    </div>
  </nav>

  <main role="main" class="container-fluid">

    <div class="row">
      <?php Messages::display(); ?>
      <?php require($view); ?>
    </div>

  </main><!-- /.container -->

  <script src="<?php echo ROOT_PATH; ?>assets/js/jquery.min.js"></script>
	<script src="<?php echo ROOT_PATH; ?>assets/js/bootstrap.js"></script>
	<script src="<?php echo ROOT_PATH; ?>assets/js/toastr.min.js"></script>
	<script src="<?php echo ROOT_PATH; ?>assets/js/summernote.min.js"></script>
	<script src="<?php echo ROOT_PATH; ?>assets/js/validator.js"></script>

</body>
</html>