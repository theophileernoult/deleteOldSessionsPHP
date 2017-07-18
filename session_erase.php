<?php

$path = session_save_path() . '/*';
//get all session files from the folder they are saved to.

$files = @glob($path);
for ($i = 0; $i < sizeof($files); $i++) {
    if (is_file($files[$i]) && (filemtime($files[$i]) < (time() - 86400 * 1))) {  
    // change the * 1 to the number of days you want the sessions to last
    
        unlink($files[$i]); 
        //here is the destroying.
    }
}
