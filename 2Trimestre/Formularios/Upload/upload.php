<?php
    $diretorio = "arquivos/";
    $nome_arquivo = $_FILES['arquivo']['name'];
    $info_name = explode(".",$nome_arquivo);
    $extensao = end($info_name);
    if(move_uploaded_file($_FILES["arquivo"]["tmp_name"],$diretorio.uniqid().".".$extensao)){
	    echo "Upload realizado com sucesso.";
    }else{
	    echo "Upload não foi realizado.";
    }
?>