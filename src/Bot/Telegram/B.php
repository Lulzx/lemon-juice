<?php 

namespace Bot\Telegram;

use Sys\Hub\Singleton;
use Stacks\Telegram\Telegram;

class B
{
    public static function __callStatic($a, $b)
    {
        defined("TOKEN") or include __DIR__."/../../../config/telegram.php";
        $st = new Telegram(TOKEN);
        $st = $st->{$a}(...$b);
        print $st;
        return $st;
    }
}
