<?php
declare(strict_types=1);

namespace App\Validation;

/**
 * Validator
 *
 * @author Jean-Claude <jeanyao@ymail.com>
 *
 * @license https://github.com/jeandev84/laventure-framework/blob/master/LICENSE
 *
 * @package  App\Validation
 */
class Validator
{

      /**
       * @var array
      */
      private array $errors = [];




      /**
       * @param object $object
       * @return void
      */
      public function validate(object $object): void
      {
          // Instantiate a $reflector using new ReflectionClass($object);


          // Loop over the reflector properties

             // Get the Attributes using $property->getAttributes(); (only if ValidationRuleInterface)

             // Loop over the Attributes

                 // Instantiate a PropertyValidator instance using $attribute->getValidator();

                 // Ask IF the property does not validate

                     // Add the property to errors with a message
      }




      /**
       * @return array
      */
      public function getErrors(): array
      {

      }
}