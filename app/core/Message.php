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
        <div class="row justify-content-end">
            <div class="col-lg-7">
                <div class="alert alert-'. $_SESSION['message']['type'] .' alert-dismissible fade show" role="alert">
                '. $_SESSION['message']['info'] . ' <strong>' . $_SESSION['message']['action'] .'</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>';
        unset($_SESSION['message']);
    }
}
