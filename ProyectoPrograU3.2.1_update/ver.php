<?php
	
		$id=$_GET['id'];
?>
<!doctype html>
<html lang="en">
  <head>
 	</head>
<body bgcolor="#bed7c0">
<div class="main">
<h1>Mostrando imagen almacenada en MySQL</h1>
  <div class="panel panel-primary">
    <div class="panel-body">	 
		<img src="vista.php?id=<?php echo $id; ?>" alt='Img blob desde MySQL' width="600" />      
      </div> 
    </div>
 </div>
</body>

</html>