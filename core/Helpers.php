<?php

class Helpers {

	public function lien($link, $text) {
		return "
		<li class='sidebar-list'>
            <a class='sidebar-link sidebar-title link-nav' href='{$link}'>
                
                <span>{$text}</span>
            </a>
        </li>
		";
	}

}

?>