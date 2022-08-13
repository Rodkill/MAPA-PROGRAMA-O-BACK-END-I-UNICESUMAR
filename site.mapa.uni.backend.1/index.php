<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marmitas Dona Rita</title>
    <link rel="stylesheet" href="css/page.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/contato.css">
    <link rel="stylesheet" href="css/home.css">
</head>

<body>

    <header>

        <font color="#6000dd" size="6">
        <p>Marmitas do Dia</p>
        </font>
        
        <a href="index.php">

            <img src="images/donarita.png" alt="Logo" class="logo">

        </a>   

    </header>

    <nav>
        <ul>
            <li>
                <a href="index.php"><font color="ffffff">Início</font></a>
            </li>
            <li>
                <a href="index.php?page=quem_somos"><font color="ffffff">Quem somos</font></a>
            </li>
            <li>
                <a href="index.php?page=contato"><font color="ffffff">Contato</font></a>    
            </li> 
        </ul>

    </nav>

    <div class="content">

        <div class="container">

            <?php
                $page = "home";

                if(isset($_GET['page'])){

                if(file_exists("pages/".$_GET['page'].".php")){
                        $page = $_GET['page'];
                }
                }

                include("pages/$page.php");
            ?>

        </div>

    </div>

    <footer>

    <font color="ffffff">
        <p class="rodape"> Marmitaria Dona Rita<br><br>
        Fone: (37) 3214-9885<br>
        Endereço: Rua Goiás, 77, Bairro: Centro <br>
        A melhor marmitária da cidade! </p>

    <div align="center" >

        <p>    2022 - MAPA - Aluno: Ian Lucca Gomes de Araújo Bessa - RA: 21105268-5 - Curso: SUPERIOR DE TECNOLOGIA EM SISTEMAS PARA INTERNET</p>

    </div>

    </font>

    </footer>
    
</body>
</html>