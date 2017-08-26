<?php
/**
 * BsActiveForm class file.
 * @author Pascal Brewing
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package bootstrap/widgets
 */

/**
 * Bootstrap active form widget.
 */
class BsActiveForm extends CActiveForm
{
    /**
     * @var string the form layout.
     */
    public $layout;
    /**
     * @var string the help type. Valid values are BsHtml::HELP_INLINE and BsHtml::HELP_BLOCK.
     */
    public $helpType = BsHtml::HELP_TYPE_BLOCK;
    /**
     * @var string the CSS class name for error messages.
     */
    public $errorMessageCssClass = 'has-error';
    /**
     * @var string the CSS class name for success messages.
     */
    public $successMessageCssClass = 'has-success';

    /**
     * @var boolean whether to hide inline errors. Defaults to false.
     */
    public $hideInlineErrors = false;

    /**
     * @var string[] attribute IDs to be used to display error summary.
     * @since 1.1.14
     */
    private $_summaryAttributes = array();

    /**
     * Runs the widget.
     * This registers the necessary javascript code and renders the form close tag.
     */
    public function run()
    {
        foreach ($this->_summaryAttributes as $attribute) {
            $this->attributes[$attribute]['summary'] = true;
        }
        $options['attributes'] = array_values($this->attributes);

        parent::run();
    }

    /**
     * Initializes the widget.
     */
    public function init()
    {
        $this->attachBehavior('BsWidget', new BsWidget());
        $this->copyId();
        if ($this->stateful) {
            echo BsHtml::statefulFormBs($this->layout, $this->action, $this->method, $this->htmlOptions);
        } else {
            echo BsHtml::beginFormBs($this->layout, $this->action, $this->method, $this->htmlOptions);
        }
    }

    /**
     * Displays the first validation error for a model attribute.
     * @param CModel $model the data model
     * @param string $attribute the attribute name
     * @param array $htmlOptions additional HTML attributes to be rendered in the container div tag.
     * @param boolean $enableAjaxValidation whether to enable AJAX validation for the specified attribute.
     * @param boolean $enableClientValidation whether to enable client-side validation for the specified attribute.
     * @return string the validation result (error display or success message).
     */
    public function error(
        $model,
        $attribute,
        $htmlOptions = array(),
        $enableAjaxValidation = true,
        $enableClientValidation = true
    )
    {
        if (!$this->enableAjaxValidation) {
            $enableAjaxValidation = false;
        }
        if (!$this->enableClientValidation) {
            $enableClientValidation = false;
        }
        if (!$enableAjaxValidation && !$enableClientValidation) {
            return BsHtml::error($model, $attribute, $htmlOptions);
        }
        $id = CHtml::activeId($model, $attribute);
        $inputID = BsArray::getValue('inputID', $htmlOptions, $id);
        unset($htmlOptions['inputID']);
        BsArray::defaultValue('id', $inputID . '_em_', $htmlOptions);
        $option = array(
            'id' => $id,
            'inputID' => $inputID,
            'errorID' => $htmlOptions['id'],
            'model' => get_class($model),
            'name' => $attribute,
            'enableAjaxValidation' => $enableAjaxValidation,
            'inputContainer' => 'div.form-group', // Bootstrap requires this,
            'errorCssClass' => $this->errorMessageCssClass,
            'successCssClass' => $this->successMessageCssClass
        );
        $optionNames = array(
            'validationDelay',
            'validateOnChange',
            'validateOnType',
            'hideErrorMessage',
            'inputContainer',
            'errorCssClass',
            'successCssClass',
            'validatingCssClass',
            'beforeValidateAttribute',
            'afterValidateAttribute',
        );
        foreach ($optionNames as $name) {
            if (isset($htmlOptions[$name])) {
                $option[$name] = BsArray::popValue($name, $htmlOptions);
            }
        }

        if ($model instanceof CActiveRecord && !$model->isNewRecord) {
            $option['status'] = 1;
        }
        if ($enableClientValidation) {
            $validators = BsArray::getValue('clientValidation', $htmlOptions, array());
            $attributeName = $attribute;
            if (($pos = strrpos($attribute, ']')) !== false && $pos !== strlen($attribute) - 1) // e.g. [a]name
            {
                $attributeName = substr($attribute, $pos + 1);
            }
            foreach ($model->getValidators($attributeName) as $validator) {
                if ($validator->enableClientValidation) {
                    if (($js = $validator->clientValidateAttribute($model, $attributeName)) != '') {
                        $validators[] = $js;
                    }
                }
            }
            if ($validators !== array()) {
                $option['clientValidation'] = "js:function(value, messages, attribute) {\n" . implode(
                        "\n",
                        $validators
                    ) . "\n}";
            }
        }
        $html = BsHtml::error($model, $attribute, $htmlOptions);
        if ($html === '') {
            $htmlOptions['type'] = $this->helpType;
            BsHtml::addCssStyle('display:none', $htmlOptions);
            $html = BsHtml::help('', $htmlOptions);
        }

        $this->attributes[$inputID] = $option;
        return $html;
    }

