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
    </head>
    <body>
        <form action="#" method="GET">
            Number of words:    <input name = "number" type="text" value="number" /><br>
            First letter caps:  <input name = "capital" type="checkbox" value="capital"/><br>
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
    </body>
</html>