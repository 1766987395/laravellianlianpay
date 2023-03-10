<?php


namespace Itcwc\LianLianPay\Account;


use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{

    public function register(Container $pimple)
    {
        $pimple['account'] = function ($pimple) {
            return new Client($pimple['config']);
        };
    }
}