    /**
     * Displays a summary of validation errors for one or several models.
     * @param mixed $models the models whose input errors are to be displayed.
     * @param string $header a piece of HTML code that appears in front of the errors
     * @param string $footer a piece of HTML code that appears at the end of the errors
     * @param array $htmlOptions additional HTML attributes to be rendered in the container div tag.
     * @return string the error summary. Empty if no errors are found.
     */
    public function errorSummary($models, $header = null, $footer = null, $htmlOptions = array())
    {
        if (!$this->enableAjaxValidation && !$this->enableClientValidation) {
            return BsHtml::errorSummary($models, $header, $footer, $htmlOptions);
        }
        BsArray::defaultValue('id', $this->id . '_es_', $htmlOptions);
        $html = BsHtml::errorSummary($models, $header, $footer, $htmlOptions);
        if ($html === '') {
            if ($header === null) {
                $header = '<p>' . Yii::t('yii', 'Please fix the following input errors:') . '</p>';
            }
            BsHtml::addCssClass(BsHtml::$errorSummaryCss, $htmlOptions);
            BsHtml::addCssStyle('display:none', $htmlOptions);
            $html = CHtml::tag('div', $htmlOptions, $header . '<ul><li>dummy</li></ul>' . $footer);
        }

        $this->summaryID = $htmlOptions['id'];

        foreach (is_array($models) ? $models : array($models) as $model) {
            foreach ($model->getSafeAttributeNames() as $attribute) {
                $this->_summaryAttributes[] = CHtml::activeId($model, $attribute);
            }
        }

        return $html;
    }

    /**
     * Renders a text field for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated input field.
     * @see BsHtml::activeTextField
     */
    public function textField($model, $attribute, $htmlOptions = array())
    {

        return BsHtml::activeTextField($model, $attribute, $htmlOptions);
    }

    /**
     * Renders a password field for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated input field.
     * @see BsHtml::activePasswordField
     */
    public function passwordField($model, $attribute, $htmlOptions = array())
    {

        return BsHtml::activePasswordField($model, $attribute, $htmlOptions);
    }

    /**
     * Renders a url field for a model attribute.
     * @param CModel $model the data model
     * @param string $attribute the attribute
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated input field
     * @see BsHtml::activeUrlField
     */
    public function urlField($model, $attribute, $htmlOptions = array())
    {

        return BsHtml::activeUrlField($model, $attribute, $htmlOptions);
    }

    /**
     * Renders an email field for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated input field.
     * @see BsHtml::activeEmailField
     */
    public function emailField($model, $attribute, $htmlOptions = array())
    {

        return BsHtml::activeEmailField($model, $attribute, $htmlOptions);
    }

    /**
     * Renders an telephone field for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated input field.
     * @see BsHtml::activeEmailField
     */
    public function telField($model, $attribute, $htmlOptions = array())
    {

        return BsHtml::activeTelField($model, $attribute, $htmlOptions);
    }

    /**
     * Renders a number field for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated input field.
     * @see BsHtml::activeNumberField
     */
    public function numberField($model, $attribute, $htmlOptions = array())
    {

        return BsHtml::activeNumberField($model, $attribute, $htmlOptions);
    }

    /**
     * Generates a range field for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated input field.
     * @see BsHtml::activeRangeField
     */
    public function rangeField($model, $attribute, $htmlOptions = array())
    {

        return BsHtml::activeRangeField($model, $attribute, $htmlOptions);
    }

    /**
     * Renders a date field for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated input field.
     */
    public function dateField($model, $attribute, $htmlOptions = array())
    {

        return BsHtml::activeDateField($model, $attribute, $htmlOptions);
    }

    /**
     * Renders a text area for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated text area.
     * @see BsHtml::activeTextArea
     */
    public function textArea($model, $attribute, $htmlOptions = array())
    {

        return BsHtml::activeTextArea($model, $attribute, $htmlOptions);
    }

