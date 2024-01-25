<?php
// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter os valores do formulário
    $title = $_POST['title'];
    $description = $_POST['description'];
    $keywords = $_POST['keywords'];

    // Verificar se já existe uma página no banco de dados
    $checkPageSql = "SELECT id FROM pages WHERE id = 1";
    $checkPageResult = $conn->query($checkPageSql);

    if ($checkPageResult->rowCount() > 0) {
        // A página já existe, então atualizamos os valores
        $updatePageSql = "UPDATE pages SET title = :title, description = :description WHERE id = 1";
        $updatePageStmt = $conn->prepare($updatePageSql);
        $updatePageStmt->bindParam(':title', $title);
        $updatePageStmt->bindParam(':description', $description);
        $updatePageStmt->execute();
        $updatePageStmt->closeCursor();
    } else {
        // A página não existe, então inserimos os valores
        $insertPageSql = "INSERT INTO pages (title, description) VALUES (:title, :description)";
        $insertPageStmt = $conn->prepare($insertPageSql);
        $insertPageStmt->bindParam(':title', $title);
        $insertPageStmt->bindParam(':description', $description);
        $insertPageStmt->execute();
        $insertPageStmt->closeCursor();
    }

    // Atualizar ou inserir palavras-chave

    $pageId = 1; // O ID da página para o qual as palavras-chave devem ser associadas

    // Verificar se já existem palavras-chave para esta página
    $checkKeywordsSql = "SELECT id FROM keywords WHERE page_id = :pageId";
    $checkKeywordsStmt = $conn->prepare($checkKeywordsSql);
    $checkKeywordsStmt->bindParam(':pageId', $pageId);
    $checkKeywordsStmt->execute();
    $checkKeywordsResult = $checkKeywordsStmt->rowCount();
    $checkKeywordsStmt->closeCursor();

    if ($checkKeywordsResult > 0) {
        // Se existirem palavras-chave, atualizar apenas as novas
        $insertKeywordsSql = "INSERT INTO keywords (keyword, page_id) VALUES (:keyword, :pageId)";
        $insertKeywordsStmt = $conn->prepare($insertKeywordsSql);

        foreach (explode(',', $keywords) as $keyword) {
            $trimmedKeyword = trim($keyword);
            if (!empty($trimmedKeyword)) {
                $insertKeywordsStmt->bindParam(':keyword', $trimmedKeyword);
                $insertKeywordsStmt->bindParam(':pageId', $pageId);
                $insertKeywordsStmt->execute();
                $insertKeywordsStmt->closeCursor();
            }
        }
    } else {
        // Se não existirem palavras-chave, inserir todas
        $insertKeywordsSql = "INSERT INTO keywords (keyword, page_id) VALUES (:keyword, :pageId)";
        $insertKeywordsStmt = $conn->prepare($insertKeywordsSql);

        foreach (explode(',', $keywords) as $keyword) {
            $trimmedKeyword = trim($keyword);
            if (!empty($trimmedKeyword)) {
                $insertKeywordsStmt->bindParam(':keyword', $trimmedKeyword);
                $insertKeywordsStmt->bindParam(':pageId', $pageId);
                $insertKeywordsStmt->execute();
                $insertKeywordsStmt->closeCursor();
            }
        }
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
$resultado = $conn->query($sql);
$pagina = $resultado->fetch(PDO::FETCH_ASSOC);

// Obter as palavras-chave atuais da página
$keywordsSql = "SELECT keyword FROM keywords WHERE page_id = 1";
$keywordsResultado = $conn->query($keywordsSql);
$keywordsArray = [];
while ($keyword = $keywordsResultado->fetch(PDO::FETCH_ASSOC)) {
    $keywordsArray[] = htmlspecialchars($keyword['keyword']);
}
$keywordsString = implode(', ', $keywordsArray);

// Fechar a conexão com o banco de dados
$conn = null;
?>

