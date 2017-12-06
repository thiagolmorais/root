<?php
    session_start();

    if (isset($_SESSION['usuario'])) {
        setcookie('cookie_sitio', 'view', time() + 3600);
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>