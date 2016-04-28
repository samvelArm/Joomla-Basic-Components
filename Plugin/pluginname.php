<?php
/**
 * @package Joomla.Plugin
 * @subpackage Content.joomla
 *
 * @copyright Copyright (C) 2016 Creative Solutions. All Rights Reserved.
 * NGU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;



class PlgContentPluginName extends Jplugin
{
   public function __construct(&$subject, $config=array())
   {
       parent::__construct($subject, $config);  // Run the parent constructor

       require_once __DIR__. '/helper/helper.php';

       $helper = new PluginNameHelper($this->params); //params defined in xml file to config from admin panel

   }
    /**
     * Plugin events list is here https://docs.joomla.org/Plugin/Events
     *
     * onContentBeforeDisplay initiate the plugin
     * @param string $context the context of the content passes to the plugin
     * @param object $article the article object
     * @param object $params the article params
     *
     * @return boolean true if function bypassed else true/false based on replacement action
     */
    public function onContentBeforeDisplay($context, $article, $params)
    {
        $parts = explode(".", $context);
        if ($parts[0]!= "com_content")
        {
            return;
        }

        // All the job goes here

        $app = JFactory::getApplication();


    }
}