    /**
     * Renders a file field for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes
     * @return string the generated input field.
     * @see BsHtml::activeFileField
     */
    public function fileField($model, $attribute, $htmlOptions = array())
    {

        return BsHtml::activeFileField($model, $attribute, $htmlOptions);
    }

    /**
     * Renders a radio button for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated radio button.
     * @see BsHtml::activeRadioButton
     */
    public function radioButton($model, $attribute, $htmlOptions = array())
    {
        return BsHtml::activeRadioButton($model, $attribute, $htmlOptions);
    }

    /**
     * Renders a checkbox for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated check box.
     * @see BsHtml::activeCheckBox
     */
    public function checkBox($model, $attribute, $htmlOptions = array())
    {
        return BsHtml::activeCheckBox($model, $attribute, $htmlOptions);
    }

    /**
     * Renders a dropdown list for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $data data for generating the list options (value=>display).
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated drop down list.
     * @see BsHtml::activeDropDownList
     */
    public function dropDownList($model, $attribute, $data, $htmlOptions = array())
    {
        return BsHtml::activeDropDownList($model, $attribute, $data, $htmlOptions);
    }

    /**
     * Renders a list box for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $data data for generating the list options (value=>display).
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated list box.
     * @see BsHtml::activeListBox
     */
    public function listBox($model, $attribute, $data, $htmlOptions = array())
    {
        return BsHtml::activeListBox($model, $attribute, $data, $htmlOptions);
    }

    /**
     * Renders a radio button list for a model attribute
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $data data for generating the list options (value=>display)
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated radio button list.
     * @see BsHtml::activeRadioButtonList
     */
    public function radioButtonList($model, $attribute, $data, $htmlOptions = array())
    {
        return BsHtml::activeRadioButtonList($model, $attribute, $data, $htmlOptions);
    }

    /**
     * Renders an inline radio button list for a model attribute
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $data data for generating the list options (value=>display)
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated radio button list.
     * @see BsHtml::activeInlineRadioButtonList
     */
    public function inlineRadioButtonList($model, $attribute, $data, $htmlOptions = array())
    {
        return BsHtml::activeInlineRadioButtonList($model, $attribute, $data, $htmlOptions);
    }

    /**
     * Renders a checkbox list for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $data data for generating the list options (value=>display)
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated checkbox list.
     * @see BsHtml::activeCheckBoxList
     */
    public function checkBoxList($model, $attribute, $data, $htmlOptions = array())
    {
        return BsHtml::activeCheckBoxList($model, $attribute, $data, $htmlOptions);
    }

    /**
     * Renders an inline checkbox list for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $data data for generating the list options (value=>display)
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated checkbox list.
     * @see BsHtml::activeInlineCheckBoxList
     */
    public function inlineCheckBoxList($model, $attribute, $data, $htmlOptions = array())
    {
        return BsHtml::activeInlineCheckBoxList($model, $attribute, $data, $htmlOptions);
    }

    /**
     * Renders an uneditable field for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated field.
     * @see BsHtml::activeUneditableField
     */
    public function uneditableField($model, $attribute, $htmlOptions = array())
    {
        return BsHtml::activeUneditableField($model, $attribute, $htmlOptions);
    }

    /**
     * Renders a search query field for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated input.
     * @see BsHtml::activeSearchField
     */
    public function searchQuery($model, $attribute, $htmlOptions = array())
    {
        return BsHtml::activeSearchQueryField($model, $attribute, $htmlOptions);
    }

    /**
     * Generates a control group with a text field for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute name.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated row.
     * @see BsHtml::activeTextFieldControlGroup
     */
    public function textFieldControlGroup($model, $attribute, $htmlOptions = array())
    {

        $htmlOptions = $this->processRowOptions($model, $attribute, $htmlOptions);
        return BsHtml::activeTextFieldControlGroup($model, $attribute, $htmlOptions);
    }

    /**
     * Generates a control group with a time field for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute name.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated row.
     * @see BsHtml::activeTextFieldControlGroup
     */
    public function timeFieldControlGroup($model, $attribute, $htmlOptions = array())
    {

        $htmlOptions = $this->processRowOptions($model, $attribute, $htmlOptions);
        return BsHtml::activeTimeFieldControlGroup($model, $attribute, $htmlOptions);
    }

    /**
     * Generates a control group with a password field for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute name.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated row.
     * @see BsHtml::activePasswordFieldControlGroup
     */
    public function passwordFieldControlGroup($model, $attribute, $htmlOptions = array())
    {
        $htmlOptions = $this->processRowOptions($model, $attribute, $htmlOptions);
        return BsHtml::activePasswordFieldControlGroup($model, $attribute, $htmlOptions);
    }

