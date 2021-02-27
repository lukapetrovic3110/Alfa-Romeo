<!DOCTYPE html>

<head>
    
    <title>Alfa Romeo</title>

    
	<meta charset = "UTF-8">
	
	<link rel = "stylesheet" type = "text/css" href = "style/log.css"/>

</head>

<body>

    <div id = "header">
    
        <h1 id = "caption">REGISTRUJ SE</h1>
    
    </div>

    <div id = "menu">

        <div id = "nav">
            <ul>
                <li><a href = "index.html">POČETNA</a></li>
                <li><a href="about_company.html">O KOMPANIJI</a></li>
			    <li><a href="log.php">REGISTRUJ SE</a></li>
            </ul>
        </div>
    </div>

    <div id = "content">
        <?php 
            if (!isset($_POST['submit'])){
        ?>
        <form id = "center" method = "post" action="log.php">
            <p id = "formular">
                FORMULAR:
                <hr align = "center" width = "70%">
            </p>

            <p class = "txt">
                IME: <input id = "input1" type = "text" placeholder = "Ime" name = "ime"/>
                <br>
                PREZIME: <input class = "input2" type = "text" placeholder = "Prezime" name = "prezime"/>
                <br>
                LOZINKA: <input class = "input2" type = "password" placeholder = "Lozinka" name = "lozinka"/>
            </p>

            <p id = "choose_model">
                IZABERITE MODEL ALFE:
                <hr align = "center" width = "50%">
            </p>

            <p class = "txt"><input id = "checkbox" type = "checkbox" name = "model[]" value = "4C COUPE"/>4C COUPE<br/></p>

            <p class = "txt"><input id = "checkbox" type = "checkbox" name = "model[]" value = "GIULIA"/>GIULIA</p>

            <input id = "button" type = "submit" name = "submit" value = "POŠALJI"/>

        </form>
        
    <?php
        } else {
            $korisnik = array(
                $_POST['ime'],
                $_POST['prezime'],
                $_POST['lozinka']
            );

            $alfe = $_POST['model'];

            echo "<div id = 'response_content'>";


            echo "<p id='ewrite'>DOBRO DOŠLI</br></br>Poštovani korisniče $korisnik[0] $korisnik[1].";

            echo "<br><br>Izabrali ste model:";

            echo "</p>";

            echo "<ol id = 'ol'>";

            foreach ($alfe as $model)
            {
                echo "<li>$model</li>";
            }

            echo "</ol>";
        }
        echo "</div>";

    ?>

    <div id="footer">

        <h3>
            <b>Copyright Luk@</b>
        </h3>

    </div>

</body>

</html>