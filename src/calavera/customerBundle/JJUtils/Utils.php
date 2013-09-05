<?php

namespace calavera\customerBundle\JJUtils;

/**
 * Description of Utils
 *
 * @author silent
 */
class Utils {

    static final public function createIdSugar() {
        $hash = sha1(date('dmYHis') . rand(10000, 99999));
        return substr($hash, 0, 8) . '-' . substr($hash, 9, 4) . '-' . substr($hash, 14, 4) . '-' . substr($hash, 19, 4) . '-' . substr($hash, 24, 4) . '.' . substr($hash, 29, 12);
    }

    static final public function getCurrentDateAndTime() {
        return date('d-m-Y H:i:s');
    }

    static final public function calculateCallDateStart() {
        $day = NULL;
        switch (TRUE) {
            case date('H') > 17:
                $day = date('d-m-Y', time() + 86400);
                $day .= " 11:30:00";
                break;
            case date('H') >= 11 && date('H') <= 13:
                $day = date('d-m-Y H:i:s', time()+1800);
                break;
            case date('H') >=14 && date('H') <=17:
                $day = $day = date('d-m-Y H:i:s', time()+1800);
                break;
        }
        return $day;
    }
    
    static final public function calculateCallDateEnd() {
        $day = NULL;
        switch (TRUE) {
            case date('H') > 17:
                $day = date('d-m-Y', time() + 86400);
                $day .= " 11:30:00";
                break;
            case date('H') >= 11 && date('H') <= 13:
                $day = date('d-m-Y H:i:s', time()+2700);
                break;
            case date('H') >=14 && date('H') <=17:
                $day = $day = date('d-m-Y H:i:s', time()+2700);
                break;
        }
        return $day;
    }

}

?>
