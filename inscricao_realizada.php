<?php  
// Headers  
header('Content-Type: text/html; charset=utf-8');  

try {  
    // Importa a conexão com o banco  
    require_once __DIR__ . '/banco/conecta.php';  

    if ($_SERVER["REQUEST_METHOD"] == "POST") {  
        // Processamento do upload do arquivo  
        $target_dir = "comprovantes/"; // Diretório corrigido para "comprovantes"  
        $file_extension = strtolower(pathinfo($_FILES["comprovante"]["name"], PATHINFO_EXTENSION));  
        $new_filename = uniqid() . '.' . $file_extension;  
        $target_file = $target_dir . $new_filename;  

        // Move o arquivo enviado para o diretório de destino  
        if (move_uploaded_file($_FILES["comprovante"]["tmp_name"], $target_file)) {  
            // Inserção no banco de dados  
            $stmt = $pdo->prepare("INSERT INTO tb_inscricao (participante, nome, cunhada, email, celular, cidade, uf, lote, valor, comprovante)   
                                 VALUES (:participante, :nome, :cunhada, :email, :celular, :cidade, :uf, :lote, :valor, :comprovante)");  

            $stmt->execute([  
                ':participante' => $_POST['participante'],  
                ':nome' => $_POST['nome'],  
                ':cunhada' => $_POST['cunhada'],  
                ':email' => $_POST['email'],  
                ':celular' => $_POST['celular'],  
                ':cidade' => $_POST['cidade'],  
                ':uf' => $_POST['uf'],  
                ':lote' => $_POST['lote'],  
                ':valor' => $_POST['valor'],  
                ':comprovante' => $new_filename  
            ]);  

            // Recupera o último ID inserido  
            $id = $pdo->lastInsertId();  

            // Array para tradução do tipo de participante  
            $tipos_participante = [  
                'b' => 'BDA',  
                'c' => 'Cunhada',  
                'i' => 'Irmão',  
                'a' => 'Amigo'  
            ];  

            // Array para tradução do lote  
            $tipos_lote = [  
                "200.00" => "LOTE 1 - R$ 200,00 (individual)",  
                "350.00" => "LOTE 1 - R$ 350,00 (casal)",  
                "250.00" => "LOTE 2 - R$ 250,00 (individual)",  
                "450.00" => "LOTE 2 - R$ 450,00 (casal)"  
            ];  

            // HTML para exibir a confirmação e os dados  
            ?>  
            <!DOCTYPE html>  
            <html lang="pt-BR">  
            <head>  
                <meta charset="UTF-8">  
                <meta name="viewport" content="width=device-width, initial-scale=1.0">  
                <title>Inscrição Realizada</title>  
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
                    .success-message {  
                        background-color: #dff0d8;  
                        color: #3c763d;  
                        padding: 15px;  
                        border-radius: 5px;  
                        margin-bottom: 20px;  
                        text-align: center;  
                        font-size: 18px;  
                    }  
                    table {  
                        width: 100%;  
                        border-collapse: collapse;  
                        margin-top: 20px;  
                    }  
                    th, td {  
                        padding: 12px;  
                        text-align: left;  
                        border-bottom: 1px solid #ddd;  
                    }  
                    th {  
                        background-color: #f8f9fa;  
                        font-weight: bold;  
                    }  
                </style>  
            </head>  
            <body>  
                <div class="container">  
                    <div class="success-message">  
                        <strong>Sua inscrição foi realizada com sucesso e seu pagamento será confirmado em breve!</strong>  
                    </div>  

                    <h2>Dados da Inscrição:</h2>  
                    <table>  
                        <tr>  
                            <th>Número de Inscrição:</th>  
                            <td><?php echo $id; ?></td>  
                        </tr>  
                        <tr>  
                            <th>Participante:</th>  
                            <td><?php echo $tipos_participante[$_POST['participante']] ?? 'Não especificado'; ?></td>  
                        </tr>  
                        <tr>  
                            <th>Nome:</th>  
                            <td><?php echo htmlspecialchars($_POST['nome']); ?></td>  
                        </tr>  
                        <tr>  
                            <th>Cunhada:</th>  
                            <td><?php echo htmlspecialchars($_POST['cunhada'] ?: '-'); ?></td>  
                        </tr>  
                        <tr>  
                            <th>Email:</th>  
                            <td><?php echo htmlspecialchars($_POST['email']); ?></td>  
                        </tr>  
                        <tr>  
                            <th>Celular:</th>  
                            <td><?php echo htmlspecialchars($_POST['celular']); ?></td>  
                        </tr>  
                        <tr>  
                            <th>Cidade:</th>  
                            <td><?php echo htmlspecialchars($_POST['cidade']); ?></td>  
                        </tr>  
                        <tr>  
                            <th>UF:</th>  
                            <td><?php echo htmlspecialchars($_POST['uf']); ?></td>  
                        </tr>  
                        <tr>  
                            <th>Lote:</th>  
                            <td><?php echo $tipos_lote[$_POST['lote']] ?? 'Não especificado'; ?></td>  
                        </tr>  
                        <tr>  
                            <th>Valor:</th>  
                            <td>R$ <?php echo htmlspecialchars($_POST['valor']); ?></td>  
                        </tr>  
                    </table>  
                </div>  
            </body>  
            </html>  
            <?php  
        } else {  
            throw new Exception("Erro ao fazer upload do arquivo.");  
        }  
    }  
} catch(PDOException $e) {  
    error_log("Erro no banco de dados: " . $e->getMessage());  
    echo "Erro ao processar sua inscrição. Por favor, tente novamente mais tarde.";  
} catch(Exception $e) {  
    error_log("Erro: " . $e->getMessage());  
    echo "Erro ao processar sua inscrição: " . $e->getMessage();  
}  
?>  