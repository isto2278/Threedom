<?php
namespace Threedom\Core;

use Threedom\Library\General;

/**
 * Provides functionality for configuration classes
 *
 * @todo Remove deprecated settings
 * @author TimPietsch
 */
class Configuration extends General\Configuration {
    
    /* PUBLIC */
    
    public function __construct($config) {
        $this->setConfig($config);
    }
    
    public function setRoot($path) {
        $this->setConfig([
            'system' => [
                'root' => (string)$path
            ]
        ]);
    }
    
    /* PROTECTED */
    
    protected function defaultConfig() { return $this->_defaults; }
    
    /* PRIVATE */
    
    /**
     * @access private
     * @var array Default values for the system
     */
    private $_defaults = array(
        'system' => array(
            'timestamp' => 'Y-m-d H:i:s' // deprecated?
        ),
        'project' => array(
            'name'      => 'PROJECT_NAME',
            'url'       => 'PROJECT_URL',
            'autoapi'   => true
        ),
        'admin' => array(
            'name'      => 'Administrator',
            'directive' => 'Admin'
        ),
        'database' => array(
            'host'      => 'localhost',
            'username'  => 'DB_USER',
            'password'  => 'DB_PASS',
            'name'      => 'DB_NAME',
            'prefix'    => 'THREEDOM'
        )
    );
    
}
