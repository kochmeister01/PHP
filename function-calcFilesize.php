<?php
function calcFilesize($B, $Divisor = 1024, $units = array("B", "KB", "MB", "GB", "TB", "PB")){
        $ct = 0;
        while ($B > $Divisor){
                $B = $B/$Divisor;
                $ct++;
        }
        if ($ct > count($units)-1){
                $ct = count($units)-1;
        }
        $B = round($B, 0);
        $Out = $B." ".$units["$ct"];
        return $Out;
}
?>
