<!DOCTYPE html>
<html>
<head>
    <title>Calcular Soma de Números Ímpares</title>
</head>
<body>
    <h1>Calcular Soma de Números Ímpares</h1>
    <form method="post">
        <label for="numero">Digite um número inteiro positivo:</label>
        <input type="number" name="numero" id="numero" required><br><br>
        <input type="submit" value="Calcular Soma">
    </form>

    <?php
    class CalcularSomaImpares {
        private $numero;

        public function __construct($numero) {
            $this->numero = $numero;
        }

        public function calcularSoma() {
            $soma = 0;
            for ($i = 1; $i <= $this->numero; $i += 2) {
                $soma += $i;
            }
            return $soma;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $numero = intval($_POST["numero"]);
        if ($numero < 1) {
            echo "<p>Por favor, digite um número inteiro positivo maior ou igual a 1.</p>";
        } else {
            $calcularSoma = new CalcularSomaImpares($numero);
            $soma = $calcularSoma->calcularSoma();
            echo "<p>A soma dos números ímpares de 1 a $numero é: $soma</p>";
        }
    }
    ?>
</body>
</html>
