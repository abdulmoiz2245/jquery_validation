<?php 

        $file_name = $_FILES['myfile']['name'];
        $file_tmp =$_FILES['myfile']['tmp_name'];
        if(move_uploaded_file($file_tmp , "uploads/".$file_name)){
           echo "Success";
        }else{
           echo 'fail';
        }
?>