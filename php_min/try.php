<?php

function listFolderFiles($dir){
$file = __FILE__;
    $ffs = scandir($dir);
	echo $file;
    echo '<ol>';
    foreach($ffs as $ff){
        if($ff != '.' && $ff != '..'){
            echo '<li>'."<a href=/pata/$dir/$ff>$ff</a>";
			
            if(is_dir($dir.'/'.$ff)) listFolderFiles($dir.'/'.$ff);
            echo '</li>';
        }
    }
    echo '</ol>';
}

listFolderFiles('kenshin');

?>