<!DOCTYPE html>
<html>
<head>
    <title>Verificador de Vogais</title>
</head>
<body>
    <h1>Verificador de Vogais</h1>
    <form method="post">
        <label for="caractere">Digite um caractere:</label>
        <input type="text" name="caractere" id="caractere" required><br><br>
        <input type="submit" value="Verificar">
    </form>

    <?php
    class VerificadorVogal {
        private $caractere;

        public function __construct($caractere) {
            $this->caractere = strtolower($caractere);
        }

        public function verificarVogal() {
            $vogais = ['a', 'e', 'i', 'o', 'u'];
            if (in_array($this->caractere, $vogais)) {
                return "O caractere '$this->caractere' é uma vogal.";
            } else {
                return "O caractere '$this->caractere' não é uma vogal.";
            }
        }
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $caractere = $_POST["caractere"];
        if (strlen($caractere) == 1 && preg_match('/[a-zA-Z]/', $caractere)) {
            $verificador = new VerificadorVogal($caractere);
            $resultado = $verificador->verificarVogal();
            echo "<p>$resultado</p>";
        } else {
            echo "<p>Por favor, digite um único caractere alfabético.</p>";
        }
    }
    ?>
</body>
</html>
