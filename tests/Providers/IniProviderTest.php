<?php
/*
 * Copyright 2014 Stephen Coakley <me@stephencoakley.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy
 * of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

namespace Switchbox\Tests\Providers;

use Switchbox\Providers\IniProvider;
use Switchbox\Tests\TestData;
use org\bovigo\vfs\vfsStream;

class IniProviderTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        // create a virtual filesystem
        vfsStream::setup('test');

        file_put_contents('vfs://test/expected.ini', 'name=awesome
isAlive=true
age=25
height=167.64
tags[]=abc
tags[]=def
tags[]=ghi

[paths]
root=/
coolStuff=/path/to/cool/stuff

[authors]
name=Leah
[authors]
name=Elsa
');
    }

    public function configProvider()
    {
        return array(array(TestData::getConfig(), 'vfs://test/expected.ini'));
    }

    /**
     * @dataProvider configProvider
     */
    public function testLoad($expectedConfig, $expectedFile)
    {
        // create a provider
        $provider = new IniProvider($expectedFile);

        // load data from file
        $config = $provider->load();

        // loaded data should match original data
        $this->assertEquals($expectedConfig, $config);
    }
}
