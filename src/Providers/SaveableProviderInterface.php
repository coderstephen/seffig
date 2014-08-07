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

namespace Switchbox\Providers;

/**
 * Represents a configuration provider that supports saving configuration to
 * the provider source.
 */
interface SaveableProviderInterface extends ProviderInterface
{
    /**
     * Saves configuration to the provider source.
     *
     * @param \Switchbox\PropertyTree\Node $node
     * The root node of the configuration property tree to save.
     * 
     * @return void
     */
    public function save(\Switchbox\PropertyTree\Node $node);
}
