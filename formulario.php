<?php 

ini_set('display_errors', 'Off');

    switch ($_GET['salvar']) {

        case "sucesso":

            echo "<script>alert('Salvamento de Imagem realizado com sucesso')</script>";

            break;

        case "falha":

            echo "<script>alert('Salvamento não foi realizado,porfavor verificar arquivo enviado')</script>";

            break;


    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lança arquivo</title>
</head>
<body>

    <h1>Upload de arquivos</h1>

    <form action="cdst.php" method="post" enctype="multipart/form-data">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <label for="file"></label>
        <input type="file" name="foto" id="foto">

        <input type="submit" value="Envia">
        

    </form>
    
</body>
</html>