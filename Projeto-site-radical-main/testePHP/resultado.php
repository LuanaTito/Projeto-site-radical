<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mova- se [Página principal]</title>
    <meta name="description" content="O mova-se é um site educacional, 
    com a proposta de fazer reservas e pacotes de viagens 
    com esportes radicais.">

        <!-- CSS Estilo -->
        <link rel="stylesheet" href="css/estilo.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    
<style>
    table { width: 100%; border-collapse: collapse; margin-top: 20px; }
table th, td, tr  { border: 1px solid #ddd; padding: 10px; text-align: left; }
table th { padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color:rgb(2, 26, 17);
    color: white; }
table tr:nth-child(even){background-color:rgb(203, 236, 217);}
</style>
</head>

<body>
    <header id="topo">
        <div>
            <h1>
                <a href="index.html"><img src="imagem/logo.png" alt="Logotipo"></a>
            </h1>
            <span id="iconMenu" class="material-symbols-outlined" onclick="clickMenu()">
                menu
            </span>
            <nav id="itens">
                <a href="index.html" tabindex="1">Home</a>
                <!--tabindex é utilizado para a acessibilidade-->
                <a href="pacotes.html" tabindex="2">Pacotes</a>
                <a href="acessorios.html" tabindex="3">Acessórios</a>
                <a href="contato.php" tabindex="4">Contato</a>
            </nav>
        </div>
    </header>


    <main class="conteudo">
        <article class="conteudo-info">
            
            <p>Veja os resultado que há na data base</p>
            
            <?php
    // Configurações do banco de dados
    include "conecta.php";

    // Consulta SQL
    $sql = "SELECT id, nome, email, celular, assunto, mensagem, data  FROM tb_contato";
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Celular</th>
                    <th>Assunto</th>
                    <th>Mensagem</th>
                    <th>DATA</th>
                </tr>";

        // Exibe cada linha do resultado
        while ($linha = $resultado->fetch_assoc()) {
            echo "<tr>
                    <td>" . $linha["id"] . "</td>
                    <td>" . $linha["nome"] . "</td>
                    <td>" . $linha["email"] . "</td>
                    <td>" . $linha["celular"] . "</td>
                    <td>" . $linha["assunto"] . "</td>
                    <td>" . $linha["mensagem"] . "</td>
                    <td>" . $linha["data"] . "</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum resultado encontrado.";
    }

    // Fecha a conexão
    $conexao->close();
    ?>
        </article>
    </main>

    <footer class="rodape">
        <div class="rodape-conteudo">
            <div id="logo-rodape">
                <a href="index.html"><img src="imagem/logo.png" alt="Logotipo"></a>
            </div>
            <div class="menu-rodape">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Terrestre</a></li>
                    <li><a href="#">Montanha</a></li>
                    <li><a href="#">Aquático</a></li>
                    <li><a href="#">Aéreo</a></li>
                </ul>
            </div>
            <div class="menu-rodape">
                <ul>
                    <li><a href="pacotes.html">Pacotes</a></li>
                    <li><a href="acessorios.html">Acessorios</a></li>
                    <li><a href="contato.html">Contato</a></li>
                </ul>
            </div>
            <div class="redes">
                <aside>
                    <img src="imagem/facebook.png" alt="Logo do Facebook">
                    <img src="imagem/insta.png" alt="Logo do Instagram">
                    <img src="imagem/youtube.png" alt="Logo do Youtube">
                </aside>
            </div>
        </div>
        <div class="assinatura">
            <p>Desenvolvido por <b>SEU NOME</b> Site acadêmico |
                Todos os direitos reservados |
                SENAC TITO &copy; 2024</p>

        </div>

    </footer>
    <script src="js/interacao.js"></script>
</body>

</html>