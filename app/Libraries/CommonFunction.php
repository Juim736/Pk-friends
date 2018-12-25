<?php

/**
 * Created by Jim
 * Date: 2/10/2018
 * Time: 9:51 PM
 */

namespace App\Libraries;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;


class CommonFunction {

    public static function getUserId()
    {
        if (Sentinel::check()) {
            return Sentinel::getUser()->id;
        } else {
            return 0;
        }
    }


    public static function convert2Bangla($eng_number) {
        $eng = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
        $ban = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];
        return str_replace($eng, $ban, $eng_number);
    }

    public static function convert2English($ban_number) {
        $eng = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
        $ban = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];
        return str_replace($ban, $eng, $ban_number);
    }

    /*     * ****************************End of Class***************************** */
}
