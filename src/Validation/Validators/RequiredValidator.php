<?php
declare(strict_types=1);

namespace App\Validation\Validators;

use App\Validation\Validators\Contract\ValidatorInterface;

/**
 * RequiredValidator
 *
 * @author Jean-Claude <jeanyao@ymail.com>
 *
 * @license https://github.com/jeandev84/laventure-framework/blob/master/LICENSE
 *
 * @package  App\Validation\Validators
*/
class RequiredValidator implements ValidatorInterface
{

    /**
     * @inheritDoc
    */
    public function validate($value): bool
    {
        return !empty($value);
    }
}