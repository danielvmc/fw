<?php namespace System\Core;

/**
 * Base model
 *
 * @author Huynh Minh Tu
 * @version 1.0
 * @date November 17 - 2014
 */

class Model
{
    /**
     * database connection
     * @var Database
     */
    protected $db;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->db = new \System\Helpers\Database();
    }
}
