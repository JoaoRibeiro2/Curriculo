<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Curriculo</title>

    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>

	<header class="cabecalho">
        <h1>Faça já o seu Currículo</h1>
    </header>

    <section class="curriculo">
        <div class="cadastro">
            <h2>Dados Pessoais</h2>
        	<form method="post" action="processa.php">
        		<p>Nome: <input class="input nome" type="text" name="nome"></p>
        		<p>E-mail<input class="input email" type="email" name="email"></p>
        		<p>Telefone: <input class="input tel" type="text" name="tel"></p>
                <p>CPF: <input class="input cpf" type="text" name="cpf"></p>
                <p>RG: <input type="text" class="input rg" name="rg"></p>
                <p>Endereço: <input class="input end" type="text" name="end"></p>
                <p>Genero: <br><input type="radio" name="radsex" value="Masculino"><label class="label"> Masculino: </label>
                <input type="radio" name="radsex" value="Feminino"><label class="label"> Feminino: </label></p>
                <p></p>
                <p>Formação: <br><textarea class="formacao" name="formacao"></textarea></p>
        		<p>Objetivos: <br><textarea class="objetivos" name="objetivos"></textarea></p>
        		<input type="submit" class="button" name="Enviar" value="Enviar">
        	</form>
        </div>
    </section>
    <footer>
        <p>&copy;JoãoVitorRibeiro</p>
    </footer>
</body>
</html>