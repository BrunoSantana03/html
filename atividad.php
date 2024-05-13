<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Exercícios</title>
  </head>
  <body>
	<h1>Exercícios</h1>
	<ol>
<li>Escreva um código em PHP para mostrar o seu nome na tela.</li>
    <?php
        echo "Bruno";
    ?>
<p><b>código</b></p>
<p><pre> echo "Bruno"; </pre></p>
<li>Escreva um código em PHP para mostrar os números de 1 até 100 na tela.</li>
    <?php
        for ($i = 1; $i <= 100; $i++) {
            echo "$i<br>";
        }
    ?>
<p><b>código</b></p>
<p><pre> for ($i = 1; $i <= 100; $i++) {
            echo "$i<br>";
        } </pre></p>
<li>Escreva o código em PHP para mostrar os números de 100 até 1 na tela.</li>
    <?php
        for ($j = 100; $j >= 1; $j--) {
            echo "$j<br>";
        }
    ?>
<p><b>código</b></p>
<p><pre> for ($j = 100; $j >= 1; $j--) {
            echo "$j<br>";
        } </pre></p>
<li>Calculadora de IMC (Índice de Massa Corporal): Desenvolva um programa que calcule o Índice de Massa Corporal (IMC) de uma pessoa. O IMC é calculado pela fórmula: IMC = peso / (altura * altura). Para testar, coloque os valores de peso e altura dentro das variáveis $peso (em quilogramas) e $altura (em metros) e então deve exibir uma mensagem indicando a categoria de peso da pessoa com base no IMC calculado. Por exemplo, se o IMC estiver abaixo de 18,5, exiba "Abaixo do peso"; se estiver entre 18,5 e 24,9, exiba "Peso normal"; se estiver entre 25 e 29,9, exiba "Sobrepeso"; e assim por diante.</li>

    <form method="post">
        <label for="peso">Peso (kg):</label>
        <input type="number" step="0.01" id="peso" name="peso" required><br><br>

        <label for="altura">Altura (m):</label>
        <input type="number" step="0.01" id="altura" name="altura" required><br><br>

        <input type="submit" value="Calcular IMC">
    </form>    
       
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $peso = $_POST["peso"];
            $altura = $_POST["altura"];

            $imc = $peso / ($altura * $altura);

            echo "<h3>Seu IMC é: $imc</h3>";

            if ($imc < 18.5) {
                echo "Abaixo do peso";
            } elseif ($imc >= 18.5 && $imc < 25) {
                echo "Peso normal";
            } elseif ($imc >= 25 && $imc < 30) {
                echo "Sobrepeso";
            } elseif ($imc >= 30 && $imc < 35) {
                echo "Obesidade Grau I";
            } elseif ($imc >= 35 && $imc < 40) {
                echo "Obesidade Grau II";
            } else {
                echo "Obesidade Grau III (Obesidade mórbida)";
            }
        }
    ?>    
<p><b>código</b></p>
<p><pre>         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $peso = $_POST["peso"];
            $altura = $_POST["altura"];

            $imc = $peso / ($altura * $altura);

            echo "<h3>Seu IMC é: $imc</h3>";

            if ($imc < 18.5) {
                echo "Abaixo do peso";
            } elseif ($imc >= 18.5 && $imc < 25) {
                echo "Peso normal";
            } elseif ($imc >= 25 && $imc < 30) {
                echo "Sobrepeso";
            } elseif ($imc >= 30 && $imc < 35) {
                echo "Obesidade Grau I";
            } elseif ($imc >= 35 && $imc < 40) {
                echo "Obesidade Grau II";
            } else {
                echo "Obesidade Grau III (Obesidade mórbida)";
            }
        } </pre></p>
<li>Verificador de número par ou ímpar: Crie uma variável chamada número que deve ser inteiro e, em seguida, determine se esse número é par ou ímpar. Utilize uma estrutura de decisão para verificar se o número é divisível por 2 (par) ou não (ímpar). Em seguida, exiba uma mensagem indicando se o número é par ou ímpar.</li>

    <form method="post">
        <label for="numero">Digite um número inteiro:</label>
        <input type="number" id="numero" name="numero" required><br><br>
        
        <input type="submit" value="Verificar">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST["numero"];

            if ($numero % 2 == 0) {
                echo "<h3>O número $numero é par.</h3>";
            } else {
                echo "<h3>O número $numero é ímpar.</h3>";
            }
        }
    ?>
<p><b>código</b></p>
<p><pre>         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST["numero"];

            if ($numero % 2 == 0) {
                echo "<h3>O número $numero é par.</h3>";
            } else {
                echo "<h3>O número $numero é ímpar.</h3>";
            }
        } </pre></p>
<li>Verificador de idade para acesso a um site: Implemente um sistema simples que verifica se um usuário tem idade suficiente para acessar um site restrito para maiores de idade. O valor da idade do usuário deve ser atribuído a uma variável idade e, em seguida, utilizar uma estrutura de decisão para verificar se a idade fornecida é igual ou superior a 18 anos. Se a idade for maior ou igual a 18, exiba uma mensagem de boas-vindas ao site; caso contrário, exiba uma mensagem informando que o acesso é restrito a maiores de idade.</li>

    <form method="post">
        <label for="idade">Digite sua idade:</label>
        <input type="number" id="idade" name="idade" required><br><br>

        <input type="submit" value="Verificar">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $idade = $_POST["idade"];

            if ($idade >= 18) {
                echo "<h3>Bem-vindo ao site!</h3>";
            } else {
                echo "<h3>Acesso restrito: este site é apenas para maiores de 18 anos.</h3>";
            }
        }
    ?>
