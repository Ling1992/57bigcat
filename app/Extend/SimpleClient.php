<?php
namespace App\Extend;

use SSDB\Client;
/**
 * All methods(except *exists) returns false on error,
 * so one should use Identical(if($ret === false)) to test the return value.
 */
class SimpleClient extends Client
{
    public function __construct(){
        $host = env('SSDB_HOST', '127.0.0.1');
        $port = env('SSDB_PORT', 8888);
        $timeout_ms = env('SSDB_TIMEOUT_MS', 2000);
        parent::__construct($host, $port, $timeout_ms);
        $this->easy();
    }
}
