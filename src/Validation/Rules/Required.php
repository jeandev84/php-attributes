<?php
declare(strict_types=1);

namespace App\Validation\Rules;

use App\Validation\Rules\Contract\ValidationRuleInterface;
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

    public function getValidator()
    {
        // TODO: Implement getValidator() method.
    }
}