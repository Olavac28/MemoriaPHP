<form action="aula10_NnExite.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="arquivo">
    <input type="submit" name="enviar">
</form>

<form action="aula10_NnExite.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="arquivo[]" multiple> <!--permite escolher multiplos arquivos-->
    <input type="submit" name="enviar">
</form>