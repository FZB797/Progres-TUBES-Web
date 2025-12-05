<?php 
    include "harus_login.php";

    session_destroy(); 
 
    echo "<script>alert('Anda telah logout')</script>"; 
    echo "<meta http-equiv='refresh' content='0;url=landing_page.php'>"; 
?>