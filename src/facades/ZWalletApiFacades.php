<?php
/**
 * Created by PhpStorm.
 * User: monoit
 * Date: 29/5/16
 * Time: 11:41 AM
 */
namespace Zamena\ZWallet\facades;
use Illuminate\Support\Facades\Facade;
class ZWalletApiFacades extends Facade{
    protected static function getFacadeAccessor() { return 'walletapi'; }
}
