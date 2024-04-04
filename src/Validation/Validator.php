<?php
declare(strict_types=1);

namespace App\Validation;

use App\Validation\Rules\Contract\ValidationRuleInterface;
use ReflectionAttribute;

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
          $reflector = new \ReflectionClass($object);

          // Loop over the reflector properties
          foreach ($reflector->getProperties() as $property) {

              // Get the Attributes using $property->getAttributes(); (only if ValidationRuleInterface)
              $attributes = $property->getAttributes(
                  ValidationRuleInterface::class,
                   ReflectionAttribute::IS_INSTANCEOF
              );

              // Loop over the Attributes
              foreach ($attributes as $attribute) {

                  // Call $attribute->getValidator();

                  // Ask IF the property does not validate

                  // Add the property to errors with a message
              }

          }
      }




      /**
       * @return array
      */
      public function getErrors(): array
      {
         return $this->errors;
      }
}