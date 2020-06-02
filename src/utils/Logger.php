<?php

/**
 * @auhor bitnoob
 * @link https://vk.com/bitnoob
 */

declare(strict_types=1);

namespace telegram\bot\utils;

class Logger extends TextFormat {

    public function log(array $prefix, string $message) : void {
        echo $prefix[0] . "[" . $prefix[1] . "]" . self::COLOR_GRAY . " > " . self::COLOR_WHITE . $message . self::COLOR_GRAY . "\n";
    }

    public function info(string $message) : void {
        $this->log([self::COLOR_GRAY, 'INFO'], $message);
    }

    public function error(string $message) : void {
        $this->log([self::COLOR_RED, 'ERROR'], $message);
    }

}