<!DOCTYPE html>
<html>
<head>
    <title>Listar Números Pares</title>
</head>
<body>
    <h1>Listar Números Pares</h1>
    <form method="post">
        <label for="numero">Digite um número inteiro positivo:</label>
        <input type="number" name="numero" id="numero" required><br><br>
        <input type="submit" value="Listar Números Pares">
    </form>

    <?php
    class ListarNumerosPares {
        private $numero;

        public function __construct($numero) {
            $this->numero = $numero;
        }

        public function listarPares() {
            $numerosPares = array();
            for ($i = 0; $i <= $this->numero; $i += 2) {
                $numerosPares[] = $i;
            }
            return $numerosPares;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $numero = intval($_POST["numero"]);
        if ($numero < 0) {
            echo "<p>Por favor, digite um número inteiro positivo.</p>";
        } else {
            $listarPares = new ListarNumerosPares($numero);
            $pares = $listarPares->listarPares();
            echo "<p>Números pares de 0 a $numero: " . implode(", ", $pares) . "</p>";
        }
    }
    ?>
</body>
</html>
