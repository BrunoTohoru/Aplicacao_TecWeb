<?php

session_start();
include "autoloader.php";
include "rotas.php";

?>

<!--
function MoverImagemToner()
    {
        $toner = new Toner();
        $toner->setImgToner($_FILES["foto-toner"]);
        $file = $toner->getImgToner();
        $target_dir = "source/app/public/imgs/upload/toners/";
        // Verifica se o arquivo foi enviado corretamente
        if ($file['error'] !== UPLOAD_ERR_OK) {
            return "Erro ao enviar arquivo.";
        }
        $tipoImg = strtolower(pathinfo($target_dir . basename($file["name"]), PATHINFO_EXTENSION));
        $target_file = $target_dir . ($_POST["tipo"] . $_POST["nomeToner"]) . "." . $tipoImg;

        // Verifica se o arquivo é uma imagem válida
        $check = getimagesize($file["tmp_name"]);
        if ($check === false) {
            return "Arquivo não é uma imagem válida.";
        }

        // Verifica se o arquivo já existe
        if (file_exists($target_file)) {
            return "Desculpe, arquivo já existe.";
        }

        // Verifica o tamanho do arquivo
        if ($file["size"] > 100000000) {
            return "Desculpe, seu arquivo é muito grande.";
        }

        // Permite apenas formatos de arquivo específicos (neste caso, apenas JPG)
        if ($tipoImg != "jpg") {
            return "Desculpe, apenas arquivos JPG são permitidos.";
        }

        // Move o arquivo para o diretório de destino
        if (move_uploaded_file($file["tmp_name"], $target_file)) {
            return "O arquivo " . htmlspecialchars(basename($file["name"])) . " foi enviado com sucesso.";
        } else {
            return "Desculpe, houve um erro ao enviar seu arquivo.";
        }
    }
}
-->