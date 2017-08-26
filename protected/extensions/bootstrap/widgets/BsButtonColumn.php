<?php
/**
 * BsButtonColumn class file.
 * @author Pascal Brewing
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package bootstrap/widgets
 */

Yii::import('zii.widgets.grid.CButtonColumn');

/**
 * Bootstrap button column widget.
 */
class BsButtonColumn extends CButtonColumn
{
    /**
     * @var string the view button icon (defaults to BsHtml::GLYPHICON_EYE_OPEN).
     */
    public $viewButtonIcon = BsHtml::GLYPHICON_EYE_OPEN;
    /**
     * @var string the update button icon (defaults to BsHtml::GLYPHICON_PENCIL).
     */
    public $updateButtonIcon = BsHtml::GLYPHICON_PENCIL;
    /**
     * @var string the delete button icon (defaults to BsHtml::GLYPHICON_TRASH).
     */
    public $deleteButtonIcon = BsHtml::GLYPHICON_TRASH;

    /**
     * Initializes the default buttons (view, update and delete).
     */
    protected function initDefaultButtons()
    {
        parent::initDefaultButtons();

        if ($this->viewButtonIcon !== false && !isset($this->buttons['view']['icon'])) {
            $this->buttons['view']['icon'] = $this->viewButtonIcon;
        }
        if ($this->updateButtonIcon !== false && !isset($this->buttons['update']['icon'])) {
            $this->buttons['update']['icon'] = $this->updateButtonIcon;
        }
        if ($this->deleteButtonIcon !== false && !isset($this->buttons['delete']['icon'])) {
            $this->buttons['delete']['icon'] = $this->deleteButtonIcon;
        }
    }

    /**
     * Renders a link button.
     * @param string $id the ID of the button
     * @param array $button the button configuration which may contain 'label', 'url', 'imageUrl' and 'options' elements.
     * @param integer $row the row number (zero-based)
     * @param mixed $data the data object associated with the row
     */
    protected function renderButton($id, $button, $row, $data)
    {

        if (isset($button['visible']) && !$this->evaluateExpression(
                $button['visible'],
                array('row' => $row, 'data' => $data)
            )
        ) {
            return;
        }

        $url = BsArray::popValue('url', $button, '#');
        if ($url !== '#') {
            $url = $this->evaluateExpression($url, array('data' => $data, 'row' => $row));
        }

        $imageUrl = BsArray::popValue('imageUrl', $button, false);
        $label = BsArray::popValue('label', $button, $id);
        $options = BsArray::popValue('options', $button, array());

        BsArray::defaultValue('data-title', $label, $options);
        BsArray::defaultValue('title', $label, $options);
        BsArray::defaultValue('data-toggle', 'tooltip', $options);

        if ($icon = BsArray::popValue('icon', $button, false)) {
            echo CHtml::link(BsHtml::icon($icon), $url, $options);
        } else {
            if ($imageUrl && is_string($imageUrl)) {
                echo CHtml::link(CHtml::image($imageUrl, $label), $url, $options);
            } else {
                echo CHtml::link($label, $url, $options);
            }
        }
    }
}
