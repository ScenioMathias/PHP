<!DOCTYPE html>
<html>
<head>
    <title>Listar Números Primos</title>
</head>
<body>
    <h1>Listar Números Primos</h1>
    <form method="post">
        <label for="numero">Digite um número inteiro positivo maior que 1:</label>
        <input type="number" name="numero" id="numero" required><br><br>
        <input type="submit" value="Listar Números Primos">
    </form>

    <?php
    class ListarNumerosPrimos {
        private $numero;

        public function __construct($numero) {
            $this->numero = $numero;
        }

        public function isPrimo($num) {
            if ($num <= 1) {
                return false;
            }

            for ($i = 2; $i * $i <= $num; $i++) {
                if ($num % $i == 0) {
                    return false;
                }
            }

            return true;
        }

        public function listarPrimos() {
            $numerosPrimos = array();
            for ($i = 2; $i <= $this->numero; $i++) {
                if ($this->isPrimo($i)) {
                    $numerosPrimos[] = $i;
                }
            }
            return $numerosPrimos;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $numero = intval($_POST["numero"]);
        if ($numero <= 1) {
            echo "<p>Por favor, digite um número inteiro positivo maior que 1.</p>";
        } else {
            $listarPrimos = new ListarNumerosPrimos($numero);
            $primos = $listarPrimos->listarPrimos();
            echo "<p>Números primos de 1 a $numero: " . implode(", ", $primos) . "</p>";
        }
    }
    ?>
</body>
</html>
