<?php
if (isset($_POST['Submit'])){
$email = $_POST['fullname']
;
$password = $_POST['Password']
;
 
 if($file= fopen("Password.txt", "a")){
  if(fwrite($file, $email)){
   if(fwrite($file, $password)){
    if(fclose($file)){
      echo "data saved";
    }
    else{
      echo "file not closed";
    }
   }
   else{
     echo "password not saved";
   }
  }
  else{
    echo "email not saved";
  }
 }
 else{
   echo "file not opened";
 }
}
?>
