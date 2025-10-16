<?php
    if(isset($_POST['enviar']))
        echo "formulário enviado";
?>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Nome: <input type="text" name="nome">
        Email: <input type="email" name="email">
        <input type="submit" name="enviar">
    </form>
</body>