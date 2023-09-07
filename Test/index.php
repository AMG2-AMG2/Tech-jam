
    <?php
        for ($i = 33; $i <= 543; $i++) {
            ## Code genereert en bewerkt getallen 33-543 met verschillende voorwaarden.Code genereert en bewerkt getallen 33-543 met verschillende voorwaarden.
            echo '<li>';
            if ($i % 5 == 0 && $i % 9 == 0) {
                ## Controleert deelbaarheid van $i door 5 en 9, zo ja, toont "Web" vetgedrukt.
                echo '<strong>Web</strong>';
            } elseif ($i % 5 == 0) {
                ## Toont "Software" vetgedrukt als $i enkel deelbaar is door 5.
                echo 'Software';
            } elseif ($i % 9 == 0) {
                ## "Developer" wordt vetgedrukt getoond als $i enkel deelbaar is door 9.
                echo '<strong>Developer</strong>';
            } elseif ($i % 2 == 0) {
                ## Als $i even is (deelbaar door 2) en geen van de andere voorwaarden van toepassing is, wordt $i vetgedrukt weergegeven.
                echo '<strong>' . $i . '</strong>';
            } else {
                echo $i;
            }
            echo '</li>';
        }
    ?>
