<?php 
session_start();
include_once('conexao.php');

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$tel = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'end', FILTER_SANITIZE_STRING);
$genero = $_POST['radsex'];
$formacao =	$_POST['formacao'];
$objetivos = $_POST['objetivos'];



//echo "Nome: $nome <br>";
//echo "E-mail: $email ";

$result_usuario = "INSERT INTO usuarios (nome, email, tel, cpf, rg, endereco, genero) VALUES ('$nome','$email','$tel','$cpf','$rg','$endereco','$genero')";




$resultado = mysqli_query($conn, $result_usuario);


if(mysqli_insert_id($conn)){
	$arquivo = fopen('cadastro.html','a+');


	$texto = '<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Curriculo</title>

    <!-- <link rel="stylesheet" href="css/style.css" type="text/css"> -->
</head>
<body>

    <header class="cabecalho">
        <h1>Faça já o seu Currículo</h1>
    </header>

    <section class="curriculo">
        <div class="cadastro">
            <h2>Dados Pessoais</h2>
            <form method="post" action="processa.php">
                <p>Nome: <label class="input">'.$nome.'</label> </p>

                <p>E-mail: <label class="input">'.$email.'</label></p>

                <p>Telefone:  <label class="input">'.$tel.'</label></p>

                <p>CPF: <label class="input">'.$cpf.'</label></p>

                <p>RG:  <label class="input">'.$rg.'</label></p>

                <p>Endereço:  <label class="input">'.$endereco.'</label></p>

                <p>Genero:  <label class="input">'.$genero.'</label></p>

                <br><br>

                <p>Formação: <br> <label class="area">'.$formacao.'</label></p>

                <p>Objetivos: <br> <label class="area">'.$objetivos.'</label></p>

                <input type="submit" class="button" name="Imprimir" value="Imprimir">
            </form>
        </div>
    </section>
    <footer>
        <p>&copy;JoãoVitorRibeiro</p>
    </footer>
</body>

<style type="text/css">
        
*{
    margin: 0;
    padding: 0;
    border: none;
}
body{
    background: rgb(0, 101, 252);
    color: #fff;
}
.cabecalho{
    font: normal 20pt "Arial";
    width: 100%;
    text-align: center;
    margin: 15px 0;
    color: white;
    text-shadow: 2px 2px 2px rgba(0,0,0,0.5);
}
.curriculo{
    width: 700px;
    margin: 15px auto;
    background: #fff;
    text-align: center;
    padding: 15px 0;
    border-radius: 15px;
    border: 1px solid rgb(0, 101, 252);
    box-shadow: 2px 2px 2px rgba(0,0,0,0.5);
}
p{
    
    margin: 2px auto;
    text-align: start;
    padding: 5px 0 5px 10px;
    width: 450px;
    box-shadow: none;
    outline: none;
    color: rgba(68, 68, 68, 0.959);
    font-family: "Arial";
    font-size: 15px;
    font-weight: 900;

}

h2{
    font-style: italic;
    color: #000;
    font: italic 15pt "Arial";
    font-weight: 700;
}
.input{
    border: 1px solid rgba(192, 192, 192, 0.658);
    height: 18px;
    border: none; 
    box-shadow: none;
    outline: none;
    width: 400px;
    margin: 3px auto;
    font-family: "Arial";
    font-style: normal;
}
.foto{
    max-width: 210px;
    max-height: 210px;
    width: 210px;
    height: 210px;
    border: 1px solid rgba(68, 68, 68, 0.5);
    padding: 10px;
}

textarea{
    border: 1px solid rgba(192, 192, 192, 0.658);
    height: 28px;
    margin: 20px 0px;
    padding: 0 10px;
    width: 90%;
    border: none;
    border: 1px solid rgba(68, 68, 68, 0.5);
    box-shadow: none;
    outline: none;
    resize: none;
    height: 100px;
    overflow: auto;
}

.dt_nasc{
    text-decoration: none;
    font-style: italic;
    padding-top: 20px;
    width: 40%;
}
.button{
    background: rgb(0, 101, 252);
    text-decoration: none;
    padding: 5px 15px;
    margin-top: 15px;
    border-radius: 15px;
    font: normal 15pt "Arial";
    text-align: center;
    margin: 15px 0;
    font-style: italic;
    color: white;
    text-shadow: 2px 2px 2px rgba(0,0,0,0.5);
    cursor: pointer;
}
.button:hover{
    background: rgb(0, 46, 252);
    transition: 1s;
}

footer{
    width: 100%;
    font: italic 10pt "Arial";
    background: rgb(68, 68, 68);;
    height: 100px;
    text-align: center;
}
footer p{
    color: #fff;
    margin: 15px auto;
}

</style>
</html>


<!-- <textarea class="formacao" name="formacao"> -->
<!-- <textarea class="objetivos" name="objetivos"> -->';

	fwrite($arquivo, $texto);

	fclose($arquivo);

	echo "Conteudo escrito";


$Conteudo = file_get_contents('cadastro.html');


echo $Conteudo;
}

else{
	echo "Erro";
}






 ?>