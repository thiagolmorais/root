<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<footer>
			<div><img src="img/StoryTellerGroup.png" width="150" height="50"></div>
    		<div align="center"><span>2017 StoryTeller®. Todos os direitos reservados.</span></div>
            <?php
                if (isset($_COOKIE['cookie_sitio'])) {
                    echo "<div align='right'>
                            <span>ultima visita:
                                {$_COOKIE['cookie_sitio']}
                            </span>
                          </div>";
                }
            ?>
      	</footer>
    </div>
</body>
</html>