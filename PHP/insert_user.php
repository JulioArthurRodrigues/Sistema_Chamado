<?php
// Recebendo os dados do formulário //

$nome = $_POST['nome'];
$email = $_POST['email'];
$setor = $_POST['setor'];
$senha = $_POST['senha'];



// Chamando o arquivo de conexão com o banco de dados. //

include 'conexao.php';

$insert = "INSERT INTO tb_user VALUES (null, 'Juliao', 'julioarp2004@gmail.com', 'Aluno', '123456')";

$query = $conexao->query($insert);

if ($conexao ->query($insert)) {
    echo "<script>alert('Usuário Cadastrado com Sucesso!');
    location.href = '../cadastro.html'</script>";
}
?>