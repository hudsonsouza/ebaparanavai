<!DOCTYPE html>  
<html lang="pt-BR">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Sistema de Inscrição</title>  
    <style>  
        body {  
            font-family: Arial, sans-serif;  
            background-color: #f5f5f5;  
            margin: 0;  
            padding: 20px;  
            color: #333;  
        }  
        .container {  
            max-width: 600px;  
            margin: 0 auto;  
            background-color: #ffffff;  
            padding: 30px;  
            border-radius: 10px;  
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);  
        }  
        h2 {  
            color: #2c3e50;  
            text-align: center;  
            margin-bottom: 30px;  
        }  
        .form-group {  
            margin-bottom: 20px;  
        }  
        label {  
            display: block;  
            margin-bottom: 8px;  
            font-weight: bold;  
            color: #2c3e50;  
        }  
        .radio-group {  
            margin-bottom: 10px;  
        }  
        .radio-group label {  
            display: inline;  
            margin-right: 15px;  
            font-weight: normal;  
        }  
        input[type="text"],  
        input[type="email"],  
        input[type="tel"],  
        select {  
            width: 100%;  
            padding: 10px;  
            border: 1px solid #ddd;  
            border-radius: 5px;  
            font-size: 16px;  
        }  
        input[type="file"] {  
            width: 100%;  
            padding: 10px 0;  
        }  
        button {  
            background-color: #3498db;  
            color: white;  
            padding: 12px 20px;  
            border: none;  
            border-radius: 5px;  
            cursor: pointer;  
            width: 100%;  
            font-size: 16px;  
            transition: background-color 0.3s;  
        }  
        button:hover {  
            background-color: #2980b9;  
        }  
        .readonly {  
            background-color: #f0f0f0;  
            color: #666;  
        }  
    </style>  
</head>  
<body>  
    <div class="container">  
        <h2>Formulário de Inscrição</h2>  
        <form action="inscricao_realizada.php" method="POST" enctype="multipart/form-data">  
            <div class="form-group">  
                <label>Participante:</label>  
                <div class="radio-group">  
                    <input type="radio" id="bda" name="participante" value="b" required>  
                    <label for="bda">BDA</label>  
                    
                    <input type="radio" id="cunhada" name="participante" value="c">  
                    <label for="cunhada">Cunhada</label>  
                    
                    <input type="radio" id="irmao" name="participante" value="i">  
                    <label for="irmao">Irmão</label>  
                    
                    <input type="radio" id="amigo" name="participante" value="a">  
                    <label for="amigo">Amigo</label>  
                </div>  
            </div>  

            <div class="form-group">  
                <label for="nome">Nome:</label>  
                <input type="text" id="nome" name="nome" required>  
            </div>  

            <div class="form-group">  
                <label for="cunhada">Cunhada:</label>  
                <input type="text" id="cunhada" name="cunhada">  
            </div>  

            <div class="form-group">  
                <label for="email">Email:</label>  
                <input type="email" id="email" name="email" required>  
            </div>  

            <div class="form-group">  
                <label for="celular">Celular:</label>  
                <input type="tel" id="celular" name="celular" required>  
            </div>  

            <div class="form-group">  
                <label for="cidade">Cidade:</label>  
                <input type="text" id="cidade" name="cidade" required>  
            </div>  

            <div class="form-group">  
                <label for="uf">UF:</label>  
                <select id="uf" name="uf" required>  
                    <option value="AC">Acre</option>  
                    <option value="AL">Alagoas</option>  
                    <option value="AP">Amapá</option>  
                    <option value="AM">Amazonas</option>  
                    <option value="BA">Bahia</option>  
                    <option value="CE">Ceará</option>  
                    <option value="DF">Distrito Federal</option>  
                    <option value="ES">Espírito Santo</option>  
                    <option value="GO">Goiás</option>  
                    <option value="MA">Maranhão</option>  
                    <option value="MT">Mato Grosso</option>  
                    <option value="MS">Mato Grosso do Sul</option>  
                    <option value="MG">Minas Gerais</option>  
                    <option value="PA">Pará</option>  
                    <option value="PB">Paraíba</option>  
                    <option value="PR" selected>Paraná</option>  
                    <option value="PE">Pernambuco</option>  
                    <option value="PI">Piauí</option>  
                    <option value="RJ">Rio de Janeiro</option>  
                    <option value="RN">Rio Grande do Norte</option>  
                    <option value="RS">Rio Grande do Sul</option>  
                    <option value="RO">Rondônia</option>  
                    <option value="RR">Roraima</option>  
                    <option value="SC">Santa Catarina</option>  
                    <option value="SP">São Paulo</option>  
                    <option value="SE">Sergipe</option>  
                    <option value="TO">Tocantins</option>  
                </select>  
            </div>  

            <div class="form-group">  
                <label for="lote">Lote:</label>  
                <select id="lote" name="lote" required onchange="atualizarValor()">  
                    <option value="200.00">LOTE 1 - R$ 200,00 (individual)</option>  
                    <option value="350.00">LOTE 1 - R$ 350,00 (casal)</option>  
                    <option value="250.00">LOTE 2 - R$ 250,00 (individual)</option>  
                    <option value="450.00">LOTE 2 - R$ 450,00 (casal)</option>  
                </select>  
            </div>  

            <div class="form-group">  
                <label for="valor">Valor (R$):</label>  
                <input type="text" id="valor" name="valor" class="readonly" value="200.00" readonly> <!-- Valor padrão -->  
            </div>  

            <div class="form-group">  
                <label for="comprovante">Comprovante de Pagamento:</label>  
                <input type="file" id="comprovante" name="comprovante" accept="*/*" required>  
            </div>  

            <button type="submit">Submeter Inscrição</button>  
        </form>  
    </div>  

    <script>  
        // Máscara para o campo de celular  
        document.getElementById('celular').addEventListener('input', function (e) {  
            let value = e.target.value.replace(/\D/g, '');  
            if (value.length <= 11) {  
                value = value.replace(/^(\d{2})(\d)/g, '($1) $2');  
                value = value.replace(/(\d)(\d{4})$/, '$1-$2');  
                e.target.value = value;  
            }  
        });  

        // Atualiza o valor com base na seleção do lote  
        function atualizarValor() {  
            const loteSelect = document.getElementById('lote');  
            const valorInput = document.getElementById('valor');  
            valorInput.value = parseFloat(loteSelect.value).toFixed(2); // Apenas o valor numérico  
        }  

        // Inicializa o valor ao carregar a página  
        atualizarValor();  
    </script>  
</body>  
</html>  