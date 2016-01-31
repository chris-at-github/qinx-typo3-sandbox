<?php
namespace Qinx\Qxsandbox\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016 Christian Pschorr <hello@qinx.me>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Event
 */
class Event extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * namespace
     * 
     * @var string
     */
    protected $namespace = '';
    
    /**
     * event
     * 
     * @var string
     */
    protected $event = '';
    
    /**
     * Returns the namespace
     * 
     * @return string $namespace
     */
    public function getNamespace()
    {
        return $this->namespace;
    }
    
    /**
     * Sets the namespace
     * 
     * @param string $namespace
     * @return void
     */
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;
    }
    
    /**
     * Returns the event
     * 
     * @return string $event
     */
    public function getEvent()
    {
        return $this->event;
    }
    
    /**
     * Sets the event
     * 
     * @param string $event
     * @return void
     */
    public function setEvent($event)
    {
        $this->event = $event;
    }

}