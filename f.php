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
    if  (isset ($_POST['city']))
    {
        $urlContents = curl("https://reqres.in/api/".$_POST['name'].'/2');
       echo "enter your account name to delete it";
    }
   


?>
<form action="p.php" method="post">
   			<input type="text" name="name"/>
   			<button type="submit">Delete</button>
</form>