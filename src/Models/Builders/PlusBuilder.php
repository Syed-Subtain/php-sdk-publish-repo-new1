<?php

declare(strict_types=1);

/*
 * ApimaticCalculatorLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApimaticCalculatorLib\Models\Builders;

use ApimaticCalculatorLib\Models\Plus;
use Core\Utils\CoreHelper;

/**
 * Builder for model Plus
 *
 * @see Plus
 */
class PlusBuilder
{
    /**
     * @var Plus
     */
    private $instance;

    private function __construct(Plus $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new plus Builder object.
     */
    public static function init(string $id, string $name): self
    {
        return new self(new Plus($id, $name));
    }

    /**
     * Initializes a new plus object.
     */
    public function build(): Plus
    {
        return CoreHelper::clone($this->instance);
    }
}
