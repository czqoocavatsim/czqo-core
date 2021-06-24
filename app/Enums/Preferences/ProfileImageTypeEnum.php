<?php

namespace App\Enums\Preferences;

use BenSampo\Enum\Enum;

/**
 * @method static static Initials()
 * @method static static Custom()
 * @method static static Discord()
 */
final class ProfileImageTypeEnum extends Enum
{
    const Initials =   0;
    const Custom =   1;
    const Discord = 2;
}
