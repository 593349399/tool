<?php
/**
 * user: peter
 * Date：2021/11/9
 * Time: 15:39
 */


if(!function_exists('_str_is_serialized')){
    /**
     * 是否序列化
     * @param $str
     * @return bool
     */
    function _str_is_serialized($str){
        if (!is_string($str)) {
            return false;
        }
        $str = trim($str);

        if ('N;' == $str)

            return true;

        if (!preg_match('/^([adObis]):/', $str, $badions))

            return false;

        switch ($badions[1]) {

            case'a':

            case'O':

            case's':

                if (preg_match("/^{$badions[1]}:[0-9]+:.*[;}]\$/s", $str))

                    return true;

                break;

            case'b':

            case'i':

            case'd':

                if (preg_match("/^{$badions[1]}:[0-9.E-]+;\$/", $str))

                    return true;

                break;

        }

        return false;
    }
}

if(!function_exists('_str_is_json')){
    /**
     * 是否json
     * @param $str
     * @return bool
     */
    function _str_is_json($str){
        if (is_string($str) && !is_numeric($str)) {
            json_decode($str);
            return (json_last_error() == JSON_ERROR_NONE);
        } else {
            return false;
        }
    }
}