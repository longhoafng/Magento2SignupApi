<?php

namespace PluginTutorial\LogData\Logger;

use Magento\Framework\Logger\Handler\Base as BaseHandler;
use Monolog\Logger;
class Handler extends BaseHandler
{
    /**
     * Logging level
     * @var int
     */
    protected $loggerType = Logger::INFO;

    /**
     * File name
     * @var string
     */
    protected $fileName = '/var/log/CustomerData.log';
}