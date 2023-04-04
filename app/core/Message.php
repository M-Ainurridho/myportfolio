<?php

class Message
{
    public static function flash($info, $action, $type)
    {
        $_SESSION['message'] = [
            'info' => $info,
            'action' => $action,
            'type' => $type,
        ];
    }

    public static function message()
    {
        echo '
        <div class="alert alert-' . $_SESSION['message']['type'] . ' alert-dismissible fade show" role="alert">
            ' . $_SESSION['message']['info'] . ' <strong>' . $_SESSION['message']['action'] . '</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        unset($_SESSION['message']);
    }

    public static function errorUploadImage($message)
    {
        $_SESSION['image'] = [
            'message' => $message,
        ];
    }

    public static function errorUploadMessage()
    {
        echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Attention!</strong> ' . $_SESSION['image']['message'] . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        unset($_SESSION['image']);
    }

    public static function contactInfoMessage($message, $action, $type, $info)
    {
        $_SESSION['contact'] = [
            'message' => $message,
            'action' => $action,
            'type' => $type,
            'info' => $info
        ];
    }

    public static function contactInfoAlert()
    {
        echo '
        <div class="alert alert-' . $_SESSION['contact']['type'] . ' alert-dismissible fade show" role="alert">
            ' . $_SESSION['contact']['message'] . ' <strong>' . $_SESSION['contact']['action'] . '</strong>
            , ' . $_SESSION['contact']['info'] . '.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        unset($_SESSION['contact']);
    }
}
