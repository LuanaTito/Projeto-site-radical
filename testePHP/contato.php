<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contato - Simplicity</title>
<link rel="stylesheet" href="css/normalize.min.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

<link rel="stylesheet" href="css/estilos.css">
<link rel="icon" href="images/favicon.png" sizes="64x64">
<!--[if lt IE 9]>
<script src="js/html5shiv.min.js"></script>
<script src="js/css3-mediaqueries.min.js"></script>
<![endif]-->
</head>
<body>
    <header id="topo">
       <div>
        <h1>
            <a href="index.html">
                <img src="images/logo.png" 
                alt="Logotipo na forma de uma lâmpada">
            </a>
        </h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="produtos.html">Produtos</a></li>
                <li><a href="servicos.html">Serviços</a></li>
                <li><a href="contato.php">Contato</a></li>
            </ul>
        </nav>
        </div>
    </header>  
    <main id="conteudo">
        <article id="geral">
            <h2>Contato</h2>
            <div id="textocont">
          <?php
          if( isset( $_POST['enviar']) ){
              //Verificando se os campos indicados foram preenchidos 
              if( !empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['mensagem']) ){
                  
                  //pegar os valores preenchidos nos campos do formulario
                  $nome = $_POST['nome'];
                  $email = $_POST['email'];
                  $telefone = $_POST['telefone'];
                  $assunto = $_POST['assunto'];
                  $mensagem = $_POST['mensagem'];
                  
                  //Incorporar e executar o script de envio de e-mail
                  include "envia-email.php";
                  
                  /*Rotinas para utilizacao de banco de dados*/
                  include "conecta.php";
                  
                  //Obter a data (no formato do banco)
                  $data = date("Y-m-d H:i:s");
                  
                  //Exercicio 01: montar a consulta SQL
                  $sql = "INSERT INTO contatos (nome, email, telefone, assunto, mensagem, data)";
                  $sql .= "VALUES( '{$nome}', '{$email}', '{$telefone}', '{$assunto}', '{$mensagem}', '{$data}')";
                  //echo $sql
                  
                  //Exercicio 02: executar a consulta montada 
                  
                  mysqli_query( $conexao, $sql) or die(mysqli_error($conexao));
                  
                 ?> 
                  <p>Seus dados foram enviados com suacesso!</p>
                  <p>Em breve responderemos sua mensagem.</p>
                  
                  <?php
              }else{
                  ?>
                  <p>Voce deve preencher os campos obrigatorios</p>
                  <p><a href="contato.php"><b>Voltar para o formulário</b></a></p>
                                 
              <?php 
              }
              
          } else {
                
            ?>
            
            
            
        <p>Preencha o formulario abaixo para entrar em contato conosco.</p>
        <p>Ou, se preferir, utilize o telefone 11-2135-0300 ou o e-mail luana_dorizo@yahoo.com.br.</p>
          </div>
          <form action="" method="post" id="contato" name="contato">
             <p>
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" placeholder="Nome completo">
                <span></span>
             </p>
              <p>
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" placeholder="seuemail@provedor.com.br"> <span></span><!-- required campo obrigatorio -->
             </p>
               <p>
                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone">
             </p>
              <p>
                <label for="assunto">Assunto:</label>
                <input type="text" id="assunto" name="assunto">
             </p>
             <p>
                <label for="mensagem">Mensagem:</label>
                <textarea   name="mensagem" id="mensagem" cols="50" rows="6"></textarea>
                <span></span>
             </p>
             <p>
                <input type="submit" id="enviar" name="enviar" value="Enviar dados">
                 <!--
                    <button type="submit" id="enviar" name="enviar">Enviar dados</button>
                    -->
             </p>
              
              
          </form>

         <?php
            } //fim do botao enviar 
            ?>
         
         
         
          </article>
    </main>
    <footer id="rodape">
        <h2>HTML5 e CSS3</h2>
        <p>Simplicity é um site fictício desenvolvido educacionalmente 
        <br>Senac Penha - 2016 - Direitos Reservados </p>
    </footer>

<script src="js/jquery.min.js"></script>
<script>
    //Selecionando todos os <a> contidos no figure com a classe .galeria e adicionando a cada um o atributo 'data-lightbox' valendo 'galeria'
$(document).ready(function(){ 
    $('.galeria a').attr('data-lightbox' , 'galeria');
});    
</script>

    
</body>


</html>