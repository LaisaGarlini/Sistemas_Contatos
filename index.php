<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Contatos</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
  <div class="pessoas">
    <div class="cabeçalho">
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome">

      <button type="button" class="pesquisar-pessoa">Pesquisar</button>
      <button type="button" class="add-pessoa">Adicionar Pessoa</button>
    </div>

    <table>
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>CPF</th>
		</tr>
		<?php
      include("autoload.class.php");

      $ConexaoPG = new Conexao("localhost","postgres","postgres","postgres");
      
      $resultado = $ConexaoPG->query("SELECT * FROM pessoa");
      foreach ($resultado as $row) {
          echo "<tr><td ondblclick='EditarRegistro(\"" . $row["id"] . "\")'>" . $row["id"]. "</td><td ondblclick='EditarRegistro(\"" . $row["id"] . "\")'>" . $row["nome"]. "</td><td ondblclick='EditarRegistro(\"" . $row["id"] . "\")'>" . $row["cpf"]. "</td></tr>";
      }
		?>
	</table>

    <div id="modal" class="modal">
        <div class="modal-conteudo">
            <h2>Editar</h2>
            <form id="formulario">
            <label for="Nome">Nome:</label>
            <input type="text" id="Nome" name="Nome">

            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf">

            <button type="submit" class="salvar">Salvar</button>
            <button type="button" class="deletar">Deletar Registro</button>
            <button type="button" onclick="Sair()" class="cancelar">Cancelar</button>
            </form>
        </div>
    </div>
  </div>

  <div class="contatos">
  <div class="cabeçalho">
      <label for="descricao">Descrição:</label>
      <input type="text" id="descricao" name="descricao">

      <button type="button" class="pesquisar-contato">Pesquisar</button>
      <button type="button" class="add-contato">Adicionar Contato</button>
    </div>

    <table>
		<tr>
			<th>Nome</th>
			<th>Tipo</th>
			<th>Descrição</th>
		</tr>
		<?php
      include("autoload.class.php");

      $ConexaoPG = new Conexao("localhost","postgres","postgres","postgres");
      
      $resultado = $ConexaoPG->query("select contato.id, pessoa.nome, tipo, descricao from contato join pessoa on pessoa.id = contato.id_pessoa");
      foreach ($resultado as $row) {
          echo "<tr><td ondblclick='EditarRegistro(\"" . $row["id"] . "\")'>" . $row["nome"]. "</td><td ondblclick='EditarRegistro(\"" . $row["id"] . "\")'>" . $row["tipo"]. "</td><td ondblclick='EditarRegistro(\"" . $row["id"] . "\")'>" . $row["descricao"]. "</td></tr>";
      }
		?>
	</table>
  </div>
</body>
</html>
