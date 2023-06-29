<?php
 
 $cnn =  mysqli_connect("localhost","root","","db_saran");

    if(isset($_POST["proses"])){
      mysqli_query($cnn,"insert into tb_user set
      email = '$_POST[email]',
      saran = '$_POST[saran]'");

    }
?>