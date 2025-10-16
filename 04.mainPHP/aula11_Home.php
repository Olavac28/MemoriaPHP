<?php
    session_start();

    function sla() {
        echo $_SESSION['cor']."<br>".session_id(); //funciona msm numa função
    }
    sla();
?>