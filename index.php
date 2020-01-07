<?php
    
    include_once('./functions.php');

    if (isset($_SESSION["user_email"])) {
        header('Location: '.$app_url. 'welcome.php');
        echo '<script>
        window.location.href = '.$app_url. 'welcome.php"
    </script>';
    } else {
        header('Location: '.$app_url. 'register.php');
        echo '<script>
        window.location.href = '.$app_url.'register.php"
    </script>';
    };
?>