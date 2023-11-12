<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Dobro e Quadrado</title>
</head>
<body>
    <h1>Calculadora de Dobro e Quadrado</h1>
    <form method="post">
        <label for="numero">Digite um número:</label>
        <input type="text" name="numero" id="numero" required><br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    class Calculadora {
        private $numero;

        public function __construct($numero) {
            $this->numero = $numero;
        }

        public function calcularDobro() {
            return $this->numero * 2;
        }

        public function calcularQuadrado() {
            return $this->numero * $this->numero;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $numero = floatval($_POST["numero"]);
        $calculadora = new Calculadora($numero);
        $dobro = $calculadora->calcularDobro();
        $quadrado = $calculadora->calcularQuadrado();
        echo "<p>O dobro de $numero é $dobro</p>";
        echo "<p>O quadrado de $numero é $quadrado</p>";
    }
    ?>
</body>
</html>
