<?php

class Form {

	public function input($id, $texte, $type) {
		return "
		<div class='row'>
            <div class='col'>
                <div class='mb-3'>
                    <label class='form-label' for='{$id}'>{$texte}</label>
                    <input type='{$type}' name='{$id}' id='{$id}' class='form-control'>
                </div>
            </div>
        </div>
		";
	}

	public function button($type, $name, $class, $texte) {
		return "<button type='{$type}' name='{$name}' class='btn btn-{$class} active'>{$texte}</button>";
	}

	public function submit($btn = "success", $texte = "Ajouter") {
		return "<button type='submit' name='submit' class='btn btn-{$btn} active me-5'>{$texte}</button>";
	}

	public function textarea($id, $texte) {
		return "
		<div class='row'>
            <div class='col'>
                <div class='mb-3'>
                    <label class='form-label' for='{$id}'>{$texte}</label>
                    <textarea name='{$id}' id='{$id}' rows='3' class='form-control'></textarea>
                </div>
            </div>
        </div>
		";
	}

}

?>
