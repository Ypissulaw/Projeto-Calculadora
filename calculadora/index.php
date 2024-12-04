
<!--Pegar numeros-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f8f9fa; /* Fundo areia claro */
            color: #333;
        }
        h1 {
            color: #6c757d; /* Cinza suave */
        }
        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: inline-block;
            margin-top: 20px;
        }
        input[type="text"] {
            width: 80%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        select, input[type="submit"] {
            padding: 8px;
            border-radius: 5px;
            border: none;
            font-size: 1em;
            cursor: pointer;
        }
        select {
            background-color: #e3f2fd; /* Azul bebê */
            color: #333;
        }
        input[type="submit"] {
            background-color: #fce4ec; /* Rosa bebê */
            color: #333;
        }
        input[type="submit"]:hover {
            background-color: #f8bbd0; /* Rosa mais intenso */
        }
    </style>
</head>
<body style="text-align:center">
    <h1>Calculando🧮</h1>


    <form action="operacao.php" method="POST">
    <p>Numero 1:</p>
    <input type="text" name="num1">
    <p>Numero 2:</p>
    <input type="text" name="num2">
    <br><br>
    <label for="op">Operação:</label> 
    <select name="op" required> 
        <option value="add">Adição +</option> 
        <option value="sub">Subtração - </option> 
        <option value="multiplicacao">Multiplicação *</option> 
        <option value="divisao">Divisão /</option> 
    </select><br><br>
    <input type="submit" value="Enviar" >
    </form>

</body>
</html>