<?php
    function success($message = '') {
        $result = array(
            'type' => 'success',
            'message' => $message,
        );
        die(json_encode($result));
    }

    function warning($message = '') {
        $result = array(
            'type' => 'warning',
            'message' => $message,
        );
        die(json_encode($result));
    }

    function error($message = '') {
        $result = array(
            'type' => 'error',
            'message' => $message,
        );
        die(json_encode($result));
    }
?>