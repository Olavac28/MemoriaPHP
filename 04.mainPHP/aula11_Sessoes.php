<?php
    session_start();

    $_SESSION['cor'] = "verde";
    echo $_SESSION['cor']."<br>".session_id();
?>