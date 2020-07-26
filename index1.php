<?php

    $offset = 0;
    if(isset($_POST['text']) && isset($_POST['searchfor']) && isset($_POST['replacewith']))
    {        //isset function is used to check whether a variable is set or not.
         $text = $_POST['text'];
         $search = $_POST['searchfor'];
         $replace = $_POST['replacewith'];

         $search_len = strlen($search);     //strlen() function is used to calculate the length of the string.

         if(!empty($text) && !empty('$search') && !empty($replace))
         {
            while($strpos = strpos($text,$search,$offset)){      //strpos() function is used to find the postion of the string.
                $offset = $strpos + $search_len;
                $text = substr_replace($text,$replace,$strpos,$search_len);
            }
            echo $text;
         }else{
             echo 'Please fill in all the fields';
         }
    }


?>

<form action = "index1.php" method = "POST">
    <textarea name = "text" rows = "6" columns = "30"></textarea><br><br>
    Search For:<br>
    <input type = "text" name = "searchfor"><br><br>
    Replace with:<br>
    <input type = "text" name = "replacewith"><br><br>
    <input type = "submit" value = "find and replace ">
</form>