<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $relato = htmlspecialchars($_POST["relato"]);
    
    $data = array(
        "relato" => $relato,
    );

    $file = 'feedbacks.json';

    if (file_exists($file)) {
        $current_data = file_get_contents($file);
        $array_data = json_decode($current_data, true);
        $array_data[] = $data;
        $final_data = json_encode($array_data, JSON_PRETTY_PRINT);
    } else {
        $array_data = array();
        $array_data[] = $data;
        $final_data = json_encode($array_data, JSON_PRETTY_PRINT);
    }
    if (file_put_contents($file, $final_data)) {
        echo "Feedback salvo com sucesso!";
        echo '<br>';
        echo '<a href="exibe_feedbacks.php">Ver Feedbacks (Clique aqui)</a>';
    } else {
        echo "Erro 404";
    }
}
?>