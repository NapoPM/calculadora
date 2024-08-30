<?php
$num = isset($_POST['num']) ? $_POST['num'] : null;
$op = isset($_POST['op']) ? $_POST['op'] : null;
$visor = isset($_POST['visor']) ? $_POST['visor'] : null;

$num2 = isset($_POST['num2']) ? $_POST['num2'] : null;
$op2 = isset($_POST['op2']) ? $_POST['op2'] : null;

if ($op!=null) {
    if ($op == "=") {
        switch ($op2) {
            case '+': $visor=$num2+$visor; break;
            case '-': $visor=$num2+$visor; break;
            case '*': $visor=$num2+$visor; break;
            case '/': 
            if ($visor!=0) {
                $visor=$num2/$visor;
            }else{
                $visor = "Error  DIV/0";
            }
            break;
        }
    }
    else{
        $op2 = $op;
        $num2 = $visor;
        $visor = null;
    }
}
    else{
        $visor = $visor.$num;
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form action="index.php" method="post">
        <center>
            <table style="width: 450px; height:550px;">
                <tr><input type="text" name="visor" style="width: 440px; height:70px;" value="<?php echo $visor ?>"> </tr>
                <tr>
                    <td><button type="submit" name="num" value="7"><img src="/img/siete.png"></button></td>
                    <td><button type="submit" name="num" value="8"><img src="/img/ocho.png"></button></td>
                    <td><button type="submit" name="num" value="9"><img src="/img/nueve.png"></button></td>
                    <td><button type="submit" name="op" value="+"><img src="/img/mas.png"></button></td>

                </tr>
                <tr>
                    <td><button type="submit" name="num" value="4"><img src="/img/cuatro.png"></button></td>
                    <td><button type="submit" name="num" value="5"><img src="/img/cinco.png"></button></td>
                    <td><button type="submit" name="num" value="6"><img src="/img/seis.png"></button></td>
                    <td><button type="submit" name="op" value="-"><img src="/img/menos.png"></button></td>

                </tr>
                <tr>
                    <td><button type="submit" name="num" value="1"><img src="/img/uno.png"></button></td>
                    <td><button type="submit" name="num" value="2"><img src="/img/dos.png"></button></td>
                    <td><button type="submit" name="num" value="3"><img src="/img/tres.png"></button></td>
                    <td><button type="submit" name="op" value="/"><img src="/img/div.png"></button></td>
                </tr>
                <tr>
                    <td><button type="submit" name="num" value="0"><img src="/img/cero.png"></button></td>
                    <td><button type="submit" name="op" value="C"><img src="/img/borrar.png"></button></td>
                    <td><button type="submit" name="op" value="*"><img src="/img/multi.png"></button></td>
                    <td><button type="submit" name="op" value="="><img src="/img/igual.png"></button></td>
                </tr>
            </table>
            <input type="hidden" name="num2" value="<?php echo $num2; ?>">
            <input type="hidden" name="op2" value="<?php echo $op2; ?>">
        </center>
    </form>
</body>
</html>