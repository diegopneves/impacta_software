<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>IMPACTA - Abertura de chamado</title>


    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>

    
</head>

<body>
    <div class="container">
    <div class="menu-topo">
				<div class="logo"></div>
				<nav class="desktop">
					<ul>
						<li><a href="<?= INCLUDE_PATH ?>sobre">Sobre</a></li>
						<li><a href="<?= INCLUDE_PATH ?>cadastro">Cadastro</a></li>
						<li><a href="">Login</a></li>
						<li class="btn-nav"><a href="<?= INCLUDE_PATH ?>home">Home</a></li>
					</ul>
				</nav>
				
				<div class="clear"></div>
			</div>
    </div>

    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>

    <h2>Abertura de chamado técnico</h2>
    
    <div class="box">
    <form method="POST" action="processa.php">
        

        <fieldset>
            <legend><b>Dados para Abertura de chamado</b></legend><br>

            <div class="inputBox">            
            <input type="text" name="nome" id="nome" class="inputUser" required>
            <label for="nome" class="labelInput">Nome completo</label>
            </div>
            <br><br>

            <div class="inputBox">
            <input type="text" name="email" id="email" class="inputUser" required>
            <label for="email" class="labelInput">Email</label>
            
            </div>
            <br><br>

            <div class="inputBox">
            <input type="tel" name="tel" id="tel" class="inputUser" required>
            <label for="tel" class="labelInput">Telefone: </label>            
            </div>
            <br><br>

            <div class="inputBox">
            <input type="text" name="cep" id="cep" class="inputUser" required>
            <label for="cep" class="labelInput">CEP</label>            
            </div>
            <br><br>

            <div class="inputBox">
            <input type="text" name="logradouro" id="logradouro" class="inputUser" required>
            <label for="logradouro" class="labelInput">Endereço: </label>            
            </div>
            <br><br>

            <div class="inputBox">
            <input type="text" name="numero" id="numero" class="inputUser" required>
            <label for="numero" class="labelInput">Número: </label>
            </div>
            <br>           
            

            <h3>Data para o atendimento</h3>

            <label>Data: </label>
            <input type="date" name="date" id="date" placeholder="Data para o atendimento">
            <br><br>
            <input type="submit" value="Cadastrar" name="CadUsuario" id="submit">
            <br><br>
        </fieldset>
    </form>
    </div>

</body>

</html>

