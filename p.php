<?php
   function curl($url) {
        
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
            $data = curl_exec($ch);
            curl_close($ch);

            return $data;
        } 
  if (isset ($_GET['name']))
  {
       error_reporting(0);
       $urlContents = curl("https://reqres.in/api/".$_GET['name']);
  }
?>
<html>
    <head>
    </head>
    <body>
    	<form action="c.php" method="get">
   			<input type="text" name="name"/>
   			<button type="submit">submit</button>
		</form>
    </body>
</html>
