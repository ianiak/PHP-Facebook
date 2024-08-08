<?php
// Realizar o Login
// Pela Logica de Progamação, Devemos chamar o Botão de 'Submit' para realizar o registro
  
// Se o Botão de Submit é Apertado
if(isset($_POST['submit']))
{



 // Inclua o Arquivo de Configuração no Codigo
 include_once('config.php');
 // Todas as tabelas de Registro, Guarde as informações do registro dentro delas (Variaveis)
 $nome = $_POST['nome'];
 $sobrenome = $_POST['sobrenome'];
 $email = $_POST['email'];
 $senha = $_POST['senha'];
 $data_nasc = $_POST['data_nasc'];
// INSIRA as informações que estão dentro delas NO Codigo
 $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,sobrenome,email,senha,data_nasc) VALUES  ('$nome', '$sobrenome', '$email', '$senha', '$data_nasc')");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook - entre ou cadastre-se</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylepopup.css">
</head>
<body>
    <div class="content">
            <div class="content-info">
                    <h1>Tupiniquim Book</h1>
                    <h3>O Facebook ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida.</h3>
                </div>
            <div class="content-login">
                <form class="content-login-box" action="testelogin.php" method="post">
                    <input type="text" class="inputs" name="email" placeholder="Email ou Telefone">
                    <input type="password" class="inputs" name="senha" placeholder="Senha">
                    <button type="submit" name="submit" class="btn btn-enter">Entrar</button>
                    <a href="#" class="forgot-password"> Esqueceu a Senha?</a>
                    <hr>                  
                    <button type="button" class="btn btn-create-account" id="openPopup">Criar nova conta</button>
                </form>
                <p><strong> Crie uma Página </strong> para uma celebridade, uma marca ou uma empresa.</p>
            </div>
    </div>
                <!-- Formulario Registro -->

                <div id="popup" class="popup">
                     <div class="popup-content">
                    <span class="close">&times;</span>
 <div class="container">
   <h1>Cadastre-se</h1>
   <p class="small-text">É rápido e fácil.</p>
   <form action="home.php" method="post">
   
   <label for="nome">Nome:</label>
     <input type="text" id="nome" name="nome" placeholder="Nome">

     <label for="sobrenome">Sobrenome:</label>
     <input type="text" id="sobrenome" name="sobrenome" placeholder="Sobrenome">

     <label for="email">Celular ou email:</label>
     <input type="email" id="email" name="email" placeholder="Celular ou email">

     <label for="senha">Nova senha:</label>
     <input type="password" id="senha" name="senha" placeholder="Nova senha">
     

     <label for="data_nasc" name="data_nasc">Data de nascimento:</label>
<select id="dia" name="data_nasc">
 <option value="1">1</option>
 <option value="2">2</option>
 <option value="3">3</option>
 <option value="5">5</option>
 <option value="6">6</option>
 <option value="7">7</option>
 <option value="8">8</option>
 <option value="9">9</option>
 <option value="10">10</option>
 <option value="11">11</option>
 <option value="12">12</option>
 <option value="13">13</option>
 <option value="14">14</option>
 <option value="15">15</option>
 <option value="16">16</option>
 <option value="17">17</option>
 <option value="18">18</option>
 <option value="19">19</option>
 <option value="20">20</option>
 <option value="21">21</option>
 <option value="22">22</option>
 <option value="23">23</option>
 <option value="24">24</option>
 <option value="25">25</option>
 <option value="26">26</option>
 <option value="27">27</option>
 <option value="28">28</option>
 <option value="29">29</option>
 <option value="30">30</option>
 <option value="31">31</option>
</select>
<select id="mes" name="data_nasc">
 <option value="jan">Janeiro</option>
 <option value="fev">Fevereiro</option>
 <option value="mar">Março</option>
 <option value="abr">Abril</option>
 <option value="mai">Maio</option>
 <option value="jun">Junho</option>
 <option value="jul">Julho</option>
 <option value="ago">Agosto</option>
 <option value="set">Setembro</option>
 <option value="out">Outubro</option>
 <option value="nov">Novembro</option>
 <option value="dez">Dezembro</option>
</select>
<select id="ano" name="data_nasc">
 <option value="2000">2000</option>
 <option value="2001">2001</option>
 <option value="2002">2002</option>
 <option value="2003">2003</option>
 <option value="2004">2004</option>
 <option value="2005">2005</option>
 <option value="2006">2006</option>
 <option value="2007">2007</option>
 <option value="2008">2008</option>
 <option value="2009">2009</option>
 <option value="2010">2010</option>
 <option value="2011">2011</option>
 <option value="2012">2012</option>
 <option value="2013">2013</option>
 <option value="2014">2014</option>
 <option value="2015">2015</option>
 <option value="2016">2016</option>
 <option value="2017">2017</option>
 <option value="2018">2018</option>
 <option value="2019">2019</option>
 <option value="2020">2020</option>
 <option value="2021">2021</option>
 <option value="2022">2022</option>
 <option value="2023">2023</option>
 <option value="2024">2024</option>
     
<label for="genero">Gênero:</label>
   <input type="radio" id="feminino" name="genero" value="Feminino">
   <label for="feminino">Feminino</label>
   <input type="radio" id="masculino" name="genero" value="Masculino">
   <label for="masculino">Masculino</label>
   <input type="radio" id="personalizado" name="genero" value="Personalizado">
   <label for="personalizado">Personalizado</label>

     <button type="submit" name="submit">Cadastre-se</button>

     <p class="small-text">As pessoas que usam nosso serviço podem ter enviado suas informações de contato para o Facebook. <a href="#">Saiba mais</a></p>
     <p class="small-text">Ao clicar em Cadastre-se, você concorda com nossos <a href="#">Termos</a>, <a href="#">Política de Privacidade</a> e <a href="#">Política de Cookies</a>. Você poderá receber notificações por SMS e cancelar isso quando quiser.</p>
   </form>
   <span class="close-button">x</span>
 </div>
</div>


<script>
const popup = document.getElementById('popup');
const openPopupBtn = document.getElementById('openPopup');
const closeBtn = document.querySelector('.close');
openPopupBtn.addEventListener('click', () => {
    popup.style.display = 'block';
});
closeBtn.addEventListener('click', () => {
    popup.style.display = 'none';
});
window.addEventListener('click', (event) => {
    if (event.target === popup) {
        popup.style.display = 'none';
    }
});</script>
</body>
</html>