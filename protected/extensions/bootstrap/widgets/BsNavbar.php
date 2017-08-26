<?php
/**
 * BsNavbar class file.
 * @author Pascal Brewing <pascalbrewing@googlemail.com>
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package bootstrap/widgets
 */


/**
 * Bootstrap navbar widget.
 * @see http://twitter.github.com/bootstrap/components.html#navbar
 */
class BsNavbar extends CWidget
{
    /**
     * @var string the navbar color.
     */
    public $color = BsHtml::NAVBAR_COLOR;
    /**
     * @var string the brand label text.
     */
    public $brandLabel;
    /**
     * @var mixed the brand url.
     */
    public $brandUrl;
    /**
     * @var array the HTML attributes for the brand link.
     */
    public $brandOptions = array();
    /**
     * @var string nanvbar display type.
     */
    public $position = BsHtml::NAVBAR_POSITION;
    /**
     * @var boolean whether to enable collapsing of the navbar on narrow screens.
     */
    public $collapse = false;
    /**
     * @var array additional HTML attributes for the collapse widget.
     */
    public $collapseOptions = array();
    /**
     * @var array list of navbar item.
     */
    public $items = array();
    /**
     * @var array the HTML attributes for the navbar.
     */
    public $htmlOptions = array();

    /**
     * add from 3.0.2 because navbar fixed top need actually an container
     * @var bool
     */
    public $container = false;

    /**
     * Initializes the widget.
     */
    public function init()
    {
        if ($this->brandLabel !== false) {
            if (!isset($this->brandLabel)) {
                $this->brandLabel = CHtml::encode(Yii::app()->name);
            }

            if (!isset($this->brandUrl)) {
                $this->brandUrl = Yii::app()->homeUrl;
            }
        }
        if (isset($this->color)) {
            BsArray::defaultValue('color', $this->color, $this->htmlOptions);
        }
        if (isset($this->position) && $this->position !== BsHtml::NAVBAR_POSITION) {
            BsArray::defaultValue('position', $this->position, $this->htmlOptions);
        }
    }

    /**
     * Runs the widget.
     */
    public function run()
    {
        $brand = $this->brandLabel !== false
            ? BsHtml::navbarBrandLink($this->brandLabel, $this->brandUrl, $this->brandOptions)
            : '';
        ob_start();
        foreach ($this->items as $item) {
            if (is_string($item)) {
                echo $item;
            } else {
                $widgetClassName = BsArray::popValue('class', $item);
                if ($widgetClassName !== null) {
                    $this->controller->widget($widgetClassName, $item);
                }
            }
        }
        $items = ob_get_clean();
        ob_start();
        if ($this->collapse !== false) {
            BsHtml::addCssClass('collapse navbar-collapse', $this->collapseOptions);
            ob_start();
            /* @var BsCollapse $collapseWidget */
            $collapseWidget = $this->controller->widget(
                'bootstrap.widgets.BsCollapse',
                array(
                    'toggle' => false, // navbars are collapsed by default
                    'content' => $items,
                    'htmlOptions' => $this->collapseOptions,
                )
            );
            $collapseContent = ob_get_clean();
            $collapseLink = BsHtml::navbarCollapseLink('#' . $collapseWidget->getId());

            echo BsHtml::tag('div', array('class' => 'navbar-header'), $collapseLink . $brand) . $collapseContent;

        } else {
            echo BsHtml::tag('div', array('class' => 'navbar-header'), $brand) . $items;
        }
        $containerContent = ob_get_clean();
        if (
            isset($this->position) && (
                $this->position === BsHtml::NAVBAR_POSITION_FIXED_TOP ||
                $this->position === BsHtml::NAVBAR_POSITION_STATIC_TOP)
        ) {
            $fluid = BsArray::popValue('containerOptions', $this->htmlOptions, false);

            $containerOptions = BsArray::popValue('containerOptions', $this->htmlOptions, array());
            $containerClass = 'container';

            if ($fluid) {
                $containerOptions = BsArray::removeValue('fluid', $this->htmlOptions, array());
                $containerClass = 'container-fluid';
            }

            BsHtml::addCssClass($containerClass, $containerOptions);

            $content = BsHtml::tag('div', $containerOptions, $containerContent);
            echo BsHtml::navbar($content, $this->htmlOptions);
            return;
        }
        echo BsHtml::navbar($containerContent, $this->htmlOptions);
    }
}