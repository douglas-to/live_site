<?php
// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter os valores do formulário
    $title = $_POST['title'];
    $description = $_POST['description'];
    $keywords = $_POST['keywords'];

    // Verificar se já existe uma página no banco de dados
    $checkPageSql = "SELECT id FROM pages WHERE id = 1";
    $checkPageResult = $mysqli->query($checkPageSql);

    if ($checkPageResult->num_rows > 0) {
        // A página já existe, então atualizamos os valores
        $updatePageSql = "UPDATE pages SET title = ?, description = ? WHERE id = 1";
        $updatePageStmt = $mysqli->prepare($updatePageSql);
        $updatePageStmt->bind_param("ss", $title, $description);
        $updatePageStmt->execute();
        $updatePageStmt->close();
    } else {
        // A página não existe, então inserimos os valores
        $insertPageSql = "INSERT INTO pages (title, description) VALUES (?, ?)";
        $insertPageStmt = $mysqli->prepare($insertPageSql);
        $insertPageStmt->bind_param("ss", $title, $description);
        $insertPageStmt->execute();
        $insertPageStmt->close();
    }

    // Atualizar ou inserir palavras-chave
    $keywordsArray = explode(',', $keywords);

    // Remover espaços em branco extras das palavras-chave
    $keywordsArray = array_map('trim', $keywordsArray);

    // Remover palavras-chave vazias
    $keywordsArray = array_filter($keywordsArray);

    // Obter o ID da página
    $pageId = 1;

    // Excluir palavras-chave existentes para a página
    $deleteKeywordsSql = "DELETE FROM keywords WHERE page_id = ?";
    $deleteKeywordsStmt = $mysqli->prepare($deleteKeywordsSql);
    $deleteKeywordsStmt->bind_param("i", $pageId);
    $deleteKeywordsStmt->execute();
    $deleteKeywordsStmt->close();

    // Inserir novas palavras-chave
    foreach ($keywordsArray as $keyword) {
        $insertKeywordSql = "INSERT INTO keywords (keyword, page_id) VALUES (?, ?)";
        $insertKeywordStmt = $mysqli->prepare($insertKeywordSql);
        $insertKeywordStmt->bind_param("si", $keyword, $pageId);
        $insertKeywordStmt->execute();
        $insertKeywordStmt->close();
    }

    // Limpar os campos após o envio
    $title = '';
    $description = '';
    $keywords = '';

    // Redirecionar para a mesma página após a atualização
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}

// Obter as configurações atuais da página após a atualização ou inserção
$sql = "SELECT * FROM pages WHERE id=1";
$resultado = $mysqli->query($sql);
$pagina = $resultado->fetch_assoc();

// Obter as palavras-chave atuais da página
$keywordsSql = "SELECT keyword FROM keywords WHERE page_id = 1";
$keywordsResultado = $mysqli->query($keywordsSql);
$keywordsArray = [];
while ($keyword = $keywordsResultado->fetch_assoc()) {
    $keywordsArray[] = htmlspecialchars($keyword['keyword']);
}
$keywordsString = implode(', ', $keywordsArray);

// Fechar a conexão com o banco de dados
$mysqli->close();
?>


