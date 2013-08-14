SilverStripe 3 HTML Custom Tree Icons
===================================

Overview
--------------

An experiment in allowing site tree icons to be set per-page instead of just per page type.


Maintainer Contacts
-------------------
*  Nathan Cox (<nathan@flyingmonkey.co.nz>)


Requirements
------------
* SilverStripe 3.1+


Installation Instructions
-------------------------

1. Place the files in a directory called customtreeicons in the root of your SilverStripe installation
2. Visit yoursite.com/dev/build to rebuild the database


Documentation
-------------
[GitHub](https://github.com/nathancox/silverstripe-customtreeicons/)

This module defines an inteface called CustomTreeIconInterface with one method: getTreeIcon().

Implement this interface for pages you want custom icons for.  The getTreeIcon() method should return a string path to the icon file (eg "mysite/images/my-icon.png") or null.


Example code:
```php
<?php

	class ProjectPage extends Page implements CustomTreeIconInterface {
		
		...
		
		function getTreeIcon() {
			if ($this->Status != null) {
				return 'mysite/images/treeicons/project-' . $this->Status . '.png';
			}
			return null;
		}
		
	}
		
		
```



Known Issues
------------
[Issue Tracker](https://github.com/nathancox/silverstripe-customtreeicons/issues)
