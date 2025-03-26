<?php  
// Headers  
header('Content-Type: text/html; charset=utf-8');  

// Arrays de tradução  
$tipos_participante = [  
    'b' => 'BDA',  
    'c' => 'Cunhada',  
    'i' => 'Irmão',  
    'a' => 'Amigo'  
];  

$tipos_lote = [  
    "200.00" => "LOTE 1 - R$ 200,00 (individual)",  
    "350.00" => "LOTE 1 - R$ 350,00 (casal)",  
    "250.00" => "LOTE 2 - R$ 250,00 (individual)",  
    "450.00" => "LOTE 2 - R$ 450,00 (casal)"  
];  

$tipos_situacao = [  
    'p' => ['classe' => 'pendente', 'texto' => 'Pendente'],  
    'a' => ['classe' => 'aprovado', 'texto' => 'Aprovado'],  
    'c' => ['classe' => 'cancelado', 'texto' => 'Cancelado']  
];  

try {  
    // Importa a conexão com o banco  
    require_once __DIR__ . '/banco/conecta.php';  

    // Consultar os dados na tabela tb_inscricao  
    $stmt = $pdo->prepare("  
        SELECT   
            id,   
            participante,   
            nome,   
            cunhada,   
            cidade,   
            uf,   
            lote,   
            situacao   
        FROM tb_inscricao   
        ORDER BY nome ASC  
    ");   
    $stmt->execute();  
    $inscricoes = $stmt->fetchAll(PDO::FETCH_ASSOC);  
} catch(PDOException $e) {  
    error_log("Erro no banco de dados: " . $e->getMessage());  
    echo "Erro ao carregar os dados. Por favor, tente novamente mais tarde.";  
    exit;  
}  
?>  

<!DOCTYPE html>  
<html lang="pt-BR">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Relatório de Inscrições</title>  
    <style>  
        body {  
            font-family: Arial, sans-serif;  
            background-color: #f5f5f5;  
            margin: 0;  
            padding: 20px;  
            color: #333;  
        }  
        .container {  
            max-width: 1200px;  
            margin: auto;  
            background-color: #ffffff;  
            padding: 30px;  
            border-radius: 10px;  
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);  
        }  
        h2 {  
            text-align: center;  
            color: #2c3e50;  
            margin-bottom: 30px;  
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
        tr:hover {  
            background-color: #f5f5f5;  
        }  
        .pendente {  
            background-color: #ffd700;  
            color: #000;  
            padding: 5px 10px;  
            border: none;  
            border-radius: 5px;  
            cursor: default;  
            font-size: 12px;  
        }  
        .aprovado {  
            background-color: #28a745;  
            color: white;  
            padding: 5px 10px;  
            border: none;  
            border-radius: 5px;  
            cursor: default;  
            font-size: 12px;  
        }  
        .cancelado {  
            background-color: #dc3545;  
            color: white;  
            padding: 5px 10px;  
            border: none;  
            border-radius: 5px;  
            cursor: default;  
            font-size: 12px;  
        }  
        .status-badge {  
            display: inline-block;  
            min-width: 80px;  
            text-align: center;  
        }  
    </style>  
</head>  
<body>  
    <div class="container">  
        <h2>Relatório de Inscrições</h2>  
        <table>  
            <thead>  
                <tr>  
                    <th>Num. Inscrição</th>  
                    <th>Participante</th>  
                    <th>Nome</th>  
                    <th>Cunhada</th>  
                    <th>Cidade</th>  
                    <th>Estado</th>  
                    <th>Lote</th>  
                    <th>Situação</th>  
                </tr>  
            </thead>  
            <tbody>  
                <?php foreach ($inscricoes as $inscricao): ?>  
                <tr>  
                    <td><?php echo htmlspecialchars($inscricao['id']); ?></td>  
                    <td><?php echo $tipos_participante[$inscricao['participante']] ?? 'Não especificado'; ?></td>  
                    <td><?php echo htmlspecialchars($inscricao['nome']); ?></td>  
                    <td><?php echo htmlspecialchars($inscricao['cunhada'] ?: '-'); ?></td>  
                    <td><?php echo htmlspecialchars($inscricao['cidade']); ?></td>  
                    <td><?php echo htmlspecialchars($inscricao['uf']); ?></td>  
                    <td><?php echo $tipos_lote[$inscricao['lote']] ?? $inscricao['lote']; ?></td>  
                    <td>  
                        <?php   
                        $situacao = $tipos_situacao[$inscricao['situacao']] ?? ['classe' => 'pendente', 'texto' => 'Não definido'];  
                        echo "<span class='status-badge {$situacao['classe']}'>{$situacao['texto']}</span>";  
                        ?>  
                    </td>  
                </tr>  
                <?php endforeach; ?>  
            </tbody>  
        </table>  
    </div>  
</body>  
</html>  