<?php

declare(strict_types=1);

namespace Application\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
            $b = $this->events;
            $b = $this->events;
        // add events to the vew model
        return new ViewModel($b);
    }
}
