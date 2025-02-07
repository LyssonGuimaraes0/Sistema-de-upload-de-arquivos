<?php 

    function valida_arquivo($arquivo,$nome){

        $extencao = ['pdf','png','jpg','jpge'];

        $exte_arquivo = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));

        if(!in_array($exte_arquivo ,$extencao)){

            return false;

        }

        $nome = strtolower($nome);

        $arquivo = "nome_".$nome."_foto_".".".pathinfo($arquivo, PATHINFO_EXTENSION);

        move_uploaded_file($_FILES['foto']['tmp_name'], './uploads/'.$arquivo);

        return true;

    }


    $nome = $_POST["nome"];
    $foto = $_FILES['foto']['name'];

    $resultado = valida_arquivo($foto,$nome);

    if($resultado = true){

            header("location: formulario.php?salvar=sucesso");
    }else{

            header("location: formulario.php?salvar=falha");
        }

    




?>