<?php
  $nome = $_POST['nome'];
  $id = $_POST['id'];
  $prefixo = $_POST['prefixo'];
  $descricao = $_POST['descricao'];

  // Verifica se o arquivo .txt existe, caso contrário, cria um novo
  $arquivo = 'bots.txt';
  if (!file_exists($arquivo)) {
    fopen($arquivo, 'w');
  }

  // Salva as informações do bot no arquivo .txt
  $dados = "Nome do Bot: $nome\nID do Bot: $id\nPrefixo: $prefixo\nDescrição: $descricao\n\n";
  file_put_contents($arquivo, $dados, FILE_APPEND);

  echo "Bot adicionado com sucesso!";
?>
