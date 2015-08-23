<?php
/**
 * @version     1.0.0
 * @package     com_opinions
 * @copyright   Copyright (C) 2015. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Nguyen Thanh Trung <nttrung211@yahoo.com> - 
 */

// No direct access.
defined('_JEXEC') or die;

require_once JPATH_COMPONENT.'/controller.php';

/**
 * Opinions list controller class.
 */
class OpinionsControllerOpinions extends OpinionsController
{
	/**
	 * Proxy for getModel.
	 * @since	1.6
	 */
	public function &getModel($name = 'Opinions', $prefix = 'OpinionsModel', $config = array())
	{
		$model = parent::getModel($name, $prefix, array('ignore_request' => true));
		return $model;
	}
	
	function addOpinion(){
		require_once('recaptchalib.php');
  		$privatekey = "6LehjgMTAAAAAGMWMmmTgTEZn6md1B1spgEKXLD-";
  		$resp = recaptcha_check_answer ($privatekey, $_SERVER["REMOTE_ADDR"], $_POST["recaptcha_challenge_field"], $_POST["recaptcha_response_field"]);
		if (!$resp->is_valid) {
			echo "<script>alert('Captcha er forkert');window.history.go(-1);</script>";
		} else {
			$name = JRequest::getVar('name');
			$email = JRequest::getVar('email');
			$opinion = JRequest::getVar( 'opinion', '', 'post', 'string', JREQUEST_ALLOWHTML );
			
			$db = JFactory::getDBO();
			$db->setQuery("SELECT MAX(ordering) FROM #__opinions");
			$ordering = $db->loadResult();
			$ordering = $ordering + 1;
			$db->setQuery("INSERT INTO #__opinions (name, email, message, ordering, state, checked_out) VALUES ('".$name."', '".$email."', '".$opinion."', ".$ordering.", 0, ".time().")");
			$db->query();
			
			$this->setRedirect(JRoute::_('index.php?option=com_opinions&view=opinions&layout=success'));
		}
	}
}