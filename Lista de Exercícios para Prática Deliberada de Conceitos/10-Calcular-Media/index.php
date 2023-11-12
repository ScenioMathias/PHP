<!DOCTYPE html>
<html>
<head>
    <title>Calcular Média e Situação do Aluno</title>
</head>
<body>
    <h1>Calcular Média e Situação do Aluno</h1>
    <form method="post">
        <label for="nota1">Digite a primeira nota:</label>
        <input type="number" name="nota1" id="nota1" step="0.01" required><br><br>
        <label for="nota2">Digite a segunda nota:</label>
        <input type="number" name="nota2" id="nota2" step="0.01" required><br><br>
        <label for="nota3">Digite a terceira nota:</label>
        <input type="number" name="nota3" id="nota3" step="0.01" required><br><br>
        <input type="submit" value="Calcular Média e Situação">
    </form>

    <?php
    class VerificarSituacaoAluno {
        private $nota1;
        private $nota2;
        private $nota3;

        public function __construct($nota1, $nota2, $nota3) {
            $this->nota1 = $nota1;
            $this->nota2 = $nota2;
            $this->nota3 = $nota3;
        }

        public function calcularMedia() {
            return ($this->nota1 + $this->nota2 + $this->nota3) / 3;
        }

        public function verificarSituacao() {
            $media = $this->calcularMedia();
            if ($media >= 7) {
                return "Aprovado. Média: $media";
            } elseif ($media >= 5) {
                return "Em recuperação. Média: $media";
            } else {
                return "Reprovado. Média: $media";
            }
        }
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nota1 = floatval($_POST["nota1"]);
        $nota2 = floatval($_POST["nota2"]);
        $nota3 = floatval($_POST["nota3"]);

        $verificarSituacao = new VerificarSituacaoAluno($nota1, $nota2, $nota3);
        $situacao = $verificarSituacao->verificarSituacao();
        echo "<p>Situação do aluno: $situacao</p>";
    }
    ?>
</body>
</html>
