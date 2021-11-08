<?php declare(strict_types=1);

namespace Somnambulist\Components\Validation\Rules;

use Somnambulist\Components\Validation\Rule;

/**
 * Class Accepted
 *
 * @package    Somnambulist\Components\Validation\Rules
 * @subpackage Somnambulist\Components\Validation\Rules\Accepted
 */
class Accepted extends Rule
{
    protected bool $implicit = true;
    protected string $message = 'The :attribute must be one of: yes, on, (string)1, (int)1, or true';

    public function check(mixed $value): bool
    {
        return in_array($value, ['yes', 'on', '1', 1, true, 'true'], true);
    }
}