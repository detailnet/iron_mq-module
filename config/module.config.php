<?php

return array(
    'service_manager' => array(
        'abstract_factories' => array(
        ),
        'aliases' => array(
        ),
        'invokables' => array(
        ),
        'factories' => array(
            'Detail\IronMq\Options\ModuleOptions' => 'Detail\IronMq\Factory\ModuleOptionsFactory',
            'IronMQ'                              => 'Detail\IronMq\Factory\IronMqFactory',
        ),
        'initializers' => array(
        ),
    ),
    'iron_mq' => array(
        'token' => '',
        'project_id' => '',
        'api' => array(
            'protocol' => 'https',
            'host' => 'mq-aws-eu-west-1.iron.io',
            'port' => 443,
            'api_version' => 1,
        ),
        'options' => array(
            'max_retries' => 5,
            'debug_enabled' => false,
            'ssl_verifypeer' => true,
            'connection_timeout' => 60,
        ),
    ),
);
