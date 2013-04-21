<?php include_once('jcart/jcart.php');

$array=$jcart->get_contents();

echo print_r($array);

if($array==null)
{

	header('Location: index.php');

}
echo '<pre>';
echo print_r($jcart->get_contents());
echo '</pre>';


?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>fuente de múltiples elementos</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

  </head>
  <body>
  	    hola
          <div id="sidebar">
        <form method='post' action='datosEnvio.php'>
          <div id="jcart"><?php $jcart->display_cart();?></div>
          <div><input type="submit" value="continuar"/><a href="index.php"><input type="button" value="Continuar comprando"/></a></div>
          </form>
      </div>
  
  
  
  </body>
</html>