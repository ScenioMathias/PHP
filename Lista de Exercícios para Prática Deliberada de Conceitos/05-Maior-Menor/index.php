<!DOCTYPE html>
<html>
<head>
    <title>Encontrar Maior e Menor Valor</title>
</head>
<body>
    <h1>Encontrar Maior e Menor Valor</h1>
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
    class EncontrarMaiorMenor {
        private $numeros = array();

        public function __construct($numeros) {
            $this->numeros = $numeros;
        }

        public function encontrarMaiorMenor() {
            $maior = max($this->numeros);
            $menor = min($this->numeros);
            return array('maior' => $maior, 'menor' => $menor);
        }
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $numeros = array();
        for ($i = 1; $i <= 5; $i++) {
            $numero = intval($_POST["numero$i"]);
            array_push($numeros, $numero);
        }

        $encontrar = new EncontrarMaiorMenor($numeros);
        $resultado = $encontrar->encontrarMaiorMenor();
        echo "<p>O maior valor é: " . $resultado['maior'] . "</p>";
        echo "<p>O menor valor é: " . $resultado['menor'] . "</p>";
    }
    ?>
</body>
</html>
