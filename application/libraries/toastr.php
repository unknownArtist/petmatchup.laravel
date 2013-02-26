<?php

/**
 * @method static string error() error($header, $more = null)
 * @method static string warning() warning($header, $more = null)
 * @method static string info() info($header, $more = null)
 * @method static string success() success($header, $more = null)
 */
class Toastr {
    const overlay = 'overlay';
    const timeout = 'timeout';
    public static function notify($level, $header, $more = null, $options = array()) {
        if (empty($header) && empty($more))
            return '';

        $str = '<script>';
        if (isset($options[self::timeout])) {
            $str .= 'toastr.options.timeOut = '.$options[self::timeout].';';
            $str .= 'toastr.options.extendedTimeOut = '.$options[self::timeout].';';
        }
        if (isset($options[self::overlay]) || in_array(self::overlay, array_values($options))) {
            $str .= 'toastr.options.positionClass = \'toast-middle-center\';';
            $str .= 'toastr.options.onclick = function() {toastr.clear()};';
            $str .= 'Overlay.show();';
        }
        if(empty($more)) {
            $str .= "toastr.$level('" . $header . "');";
        } else {
            $str .= "toastr.$level('" . $more . "', '" . $header . "');";
        }
        return $str.'</script>';
    }

    public static function __callStatic($name, $args) {
        $header = $args[0];
        $more = count($args) > 1 ? $args[1] : null;
        $options = count($args) > 2 ? $args[2] : array();
        echo self::notify($name, $header, $more, $options);
    }

}