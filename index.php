<?php
include_once "conexao.php";

try {

    //execução da instrução sql_regcase
    $consulta = $conectar->query("SELECT * FROM login");

    echo "<a href='formCadastro.php'>Novo cadastro</a><br><br> Listagem de Usuarios";

    echo "<table border='1px'><tr><td>Nome</td><td>Login</td><td>Ações</td>";

    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {

        echo "<tr><td>$linha[nome]</td><td>$linha[login]</td><td><a href='formEditar.php?id=$linha[id]'>Editar</a> | <a href='excluir.php?id=$linha[id]'>Excluir</a></td>";
    }

    echo "</table>";

    echo $consulta->rowCount() . "Registros exibidos";

} catch(PDOException $e) {

    echo $e->getMessage();


}
