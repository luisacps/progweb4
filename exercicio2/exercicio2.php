<!DOCTYPE html>
<html>
    <head>
        <title>exercicio 2</title>
    </head>
    <body>
        <?php
            $lista = array("Bom Dia!", "Boa Tarde!", "Boa Noite!");

            $datetime = new DateTime("now", new DateTimeZone("America/Sao_Paulo"));
            $hora = $datetime->format('H');
            
            if ($hora >= 0 && $hora <=12):
                echo "<h2>$lista[0]<h2>";
                echo "<img src='https://www.guiaviagensbrasil.com/imagens/Imagem%20da%20larga%20faixa%20de%20areia%20da%20Praia%20do%20Rio%20da%20Barra-Trancoso-Bahia-BA.jpg' alt='imagem do ceu de dia'>";

            elseif ($hora >= 12 && $hora <=18):
                echo "<h2>$lista[1]<h2>";
                echo "<img src='https://guiadacozinha.com.br/wp-content/uploads/2019/11/mesa-cafe-tarde.jpg' alt='imagem de cafe'>";

            elseif ($hora >= 18 && $hora <=24):
                echo "<h2>$lista[2]<h2>";
                echo "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgSkf805BNlh3MyuDYX7ZWaKsda9PtbQna3A&s' alt='imagem do ceu a noite'>";
            endif;
        ?>
    </body>
</html>