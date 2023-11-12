<?php

class Calculadora
{
    public int $primeiroNumero;
    public int $segundoNumero;

    public function __construct(int $primeiroNumero, int $segundoNumero)
    {
        $this->primeiroNumero = $primeiroNumero;
        $this->segundoNumero = $segundoNumero;
    }

    public function somar(): int
    {
        return $this->primeiroNumero + $this->segundoNumero;
    }

    public function subtrair(): int
    {
        return $this->primeiroNumero - $this->segundoNumero;
    }

    public function multiplicar(): int
    {
        return $this->primeiroNumero * $this->segundoNumero;
    }

    public function dividir(): int | float
    {
        return $this->primeiroNumero / $this->segundoNumero;
    }
}

$resultado = '';

if (isset($_GET['nro1']) && isset($_GET['nro2']) && isset($_GET['calcular'])) {
    $nro1 = (int)$_GET['nro1'];
    $nro2 = (int)$_GET['nro2'];
    $operacao = $_GET['calcular'];

    $calculadora = new Calculadora($nro1, $nro2);

    switch ($operacao) {
        case 'somar':
            $resultado = $calculadora->somar();
            break;
        case 'subtrair':
            $resultado = $calculadora->subtrair();
            break;
        case 'multiplicar':
            $resultado = $calculadora->multiplicar();
            break;
        case 'dividir':
            $resultado = $calculadora->dividir();
            break;
        default:
            $resultado = 'Operação inválida';
    }
}
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta nome="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Calculadora</title>
</head>
<body>
    <form method="GET">
        Primeiro Número <br/>
        <input type="number" name="nro1" required/><br/>
        Segundo Número <br/>
        <input type="number" name="nro2" required/><br/><br/> 
        <select name="calcular">
            <option value="somar"> <?php echo ($operacao=='somar') ? 'Selected' : ''; ?> Somar</option>
            <option value="subtrair"> <?php echo ($operacao=='subtrair') ? 'Selected' : ''; ?> Subtrair</option>
            <option value="multiplicar"> <?php echo ($operacao=='multiplicar') ? 'Selected' : ''; ?> Multiplicar</option>
            <option value="dividir"> <?php echo ($operacao=='dividir') ? 'Selected' : ''; ?> Dividir</option>
        </select>
        <br/><br/>
        <input type="submit" value="Calcular"/>
        <br/><br/>
        <p>O Resultado é <?php echo $resultado; ?></p>
    </form>
</body>
</html>
