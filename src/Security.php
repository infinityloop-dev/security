<?php

/**
 * This file is part of Nepttune (https://www.peldax.com)
 *
 * Copyright (c) 2018 Václav Pelíšek (info@peldax.com)
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <https://www.peldax.com>.
 */
 
declare(strict_types = 1);

namespace Nepttune\Component;

final class Security extends BaseComponent
{
    /** @var array */
    private $security;
    
    public function __construct(array $security)
    {
        parent::__construct();
        
        $this->security = $security;
    }
    protected function beforeRender() : void
    {
        $this->template->security = $this->security;
    }
}
