<?php
/**
 * BsGridView class file.
 * @author Pascal Brewing
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package bootstrap/widgets
 */

Yii::import('zii.widgets.grid.CGridView');

/**
 * Bootstrap Zii grid view.
 */
class BsGridView extends CGridView
{
    /**
     * @var string|array the table style.
     * Valid values are BsHtml::GRID_TYPE_STRIPED, BsHtml::GRID_TYPE_BORDERED, BsHtml::GRID_TYPE_CONDENSED and/or
     * BsHtml::GRID_TYPE_HOVER.
     */
    public $type;
    /**
     * @var string the CSS class name for the pager container. Defaults to 'pagination'.
     */
    public $pagerCssClass = 'pagination';
    /**
     * @var array the configuration for the pager.
     * Defaults to <code>array('class'=>'ext.bootstrap.widgets.TbPager')</code>.
     */
    public $pager = array('class' => 'bootstrap.widgets.BsPager');
    /**
     * @var string the URL of the CSS file used by this grid view.
     * Defaults to false, meaning that no CSS will be included.
     */
    public $cssFile = false;
    /**
     * @var string the template to be used to control the layout of various sections in the view.
     */
    public $template = "{items}\n{pager}{summary}";


    /**
     * Initializes the widget.
     */
    public function init()
    {
	    $baseScriptUrl = $this->baseScriptUrl;

        parent::init();
        $classes = array('table');
        if (isset($this->type) && !empty($this->type)) {
            if (is_string($this->type)) {
                $this->type = explode(' ', $this->type);
            }

            foreach ($this->type as $type) {
                $classes[] = 'table-' . $type;
            }
        }
        if (!empty($classes)) {
            $classes = implode(' ', $classes);
            if (isset($this->itemsCssClass)) {
                $this->itemsCssClass .= ' ' . $classes;
            } else {
                $this->itemsCssClass = $classes;
            }
        }

	    if ($baseScriptUrl === null) {
		    $baseScriptUrl = Yii::app()->getAssetManager()->publish(Yii::getPathOfAlias('bootstrap.widgets.assets')) . '/gridview';
	    }

	    if ($this->cssFile === false) {
		    $this->cssFile = $baseScriptUrl . '/styles.css';
	    }

	    Yii::app()->getClientScript()->registerCssFile($this->cssFile);
    }

    /**
     * Creates column objects and initializes them.
     */
    protected function initColumns()
    {
        foreach ($this->columns as $i => $column) {
            if (is_array($column) && !isset($column['class'])) {
                $this->columns[$i]['class'] = 'bootstrap.widgets.BsDataColumn';
            }
        }
        parent::initColumns();
    }

    /**
     * Creates a column based on a shortcut column specification string.
     * @param mixed $text the column specification string
     * @return \BsDataColumn|\CDataColumn the column instance
     * @throws CException if the column format is incorrect
     */
    protected function createDataColumn($text)
    {
        if (!preg_match('/^([\w\.]+)(:(\w*))?(:(.*))?$/', $text, $matches)) {
            throw new CException(Yii::t(
                'zii',
                'The column must be specified in the format of "Name:Type:Label", where "Type" and "Label" are optional.'
            ));
        }
        $column = new BsDataColumn($this);
        $column->name = $matches[1];
        if (isset($matches[3]) && $matches[3] !== '') {
            $column->type = $matches[3];
        }
        if (isset($matches[5])) {
            $column->header = $matches[5];
        }
        return $column;
    }

        public function registerClientScript() {
        $id=$this->getId();

        if($this->ajaxUpdate===false)
            $ajaxUpdate=false;
        else {
            $ajaxUpdate=array_unique(preg_split('/\s*,\s*/',$this->ajaxUpdate,-1,PREG_SPLIT_NO_EMPTY));/* .','.$id */
            if(empty($ajaxUpdate)) {
                $ajaxUpdate[] = $id;
            }
        }

        $options=array(
            'ajaxUpdate'=>$ajaxUpdate,
            'ajaxVar'=>$this->ajaxVar,
            'pagerClass'=>$this->pagerCssClass,
            'loadingClass'=>$this->loadingCssClass,
            'filterClass'=>$this->filterCssClass,
            'tableClass'=>$this->itemsCssClass,
            'selectableRows'=>$this->selectableRows,
            'enableHistory'=>$this->enableHistory,
            'updateSelector'=>$this->updateSelector,
            'filterSelector'=>$this->filterSelector
        );
        if($this->ajaxUrl!==null)
            $options['url']=CHtml::normalizeUrl($this->ajaxUrl);
        if($this->ajaxType!==null)
            $options['ajaxType']=strtoupper($this->ajaxType);
        if($this->enablePagination)
            $options['pageVar']=$this->dataProvider->getPagination()->pageVar;
        foreach(array('beforeAjaxUpdate', 'afterAjaxUpdate', 'ajaxUpdateError', 'selectionChanged') as $event)
        {
            if($this->$event!==null)
            {
                if($this->$event instanceof CJavaScriptExpression)
                    $options[$event]=$this->$event;
                else
                    $options[$event]=new CJavaScriptExpression($this->$event);
            }
        }

        $options=CJavaScript::encode($options);
        $cs=Yii::app()->getClientScript();
        $cs->registerCoreScript('jquery');
        $cs->registerCoreScript('bbq');
        if($this->enableHistory)
            $cs->registerCoreScript('history');
        $cs->registerScriptFile($this->baseScriptUrl.'/jquery.yiigridview.js',CClientScript::POS_END);
        $cs->registerScript(__CLASS__.'#'.$id,"jQuery('#$id').yiiGridView($options);");
    }

}
