<?php

/**
 * Wishlist front controller
 *
 * @category    Codephun
 * @package     Codephun_Wishlist
 * @author      Bjarne Oeverli <my@email.com>
 */
require_once Mage::getModuleDir('controllers', 'Mage_Wishlist') . DS . 'IndexController.php';
class Codephun_Wishlist_IndexController extends Mage_Wishlist_IndexController
{
    public function sendAction()
    {
        echo 'If I want my code to run before parent sendAction';
        // If you don't want to use parent code, just don't add parent::methodName.
        parent::sendAction();
    }
}