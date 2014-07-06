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
        <form id ="input" action="index.php" method="post">
            Number of words:    <input type="text" value="number" /><br>
            First letter caps:  <input type="checkbox" value="capital"/><br>
            Symbol in password: <input type="checkbox" value="symbol" /><br>
            Number in password: <input type="checkbox" value="num" /><br>
            <input type="submit" value="Submit"/>
        </form>
        <code><?PHP
            if(isset($_GET["number"])){
                $number = $_GET["number"];
                $num = $_GET["num"];
                $caps = $_GET["capital"];
                $symbol = $_GET["symbol"];
                print(getPassword($number, $num, $caps, $symbol));
            }
            ?></code>
    </body>
</html>