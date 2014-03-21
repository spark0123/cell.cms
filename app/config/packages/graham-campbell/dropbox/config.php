<?php

/**
 * This file is part of Laravel Dropbox by Graham Campbell.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

return array(

    /*
    |--------------------------------------------------------------------------
    | Default Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the connections below you wish to use as
    | your default connection for all work. Of course, you may use many
    | connections at once using the manager class.
    |
    */

    'default' => 'main',

    /*
    |--------------------------------------------------------------------------
    | Dropbox Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the connections setup for your application. Examples of
    | configuring each supported driver is shown below. You can of course have
    | multiple connections per driver. This package only ships with one driver
    | by default, but you may write your own drivers too.
    |
    */

    'connections' => array(

        'main' => array(
            'driver' => 'dropbox',
            'token'  => 'hlM4jEXMOm0AAAAAAAAAATFSlWkeFbsU9xjEY3mU1jqKn2IDnhdbbQqcErD34jzg',
            'app'    => 'ekvk800hp5lhkay'
        ),

        'alternative' => array(
            'driver' => 'dropbox',
            'token'  => 'your-token',
            'app'    => 'your-app'
        )

    )

);
