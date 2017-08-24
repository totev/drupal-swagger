<?php
/**
 * @file
 * Contains \Drupal\swagger\SwaggerController.
 */

namespace Drupal\swagger\Controller;


use Drupal\Core\Controller\ControllerBase;


class SwaggerController extends ControllerBase {
  /**
    * Display the original SwaggerUI markup.
    *
    * @return array
    */
   public function content() {
     return array(
       '#type' => 'markup',
       '#markup' => $this->t('<div id="swagger-ui"></div>')
     );
   }

 }
