<?php

namespace TgWebValid;

use TgWebValid\Entities\InitData;
use TgWebValid\Entities\LoginWidget;
use TgWebValid\Exceptions\ValidationException;
use TgWebValid\Validator\InitDataValidator;
use TgWebValid\Validator\LoginWidgetValidator;

class Bot
{
    public function __construct(
        private readonly string $token,
        private readonly bool $throw = false
    )
    {
    }

    /**
     * Validate Telegram Mini App user
     *
     * They say we are cool 😎
     *
     * ⭐️ Support us, give us a star on GitHub and become our sponsor 😊
     *
     * 🙏 Please let us know on GitHub if something isn't working for you
     * or if you need additional functionality
     *
     * @throws ValidationException If the validation fails and receiving exceptions is enabled in the settings
     *
     * @link https://github.com/CrazyTapok-bit/tgWebValid GitHub
     * @link https://tgwebvalid.com                       Documentation
     * @link https://patreon.com/user?u=9918808           Patreon
     */
    public function validateInitData(string $initData, ?bool $throw = null): InitData|false
    {
        $validator = new InitDataValidator(
            $this->token,
            $throw ?? $this->throw
        );
        return $validator->validate($initData);
    }

    /**
     * Validate Telegram Login Widget user
     *
     * They say we are cool 😎
     *
     * ⭐️ Support us, give us a star on GitHub and become our sponsor 😊
     *
     * 🙏 Please let us know on GitHub if something isn't working for you
     * or if you need additional functionality
     *
     * @param array<string, int|string|bool> $user
     * @throws ValidationException If the validation fails and receiving exceptions is enabled in the settings
     *
     * @link https://github.com/CrazyTapok-bit/tgWebValid GitHub
     * @link https://tgwebvalid.com                       Documentation
     * @link https://patreon.com/user?u=9918808           Patreon
     */
    public function validateLoginWidget(array $user, ?bool $throw = null): LoginWidget|false
    {
        $validator = new LoginWidgetValidator(
            $this->token,
            $throw ?? $this->throw
        );
        return $validator->validate($user);
    }
}
