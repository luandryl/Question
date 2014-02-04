<?php

class Helper {

    public static function _redirect($url) {
        $limpa = explode(" ", $url);
        echo "<meta http-equiv='refresh' content='0;url={$limpa[1]}'>";
    }

}

?>
