<?php

interface CustomTreeIconInterface {
	
	/**
	 * 	Should return the path to the icon (eg "mysite/images/my-icon.png") or null to use the page type's default icon
	 * 	
	 * 	@return string|null
	 */
	public function getTreeIcon();

}