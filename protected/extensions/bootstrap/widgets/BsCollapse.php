<?php
/**
 * BbCollapse class file.
 * based on yii-strap TbCollapse
 * @see https://raw.github.com/Crisu83/yiistrap/master/widgets/TbCollapse.php
 */

/**
 * Bootstrap collapse widget.
 * @see http://getbootstrap.com/javascript/#collapse
 */
class BsCollapse extends CWidget
{
    /**
     * @var string the HTML tag for the container.
     */
    public $tagName = 'div';
    /**
     * @var string the content text.
     */
    public $content;
    /**
     * @var string the path to a partial view.
     */
    public $view;
    /**
     * @var string the CSS selector for the parent element.
     */
    public $parent;
    /**
     * @var boolean whether to be collapsed on invocation.
     */
    public $toggle;
    /**
     * @var string[] $events the JavaScript event configuration (name=>handler).
     */
    public $events = array();
    /**
     * @var array the HTML attributes for the container.
     */
    public $htmlOptions = array();
    /**
     * @var array additional data to be passed to the view.
     */
    public $viewData = array();

    /**
     * Initializes the widget.
     */
    public function init()
    {
        Yii::app()->clientScript->registerCoreScript('jquery');
        $this->attachBehavior('BsWidget', new BsWidget);
        $this->copyId();
        BsHtml::addCssClass('collapse', $this->htmlOptions);
        if (isset($this->parent)) {
            BsArray::defaultValue('data-parent', $this->parent, $this->htmlOptions);
        }
        if (isset($this->toggle) && $this->toggle) {
            BsHtml::addCssClass('in', $this->htmlOptions);
        }
        if (isset($this->view)) {
            $controller = $this->getController();
            if (isset($controller) && $controller->getViewFile($this->view) !== false) {
                $this->content = $this->controller->renderPartial($this->view, $this->viewData, true);
            }
        }
        echo BsHtml::openTag($this->tagName, $this->htmlOptions);
        echo $this->content;
    }

    /**
     * Runs the widget.
     */
    public function run()
    {
        echo BsHtml::closeTag($this->tagName);
        $selector = '#' . $this->htmlOptions['id'];
        $this->registerEvents($selector, $this->events);
    }
}