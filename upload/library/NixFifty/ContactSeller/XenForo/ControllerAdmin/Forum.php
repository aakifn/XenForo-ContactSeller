<?php

class NixFifty_ContactSeller_XenForo_ControllerAdmin_Forum extends XFCP_NixFifty_ContactSeller_XenForo_ControllerAdmin_Forum
{
    public function actionSave()
    {
        NixFifty_ContactSeller_Globals::$enabled = $this->_input->filterSingle(
        	'contact_seller_enabled',
	        XenForo_Input::BOOLEAN
        );
        
        return parent::actionSave();
    }
}