<?php

/*
 * This file is part of the Orient package.
 *
 * (c) Alessandro Nadalin <alessandro.nadalin@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * This class handles the SQL statement to generate an index into the DB.
 *
 * @package    Orient
 * @subpackage Query
 * @author     Alessandro Nadalin <alessandro.nadalin@gmail.com>
 */

namespace Orient\Query\Command\Index;

use Orient\Query\Command\Index;
use Orient\Query\Command;

class Create extends Index
{
    const SCHEMA = "CREATE INDEX :IndexClass:Property :Type";

    /**
     * Sets the $property to index.
     * Optionally, you can specify the property $class and the $type of the
     * index.
     *
     * @param string $property
     * @param string $class
     * @param string $type
     */
    public function __construct($property, $class = NULL, $type = NULL)
    {
        parent::__construct();

        if ($class) {
            $this->setToken('IndexClass', $class);
        }

        if ($type) {
            $this->type($type);
        }
        
        $this->setToken('Property', $property);
    }

    /**
     * Sets the type of the index to create.
     *
     * @param   string $type
     * @return  Create
     */
    public function type($type)
    {
        $this->setToken('Type', $type);

        return $this;
    }
}
