<!DOCTYPE html>
<html>
  <head>
    <title>Form</title>

   <link rel="stylesheet" href="css/style.css"/>
   
  </head>	
  <body>

	<div class="container">
		<div class="main">
	      <form  >
			<h2>Masukkan Data Anda</h2><hr/>		
			
			<label>Nama :</label>
			<input type="text" name="nama1" id="nama1"  />
			
			<label>Jurusan :</label>
			<input type="text" name="jrsn" id="jrsn"  />
					
			<input type="submit" name="submit" id="submit" value="Submit">
		  </form>
		<?php include "proses.php"?>
		</div>
   </div>
</div>
  </body>
</html>