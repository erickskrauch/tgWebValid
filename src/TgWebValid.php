<?php

namespace TgWebValid;

use TgWebValid\Exceptions\BotException;

/**
 * Library for Telegram Web App User validation and Telegram Login Widget for PHP
 *
 * They say we are cool 😎
 *
 * ⭐️ Support us, give us a star on GitHub and become our sponsor 😊
 *
 * 🙏 Please let us know on GitHub if something isn't working for you
 * or if you need additional functionality
 *
 * @link https://github.com/CrazyTapok-bit/tgWebValid GitHub
 * @link https://tgwebvalid.com                       Documentation
 * @link https://patreon.com/user?u=9918808           Patreon
 */
final class TgWebValid
{
    /**
     * @var BotConfig[] $bots
     */
    private array $bots = [];

    public function __construct(
        private readonly string $token,
        private readonly bool $throw = false
    )
    {
    }

    /**
     * Allows you to add an extra bot to your setup if you need to work with multiple
     */
    public function addBot(string $name, string $token): void
    {
        $this->bots[$name] = new BotConfig($name, $token);
    }

    /**
     * It helps to choose a bot with which you need to interact
     *
     * @throws BotException If the bot you are requesting does not exist in the settings
     */
    public function bot(?string $name = null): Bot
    {
        if(!$name){
            return new Bot($this->token, $this->throw);
        }

        if(!array_key_exists($name, $this->bots)){
            throw new BotException('Bot [' . $name . '] not found in configuration');
        }

        $config = $this->bots[$name];

        return new Bot($config->token, $this->throw);
    }
}
