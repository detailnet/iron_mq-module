<?php

namespace Detail\IronMq\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

use IronMQ;

class IronMqFactory implements FactoryInterface
{
    /**
     * {@inheritDoc}
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        /** @var \Detail\IronMq\Options\ModuleOptions $options */
        $options = $serviceLocator->get('Detail\IronMq\Options\ModuleOptions');

        /** @todo Check for required params (token, project_id) */

        $ironMqOptions = array_merge($options->toArray(), $options->getApi());

        unset($ironMqOptions['api'], $ironMqOptions['options']);

        $ironMq = new IronMQ($ironMqOptions);

        foreach ($options->getOptions() as $key => $value) {
            if (property_exists($ironMq, $key)) {
                $ironMq->{$key} = $value;
            }
        }

        return $ironMq;
    }
}
