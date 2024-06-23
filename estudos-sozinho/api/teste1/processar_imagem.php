<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['imagem']['tmp_name']) && !empty($_FILES['imagem']['tmp_name'])) {
    // Chave API da Remove.bg
    $apiKey = 'xEs7M9DE9c8MtBwNWm4zBE3y'; // Substitua pela sua chave API

    // Arquivo de imagem enviado via formulário
    $imageFile = $_FILES['imagem']['tmp_name'];

    // Iniciar cURL
    $ch = curl_init('https://api.remove.bg/v1.0/removebg');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'X-Api-Key: ' . $apiKey,
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, [
        'image_file' => new CURLFile($imageFile),
    ]);

    // Executar a requisição cURL
    $response = curl_exec($ch);

    // Verificar erros na requisição
    if (curl_errno($ch)) {
        echo 'Erro:' . curl_error($ch);
        exit;
    }

    // Verificar se a resposta da API contém dados
    if (empty($response)) {
        echo 'Erro: resposta da API vazia.';
        exit;
    }

    // Salvar o resultado em um arquivo apenas se a resposta for válida
    if (file_put_contents('imagem-fundo.png', $response) !== false) {
        echo 'Imagem com fundo removido salva com sucesso!';
    } else {
        echo 'Erro ao salvar a imagem com fundo removido.';
    }

    // Fechar a requisição cURL
    curl_close($ch);
} else {
    // Caso o formulário não tenha sido enviado corretamente
    echo 'Erro: Por favor, envie uma imagem.';
}
?>
<img src="imagem-fundo.png" alt="">