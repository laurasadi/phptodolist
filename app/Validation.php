<?php


namespace TaskManager;


class Validation
{
    private static $validacija = [];

    public static function validuoti($info){
        self::setSubject($info);
        self::setPriority($info);
        self::setDate($info);
        return self::$validacija;
    }

    private function setSubject()
    {
        if (empty($_POST['subject']) || !preg_match('/\w{1,255}$/',
            $_POST['subject'])) {
            self::$validacija[] = "Pavadinimas negali viršyti 255 simbolių";
        }

    }

    private function setPriority()
    {
        if (empty($_POST['priority'])) {
            self::$validacija[] = "Pažymėkite prioritetą";
        }


    }

    private function setDate()
    {
        if ($_POST['duedate'] < date('Y-m-d')) {
            self::$validacija[] = "Pažymėkite datą";
        }
    }

}