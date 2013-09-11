<?php

namespace calavera\customerBundle\JJUtils;

/**
 * Description of Utils
 *
 * @author Angel Barrientos <uetiko@gmail.com>
 */
class Utils {
    /**
     * Creates an id similar to sugarCRM
     * @return String
     */
    static final public function createIdSugar() {
        $hash = sha1(date('dmYHis') . rand(10000, 99999));
        return substr($hash, 0, 8) . '-' . substr($hash, 9, 4) . '-' . substr($hash, 14, 4) . '-' . substr($hash, 19, 4) . '-' . substr($hash, 24, 12);
    }
    /**
     * return a DateTime Object with current time
     * @return \DateTime
     */
    static final public function getCurrentDateAndTime() {
        return new \DateTime(date('d-m-Y H:i:s'));
    }
    /**
     * calculate the date start call for sugarCRM
     * @return \DateTime
     */
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
        return new \DateTime($day);
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
        return new \DateTime($day);
    }
}
