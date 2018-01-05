<?php

class NixFifty_ContactSeller_XenForo_DataWriter_Forum extends XFCP_NixFifty_ContactSeller_XenForo_DataWriter_Forum
{
    /**
     * Gets the fields that are defined for the table. See parent for explanation.
     *
     * @return array
     */
    protected function _getFields()
    {
        $fields = parent::_getFields();

        $fields['xf_forum']['contact_seller_enabled'] = array('type' => self::TYPE_BOOLEAN, 'default' => 0);

        return $fields;
    }

    protected function _preSave()
    {
    	if (!is_null(NixFifty_ContactSeller_Globals::$enabled))
	    {
	    	$this->set('contact_seller_enabled', NixFifty_ContactSeller_Globals::$enabled);
	    }
    }
}