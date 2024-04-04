<?php
declare(strict_types=1);

namespace App\DTO;

use App\Validation\Rules\Required;

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
        #[Required]
        public string $username,
        #[Required]
        public string $email
    )
    {
    }
}