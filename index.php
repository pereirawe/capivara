<?php
    include './functions.php';
    if (isset($_SESSION["user_email"])) {
        echo '<script>
        window.location.href = "https://capivara.insoca.com.br/welcome.php"
    </script>';
    } else {
        echo '<script>
        window.location.href = "https://capivara.insoca.com.br/register.php"
    </script>';
    };
?>