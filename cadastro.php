<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Conexão Cuidador</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #1e3f5a;
            background-image: url('old.jpg'); /* Substitua pelo caminho da sua imagem */
            background-size: cover; /* Cobre toda a tela */
            background-position: center; /* Centraliza a imagem */
            background-repeat: no-repeat; /* Evita repetição da imagem */
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8); /* Fundo branco semitransparente */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
        }
        h2 {
            text-align: center;
            color: #1e3f5a;
        }

        h1 {
            text-align: center;
            color: #1e3f5a;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #1e3f5a;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 80px;
        }

        button[type=submit] {
            width: 100%;
            padding: 10px;
            background-color: #1e3f5a;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #163448;
        }
		
		.back-button-fixed {
            position: fixed;
            bottom: 20px;
            left: 20px;
            background-color: #1e3f5a;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            z-index: 1000;
        }

        .back-button-fixed:hover {
            background-color: #163448;
        }

        att{
            text-align: center;
            color: red;
        }

        @media (max-width: 480px) {
            .container {
                padding: 15px;
            }

            button {
                font-size: 14px;
                padding: 8px;
            }
			
			.back-button-fixed {
                font-size: 14px;
                padding: 8px 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Conexão Cuidador</h1>
        <h2>Cadastro</h2>

        <?php
            if($_GET['erro'] == 1) {
                echo "<att><center>CPF inválido!</center></att>";
            }
        ?>

        <form action="processa_cadastro.php" method="post">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input
                    type="number"
                    id="cpf"
                    name="cpf"
                    maxlength="11"
                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" id="endereco" name="endereco" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="tel" id="telefone" name="telefone" maxlength="11" required>
            </div>
            <div class="form-group">
                <label for="servico">Serviço</label>
                <input type="text" id="servico" name="servico" required>
            </div>
            <div class="form-group">
                <label for="obs">Observações</label>
                <textarea id="obs" name="obs"></textarea>
            </div>
            <button type="submit">Cadastrar</button>
        </form>
    </div>
    
	<!-- Botão de voltar fixo na barra inferior esquerda -->
    <button class="back-button-fixed" onclick="window.location.href='login.php'">Voltar</button>
</body>
</html>
