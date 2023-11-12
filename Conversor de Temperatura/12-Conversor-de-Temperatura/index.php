<!DOCTYPE html>
<html>
<head>
    <title>Conversor de Temperatura</title>
</head>
<body>
    <h1>Conversor de Temperatura</h1>
    <form method="post">
        <label for="temperatura">Digite a temperatura:</label>
        <input type="text" name="temperatura" id="temperatura" required><br><br>

        <label for="escala">Escolha a escala de temperatura:</label>
        <select name="escala" id="escala" required>
            <option value="celsius">Celsius</option>
            <option value="kelvin">Kelvin</option>
            <option value="fahrenheit">Fahrenheit</option>
        </select><br><br>

        <input type="submit" value="Converter">
    </form>

    <?php
    class ConversorTemperatura {
        private $temperatura;
        private $escala;

        public function __construct($temperatura, $escala) {
            $this->temperatura = $temperatura;
            $this->escala = $escala;
        }

        public function converterTemperatura() {
            if ($this->escala === "celsius") {
                $kelvin = $this->temperatura + 273.15;
                $fahrenheit = ($this->temperatura * 9/5) + 32;
            } elseif ($this->escala === "kelvin") {
                $celsius = $this->temperatura - 273.15;
                $fahrenheit = ($this->temperatura - 273.15) * 9/5 + 32;
            } elseif ($this->escala === "fahrenheit") {
                $celsius = ($this->temperatura - 32) * 5/9;
                $kelvin = ($this->temperatura - 32) * 5/9 + 273.15;
            } else {
                return "Escala de temperatura inválida.";
            }

            return "{$this->temperatura}° {$this->escala} = $kelvin Kelvin = $fahrenheit Fahrenheit";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $temperatura = floatval($_POST["temperatura"]);
        $escala = $_POST["escala"];
        $conversor = new ConversorTemperatura($temperatura, $escala);
        $resultado = $conversor->converterTemperatura();
        echo "<p>$resultado</p>";
    }
    ?>
</body>
</html>
