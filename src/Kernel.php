<?php

namespace App;

use JMS\I18nRoutingBundle\JMSI18nRoutingBundle;
use JMS\TranslationBundle\JMSTranslationBundle;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;
}


