<?php

// URL fictícia
$url = 'https://www.nuclea.com.br/data/all/conf/user/1029/database/personal';

// Simular credenciais
$usuario = 'USR01029';
$senha = "@arx_0%;$Qh^}3y'vo";

// Criar um array de dados simulados
$data = array(
    'usuario' => $usuario,
    'senha' => $senha
);

// Inicializar cURL
$ch = curl_init($url);

// Configurar a solicitação POST
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

// Definir opções adicionais, se necessário
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Executar a solicitação
$response = curl_exec($ch);

// Verificar se a solicitação foi bem-sucedida
if ($response !== false) {
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($httpCode == 200) {
        echo "Login bem-sucedido!\n";
        echo "Dados coletados:\n";
        // Inserir código para coletar os dados aqui
    } else {
        echo "Falha ao fazer o login. Código de status: $httpCode\n";
    }
} else {
    echo "Erro na solicitação: " . curl_error($ch) . "\n";
}

// Fechar a sessão cURL
curl_close($ch);

?>
