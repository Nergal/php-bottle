<?php

/**
 * Request object
 *
 * @package Bottle
 * @author Nergal
 */
class Bottle_Request {

    /**
     * @var string the optional parent dir (allows bottle to be installed in a 
     * subdirectory
     */
    protected $_docroot = '';

    /**
     * @var string
     */
    protected $_uri = '';

    /**
     * @var Bottle_Route
     */
    public $route = NULL;

    /**
     * Конструктор класса
     *
     * @constructor
     * @return self
     */
    public function __construct() {
        // @TODO most accurate request reflection
        // truncating the document root
        $docroot = dirname(substr($_SERVER['SCRIPT_FILENAME'],
                           strlen(rtrim($_SERVER['DOCUMENT_ROOT'],'/'))));
        $this->_docroot = $docroot;
        $this->_uri = substr($_SERVER['REQUEST_URI'], strlen($docroot));
    }

    /**
     * Current URL
     *
     * @return string
     */
    public function uri() {
        return $this->_uri;
    }

    /**
     * Setter for routing
     *
     * @param Bottle_Router $route
     * @return void
     */
    public function setRouter(Bottle_Route $route) {
        $this->route = $route;
    }

    /**
     * Getter for routing
     *
     * @return Bottle_Route
     */
    public function getRoute() {
        return $this->route;
    }
}
