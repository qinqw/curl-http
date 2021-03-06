<?php
/**
 * One of the curl - based HTTP libraries implemented in PHP
 * Test http request
 * 
 * @category Crul_Http
 * @package  Qinqw\Curl\Http
 * @author   Kevin <qinqiwei@hotmail.com>
 * @license  Apache License V2
 * @link     https://github.com/qinqw/curl-http
 */

namespace tests;
require_once 'bootstrap.php';

use Qinqw\Curl\Http\Request;

$req = new Request("");
$headers = array('Content-type: application/json','X-host: etcp.cn');
$req->get("http://www.baidu.com");
$res = $req->exec();
var_dump($res);
$info = $req->getInfo();
var_dump($info);