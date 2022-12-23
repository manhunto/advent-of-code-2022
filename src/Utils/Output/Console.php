<?php

declare(strict_types=1);

namespace App\Utils\Output;

use JetBrains\PhpStorm\NoReturn;

class Console
{
    #[NoReturn]
    public static function dd(...$thing): void
    {
        var_dump(...$thing); die;
    }

    public static function wait(): void
    {
        readline();
    }

    public static function writeln($msg): void
    {
        echo $msg . PHP_EOL;
    }
}
