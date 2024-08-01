<?php
    $file = 'feedbacks.json';
    if (file_exists($file)) {
        $current_data = file_get_contents($file);
        $feedbacks = json_decode($current_data, true);
        if (!empty($feedbacks)) {
            foreach ($feedbacks as $feedback) {
                echo '<center><div class = "card">';
                echo '<h3> Comentário: ' . htmlspecialchars($feedback["relato"]) . '</h3>';
                echo '<br>';
                echo '</div></center>';
            }
        } else {
            echo '<p> Erro, nenhum feedback recebido</p>';
        }
    } else {
        echo '<p> Erro, nenhum feedback recebido</p>';
    }
    ?>