<?php
/**
 * BsPanel class file.
 * @author Francis Beresford <francis.beresford@gmail.com>
 * @license http://opensource.org/licenses/MIT The MIT License
 * @package bootstrap/widgets
 */

Yii::import('zii.widgets.CPortlet');

/**
 * Bootstrap BsPanel widget.
 * @see http://getbootstrap.com/components/#panels
 */
class BsPanel extends CPortlet
{
    /**
     * @var array the HTML attributes for the portlet container tag.
     */
    public $htmlOptions         = array('class' => 'panel');
    /**
     * @var string the CSS class for the decoration container tag. Defaults to 'portlet-decoration'.
     */
    public $decorationCssClass  = 'panel-heading';
    /**
     * @var string the CSS class for the content container tag. Defaults to 'panel-body'.
     */
    public $contentCssClass     = 'panel-body';
    /**
     * @var string the CSS class for the portlet title tag. Defaults to 'panel-title'.
     */
    public $titleCssClass       = 'panel-title';
    /**
     * @var string the HTML tag that will be used to wrap the title. e.g h1,h2,h3 etc.
     */
    public $titleTag;
    /**
     * @var string the footer of the portlet. Defaults to null.
     * When this is not set, the footer will not be displayed.
     * Note that the footer will not be HTML-encoded when rendering.
     */
    public $footer;
    /**
     * @var string the CSS class for the panel footer tag. Defaults to 'panel-title'.
     */
    public $footerCssClass      = 'panel-footer';
    /**
     * @var string the CSS class which defines the Panel's context http://getbootstrap.com/components/#panels-alternatives.
     */
    public $type = BsHtml::PANEL_TYPE_DEFAULT;

    private $_openTag;

    public function init()
    {
        $this->htmlOptions = BsHtml::addClassName($this->type, $this->htmlOptions);
        ob_start();
        ob_implicit_flush(false);

        if(isset($this->htmlOptions['id']))
            $this->id=$this->htmlOptions['id'];
        else
            $this->htmlOptions['id']=$this->id;
        echo CHtml::openTag($this->tagName,$this->htmlOptions)."\n";
        $this->renderDecoration();
        echo "<div class=\"{$this->contentCssClass}\">\n";

        $this->_openTag=ob_get_contents();
        ob_clean();
    }

    /**
     * Renders the content of the portlet.
     */
    public function run()
    {
        $this->renderContent();
        $content=ob_get_clean();
        if($this->hideOnEmpty && trim($content)==='')
            return;
        echo $this->_openTag;
        echo $content;
        echo "</div>\n";
        echo $this->renderFooter();
        echo CHtml::closeTag($this->tagName);
    }

    /**
     * Renders the decoration for the portlet.
     * The default implementation will render the title if it is set.
     */
    protected function renderDecoration()
    {
        if ($this->title !== null) {
            echo "<div class=\"{$this->decorationCssClass}\">\n";
            echo ($this->titleTag ? BsHtml::tag($this->titleTag,array('class'=>$this->titleCssClass),$this->title) : $this->title) ."\n";
            echo "</div>\n";
        }
    }

    /**
     * Renders the decoration for the portlet.
     * The default implementation will render the title if it is set.
     */
    protected function renderFooter()
    {
        if ($this->footer !== null) {
            echo "<div class=\"{$this->footerCssClass}\">\n";
            echo $this->footer."\n";
            echo "</div>\n";
        }
    }
}