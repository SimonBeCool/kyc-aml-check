<?php

$config = new Config();
include $_SERVER['DOCUMENT_ROOT'].$config->read('routing','core').'bitwise.class.php';

/*
    * Page File
*/

class Page extends BitwiseFlag
{
    /* Flags */
    const PAGE_PRESENT        = 1;
    const PAGE_EXECUTABLE     = 2;
    const PAGE_NOT_PRESENT    = 4;
    const PAGE_NOT_EXECUTABLE = 8;

    /* Constants */
    const BUFFER_SIZE = 4096 * 3;

    /* Members */
    public $className;
    private $access;
    private $buffer;
    private $cached;
    private $log;
    private $content;

    /*
        * Method constructor - Prepares page
        * @Parameters: string $className, string $source, array $params
    */

    public function __construct($className, $source, $attributes, $params = null)
    {
        $this->className = $className;

        if(array_key_exists('PRESENT', $attributes) && $attributes['PRESENT'] != false)
            $this->setFlag(self::PAGE_PRESENT, $attributes['PRESENT']);
        if(array_key_exists('EXECUTABLE', $attributes) && $attributes['EXECUTABLE'] != false)
            $this->setFlag(self::PAGE_EXECUTABLE, $attributes['EXECUTABLE']);

        if($params != null)
        {
            $access = $params['options']['access'];
            $cached = $params['options']['cached'];
            $log    = $params['options']['log'];

            $this->access = $access;
            $this->cached = $cached;
            $this->log    = $log;
        }
        $this->buffer = $source;
    }

    /*
        * Method Display - Display Template
        * @Parameters: string $content_replace
    */

    public function display()
    {

      if(!$this->isFlagSet(self::PAGE_PRESENT))
            header('location:  /noentry');
      if(!$this->isFlagSet(self::PAGE_EXECUTABLE))
            header('location:  /noentry');

      include $this->buffer;
      exit(0);
    }
}

?>
