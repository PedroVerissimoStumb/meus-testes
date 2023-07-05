<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../estilo/all.css">
        <title>DG-Tattoo - Home</title>
    </head>
    <body>
        <?php
            $nome = $_REQUEST["name"] ?? 'Undefined';
            $idade = $_REQUEST["age"] ?? 0;


        ?>
        <header>

            <div class="logo"></div>

            <p style="background-image: linear-gradient(to bottom, rgb(186, 158, 0), rgb(255, 244, 183)); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent; text-shadow: 0px 0px 10px rgba(255, 215, 129, 0.695);">Tattoo & Piercing</p>

            <nav>
                <ul>
                    <li><a href="../">Home</a></li>
                    <li><a href="#">Tatuagem e Piercing</a></li>
                    <li><a href="#">Orçamento</a></li>
                    <li><a href="#">Atentimento</a></li>
                </ul>
            </nav>

            <div class="social">
                <abbr title="Clique para acessar"><div class="facebook" onclick="javascript: window.location.href = 'https:/\/www.facebook.com/profile.php?id=100090890916214'"></div></abbr>
                <abbr title="Clique para acessar"><div class="instagram" onclick="javascript: window.location.href = 'https:/\/www.instagram.com/tattoodiegodg/'"></div></abbr>
            </div>

        </header>
        
        <div class="line"></div>
        
        <article>
            <section>
                <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
                    <div class="name">
                        <label for="name">Nome: </label>
                        <input type="text" name="name" id="name" require>
                    </div>

                    <div class="age">
                        <label for="age">Idade: </label>
                        <input type="number" name="age" id="age" min="0" max="99" require value="<?=$idade?>">
                    </div>

                    <div class="action">
                        <input type="submit" value="Continuar">
                    </div>
                </form>
            </section>
        </article>


        <footer>
            <p>Todos os Direitos Reservados - Copyright &copy; - 2023 Estudio DG Tattoo</p>
        </footer>
    </body>
</html>