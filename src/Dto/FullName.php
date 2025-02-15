<?php

declare(strict_types=1);

namespace App\Dto;

use Symfony\Component\Validator\Constraints as Assert;

final class FullName
{
    public function __construct(
        #[Assert\NotBlank]
        #[Assert\Type("string")]
        public readonly string $firstName,

        #[Assert\NotBlank]
        #[Assert\Type("string")]
        public readonly string $lastName,

        #[Assert\NotBlank]
        #[Assert\Type("string")]
        public readonly string $middleName,
    ) {
    }
}
