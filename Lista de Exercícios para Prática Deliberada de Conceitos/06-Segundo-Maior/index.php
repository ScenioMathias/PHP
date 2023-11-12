<!DOCTYPE html>
<html>
<head>
    <title>Encontrar o Segundo Maior Valor</title>
</head>
<body>
    <h1>Encontrar o Segundo Maior Valor</h1>
    <form method="post">
        <?php
        for ($i = 1; $i <= 5; $i++) {
            echo "<label for='numero$i'>Digite o número $i:</label>";
            echo "<input type='number' name='numero$i' id='numero$i' required><br><br>";
        }
        ?>
        <input type="submit" value="Calcular">
    </form>

    <?php
    class EncontrarSegundoMaior {
        private $numeros = array();

        public function __construct($numeros) {
            $this->numeros = $numeros;
        }

        public function encontrarSegundoMaior() {
            rsort($this->numeros); // Classifica a sequência em ordem decrescente
            return $this->numeros[1]; // Retorna o segundo maior valor
        }
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $numeros = array();
        for ($i = 1; $i <= 5; $i++) {
            $numero = intval($_POST["numero$i"]);
            array_push($numeros, $numero);
        }

        $encontrar = new EncontrarSegundoMaior($numeros);
        $segundoMaior = $encontrar->encontrarSegundoMaior();
        echo "<p>O segundo maior valor é: " . $segundoMaior . "</p>";
    }
    ?>
</body>
</html>
