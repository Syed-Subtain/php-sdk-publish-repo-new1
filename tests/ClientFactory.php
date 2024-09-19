<?php

declare(strict_types=1);

/*
 * ApimaticCalculatorLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApimaticCalculatorLib\Tests;

use ApimaticCalculatorLib\ApimaticCalculatorClient;
use ApimaticCalculatorLib\ApimaticCalculatorClientBuilder;
use Core\Types\CallbackCatcher;

class ClientFactory
{
    public static function create(CallbackCatcher $httpCallback): ApimaticCalculatorClient
    {
        $clientBuilder = ApimaticCalculatorClientBuilder::init();
        $clientBuilder = self::addConfigurationFromEnvironment($clientBuilder);
        $clientBuilder = self::addTestConfiguration($clientBuilder);
        return $clientBuilder->httpCallback($httpCallback)->build();
    }

    public static function addTestConfiguration(
        ApimaticCalculatorClientBuilder $builder
    ): ApimaticCalculatorClientBuilder {
        return $builder;
    }

    public static function addConfigurationFromEnvironment(
        ApimaticCalculatorClientBuilder $builder
    ): ApimaticCalculatorClientBuilder {
        $timeout = getenv('APIMATIC_CALCULATOR_LIB_TIMEOUT');
        $numberOfRetries = getenv('APIMATIC_CALCULATOR_LIB_NUMBER_OF_RETRIES');
        $maximumRetryWaitTime = getenv('APIMATIC_CALCULATOR_LIB_MAXIMUM_RETRY_WAIT_TIME');
        $environment = getenv('APIMATIC_CALCULATOR_LIB_ENVIRONMENT');

        if (!empty($timeout) && \is_numeric($timeout)) {
            $builder->timeout(intval($timeout));
        }

        if (!empty($numberOfRetries) && \is_numeric($numberOfRetries)) {
            $builder->numberOfRetries(intval($numberOfRetries));
        }

        if (!empty($maximumRetryWaitTime) && \is_numeric($maximumRetryWaitTime)) {
            $builder->maximumRetryWaitTime(intval($maximumRetryWaitTime));
        }

        if (!empty($environment)) {
            $builder->environment($environment);
        }

        return $builder;
    }
}
