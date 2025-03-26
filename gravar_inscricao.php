<?php  
// Headers necessários  
header('Content-Type: application/json; charset=utf-8');  
header('Access-Control-Allow-Origin: *');  
header('Access-Control-Allow-Methods: POST');  
header("Cache-Control: no-store, no-cache, must-revalidate");  

// Desabilitar exibição de erros no output  
ini_set('display_errors', 0);  
error_reporting(E_ALL);  

try {  
    // Importa a conexão com o banco  
    $pdo = require_once __DIR__ . '/banco/conecta.php';  
    
    if (!$pdo) {  
        throw new Exception("Erro de conexão com o banco de dados");  
    }  

    // Validação inicial  
    if ($_SERVER["REQUEST_METHOD"] != "POST") {  
        throw new Exception("Método inválido. Use POST.");  
    }  

    // Validação do arquivo  
    if (!isset($_FILES["comprovante"]) || $_FILES["comprovante"]["error"] != 0) {  
        throw new Exception("Arquivo de comprovante não enviado ou com erro.");  
    }  

    $upload_file = $_FILES["comprovante"];  
    
    // Validações do arquivo  
    $allowed_types = ['image/jpeg', 'image/png', 'image/gif', 'application/pdf'];  
    $max_size = 5 * 1024 * 1024; // 5MB  
    
    if (!in_array($upload_file["type"], $allowed_types)) {  
        throw new Exception("Tipo de arquivo não permitido. Use: JPG, PNG, GIF ou PDF");  
    }  

    if ($upload_file["size"] > $max_size) {  
        throw new Exception("Arquivo muito grande. Máximo: 5MB");  
    }  

    // Criar diretório de upload se não existir  
    $upload_dir = __DIR__ . '/comprovantes/';  
    if (!file_exists($upload_dir)) {  
        if (!mkdir($upload_dir, 0755, true)) {  
            throw new Exception("Erro ao criar diretório de upload");  
        }  
    }  

    // Gerar nome único para o arquivo  
    $file_extension = strtolower(pathinfo($upload_file["name"], PATHINFO_EXTENSION));  
    $new_filename = uniqid() . '.' . $file_extension;  
    $target_file = $upload_dir . $new_filename;  

    // Move o arquivo  
    if (!move_uploaded_file($upload_file["tmp_name"], $target_file)) {  
        throw new Exception("Erro ao fazer upload do arquivo.");  
    }  

    // Preparar dados para inserção  
    $dados = [  
        'participante' => $_POST['participante'] ?? '',  
        'nome' => $_POST['nome'] ?? '',  
        'cunhada' => $_POST['cunhada'] ?? '',  
        'email' => $_POST['email'] ?? '',  
        'celular' => $_POST['celular'] ?? '',  
        'cidade' => $_POST['cidade'] ?? '',  
        'uf' => $_POST['uf'] ?? '',  
        'lote' => $_POST['lote'] ?? '',  
        'valor' => $_POST['valor'] ?? '',  
        'comprovante' => $new_filename  
    ];  

    // Validar campos obrigatórios  
    $campos_obrigatorios = ['participante', 'nome', 'email', 'celular', 'cidade', 'uf', 'lote', 'valor'];  
    foreach ($campos_obrigatorios as $campo) {  
        if (empty($dados[$campo])) {  
            throw new Exception("Campo obrigatório não informado: " . $campo);  
        }  
    }  

    // Inserir no banco  
    $stmt = $pdo->prepare("  
        INSERT INTO tb_inscricao (  
            participante, nome, cunhada, email, celular,  
            cidade, uf, lote, valor, comprovante, situacao  
        ) VALUES (  
            :participante, :nome, :cunhada, :email, :celular,  
            :cidade, :uf, :lote, :valor, :comprovante, 'p'  
        )  
    ");  

    $stmt->execute([  
        ':participante' => $dados['participante'],  
        ':nome' => $dados['nome'],  
        ':cunhada' => $dados['cunhada'],  
        ':email' => $dados['email'],  
        ':celular' => $dados['celular'],  
        ':cidade' => $dados['cidade'],  
        ':uf' => $dados['uf'],  
        ':lote' => $dados['lote'],  
        ':valor' => $dados['valor'],  
        ':comprovante' => $new_filename  
    ]);  

    // Recupera o ID inserido  
    $id = $pdo->lastInsertId();  

    // Array para tradução do tipo de participante  
    $tipos_participante = [  
        'b' => 'BDA',  
        'c' => 'Cunhada',  
        'i' => 'Irmão',  
        'a' => 'Amigo'  
    ];  

    // Retorna sucesso  
    echo json_encode([  
        'success' => true,  
        'id' => $id,  
        'participante' => $tipos_participante[$dados['participante']] ?? 'Outro',  
        'nome' => $dados['nome'],  
        'cunhada' => $dados['cunhada'],  
        'email' => $dados['email'],  
        'celular' => $dados['celular'],  
        'cidade' => $dados['cidade'],  
        'uf' => $dados['uf'],  
        'lote' => $dados['lote'],  
        'valor' => $dados['valor']  
    ], JSON_UNESCAPED_UNICODE);  

} catch(Exception $e) {  
    // Log do erro  
    error_log("Erro no processamento da inscrição: " . $e->getMessage());  
    
    // Retorna erro em formato JSON  
    echo json_encode([  
        'success' => false,  
        'error' => $e->getMessage()  
    ], JSON_UNESCAPED_UNICODE);  
}  