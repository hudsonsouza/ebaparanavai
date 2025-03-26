<?php  
// Headers necessários  
header('Content-Type: application/json; charset=utf-8');  
header('Access-Control-Allow-Origin: *');  
header('Access-Control-Allow-Methods: GET');  
header("Cache-Control: no-store, no-cache, must-revalidate");  

// Desabilitar exibição de erros no output  
ini_set('display_errors', 0);  
error_reporting(E_ALL);  

try {  
    // Importa a conexão com o banco  
    require_once __DIR__ . '/banco/conecta.php';  

    // Consulta SQL  
    $stmt = $pdo->query("  
        SELECT   
            id,  
            participante,  
            nome,  
            cunhada,  
            cidade,  
            uf,  
            lote,  
            situacao as situacao_codigo,  
            CASE situacao  
                WHEN 'p' THEN 'Pendente'  
                WHEN 'a' THEN 'Aprovado'  
                WHEN 'c' THEN 'Cancelado'  
                ELSE 'Desconhecido'  
            END as situacao,  
            CASE participante  
                WHEN 'b' THEN 'BDA'  
                WHEN 'c' THEN 'Cunhada'  
                WHEN 'i' THEN 'Irmão'  
                WHEN 'a' THEN 'Amigo'  
                ELSE 'Outro'  
            END as participante_texto,  
            CASE lote  
                WHEN '200.00' THEN 'LOTE 1 - R$ 200,00 (individual)'  
                WHEN '350.00' THEN 'LOTE 1 - R$ 350,00 (casal)'  
                WHEN '250.00' THEN 'LOTE 2 - R$ 250,00 (individual)'  
                WHEN '450.00' THEN 'LOTE 2 - R$ 450,00 (casal)'  
                ELSE lote  
            END as lote_texto  
        FROM tb_inscricao  
        ORDER BY id DESC  
    ");  

    $inscricoes = $stmt->fetchAll(PDO::FETCH_ASSOC);  

    // Retorna os dados no formato JSON  
    echo json_encode([  
        'success' => true,  
        'inscricoes' => $inscricoes  
    ], JSON_UNESCAPED_UNICODE);  

} catch(PDOException $e) {  
    error_log("Erro PDO em listar_inscricoes.php: " . $e->getMessage());  
    echo json_encode([  
        'success' => false,  
        'error' => "Erro ao acessar banco de dados"  
    ]);  
} catch(Exception $e) {  
    error_log("Erro em listar_inscricoes.php: " . $e->getMessage());  
    echo json_encode([  
        'success' => false,  
        'error' => "Erro ao processar requisição"  
    ]);  
}  