<?php
// 1. Verificar se a requisição foi realmente um GET
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    // 2. Coletar e sanitizar os dados (Segurança básica)
    $usuario = htmlspecialchars($_GET['usuario']);
    $senha = $_GET['senha'];

    // 3. Validação simples
    if (empty($usuario) || empty($senha)) {
        echo "Por favor, preencha todos os campos.";
    } else {
        // Aqui você faria a lógica de negócio (ex: verificar no banco de dados)
        echo "Recebido com sucesso! Olá, " . $usuario;
    }
} else {
    // Bloqueia acesso direto via URL
    echo "Acesso negado. Envie o formulário.";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="get.php" method="GET">
        <label>Nome do Usuário:</label>
        <input type="text" name="usuario" required>

        <label>Senha:</label>
        <input type="password" name="senha" required>

        <button type="submit">Enviar Dados</button>
    </form>
</body>

</html>