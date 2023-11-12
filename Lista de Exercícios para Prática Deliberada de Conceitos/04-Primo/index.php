<!DOCTYPE html>
<html>
<head>
    <title>Verificador de Números Primos</title>
</head>
<body>
    <h1>Verificador de Números Primos</h1>
    <form method="post">
        <label for="numero">Digite um número inteiro positivo:</label>
        <input type="number" name="numero" id="numero" required><br><br>
        <input type="submit" value="Verificar">
    </form>

    <?php
    class VerificadorPrimo {
        private $numero;

        public function __construct($numero) {
            $this->numero = $numero;
        }

        public function isPrimo() {
            if ($this->numero <= 1) {
                return false;
            }

            for ($i = 2; $i * $i <= $this->numero; $i++) {
                if ($this->numero % $i == 0) {
                    return false;
                }
            }

            return true;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $numero = intval($_POST["numero"]);
        if ($numero < 0) {
            echo "<p>Por favor, digite um número inteiro positivo.</p>";
        } else {
            $verificador = new VerificadorPrimo($numero);
            if ($verificador->isPrimo()) {
                echo "<p>O número $numero é primo.</p>";
            } else {
                echo "<p>O número $numero não é primo.</p>";
            }
        }
    }
    ?>
</body>
</html>
