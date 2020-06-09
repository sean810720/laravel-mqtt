<?php
/**
 * Created by PhpStorm.
 * User: sean810720
 * Date: 6/9/20
 * Time: 17:16 PM
 */

return [

    'host'     => env('mqtt_host', '127.0.0.1'),
    'password' => env('mqtt_password', ''),
    'username' => env('mqtt_username', ''),
    'certfile' => env('mqtt_cert_file', ''),
    'port'     => env('mqtt_port', '1883'),
    'debug'    => env('mqtt_debug', false), //Optional Parameter to enable debugging set it to True
    'qos'      => env('mqtt_qos', 0), // set quality of service here
    'retain'   => env('mqtt_retain', 0), // it should be 0 or 1 Whether the message should be retained.- Retain Flag
];
