<?php

/*
    * Bitwise File
*/

abstract class BitwiseFlag
{
    /* Flag container */
    protected $flags;

    /*
        * Method to set a flag
        * @Parameters: $flag, bool $value
    */

    protected function setFlag($flag, $value)
    {
        if($value)
            $this->flags |= $flag;
        else
            $this->flags &= ~$flags;
    }

    /*
        * Method to check if flag is set
        * @Parameters: $flag
    */

    protected function isFlagSet($flag)
    {
        return(($this->flags & $flag) == $flag);
    }
}

?>
