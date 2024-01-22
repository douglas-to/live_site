<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title><?php echo isset($pagina['title']) ? htmlspecialchars($pagina['title']) : 'Painel de Controle'; ?></title>
      <meta name="description" content="<?php echo isset($pagina['description']) ? htmlspecialchars($pagina['description']) : $descricaoMetaTag; ?>">
      <meta name="keywords" content="<?php echo $keywordsString; ?>">
      <!-- Custom css file -->
      <link href="../css/style.css" rel="stylesheet" />
      <!-- jquery.js -->
      <script src="../js/jquery/jquery.js"></script>
      <!-- Bootstrap files -->
      <link href="../bootstrap/css/bootstrap.css" rel="stylesheet"/>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
      <!-- slick -->
      <link href="../css/slick.css" rel="stylesheet" />
      <script src="../js/slick.js"></script>
      <!-- font-awesome -->
      <link rel="stylesheet" href="../font-awesome/css/all.min.css">
   </head>   