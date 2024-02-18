<?php 
    require_once "./config/APP.php";
    require_once "./autoload.php"; 

    if(isset($_GET['views'])){
        $url = explode("/",$_GET['views']);
    }else{
        $url = ["login"];
    } 
?>
<!doctype html>
<html lang="en">

<head> <?php include_once "./app/views/inc/head.php"; ?> </head>

	<body>
    	<!-- Page wrapper start -->
		
		<?php 
			use app\controllers\viewsController;
			$viewsController = new viewsController();
			$vista = $viewsController->obtenerVistaControlador($url[0]);

			echo '<div class="page-wrapper">';

			if($vista == "login" || $vista == "404"){
				require_once "./app/views/content/".$vista."-view.php";
			}else{
				require_once "./app/views/inc/nav.php";
				require_once $vista;
			}
			echo "</div>
			<!-- Page wrapper end -->";
			include_once "./app/views/inc/script.php"; 
		?>

	</body>

</html>