    /**
     * Generates a control group with an url field for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute name.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated row.
     * @see BsHtml::activeUrlFieldControlGroup
     */
    public function urlFieldControlGroup($model, $attribute, $htmlOptions = array())
    {
        $htmlOptions = $this->processRowOptions($model, $attribute, $htmlOptions);
        return BsHtml::activeUrlFieldControlGroup($model, $attribute, $htmlOptions);
    }

    /**
     * Generates a control group with an email field for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute name.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated row.
     * @see BsHtml::activeEmailFieldControlGroup
     */
    public function emailFieldControlGroup($model, $attribute, $htmlOptions = array())
    {
        $htmlOptions = $this->processRowOptions($model, $attribute, $htmlOptions);
        return BsHtml::activeEmailFieldControlGroup($model, $attribute, $htmlOptions);
    }

    /**
     * Generates a control group with an telephone field for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute name.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated row.
     * @see BsHtml::activeTelFieldControlGroup
     */
    public function telFieldControlGroup($model, $attribute, $htmlOptions = array())
    {
        $htmlOptions = $this->processRowOptions($model, $attribute, $htmlOptions);
        return BsHtml::activeTelFieldControlGroup($model, $attribute, $htmlOptions);
    }

    /**
     * Generates a control group with a number field for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute name.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated row.
     * @see BsHtml::activeNumberFieldControlGroup
     */
    public function numberFieldControlGroup($model, $attribute, $htmlOptions = array())
    {
        $htmlOptions = $this->processRowOptions($model, $attribute, $htmlOptions);
        return BsHtml::activeNumberFieldControlGroup($model, $attribute, $htmlOptions);
    }

    /**
     * Generates a control group with a range field for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute name.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated row.
     * @see BsHtml::activeRangeFieldControlGroup
     */
    public function rangeFieldControlGroup($model, $attribute, $htmlOptions = array())
    {
        $htmlOptions = $this->processRowOptions($model, $attribute, $htmlOptions);
        return BsHtml::activeRangeFieldControlGroup($model, $attribute, $htmlOptions);
    }

    /**
     * Generates a control group with a date field for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute name.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated row.
     * @see BsHtml::activeDateFieldControlGroup
     */
    public function dateFieldControlGroup($model, $attribute, $htmlOptions = array())
    {
        $htmlOptions = $this->processRowOptions($model, $attribute, $htmlOptions);
        return BsHtml::activeDateFieldControlGroup($model, $attribute, $htmlOptions);
    }

    /**
     * Generates a control group with a text area for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute name.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated row.
     * @see BsHtml::activeTextAreaControlGroup
     */
    public function textAreaControlGroup($model, $attribute, $htmlOptions = array())
    {
        $htmlOptions = $this->processRowOptions($model, $attribute, $htmlOptions);
        return BsHtml::activeTextAreaControlGroup($model, $attribute, $htmlOptions);
    }

    /**
     * Generates a control group with a check box for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute name.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated row.
     * @see BsHtml::activeCheckBoxControlGroup
     */
    public function checkBoxControlGroup($model, $attribute, $htmlOptions = array())
    {
        $htmlOptions = $this->processRowOptions($model, $attribute, $htmlOptions);
        return BsHtml::activeCheckBoxControlGroup($model, $attribute, $htmlOptions);
    }

    /**
     * Generates a control group with a radio button for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute name.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated row.
     * @see BsHtml::activeRadioButtonControlGroup
     */
    public function radioButtonControlGroup($model, $attribute, $htmlOptions = array())
    {
        $htmlOptions = $this->processRowOptions($model, $attribute, $htmlOptions);
        return BsHtml::activeRadioButtonControlGroup($model, $attribute, $htmlOptions);
    }

    /**
     * Generates a control group with a drop down list for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute name.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated row.
     * @see BsHtml::activeDropDownListControlGroup
     */
    public function dropDownListControlGroup($model, $attribute, $data, $htmlOptions = array())
    {
        $htmlOptions = $this->processRowOptions($model, $attribute, $htmlOptions);
        return BsHtml::activeDropDownListControlGroup($model, $attribute, $data, $htmlOptions);
    }

    /**
     * Generates a control group with a list box for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute name.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated row.
     * @see BsHtml::activeListBoxControlGroup
     */
    public function listBoxControlGroup($model, $attribute, $data, $htmlOptions = array())
    {
        $htmlOptions = $this->processRowOptions($model, $attribute, $htmlOptions);
        return BsHtml::activeListBoxControlGroup($model, $attribute, $data, $htmlOptions);
    }

