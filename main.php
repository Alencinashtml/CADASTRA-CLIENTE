<?php
//ESTABELECE CONEXÃO COM BANCO DE DADOS
$host='localhost';
$usuario='seu-usuario';
$senha='sua-senha';
$banco='nome-do-banco';

$conexao=mysqli_connect($host,$usuario,$senha,$banco);
if (mysqli_connect_erro()){
    echo"Failed to connect to MySQL:".
    mysqli_connect_erro();exit;
}

//Recebe os dados do Formulario
$nome=$_POST['nome'];
$carro=$_POST['carro'];
$email=$_POST['email'];
$telefone=$_POST['telefone'];
$mensagen=$_POST['mensagem'];

//Insere o contato no banco de dados
$sql="INSERT INTO contatos(nome,carro,email,telefone,mensagem)VALUES('$nome','$carro','$email','$telefone'.'$mensagem
)";

// Conexão com o banco de dados
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "seu_banco_de_dados";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificação da conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Processamento do formulário de cadastro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $servico = $_POST['servico'];
    $peça= $_POST['peça'];
    $carro = $_POST['carro'];
    $valor = $_POST['valor'];

    // Inserção dos dados na tabela
    $sql = "INSERT INTO clientes (nome, telefone, servico, carro, valor)
    VALUES ('$nome', '$telefone', '$servico', '$peça', '$carro', '$valor')";

    if ($conn->query($sql) === TRUE) {
        echo "Cliente cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar o cliente: " . $conn->error;
    }
}
?>

