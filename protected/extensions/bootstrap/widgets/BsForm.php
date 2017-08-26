<?php

class BsForm extends CForm
{
	/**
	 * @var string the form layout.
	 */
	public $layout = BsHtml::FORM_LAYOUT_VERTICAL;

	/**
	 * @var string the name of the class for representing a form input element.
	 */
	public $inputElementClass = 'BsFormInputElement';

	/**
	 * @var string the name of the class for representing a form button element.
	 */
	public $buttonElementClass = 'BsFormButtonElement';

	/**
	 * @var array the configuration used to create the active form widget.
	 */
	public $activeForm = array('class' => 'BsActiveForm');

	/**
	 * Initializes this form.
	 */
	public function init() {
		BsArray::defaultValue('layout', $this->layout, $this->activeForm);
	}

	/**
	 * Renders a single element which could be an input element, a sub-form, a string, or a button.
	 * @param mixed $element the form element to be rendered.
	 * @return string the rendering result
	 */
	public function renderElement($element) {
		if (is_string($element)) {
			if (($e = $this[$element]) === null && ($e = $this->getButtons()->itemAt($element)) === null) {
				return $element;
			} else {
				$element = $e;
			}
		}
		if ($element->getVisible()) {
			if ($element instanceof CFormInputElement) {
				if ($element->type === 'hidden') {
					return BsHtml::tag('div', array('class' => 'hidden'), $element->render());
				}
			}
			return $element->render();
		}
		return '';
	}

	/**
	 * Renders the buttons in this form.
	 * @return string the rendering result.
	 */
	public function renderButtons() {
		$buttons = array();
		foreach ($this->getButtons() as $button) {
			$buttons[] = $this->renderElement($button);
		}
		return !empty($buttons) ? BsHtml::tag('div', array('class' => 'form-actions'), implode("\n", $buttons)) : '';
	}
}