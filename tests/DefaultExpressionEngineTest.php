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

namespace Switchbox\Tests;

use Switchbox\DefaultExpressionEngine;

class DefaultExpressionEngineTest extends \PHPUnit_Framework_TestCase
{
    protected $expressionEngine;

    public function setUp()
    {
        $this->expressionEngine = new DefaultExpressionEngine();
    }

    public function testQueryReturnsNodeList()
    {
        $actual = $this->expressionEngine->query('', new \Switchbox\PropertyTree\Node());
        
        $this->assertInstanceOf('Switchbox\PropertyTree\NodeList', $actual);
    }
}
