<?php

namespace Hubleto\App\External\WaiBlue\OhsEmployees\Controllers;

class Employees extends \Hubleto\Erp\Controller
{
  public function prepareView(): void
  {
    parent::prepareView();
    $this->setView('@Hubleto:App:External:WaiBlue:OhsEmployees/Employees.twig');
  }
}
