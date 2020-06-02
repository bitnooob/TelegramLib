<?php

/**
 * @auhor bitnoob
 * @link https://vk.com/bitnoob
 */

declare(strict_types=1);

namespace telegram\bot\utils;

class TextFormat {

    const FORMAT_BOLD = "\x1b[1m";
    const FORMAT_OBFUSCATED = "";
    const FORMAT_ITALIC = "\x1b[3m";
    const FORMAT_UNDERLINE = "\x1b[4m";
    const FORMAT_STRIKETHROUGH = "\x1b[9m";
    const FORMAT_RESET = "\x1b[m";
    const COLOR_BLACK = "\x1b[38;5;16m";
    const COLOR_DARK_BLUE = "\x1b[38;5;19m";
    const COLOR_DARK_GREEN = "\x1b[38;5;34m";
    const COLOR_DARK_AQUA = "\x1b[38;5;37m";
    const COLOR_DARK_RED = "\x1b[38;5;124m";
    const COLOR_PURPLE = "\x1b[38;5;127m";
    const COLOR_GOLD = "\x1b[38;5;214m";
    const COLOR_GRAY = "\x1b[38;5;145m";
    const COLOR_DARK_GRAY = "\x1b[38;5;59m";
    const COLOR_BLUE = "\x1b[38;5;63m";
    const COLOR_GREEN = "\x1b[38;5;83m";
    const COLOR_AQUA = "\x1b[38;5;87m";
    const COLOR_RED = "\x1b[38;5;203m";
    const COLOR_LIGHT_PURPLE = "\x1b[38;5;207m";
    const COLOR_YELLOW = "\x1b[38;5;227m";
    const COLOR_WHITE = "\x1b[38;5;231m";

}