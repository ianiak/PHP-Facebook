<?php
// Inicio da Sessão, é a Variavel que vai iniciar a Sessão do Login
session_start();

// Variavel "SE" caso email e senha estiverem vazio
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
{
// "INCLUA" Este codigo chama o arquivo Config, o arquivo que conecta tudo ao Banco de dados
include_once('config.php');
$email = $_POST['email'];
$senha = $_POST['senha'];
// SQL SELECIONE O EMAIL E SENHA DA TABELA NO SQL EMAIL E SENHA
$sql = "SELECT * FROM usuarios  WHERE email = '$email' and senha = '$senha'";
// o resultado é vá no SQL e me diga as informações
$result = $conexao->query($sql);
// Margem de erro, "SE" no resultado uma informação fornecida estiver errada.
if(mysqli_num_rows($result) < 1)
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    // Envie o Usuario de volta para a tela de Login
    header("location: home.php");
    
}
else // Se não
{
    // Inicie a Sessão.
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    // Envie o Usuario para dentro do Aplicativo
    header('Location: sistema.php');

}


}
else // Se Não
{
   // Envie o Usuario para o Inicio do Aplicativo.
    header('Location: home.php');

 }


?>