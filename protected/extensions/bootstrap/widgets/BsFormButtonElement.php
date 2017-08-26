<?php

class BsFormButtonElement extends CFormButtonElement
{
	/**
	 * Renders this button.
	 * @return string the rendering result.
	 */
	public function render() {
		if (isset(self::$coreTypes[$this->type])) {
			return $this->renderCore();
		}
		else {
			return parent::render();
		}
	}

	/**
	 * This function renders a built in button type.
	 * The implementation is essentially a direct copy from
	 * CFormButtonElement::render, the only difference is it uses BsHtml.
	 * @return string the rendering result.
	 */
	public function renderCore() {
		$attributes = $this->attributes;
		$method = self::$coreTypes[$this->type];
		if ($method === 'linkButton') {
			if (!isset($attributes['params'][$this->name]))
				$attributes['params'][$this->name] = 1;
		}
		elseif ($method === 'htmlButton') {
			$attributes['type'] = $this->type === 'htmlSubmit' ? 'submit' : ($this->type === 'htmlReset' ? 'reset' : 'button');
			$attributes['name'] = $this->name;
		}
		else
			$attributes['name'] = $this->name;
		if ($method === 'imageButton')
			return BsHtml::imageButton(isset($attributes['src']) ? $attributes['src'] : '',$attributes);
		else
			return BsHtml::$method($this->label,$attributes);
	}
}