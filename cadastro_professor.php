<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=cadastro_db", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tipo = $_POST["tipo_usuario"];

        if ($tipo !== "professor") {
            echo "<p style='color: red;'>Erro: Apenas professores podem ser cadastrados neste formulário.</p>";
            exit;
        }

        $nome = $_POST["nome"];
        $area = $_POST["area"];

        $sql = "INSERT INTO professores (nome, area_atuacao) VALUES (:nome, :area)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":nome", $nome);
        $stmt->bindValue(":area", $area);
        $stmt->execute();

        echo "<p style='color: green;'>Professor cadastrado com sucesso!</p>";
    }
} catch (PDOException $e) {
    echo "Erro no banco de dados: " . $e->getMessage();
}
?>
