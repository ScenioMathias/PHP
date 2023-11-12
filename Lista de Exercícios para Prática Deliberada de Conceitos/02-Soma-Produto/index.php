<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Soma e Produto</title>
</head>
<body>
    <h1>Calculadora de Soma e Produto</h1>
    <form method="post">
        <label for="numero1">Digite o primeiro número:</label>
        <input type="text" name="numero1" id="numero1" required><br><br>
        <label for="numero2">Digite o segundo número:</label>
        <input type="text" name="numero2" id="numero2" required><br><br>
        <label for="numero3">Digite o terceiro número:</label>
        <input type="text" name="numero3" id="numero3" required><br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    class Calculadora {
        private $numero1;
        private $numero2;
        private $numero3;

        public function __construct($numero1, $numero2, $numero3) {
            $this->numero1 = $numero1;
            $this->numero2 = $numero2;
            $this->numero3 = $numero3;
        }

        public function calcularSoma() {
            return $this->numero1 + $this->numero2 + $this->numero3;
        }

        public function calcularProduto() {
            return $this->numero1 * $this->numero2 * $this->numero3;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $numero1 = intval($_POST["numero1"]);
        $numero2 = intval($_POST["numero2"]);
        $numero3 = intval($_POST["numero3"]);
        $calculadora = new Calculadora($numero1, $numero2, $numero3);
        $soma = $calculadora->calcularSoma();
        $produto = $calculadora->calcularProduto();
        echo "<p>A soma dos números é $soma</p>";
        echo "<p>O produto dos números é $produto</p>";
    }
    ?>
</body>
</html>
