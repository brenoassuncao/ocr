<?php
/**
 * Bootstrap navbar widget.
 * @see http://getbootstrap.com/components/#nav
 */
class BsNavs extends CWidget
{
    public $type=BsHtml::NAV_TYPE_TABS;

    /**
     * items exaple
     * @var array=array(
     *      array(
     *          'label'=>'string',
     *          'id'=>'',
     *          'content'=>'string',
     *          'active'=>bool,
     *       )
     * );
     */
    public $items=array();

    protected $_labels=array();
    protected $_content=array();

    public function init()
    {
        foreach($this->items as $key=>$item)
        {
            if (!isset($item['id'])) //if not id - generate
            {
                $item['id']='navs-'.$this->id.'-'.$key;
            }

            $item['url']='#'.$item['id'];

            $options_label=array(
                    'label'=>'label',
                    'url'=>'#',
                    'active'=>false,
            );

            $this->_labels[]=self::mergeOptions($options_label,$item);

            $options_content=array(
                'content'=>'',
                'id'=>'',
                'active'=>false,
            );

            $this->_content[]=self::mergeOptions($options_content,$item);
        }
    }

    public function run()
    {
        $type=$this->type;

        echo BsHtml::openTag('div',array('id'=>$this->id));

            /*** Nav tabs ***/
            echo BsHtml::$type(
                $this->_labels
            );

            /*** Tab panes ***/
            echo BsHtml::openTag('div',array('class'=>'tab-content'));
                foreach($this->_content as $content)
                {
                    $class='tab-pane'.($content['active']==true ? ' active' : '');
                    echo BsHtml::tag('div',array('class'=>$class,'id'=>$content['id'],'role'=>'tabpanel'),$content['content']);
                }
            echo BsHtml::closeTag('div');

        echo BsHtml::closeTag('div');

        /*** clientScript ***/
        $cs=Yii::app()->getClientScript();
        $navs='
            $("#'.$this->id.' ul.nav a").on("click",function(e){
                  e.preventDefault();
                  $(this).tab("show");
            })
        ';
        $cs->registerScript("navs-".$this->id,$navs);
    }

    public static function mergeOptions($options,$values)
    {
        foreach($options as $key=>$lab)
        {
            if (isset($values[$key]))
            {
                $options[$key]=$values[$key];
            }
        }

        return $options;
    }

}