    /**
     * Generates a control group with a file field for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute name.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated row.
     * @see BsHtml::activeFileFieldControlGroup
     */
    public function fileFieldControlGroup($model, $attribute, $htmlOptions = array())
    {
        $htmlOptions = $this->processRowOptions($model, $attribute, $htmlOptions);
        return BsHtml::activeFileFieldControlGroup($model, $attribute, $htmlOptions);
    }

    /**
     * Generates a control group with a radio button list for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute name.
     * @param array $data data for generating the list options (value=>display).
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated row.
     * @see BsHtml::activeRadioButtonListControlGroup
     */
    public function radioButtonListControlGroup($model, $attribute, $data, $htmlOptions = array())
    {
        $htmlOptions = $this->processRowOptions($model, $attribute, $htmlOptions);
        return BsHtml::activeRadioButtonListControlGroup($model, $attribute, $data, $htmlOptions);
    }

    /**
     * Generates a control group with an inline radio button list for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute name.
     * @param array $data data for generating the list options (value=>display).
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated row.
     * @see BsHtml::activeInlineCheckBoxListControlGroup
     */
    public function inlineRadioButtonListControlGroup($model, $attribute, $data, $htmlOptions = array())
    {
        $htmlOptions = $this->processRowOptions($model, $attribute, $htmlOptions);
        return BsHtml::activeInlineRadioButtonListControlGroup($model, $attribute, $data, $htmlOptions);
    }

    /**
     * Generates a control group with a check box list for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute name.
     * @param array $data data for generating the list options (value=>display).
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated row.
     * @see BsHtml::activeCheckBoxListControlGroup
     */
    public function checkBoxListControlGroup($model, $attribute, $data, $htmlOptions = array())
    {
        $htmlOptions = $this->processRowOptions($model, $attribute, $htmlOptions);
        return BsHtml::activeCheckBoxListControlGroup($model, $attribute, $data, $htmlOptions);
    }

    /**
     * Generates a control group with an inline check box list for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute name.
     * @param array $data data for generating the list options (value=>display).
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated row.
     * @see BsHtml::activeInlineCheckBoxListControlGroup
     */
    public function inlineCheckBoxListControlGroup($model, $attribute, $data, $htmlOptions = array())
    {
        $htmlOptions = $this->processRowOptions($model, $attribute, $htmlOptions);
        return BsHtml::activeInlineCheckBoxListControlGroup($model, $attribute, $data, $htmlOptions);
    }

    /**
     * Generates a control group with an uneditable field for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute name.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated row.
     * @see BsHtml::activeUneditableFieldControlGroup
     */
    public function uneditableFieldControlGroup($model, $attribute, $htmlOptions = array())
    {
        $htmlOptions = $this->processRowOptions($model, $attribute, $htmlOptions);
        return BsHtml::activeUneditableFieldControlGroup($model, $attribute, $htmlOptions);
    }

    /**
     * Generates a control group with a search field for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute name.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated row.
     * @see BsHtml::activeSearchFieldControlGroup
     */
    public function searchQueryControlGroup($model, $attribute, $htmlOptions = array())
    {
        $htmlOptions = $this->processRowOptions($model, $attribute, $htmlOptions);
        return BsHtml::activeSearchQueryControlGroup($model, $attribute, $htmlOptions);
    }

    /**
     * Processes the options for a input row.
     * @param CModel $model the data model.
     * @param string $attribute the attribute name.
     * @param array $htmlOptions the options.
     * @return array the processed options.
     */
    protected function processRowOptions($model, $attribute, $options)
    {
        $errorOptions = BsArray::popValue('errorOptions', $options, array());
        $errorOptions['type'] = $this->helpType;
        $error = $this->error($model, $attribute, $errorOptions);

        // kind of a hack for ajax forms but this works for now.
        if (!empty($error) && strpos($error, 'display:none') === false) {
            $options['color'] = BsHtml::INPUT_COLOR_ERROR;
        }
        if (!$this->hideInlineErrors) {
            $options['error'] = $error;
        }
        $helpOptions = BsArray::popValue('helpOptions', $options, array());
        $helpOptions['type'] = $this->helpType;
        $labelOptions = BsArray::popValue('labelOptions', $options, array());

        $options['helpOptions'] = $helpOptions;
        $options['labelOptions'] = BsHtml::setLabelOptionsByLayout($this->layout, $labelOptions);
        $options['formLayout'] = $this->layout;
        return $options;
    }

}
