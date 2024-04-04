<?php
declare(strict_types=1);

namespace App\Validation\Validators\Contract;


/**
 * ValidatorInterface
 *
 * @author Jean-Claude <jeanyao@ymail.com>
 *
 * @license https://github.com/jeandev84/laventure-framework/blob/master/LICENSE
 *
 * @package  App\Validation\Validators\Contract
*/
interface ValidatorInterface
{
      /**
       * @param $value
       * @return bool
      */
      public function validate($value): bool;
}