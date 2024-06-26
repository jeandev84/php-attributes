<?php
declare(strict_types=1);

namespace App\Validation\Rules;

use App\Validation\Rules\Contract\ValidationRuleInterface;
use App\Validation\Validators\Contract\ValidatorInterface;
use App\Validation\Validators\RequiredValidator;
use Attribute;

/**
 * Required
 *
 * @author Jean-Claude <jeanyao@ymail.com>
 *
 * @license https://github.com/jeandev84/laventure-framework/blob/master/LICENSE
 *
 * @package  App\Validation\Rules
*/
#[Attribute]
class Required implements ValidationRuleInterface
{

    /**
     * @inheritDoc
    */
    public function getValidator(): ValidatorInterface
    {
        return new RequiredValidator();
    }
}