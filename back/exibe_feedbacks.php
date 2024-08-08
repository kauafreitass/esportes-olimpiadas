<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/text.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Document</title>
</head>

<body onload="Link()">
    <!-- Início da barra de navegação -->
    <nav class="nav-menu">
        <div class="logo">
            <a href="index.html">
                <img src="../assets/logo.png" alt="logo" width="135px">
            </a>
        </div>
        <div class="links">
            <a href="index.html" id="home-link">Início</a>
        </div>
    </nav>
    <!-- Fim da barra de navegação -->

    <main class="main-content">
        <!-- Início da barra lateral -->
        <aside class="sidebar">
            <div class="sidebar-title">
                <h3>Esportes</h3>
            </div>
            <div class="sidebar-links">
                <a href="pages/bueno/atletismo.html">
                    <button class="link-btn" id="atletismo">
                        Atletismo
                    </button>
                </a>

                <a href="pages/octavio/natacao.html">
                    <button class="link-btn" id="natacao">
                        Natação
                    </button>
                </a>

                <a href="pages/luis/tiro.html">
                    <button class="link-btn" id="tiro">
                        Tiro
                    </button>
                </a>

                <a href="pages/paulo/voleibol.html">
                    <button class="link-btn" id="voleibol">
                        Voleibol
                    </button>
                </a>

                <a href="pages/ana/tenis.html">
                    <button class="link-btn" id="tenis">
                        Tênis
                    </button>
                </a>

                <a href="pages/kaua/vela.html">
                    <button class="link-btn" id="vela">
                        Vela
                    </button>
                </a>

                <a href="pages/roberto/peso.html">
                    <button class="link-btn" id="peso">
                        Levantamento de peso
                    </button>
                </a>

                <a href="pages/duda/luta.html">
                    <button class="link-btn" id="luta">
                        Luta greco-romana
                    </button>
                </a>
            </div>
        </aside>
        <!-- Fim da barra lateral -->
        <!-- Início do conteúdo do site -->
        <section class="content">
            <?php
            $file = 'feedbacks.json';
            if (file_exists($file)) {
                $current_data = file_get_contents($file);
                $feedbacks = json_decode($current_data, true);
                if (!empty($feedbacks)) {
                    foreach ($feedbacks as $feedback) {
                        echo '<div class="content-text">';
                        echo '<h3> Comentário: ' . htmlspecialchars($feedback["relato"]) . '</h3>';
                        echo '<br>';
                        echo '</div>';
                    }
                } else {
            ?>
                    <script>
                        window.location.replace("../index.html");
                        alert("Erro, nenhum feedback recebido!");
                    </script>
                <?php
                }
            } else {
                ?>
                <script>
                    window.location.replace("../index.html");
                    alert("Erro, nenhum feedback recebido!");
                </script>
            <?php
            }
            ?>
        </section>
    </main>
    <!-- Fim do conteúdo do site -->
    <!-- Rodapé -->
    <footer class="footer">
        <div id="footer_content">
            <div id="footer_contacts">
                <h1>Logo</h1>
                <P>Lorem ipsum dolor sit amet.</P>
                <div id="footer_social_media">
                    <a href="#" class="footer-link" id="instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>



                    <a href="#" class="footer-link" id="X">
                        <i class="fa-brands fa-x-twitter"></i>
                    </a>


                    <a href="#" class="footer-link" id="facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </div>

            </div>

            <ul class="footer-list">
                <li>
                    <h3>Blog</h3>
                </li>
                <li>
                    <a href="#" class="footer-link">Atletismo</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Natação</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Tiro</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Voleibol</a>
                </li>
            </ul>
            <ul class="footer-list">
                <li>
                    <h3>Blog</h3>
                </li>
                <li>
                    <a href="#" class="footer-link">Tênis</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Vela</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Lentamento de peso</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Luto greco-romana</a>
                </li>
            </ul>
            <div id="footer_subscribe">
                <h3>Feedbacks</h3>
                <p>
                    Deixe seu feedback abaixo!
                </p>
                <form action="back/processa_feedback.php" method="post">
                    <div id="input_group">
                        <textarea name="relato" id="relato"></textarea>
                        <button type="submit">
                            <i class="fa-regular fa-envelope"></i>
                        </button>
                    </div>
                </form>
                <a href="back/exibe_feedbacks.php" class="feedback-link">Ver feedbacks</a>
            </div>
        </div>
        <div id="footer_copyright">
            &#169 2023 All Rights Reserved
        </div>
    </footer>

</body>

</html>