<p><b>código</b></p>
<p><pre>         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $idade = $_POST["idade"];

            if ($idade >= 18) {
                echo "<h3>Bem-vindo ao site!</h3>";
            } else {
                echo "<h3>Acesso restrito: este site é apenas para maiores de 18 anos.</h3>";
            }
        } </pre></p>
<li>Crie uma variável chamada $nota e atribua um valor inteiro entre 0 e 100 a ela, representando a nota de um aluno em uma avaliação. </li>

    <?php
    $nota = 95; 
    echo "$nota"
    ?>
<p><b>código</b></p>
<p><pre>     $nota = 95; 
    echo "$nota" </pre></p>
<li>Utilize a estrutura switch para imprimir o conceito correspondente à nota inserida na variável. Defina os seguintes intervalos para os conceitos: A: 90-100 B: 80-89 C: 70-79 D: 60-69 E: 50-5</li>

    <?php
    $nota = 95; 

        switch (true) {
        case ($nota >= 90 && $nota <= 100):
            echo "Conceito: A";
            break;
        case ($nota >= 80 && $nota <= 89):
            echo "Conceito: B";
            break;
        case ($nota >= 70 && $nota <= 79):
            echo "Conceito: C";
            break;
        case ($nota >= 60 && $nota <= 69):
            echo "Conceito: D";
            break;
        case ($nota >= 50 && $nota <= 5):
            echo "Conceito: E";
            break;
        }
    ?>
<p><b>código</b></p>
<p><pre>     $nota = 95; 

switch (true) {
case ($nota >= 90 && $nota <= 100):
    echo "Conceito: A";
    break;
case ($nota >= 80 && $nota <= 89):
    echo "Conceito: B";
    break;
case ($nota >= 70 && $nota <= 79):
    echo "Conceito: C";
    break;
case ($nota >= 60 && $nota <= 69):
    echo "Conceito: D";
    break;
case ($nota >= 50 && $nota <= 5):
    echo "Conceito: E";
    break;
} </pre></p>
<li>Crie um array chamado $listaCompras contendo uma lista de itens que uma pessoa precisa comprar no supermercado. Em seguida, utilize um loop foreach para percorrer o array e exibir cada item da lista em uma linha. Ao final da lista, exiba uma mensagem informando a quantidade total de itens na lista.</li>

    <?php
        $listaCompras = array(
        "Arroz",
        "Feijão",
        "Ovo",
        "Carne",
        );

        echo "<h2>Lista de Compras:</h2>";
        foreach ($listaCompras as $item) {
            echo "$item<br>";
        }

        $quantidadeTotal = count($listaCompras);
        echo "<p>Quantidade total de itens na lista: $quantidadeTotal</p>";
    ?>
<p><b>código</b></p>
<p><pre>         $listaCompras = array(
        "Arroz",
        "Feijão",
        "Ovo",
        "Carne",
        );

        echo "<h2>Lista de Compras:</h2>";
        foreach ($listaCompras as $item) {
            echo "$item<br>";
        }

        $quantidadeTotal = count($listaCompras);
        echo "<p>Quantidade total de itens na lista: $quantidadeTotal</p>"; </pre></p>
<li>Crie um array associativo chamado $agendaContatos que represente uma agenda de contatos, onde as chaves são os nomes das pessoas e os valores são os números de telefone. Adicione pelo menos 3 contatos à agenda. Em seguida, crie uma função chamada buscar Contato que receba como parâmetro o nome de uma pessoa e retorne o número de telefone correspondente. Finalmente, chame a função buscarContato para buscar e exibir o número de telefone de um dos contatos adicionados.</li>

    <?php
        $agendaContatos = array(
            "Pedro" => "123456789",
            "Lucas" => "987654321",
            "Andre" => "012345678"
        );

        function buscarContato($nome, $agenda) {
            if (array_key_exists($nome, $agenda)) {
                return $agenda[$nome];
            } else {
                return "Contato não encontrado";
            }
        }

        $nomeBusca = "Pedro";
        $telefone = buscarContato($nomeBusca, $agendaContatos);
        echo "O número de telefone de $nomeBusca é: $telefone";
    ?>
<p><b>código</b></p>
<p><pre>         $agendaContatos = array(
            "Pedro" => "123456789",
            "Lucas" => "987654321",
            "Andre" => "012345678"
        );

        function buscarContato($nome, $agenda) {
            if (array_key_exists($nome, $agenda)) {
                return $agenda[$nome];
            } else {
                return "Contato não encontrado";
            }
        }

        $nomeBusca = "Pedro";
        $telefone = buscarContato($nomeBusca, $agendaContatos);
        echo "O número de telefone de $nomeBusca é: $telefone"; </pre></p>
</ol>
</body>
</html>
