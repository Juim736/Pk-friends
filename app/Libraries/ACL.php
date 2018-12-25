<?php

/**
 * Created by Jim
 * Date: 6/8/2018
 * Time: 9:51 PM
 */

namespace App\Libraries;



use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

class ACL
{

    public static function getAccessRight($module, $right = '', $id = null)
    {
        $accessRight = '';
        if (Sentinel::check()) {
            $user_type = Sentinel::getUser()->user_type;
        } else {
            die('You are not authorized user or your session has been expired!');
        }
        switch ($module) {
            case 'settings':
                if ($user_type == '11') {
                    $accessRight = 'AVE';
                }
                break;

            case 'user':
                if ($user_type == '11') {
                    $accessRight = '-A-V-E-R-';
                } else if ($user_type == '2x202') {
                    $accessRight = 'VER';
                } else if ($user_type == '4x404') {
                    $accessRight = '-V-R-';
                } else {
                    $accessRight = '-V-R-E';
                }
                break;

            default:
                $accessRight = '';
        }
        if ($right != '') {
            if (strpos($accessRight, $right) === false) {
                return false;
            } else {
                return true;
            }
        } else {
            return $accessRight;
        }
    }

    public static function isAllowed($accessMode, $right)
    {
        if (strpos($accessMode, $right) === false) {
            return false;
        } else {
            return true;
        }
    }


    /*     * **********************************End of Class****************************************** */
}
