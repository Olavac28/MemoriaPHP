<?php
    //       (nome, valor, tempo de duração[time() + "tempo em segundos"])
    setcookie("ultimaCompra", "tenis", time() + 3600);
    echo $_COOKIE['ultimaCompra'];
?>