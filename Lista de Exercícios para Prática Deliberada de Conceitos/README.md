# Lista de Atividades - Programação orientada a objetos

<img src="https://github.com/ScenioMathias/APL-2/blob/main/ALP.png?raw=true" alt="smashupy" width="700"/>

## Anunciado das atividades 

## _Exercício 1_

_Escreva um programa que leia um número digitado pelo usuário e imprima o seu dobro e o seu quadrado._

 ```shell
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
 ```
 
## _Exercício 2_

_Escreva um programa que leia três números inteiros digitados pelo usuário e imprima a soma e o produtos deles._

 ```shell
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
 ```

## _Exercício 3_

_Escreva um programa que leia um caractere do usuário e verifique se é uma vogal_
 
 ```shell
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
```
## _Exercício 4_

_Desenvolva um programa que leia um número inteiro e verifique se ele é primo_
 
 ```shell
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
 ```

## _Exercício 5_

_Crie um programa que leia uma sequência de 5 números inteiros e imprima o maior e o menor valor_
 
 ```shell
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
 ```
## _Exercício 6_

_Crie um programa que leia uma sequência de 5 números inteiros e retorne apenas o segundo maior valor presente na sequência_
 
 ```shell
<!DOCTYPE html>
<html>
<head>
    <title>Encontrar o Segundo Maior Valor</title>
</head>
<body>
    <h1>Encontrar o Segundo Maior Valor</h1>
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
    class EncontrarSegundoMaior {
        private $numeros = array();

        public function __construct($numeros) {
            $this->numeros = $numeros;
        }

        public function encontrarSegundoMaior() {
            rsort($this->numeros); // Classifica a sequência em ordem decrescente
            return $this->numeros[1]; // Retorna o segundo maior valor
        }
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $numeros = array();
        for ($i = 1; $i <= 5; $i++) {
            $numero = intval($_POST["numero$i"]);
            array_push($numeros, $numero);
        }

        $encontrar = new EncontrarSegundoMaior($numeros);
        $segundoMaior = $encontrar->encontrarSegundoMaior();
        echo "<p>O segundo maior valor é: " . $segundoMaior . "</p>";
    }
    ?>
</body>
</html>
 ```
## _Exercício 7_

_7)	Escreva um programa que solicite ao usuário um número inteiro positivo e exiba na tela todos os números pares de 0 até o número digitado_
 
 ```shell
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
```
## _Exercício 8_

_Escreva um programa que solicite ao usuário um número inteiro positivo e exiba na tela todos os números primos de 1 até o número digitado_
 
 ```shell

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
```
## _Exercício 9_

_Escreva um programa que solicite ao usuário um número inteiro positivo e calcule a soma de todos os números ímpares de 1 até o número digitado._
 
 ```shell
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
 ```
## _Exercício 10_

_Escreva um programa que calcule a média de três notas e informe se o aluno foi aprovado, reprovado, ou se está em recuperação. Considere a média mínima
para aprovação igual 7; média entre 5 e 6,99 recuperação, e média menor ou igual a 4,99 reprovado.
_
 
 ```shell
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
 ```shell
