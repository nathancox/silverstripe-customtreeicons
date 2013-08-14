<?php

class CustomTreeIconExtension extends Extension {


	function init() {
		$classes = ClassInfo::implementorsOf('CustomTreeIconInterface');
			
		$css = '';

		foreach ($classes as $class) {
			$pages = $class::get();


			foreach ($pages as $page) {
				$icon = $page->getTreeIcon();
				if ($icon != null) {
					$css .= "#record-" . $page->ID . "  a .jstree-pageicon { background: transparent url('" . $icon . "') 0 0 no-repeat; }\r\n";
				}
			}
		}

		Requirements::customCSS($css);

		
	}

}