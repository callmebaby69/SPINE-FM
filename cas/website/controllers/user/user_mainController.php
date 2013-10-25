<?php

/**
 * 
 * this _main controller set the theme for every other controller within this folder
 * the name of this main controller should be foldername_mainController
 * @author momon
 *
 */
class user_mainController extends Spine_SuperController implements Spine_MainInterface
{
	
	public function main()
	{
		$params = array(
							'description'	=>	'CAS'
		);
		
		$this->renderTemplate('main_content', 'user/main', $params);
	}
	
	public function end()
	{
	}
	
}