<?php

/**
 * FilterFieldTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class FilterFieldTable extends PluginFilterFieldTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object FilterFieldTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('FilterField');
    }
}