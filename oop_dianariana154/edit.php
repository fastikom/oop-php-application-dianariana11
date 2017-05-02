<?php 
include 'crud.php';
$db = new crud();
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Universitas Sains Al-Qur'an</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-united.min.css" rel="stylesheet">
    <link href="css/charisma-app.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/bootstrap.v3.3" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<br>
<br>
<br>
<div class="container" id="input">
<form id="contact" action="proses.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $d){
?>
<h5>Nama</h5>
	<fieldset>
			<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
			<input type="text" name="judul" value="<?php echo $d['judul'] ?>">
		</fieldset>
	<h5>Pengarang</h5>
		<fieldset>
<input type="text" name="pengarang" value="<?php echo $d['pengarang'] ?>">
</fieldset>
	<h5>Penerbit</h5>
		<fieldset>
<input type="text" name="penerbit" value="<?php echo $d['penerbit'] ?>">
	</fieldset>
	<h5>Tahun Terbit</h5>
		<fieldset>
	<input type="date" name="tahunterbit" value="<?php echo $d['tahunterbit'] ?>">
</fieldset>
	
		<input type="submit" value="Simpan">

<?php } ?>
</form>
</div>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>


</body>
</html>