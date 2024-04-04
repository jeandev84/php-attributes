<?php
declare(strict_types=1);

namespace App\Validation\Rules\Contract;


/**
 * ValidationRuleInterface
 *
 * @author Jean-Claude <jeanyao@ymail.com>
 *
 * @license https://github.com/jeandev84/laventure-framework/blob/master/LICENSE
 *
 * @package  App\Validation\Rules\Contract
*/
interface ValidationRuleInterface
{
      public function getValidator();
}