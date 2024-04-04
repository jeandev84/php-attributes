<?php
declare(strict_types=1);

namespace App\Validation\Rules;

use App\Validation\Rules\Contract\ValidationRuleInterface;
use App\Validation\Validators\Contract\ValidatorInterface;
use App\Validation\Validators\LengthValidator;
use Attribute;

/**
 * Length
 *
 * @author Jean-Claude <jeanyao@ymail.com>
 *
 * @license https://github.com/jeandev84/laventure-framework/blob/master/LICENSE
 *
 * @package  App\Validation\Rules
 */
#[Attribute]
class Length implements ValidationRuleInterface
{

    public function __construct(
        protected int $min, // 4
        protected int $max  // 30
    )
    {
    }



    /**
     * @inheritDoc
    */
    public function getValidator(): ValidatorInterface
    {
        return new LengthValidator();
    }
}