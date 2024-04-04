<?php
declare(strict_types=1);

namespace App\DTO;

/**
 * UserRegistration
 *
 * @author Jean-Claude <jeanyao@ymail.com>
 *
 * @license https://github.com/jeandev84/laventure-framework/blob/master/LICENSE
 *
 * @package  App\DTO
 */
readonly class UserRegistration
{
    public function __construct(
        public string $username,
        public string $email
    )
    {
    }
}