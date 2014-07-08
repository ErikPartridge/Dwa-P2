<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Password Generator</title>
        <?PHP
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        require 'Parser.php';
        ?>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class = "block"/>
            <p>
                A different style password generator: as come up with by xkcd, this password generator uses a string of common words, which is more memorable than
            </p>
            <form action="#" method="GET">
                Number of words:    <input name = "number" type="number" value="number" /><br>
                First letter capitalized:  <input name = "capital" type="checkbox" value="capital"/><br>
                Symbol in password: <input name = "symbol" type="checkbox" value="symbol" /><br>
                Number in password: <input name = "num" type="checkbox" value="num" /><br>
                <input type="submit" value="Submit"/>
            </form>
            <code><?PHP
                if(isset($_GET["number"])){
                    $number = $_GET["number"];
                    $num = false;
                    if(isset($_GET["num"])){
                        $num = $_GET["num"];
                    }
                    $caps = false;
                    if(isset($_GET["capital"])){
                        $caps = $_GET["capital"];
                    }
                    $symbol = false;
                    if(isset($_GET["symbol"])){
                        $symbol = $_GET["symbol"];
                    }
                    print(getPassword($number, $num, $caps, $symbol));
                }
                ?></code>
            <p>
                ** This application uses an unedited list of common words in the English language. Expletive language is possible. **</br>
            </p>
            <img src = "http://imgs.xkcd.com/comics/password_strength.png" width = 95% height="95%"/>
        </div>
    </body>
</html>