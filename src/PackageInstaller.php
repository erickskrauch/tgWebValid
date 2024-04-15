<?php

namespace TgWebValid;

class PackageInstaller
{
    private const BOLD = "\e[1m";
    private const RESET = "\e[0m";
    private const BLUE = "\e[34m";

    private const GITHUB  = '~/ GitHub:  https://github.com/CrazyTapok-bit/tgWebValid';
    private const WEBSITE = '~/ Website: https://tgwebvalid.com/en';
    private const PATREON = '~/ Patreon: https://patreon.com/user?u=99188087';

    public static function postPackageInstall(): void
    {
        self::logo();

        self::row('They say we are cool 😎');
        self::row('⭐️ Support us, give us a star on GitHub and become our sponsor 😊');
        echo PHP_EOL;

        self::row(self::WEBSITE, self::BLUE);
        self::row(self::GITHUB, self::BLUE);
        self::row(self::PATREON, self::BLUE);
    }

    public static function postPackageUninstall(): void
    {
        self::logo();

        self::row('We are very sorry 😔');
        self::row('Please tell us on GitHub what exactly didn\'t work for you?');
        echo PHP_EOL;

        self::row(self::GITHUB, self::BLUE);
        self::row(self::WEBSITE, self::BLUE);
    }

    private static function logo(): void
    {
        echo PHP_EOL;
        self::row('████████╗ ██████╗  ██╗       ██╗███████╗██████╗  ██╗   ██╗ █████╗ ██╗     ██╗██████╗ ', self::BLUE, true);
        self::row('╚══██╔══╝██╔════╝  ██║  ██╗  ██║██╔════╝██╔══██╗ ██║   ██║██╔══██╗██║     ██║██╔══██╗', self::BLUE, true);
        self::row('   ██║   ██║  ██╗  ╚██╗████╗██╔╝█████╗  ██████╦╝ ╚██╗ ██╔╝███████║██║     ██║██║  ██║', self::BLUE, true);
        self::row('   ██║   ██║  ╚██╗  ████╔═████║ ██╔══╝  ██╔══██╗  ╚████╔╝ ██╔══██║██║     ██║██║  ██║║', self::BLUE, true);
        self::row('   ██║   ╚██████╔╝  ╚██╔╝ ╚██╔╝ ███████╗██████╦╝   ╚██╔╝  ██║  ██║███████╗██║██████╔╝║', self::BLUE, true);
        self::row('   ╚═╝   ╚═════╝    ╚═╝   ╚═╝  ╚══════╝╚═════╝     ╚═╝   ╚═╝  ╚═╝╚══════╝╚═╝╚═════╝ ', self::BLUE, true);
        echo PHP_EOL;
    }

    private static function row(string $text, ?string $color = null, bool $bold = false): void
    {
        $bold = $bold ? self::BOLD : "";
        echo $bold . $color . $text . self::RESET . PHP_EOL;
    }
}
