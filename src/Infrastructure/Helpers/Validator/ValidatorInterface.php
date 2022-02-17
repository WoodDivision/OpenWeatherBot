<?php

declare(strict_types=1);

namespace App\Infrastructure\Helpers\Validator;

use App\Application\Exceptions\ValidationException;

interface ValidatorInterface
{
    /**
     * @param string $formClass
     * @param array $data
     * @param object|null $model
     * @throws ValidationException
     */
    public function validate(string $formClass, array $data, object $model = null): void;
}