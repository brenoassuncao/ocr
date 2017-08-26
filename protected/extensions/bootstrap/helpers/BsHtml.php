<?php
/**
 * User: Pascal Brewing
 * Date: 11.09.13
 * Time: 11:22
 * @package bootstrap.helpers
 * Class BsHtml
 */
 
class BsHtml extends CHtml
{
    //
    // TYPOGRAPHY
    // --------------------------------------------------

    const TEXT_ALIGN_LEFT = 'left';
    const TEXT_ALIGN_CENTER = 'center';
    const TEXT_ALIGN_RIGHT = 'right';
    const TEXT_COLOR_DEFAULT = '';
    const TEXT_COLOR_MUTED = 'muted';
    const TEXT_COLOR_PRIMARY = 'primary';
    const TEXT_COLOR_SUCCESS = 'success';
    const TEXT_COLOR_INFO = 'info';
    const TEXT_COLOR_WARNING = 'warning';
    const TEXT_COLOR_DANGER = 'danger';
    const TEXT_ABBR_INITIALISM = 'initialism';
    const HELP_TYPE_INLINE = 'inline';
    const HELP_TYPE_BLOCK = 'block';


    //
    // FORM
    // --------------------------------------------------
    const FORM_LAYOUT_VERTICAL = 'vertical';
    const FORM_LAYOUT_HORIZONTAL = 'horizontal';
    const FORM_LAYOUT_INLINE = 'inline';
    const FORM_LAYOUT_SEARCH = 'search';
    const INPUT_TYPE_TEXT = 'textField';
	const INPUT_TYPE_TIME = 'timeField';
    const INPUT_TYPE_PASSWORD = 'passwordField';
    const INPUT_TYPE_URL = 'urlField';
    const INPUT_TYPE_EMAIL = 'emailField';
    const INPUT_TYPE_TEL = 'telField';
    const INPUT_TYPE_NUMBER = 'numberField';
    const INPUT_TYPE_RANGE = 'rangeField';
    const INPUT_TYPE_DATE = 'dateField';
    const INPUT_TYPE_TEXTAREA = 'textArea';
    const INPUT_TYPE_FILE = 'fileField';
    const INPUT_TYPE_RADIOBUTTON = 'radioButton';
    const INPUT_TYPE_CHECKBOX = 'checkBox';
    const INPUT_TYPE_DROPDOWNLIST = 'dropDownList';
    const INPUT_TYPE_LISTBOX = 'listBox';
    const INPUT_TYPE_CHECKBOXLIST = 'checkBoxList';
    const INPUT_TYPE_INLINECHECKBOXLIST = 'inlineCheckBoxList';
    const INPUT_TYPE_RADIOBUTTONLIST = 'radioButtonList';
    const INPUT_TYPE_INLINERADIOBUTTONLIST = 'inlineRadioButtonList';
    const INPUT_TYPE_UNEDITABLE = 'uneditableField';
    const INPUT_TYPE_SEARCH = 'searchQuery';
    const INPUT_TYPE_CUSTOM = 'widget';
    const INPUT_SIZE_LG = 'input-lg';
    const INPUT_SIZE_SM = 'input-sm';
    const INPUT_SIZE_MINI = 'mini';
    const INPUT_SIZE_SMALL = 'small';
    const INPUT_SIZE_DEFAULT = '';
    const INPUT_SIZE_MEDIUM = 'medium';
    const INPUT_SIZE_LARGE = 'large';
    const INPUT_SIZE_XLARGE = 'xlarge';
    const INPUT_SIZE_XXLARGE = 'xxlarge';
    const INPUT_COLOR_DEFAULT = '';
    const INPUT_COLOR_WARNING = 'has-warning';
    const INPUT_COLOR_ERROR = 'has-error';
    const INPUT_COLOR_INFO = 'has-info';
    const INPUT_COLOR_SUCCESS = 'has-success';

    //
    // BUTTONS
    // --------------------------------------------------
    const BUTTON_TYPE_LINK = 'link';
    const BUTTON_TYPE_HTML = 'htmlButton';
    const BUTTON_TYPE_SUBMIT = 'submitButton';
    const BUTTON_TYPE_RESET = 'resetButton';
    const BUTTON_TYPE_IMAGE = 'imageButton';
    const BUTTON_TYPE_LINKBUTTON = 'linkButton';
    const BUTTON_TYPE_NAVBARBUTTON = 'navbutton';
    const BUTTON_TYPE_AJAXLINK = 'ajaxLink';
    const BUTTON_TYPE_AJAXBUTTON = 'ajaxButton';
    const BUTTON_TYPE_INPUTBUTTON = 'inputButton';
    const BUTTON_TYPE_INPUTSUBMIT = 'inputSubmit';
    const BUTTON_COLOR_DEFAULT = 'default';
    const BUTTON_COLOR_PRIMARY = 'primary';
    const BUTTON_COLOR_INFO = 'info';
    const BUTTON_COLOR_SUCCESS = 'success';
    const BUTTON_COLOR_WARNING = 'warning';
    const BUTTON_COLOR_DANGER = 'danger';

    const BUTTON_COLOR_LINK = 'link';
    const BUTTON_SIZE_MINI = 'xs';
    const BUTTON_SIZE_SMALL = 'sm';
    const BUTTON_SIZE_DEFAULT = '';
    const BUTTON_SIZE_LARGE = 'lg';
    const BUTTON_TOGGLE_CHECKBOX = 'checkbox';
    const BUTTON_TOGGLE_RADIO = 'radio';

    //
    // IMAGES
    // --------------------------------------------------
    const IMAGE_TYPE_ROUNDED = 'rounded';
    const IMAGE_TYPE_CIRCLE = 'circle';
    const IMAGE_TYPE_THUMBNAIL = 'thumbnail';
    const IMAGE_TYPE_RESPONSIVE = 'responsive';

    //
    // NAV
    // --------------------------------------------------
    const NAV_TYPE_NONE = '';
    const NAV_TYPE_TABS = 'tabs';
    const NAV_TYPE_PILLS = 'pills';
    const NAV_TYPE_LIST = 'list';
    const NAV_TYPE_NAVBAR = 'navbar';
    const TABS_PLACEMENT_ABOVE = '';
    const TABS_PLACEMENT_BELOW = 'below';
    const TABS_PLACEMENT_LEFT = 'left';
    const TABS_PLACEMENT_RIGHT = 'right';
    const NAVBAR_NAV_PULL_RIGHT = 'right';
    const NAVBAR_NAV_PULL_LEFT = 'left';

    //
    // NAVBAR
    // --------------------------------------------------
    const NAVBAR_POSITION = '';
    const NAVBAR_POSITION_FIXED_TOP = 'fixed-top';
    const NAVBAR_POSITION_FIXED_BOTTOM = 'fixed-bottom';
    const NAVBAR_POSITION_STATIC_TOP = 'static-top';
    const NAVBAR_COLOR = 'default';
    const NAVBAR_COLOR_INVERSE = 'inverse';

    //
    // PAGINATION
    // --------------------------------------------------
    const PAGINATION_SIZE_SMALL = 'sm';
    const PAGINATION_SIZE_DEFAULT = '';
    const PAGINATION_SIZE_LARGE = 'lg';
    const PAGINATION_ALIGN_LEFT = 'left';
    const PAGINATION_ALIGN_CENTER = 'centered';
    const PAGINATION_ALIGN_RIGHT = 'right';

    //
    // PANELS
    // --------------------------------------------------
    const PANEL_TYPE_DEFAULT = 'panel-default';
    const PANEL_TYPE_PRIMARY = 'panel-primary';
    const PANEL_TYPE_SUCCESS = 'panel-success';
    const PANEL_TYPE_INFO = 'panel-info';
    const PANEL_TYPE_WARNING = 'panel-warning';
    const PANEL_TYPE_DANGER = 'panel-danger';

    //
    // LABELS AND BADGES
    // --------------------------------------------------
    const LABEL_COLOR_PRIMARY = 'primary';
    const LABEL_COLOR_SUCCESS = 'success';
    const LABEL_COLOR_WARNING = 'warning';
    const LABEL_COLOR_DEFAULT = 'default';
    const LABEL_COLOR_INFO = 'info';
    const LABEL_COLOR_DANGER = 'danger';


    //
    // TOOLTIPS AND POPOVERS
    // --------------------------------------------------
    const TOOLTIP_PLACEMENT_TOP = 'top';
    const TOOLTIP_PLACEMENT_BOTTOM = 'bottom';
    const TOOLTIP_PLACEMENT_LEFT = 'left';
    const TOOLTIP_PLACEMENT_RIGHT = 'right';
    const TOOLTIP_TRIGGER_CLICK = 'click';
    const TOOLTIP_TRIGGER_HOVER = 'hover';
    const TOOLTIP_TRIGGER_FOCUS = 'focus';
    const TOOLTIP_TRIGGER_MANUAL = 'manual';
    const POPOVER_PLACEMENT_TOP = 'top';
    const POPOVER_PLACEMENT_BOTTOM = 'bottom';
    const POPOVER_PLACEMENT_LEFT = 'left';
    const POPOVER_PLACEMENT_RIGHT = 'right';
    const POPOVER_TRIGGER_CLICK = 'click';
    const POPOVER_TRIGGER_HOVER = 'hover';
    const POPOVER_TRIGGER_FOCUS = 'focus';
    const POPOVER_TRIGGER_MANUAL = 'manual';

    //
    // ALERT
    // --------------------------------------------------
    const ALERT_COLOR_DEFAULT = '';
    const ALERT_COLOR_INFO = 'info';
    const ALERT_COLOR_SUCCESS = 'success';
    const ALERT_COLOR_WARNING = 'warning';
    const ALERT_COLOR_ERROR = 'danger';
    const ALERT_COLOR_DANGER = 'danger';

    //
    // PROGRESS BARS
    // --------------------------------------------------
    const PROGRESS_COLOR_INFO = 'info';
    const PROGRESS_COLOR_SUCCESS = 'success';
    const PROGRESS_COLOR_WARNING = 'warning';
    const PROGRESS_COLOR_DANGER = 'danger';

    //
    // MISC
    // --------------------------------------------------
    const WELL_SIZE_SMALL = 'sm';
    const WELL_SIZE_LARGE = 'lg';
    const PULL_LEFT = 'left';
    const PULL_RIGHT = 'right';
    const CLOSE_DISMISS_ALERT = 'alert';
    const CLOSE_DISMISS_MODAL = 'modal';

    //
    // DETAIL VIEW
    // --------------------------------------------------
    const DETAIL_TYPE_STRIPED = 'striped';
    const DETAIL_TYPE_BORDERED = 'bordered';
    const DETAIL_TYPE_CONDENSED = 'condensed';
    const DETAIL_TYPE_HOVER = 'hover';

    //
    // GRID VIEW
    // --------------------------------------------------
    const GRID_TYPE_STRIPED = 'striped';
    const GRID_TYPE_BORDERED = 'bordered';
    const GRID_TYPE_CONDENSED = 'condensed';
    const GRID_TYPE_HOVER = 'hover';
    const GRID_TYPE_RESPONSIVE = 'responsive';
    const GRID_TYPE_COLUMN_SUCCESS = 'success';
    const GRID_TYPE_COLUMN_ACTIVE = 'active';
    const GRID_TYPE_COLUMN_WARNING = 'warning';
    const GRID_TYPE_COLUMN_DANGER = 'danger';

    //
    // AFFIX
    // --------------------------------------------------
    const AFFIX_POSITION_TOP = 'top';
    const AFFIX_POSITION_BOTTOM = 'bottom';

    //
    // ICON
    // --------------------------------------------------
    const GLYPHICON_ADJUST = 'glyphicon-adjust';
    const GLYPHICON_ALIGN_CENTER = 'glyphicon-align-center';
    const GLYPHICON_ALIGN_JUSTIFY = 'glyphicon-align-justify';
    const GLYPHICON_ALIGN_LEFT = 'glyphicon-align-left';
    const GLYPHICON_ALIGN_RIGHT = 'glyphicon-align-right';
    const GLYPHICON_ARROW_DOWN = 'glyphicon-arrow-down';
    const GLYPHICON_ARROW_LEFT = 'glyphicon-arrow-left';
    const GLYPHICON_ARROW_RIGHT = 'glyphicon-arrow-right';
    const GLYPHICON_ARROW_UP = 'glyphicon-arrow-up';
    const GLYPHICON_ASTERISK = 'glyphicon-asterisk';
    const GLYPHICON_BACKWARD = 'glyphicon-backward';
    const GLYPHICON_BAN_CIRCLE = 'glyphicon-ban-circle';
    const GLYPHICON_BARCODE = 'glyphicon-barcode';
    const GLYPHICON_BELL = 'glyphicon-bell';
    const GLYPHICON_BOLD = 'glyphicon-bold';
    const GLYPHICON_BOOK = 'glyphicon-book';
    const GLYPHICON_BOOKMARK = 'glyphicon-bookmark';
    const GLYPHICON_BRIEFCASE = 'glyphicon-briefcase';
    const GLYPHICON_BULLHORN = 'glyphicon-bullhorn';
    const GLYPHICON_CALENDAR = 'glyphicon-calendar';
    const GLYPHICON_CAMERA = 'glyphicon-camera';
    const GLYPHICON_CERTIFICATE = 'glyphicon-certificate';
    const GLYPHICON_CHECK = 'glyphicon-check';
    const GLYPHICON_CHEVRON_DOWN = 'glyphicon-chevron-down';
    const GLYPHICON_CHEVRON_LEFT = 'glyphicon-chevron-left';
    const GLYPHICON_CHEVRON_RIGHT = 'glyphicon-chevron-right';
    const GLYPHICON_CHEVRON_UP = 'glyphicon-chevron-up';
    const GLYPHICON_CIRCLE_ARROW_DOWN = 'glyphicon-circle-arrow-down';
    const GLYPHICON_CIRCLE_ARROW_LEFT = 'glyphicon-circle-arrow-left';
    const GLYPHICON_CIRCLE_ARROW_RIGHT = 'glyphicon-circle-arrow-right';
    const GLYPHICON_CIRCLE_ARROW_UP = 'glyphicon-circle-arrow-up';
    const GLYPHICON_CLOUD = 'glyphicon-cloud';
    const GLYPHICON_CLOUD_DOWNLOAD = 'glyphicon-cloud-download';
    const GLYPHICON_CLOUD_UPLOAD = 'glyphicon-cloud-upload';
    const GLYPHICON_COG = 'glyphicon-cog';
    const GLYPHICON_COLLAPSE_DOWN = 'glyphicon-collapse-down';
    const GLYPHICON_COLLAPSE_UP = 'glyphicon-collapse-up';
    const GLYPHICON_COMMENT = 'glyphicon-comment';
    const GLYPHICON_COMPRESSED = 'glyphicon-compressed';
    const GLYPHICON_COPYRIGHT_MARK = 'glyphicon-copyright-mark';
    const GLYPHICON_CREDIT_CARD = 'glyphicon-credit-card';
    const GLYPHICON_CUTLERY = 'glyphicon-cutlery';
    const GLYPHICON_DASHBOARD = 'glyphicon-dashboard';
    const GLYPHICON_DOWNLOAD = 'glyphicon-download';
    const GLYPHICON_DOWNLOAD_ALT = 'glyphicon-download-alt';
    const GLYPHICON_EARPHONE = 'glyphicon-earphone';
    const GLYPHICON_EDIT = 'glyphicon-edit';
    const GLYPHICON_EJECT = 'glyphicon-eject';
    const GLYPHICON_ENVELOPE = 'glyphicon-envelope';
    const GLYPHICON_EURO = 'glyphicon-euro';
    const GLYPHICON_EXCLAMATION_SIGN = 'glyphicon-exclamation-sign';
    const GLYPHICON_EXPAND = 'glyphicon-expand';
    const GLYPHICON_EXPORT = 'glyphicon-export';
    const GLYPHICON_EYE_CLOSE = 'glyphicon-eye-close';
    const GLYPHICON_EYE_OPEN = 'glyphicon-eye-open';
    const GLYPHICON_FACETIME_VIDEO = 'glyphicon-facetime-video';
    const GLYPHICON_FAST_BACKWARD = 'glyphicon-fast-backward';
    const GLYPHICON_FAST_FORWARD = 'glyphicon-fast-forward';
    const GLYPHICON_FILE = 'glyphicon-file';
    const GLYPHICON_FILM = 'glyphicon-film';
    const GLYPHICON_FILTER = 'glyphicon-filter';
    const GLYPHICON_FIRE = 'glyphicon-fire';
    const GLYPHICON_FLAG = 'glyphicon-flag';
    const GLYPHICON_FLASH = 'glyphicon-flash';
    const GLYPHICON_FLOPPY_DISK = 'glyphicon-floppy-disk';
    const GLYPHICON_FLOPPY_OPEN = 'glyphicon-floppy-open';
    const GLYPHICON_FLOPPY_REMOVE = 'glyphicon-floppy-remove';
    const GLYPHICON_FLOPPY_SAVE = 'glyphicon-floppy-save';
    const GLYPHICON_FLOPPY_SAVED = 'glyphicon-floppy-saved';
    const GLYPHICON_FOLDER_CLOSE = 'glyphicon-folder-close';
    const GLYPHICON_FOLDER_OPEN = 'glyphicon-folder-open';
    const GLYPHICON_FONT = 'glyphicon-font';
    const GLYPHICON_FORWARD = 'glyphicon-forward';
    const GLYPHICON_FULLSCREEN = 'glyphicon-fullscreen';
    const GLYPHICON_GBP = 'glyphicon-gbp';
    const GLYPHICON_GIFT = 'glyphicon-gift';
    const GLYPHICON_GLASS = 'glyphicon-glass';
    const GLYPHICON_GLOBE = 'glyphicon-globe';
    const GLYPHICON_HAND_DOWN = 'glyphicon-hand-down';
    const GLYPHICON_HAND_LEFT = 'glyphicon-hand-left';
    const GLYPHICON_HAND_RIGHT = 'glyphicon-hand-right';
    const GLYPHICON_HAND_UP = 'glyphicon-hand-up';
    const GLYPHICON_HD_VIDEO = 'glyphicon-hd-video';
    const GLYPHICON_HDD = 'glyphicon-hdd';
    const GLYPHICON_HEADER = 'glyphicon-header';
    const GLYPHICON_HEADPHONES = 'glyphicon-headphones';
    const GLYPHICON_HEART = 'glyphicon-heart';
    const GLYPHICON_HEART_EMPTY = 'glyphicon-heart-empty';
    const GLYPHICON_HOME = 'glyphicon-home';
    const GLYPHICON_IMPORT = 'glyphicon-import';
    const GLYPHICON_INBOX = 'glyphicon-inbox';
    const GLYPHICON_INDENT_LEFT = 'glyphicon-indent-left';
    const GLYPHICON_INDENT_RIGHT = 'glyphicon-indent-right';
    const GLYPHICON_INFO_SIGN = 'glyphicon-info-sign';
    const GLYPHICON_ITALIC = 'glyphicon-italic';
    const GLYPHICON_LEAF = 'glyphicon-leaf';
    const GLYPHICON_LINK = 'glyphicon-link';
    const GLYPHICON_LIST = 'glyphicon-list';
    const GLYPHICON_LIST_ALT = 'glyphicon-list-alt';
    const GLYPHICON_LOCK = 'glyphicon-lock';
    const GLYPHICON_LOG_IN = 'glyphicon-log-in';
    const GLYPHICON_LOG_OUT = 'glyphicon-log-out';
    const GLYPHICON_MAGNET = 'glyphicon-magnet';
    const GLYPHICON_MAP_MARKER = 'glyphicon-map-marker';
    const GLYPHICON_MINUS = 'glyphicon-minus';
    const GLYPHICON_MINUS_SIGN = 'glyphicon-minus-sign';
    const GLYPHICON_MOVE = 'glyphicon-move';
    const GLYPHICON_MUSIC = 'glyphicon-music';
    const GLYPHICON_NEW_WINDOW = 'glyphicon-new-window';
    const GLYPHICON_OFF = 'glyphicon-off';
    const GLYPHICON_OK = 'glyphicon-ok';
    const GLYPHICON_OK_CIRCLE = 'glyphicon-ok-circle';
    const GLYPHICON_OK_SIGN = 'glyphicon-ok-sign';
    const GLYPHICON_OPEN = 'glyphicon-open';
    const GLYPHICON_PAPERCLIP = 'glyphicon-paperclip';
    const GLYPHICON_PAUSE = 'glyphicon-pause';
    const GLYPHICON_PENCIL = 'glyphicon-pencil';
    const GLYPHICON_PHONE = 'glyphicon-phone';
    const GLYPHICON_PHONE_ALT = 'glyphicon-phone-alt';
    const GLYPHICON_PICTURE = 'glyphicon-picture';
    const GLYPHICON_PLANE = 'glyphicon-plane';
    const GLYPHICON_PLAY = 'glyphicon-play';
    const GLYPHICON_PLAY_CIRCLE = 'glyphicon-play-circle';
    const GLYPHICON_PLUS = 'glyphicon-plus';
    const GLYPHICON_PLUS_SIGN = 'glyphicon-plus-sign';
    const GLYPHICON_PRINT = 'glyphicon-print';
    const GLYPHICON_PUSHPIN = 'glyphicon-pushpin';
    const GLYPHICON_QRCODE = 'glyphicon-qrcode';
    const GLYPHICON_QUESTION_SIGN = 'glyphicon-question-sign';
    const GLYPHICON_RANDOM = 'glyphicon-random';
    const GLYPHICON_RECORD = 'glyphicon-record';
    const GLYPHICON_REFRESH = 'glyphicon-refresh';
    const GLYPHICON_REGISTRATION_MARK = 'glyphicon-registration-mark';
    const GLYPHICON_REMOVE = 'glyphicon-remove';
    const GLYPHICON_REMOVE_CIRCLE = 'glyphicon-remove-circle';
    const GLYPHICON_REMOVE_SIGN = 'glyphicon-remove-sign';
    const GLYPHICON_REPEAT = 'glyphicon-repeat';
    const GLYPHICON_RESIZE_FULL = 'glyphicon-resize-full';
    const GLYPHICON_RESIZE_HORIZONTAL = 'glyphicon-resize-horizontal';
    const GLYPHICON_RESIZE_SMALL = 'glyphicon-resize-small';
    const GLYPHICON_RESIZE_VERTICAL = 'glyphicon-resize-vertical';
    const GLYPHICON_RETWEET = 'glyphicon-retweet';
    const GLYPHICON_ROAD = 'glyphicon-road';
    const GLYPHICON_SAVE = 'glyphicon-save';
    const GLYPHICON_SAVED = 'glyphicon-saved';
    const GLYPHICON_SCREENSHOT = 'glyphicon-screenshot';
    const GLYPHICON_SD_VIDEO = 'glyphicon-sd-video';
    const GLYPHICON_SEARCH = 'glyphicon-search';
    const GLYPHICON_SEND = 'glyphicon-send';
    const GLYPHICON_SHARE = 'glyphicon-share';
    const GLYPHICON_SHARE_ALT = 'glyphicon-share-alt';
    const GLYPHICON_SHOPPING_CART = 'glyphicon-shopping-cart';
    const GLYPHICON_SIGNAL = 'glyphicon-signal';
    const GLYPHICON_SORT = 'glyphicon-sort';
    const GLYPHICON_SORT_BY_ALPHABET = 'glyphicon-sort-by-alphabet';
    const GLYPHICON_SORT_BY_ALPHABET_ALT = 'glyphicon-sort-by-alphabet-alt';
    const GLYPHICON_SORT_BY_ATTRIBUTES = 'glyphicon-sort-by-attributes';
    const GLYPHICON_SORT_BY_ATTRIBUTES_ALT = 'glyphicon-sort-by-attributes-alt';
    const GLYPHICON_SORT_BY_ORDER = 'glyphicon-sort-by-order';
    const GLYPHICON_SORT_BY_ORDER_ALT = 'glyphicon-sort-by-order-alt';
    const GLYPHICON_SOUND_5_1 = 'glyphicon-sound-5-1';
    const GLYPHICON_SOUND_6_1 = 'glyphicon-sound-6-1';
    const GLYPHICON_SOUND_7_1 = 'glyphicon-sound-7-1';
    const GLYPHICON_SOUND_DOLBY = 'glyphicon-sound-dolby';
    const GLYPHICON_SOUND_STEREO = 'glyphicon-sound-stereo';
    const GLYPHICON_STAR = 'glyphicon-star';
    const GLYPHICON_STAR_EMPTY = 'glyphicon-star-empty';
    const GLYPHICON_STATS = 'glyphicon-stats';
    const GLYPHICON_STEP_BACKWARD = 'glyphicon-step-backward';
    const GLYPHICON_STEP_FORWARD = 'glyphicon-step-forward';
    const GLYPHICON_STOP = 'glyphicon-stop';
    const GLYPHICON_SUBTITLES = 'glyphicon-subtitles';
    const GLYPHICON_TAG = 'glyphicon-tag';
    const GLYPHICON_TAGS = 'glyphicon-tags';
    const GLYPHICON_TASKS = 'glyphicon-tasks';
    const GLYPHICON_TEXT_HEIGHT = 'glyphicon-text-height';
    const GLYPHICON_TEXT_WIDTH = 'glyphicon-text-width';
    const GLYPHICON_TH = 'glyphicon-th';
    const GLYPHICON_TH_LARGE = 'glyphicon-th-large';
    const GLYPHICON_TH_LIST = 'glyphicon-th-list';
    const GLYPHICON_THUMBS_DOWN = 'glyphicon-thumbs-down';
    const GLYPHICON_THUMBS_UP = 'glyphicon-thumbs-up';
    const GLYPHICON_TIME = 'glyphicon-time';
    const GLYPHICON_TINT = 'glyphicon-tint';
    const GLYPHICON_TOWER = 'glyphicon-tower';
    const GLYPHICON_TRANSFER = 'glyphicon-transfer';
    const GLYPHICON_TRASH = 'glyphicon-trash';
    const GLYPHICON_TREE_CONIFER = 'glyphicon-tree-conifer';
    const GLYPHICON_TREE_DECIDUOUS = 'glyphicon-tree-deciduous';
    const GLYPHICON_UNCHECKED = 'glyphicon-unchecked';
    const GLYPHICON_UPLOAD = 'glyphicon-upload';
    const GLYPHICON_USD = 'glyphicon-usd';
    const GLYPHICON_USER = 'glyphicon-user';
    const GLYPHICON_VOLUME_DOWN = 'glyphicon-volume-down';
    const GLYPHICON_VOLUME_OFF = 'glyphicon-volume-off';
    const GLYPHICON_VOLUME_UP = 'glyphicon-volume-up';
    const GLYPHICON_WARNING_SIGN = 'glyphicon-warning-sign';
    const GLYPHICON_WRENCH = 'glyphicon-wrench';
    const GLYPHICON_ZOOM_IN = 'glyphicon-zoom-in';
    const GLYPHICON_ZOOM_OUT = 'glyphicon-zoom-out';
    // Default close text.
    const CLOSE_TEXT = '&times;';
    /**
     * @var string the CSS class for displaying error summaries.
     */
    public static $errorSummaryCss = 'alert alert-block alert-danger';

    public static $formLayoutHorizontalLabelClass = 'col-lg-2';
    public static $formLayoutHorizontalControlClass = 'col-lg-10';
    public static $formLayoutHorizontalOffsetClass = 'col-lg-offset-2';

    //
    // BASE CSS
    // --------------------------------------------------

    // Typography
    // http://twitter.github.io/bootstrap/2.3.2/base-css.html#typography
    // --------------------------------------------------

    /**
     * Generates a paragraph that stands out.
     * @param string $text the lead text.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated paragraph.
     */
    public static function lead($text, $htmlOptions = array())
    {
        static::addCssClass('lead', $htmlOptions);
        return static::tag('p', $htmlOptions, $text);
    }

    /**
     * Appends new class names to the given options..
     * @param mixed $className the class(es) to append.
     * @param array $htmlOptions the options.
     * @return array the options.
     */
    public static function addCssClass($className, &$htmlOptions)
    {
        // Always operate on arrays
        if (is_string($className)) {
            $className = explode(' ', $className);
        }
        if (isset($htmlOptions['class'])) {
            $classes = array_filter(explode(' ', $htmlOptions['class']));
            foreach ($className as $class) {
                $class = trim($class);
                // Don't add the class if it already exists
                if (array_search($class, $classes) === false) {
                    $classes[] = $class;
                }
            }
            $className = $classes;
        }
        $htmlOptions['class'] = implode(' ', $className);
    }

    /**
     * Generates an HTML element.
     * @param string $tag the tag name.
     * @param array $htmlOptions the element attributes.
     * @param mixed $content the content to be enclosed between open and close element tags.
     * @param boolean $closeTag whether to generate the close tag.
     * @return string the generated HTML element tag.
     */
    public static function tag($tag, $htmlOptions = array(), $content = false, $closeTag = true)
    {
        static::addSpanClass($htmlOptions);
        static::addPullClass($htmlOptions);
        static::addTextAlignClass($htmlOptions);
        return parent::tag($tag, $htmlOptions, $content, $closeTag);
    }

    /**
     * Adds the grid span class to the given options is applicable.
     * @param array $htmlOptions the HTML attributes.
     */
    protected static function addSpanClass($htmlOptions = array())
    {
        $span = BsArray::popValue('span', $htmlOptions);
        if (!empty($span)) {
            static::addCssClass('span' . $span, $htmlOptions);
        }
    }

    /**
     * Adds the pull class to the given options is applicable.
     * @param array $htmlOptions the HTML attributes.
     */
    protected static function addPullClass(&$htmlOptions)
    {
        $pull = BsArray::popValue('pull', $htmlOptions);
        if (!empty($pull)) {
            static::addCssClass('pull-' . $pull, $htmlOptions);
        }
    }

    /**
     * Adds the text align class to the given options if applicable.
     * @param array $htmlOptions the HTML attributes.
     */
    protected static function addTextAlignClass(&$htmlOptions)
    {
        $align = BsArray::popValue('textAlign', $htmlOptions);
        if (!empty($align)) {
            static::addCssClass('text-' . $align, $htmlOptions);
        }
    }

    /**
     * Generates small text.
     * @param string $text the text to style.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated text.
     */
    public static function small($text, $htmlOptions = array())
    {
        return static::tag('small', $htmlOptions, $text);
    }

    /**
     * Generates bold text.
     * @param string $text the text to style.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated text.
     */
    public static function bold($text, $htmlOptions = array())
    {
        return static::tag('strong', $htmlOptions, $text);
    }

    /**
     * Generates italic text.
     * @param string $text the text to style.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated text.
     */
    public static function italics($text, $htmlOptions = array())
    {
        return static::tag('em', $htmlOptions, $text);
    }

    /**
     * Generates an emphasized text.
     * @param string $text the text to emphasize.
     * @param array $htmlOptions additional HTML attributes.
     * @param string $tag the HTML tag.
     * @return string the generated text.
     */
    public static function em($text, $htmlOptions = array(), $tag = 'p')
    {
        $color = BsArray::popValue('color', $htmlOptions);
        if (BsArray::popValue('muted', $htmlOptions, false)) {
            static::addCssClass('muted', $htmlOptions);
        } else {
            if (!empty($color)) {
                static::addCssClass('text-' . $color, $htmlOptions);
            }
        }
        return static::tag($tag, $htmlOptions, $text);
    }

    /**
     * Generates a muted text block.
     * @param string $text the text.
     * @param array $htmlOptions additional HTML attributes.
     * @param string $tag the HTML tag.
     * @return string the generated text block.
     */
    public static function emphasis($text, $htmlOptions = array(), $tag = 'p')
    {
        $color = BsArray::popValue('color', $htmlOptions);
        if (!empty($color)) {
            static::addCssClass('text-' . $color, $htmlOptions);
        }
        return parent::tag($tag, $htmlOptions, $text);
    }

    /**
     * Generates a muted span.
     * @param string $text the text.
     * @param array $htmlOptions additional HTML attributes.
     * @param string $tag the HTML tag.
     * @return string the generated span.
     */
    public static function mutedSpan($text, $htmlOptions = array())
    {

        return static::textMuted($text, $htmlOptions, 'span');
    }

    // Code
    // http://twitter.github.io/bootstrap/2.3.2/base-css.html#code
    // --------------------------------------------------

    /**
     * Generates an abbreviation with a help text.
     * @param string $text the abbreviation.
     * @param string $word the word the abbreviation is for.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated abbreviation.
     */
    public static function abbr($text, $word = '', $htmlOptions = array())
    {
        $htmlOptions['title'] = $word;
        $type = BsArray::popValue('type', $htmlOptions, false);
        if (!empty($type) && $type === BsHtml::TEXT_ABBR_INITIALISM) {
            static::addCssClass('initialism', $htmlOptions);
        }
        return static::tag('abbr', $htmlOptions, $text);
    }

    /**
     * Generates an address block.
     * @param string $quote the address text.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated block.
     */
    public static function address($text, $htmlOptions = array())
    {
        return static::tag('address', $htmlOptions, $text);
    }

    /**
     * Generates a quote.
     * @param string $text the quoted text.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated quote.
     */
    public static function quote($text, $htmlOptions = array())
    {
        $paragraphOptions = BsArray::popValue('paragraphOptions', $htmlOptions, array());
        $small = BsArray::popValue('small', $htmlOptions);
        $smallOptions = BsArray::popValue('smallOptions', $htmlOptions, array());
        $cite = BsArray::popValue('cite', $htmlOptions);
        $citeOptions = BsArray::popValue('citeOptions', $htmlOptions, array());
        $cite = isset($cite) ? ' ' . static::tag('cite', $citeOptions, $cite) : '';
        $source = isset($small) ? static::tag('small', $smallOptions, $small . $cite) : '';
        $text = static::tag('p', $paragraphOptions, $text) . $source;
        return static::tag('blockquote', $htmlOptions, $text);
    }

    /**
     * Generates inline code.
     * @param string $code the code.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated code.
     */
    public static function code($code, $htmlOptions = array())
    {
        return static::tag('code', $htmlOptions, $code);
    }

    // Tables
    // http://twitter.github.io/bootstrap/2.3.2/base-css.html#forms
    // --------------------------------------------------

    // todo: create table methods here.

    // Forms
    // http://twitter.github.io/bootstrap/2.3.2/base-css.html#tables
    // --------------------------------------------------

    /**
     * Generates a code block.
     * @param string $code the code.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated block.
     */
    public static function codeBlock($code, $htmlOptions = array())
    {
        return static::tag('pre', $htmlOptions, $code);
    }

    /**
     * Generates a stateful form tag.
     * @param string $layout the form layout.
     * @param mixed $action the form action URL.
     * @param string $method form method (e.g. post, get).
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated form tag.
     */
    public static function statefulFormBs(
        $layout = self::FORM_LAYOUT_VERTICAL,
        $action = '',
        $method = 'post',
        $htmlOptions = array()
    )
    {
        return static::formBs($layout, $action, $method, $htmlOptions)
        . static::tag('div', array('style' => 'display: none'), parent::pageStateField(''));
    }

    /**
     * Generates a form tag.
     * @param string $layout the form layout.
     * @param string $action the form action URL.
     * @param string $method form method (e.g. post, get).
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated tag.
     */
    public static function formBs(
        $layout = self::FORM_LAYOUT_VERTICAL,
        $action = '',
        $method = 'post',
        $htmlOptions = array()
    )
    {
        return static::beginFormBs($layout, $action, $method, $htmlOptions);
    }

    /**
     * Generates an open form tag.
     * @param string $layout the form layout.
     * @param string $action the form action URL.
     * @param string $method form method (e.g. post, get).
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated tag.
     */
    public static function beginFormBs(
        $layout = self::FORM_LAYOUT_VERTICAL,
        $action = '',
        $method = 'post',
        $htmlOptions = array()
    )
    {
        if (!empty($layout)) {
            static::addCssClass('form-' . $layout, $htmlOptions);
        }
        return parent::beginForm($action, $method, $htmlOptions);
    }

    /**
     * Generates a control group with a text field.
     * @param string $name the input name.
     * @param string $value the input value.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     * @see static::controlGroup
     */
    public static function textFieldControlGroup($name, $value = '', $htmlOptions = array())
    {
        return static::controlGroup(self::INPUT_TYPE_TEXT, $name, $value, $htmlOptions);
    }

    /**
     * Generates a form control group.
     * @param string $type the input type.
     * @param string $name the input name.
     * @param string $value the input value.
     * @param array $htmlOptions additional HTML attributes.
     * @param array $data data for multiple select inputs.
     * @return string the generated control group.
     */
    public static function controlGroup($type, $name, $value = '', $htmlOptions = array(), $data = array())
    {
        $color = BsArray::popValue('color', $htmlOptions);
        $groupOptions = BsArray::popValue('groupOptions', $htmlOptions, array());
        $controlOptions = BsArray::popValue('controlOptions', $htmlOptions, array());
        $label = BsArray::popValue('label', $htmlOptions);
        $labelOptions = BsArray::popValue('labelOptions', $htmlOptions, array());
        $layout = BsArray::popValue('formLayout', $htmlOptions, array());

        if (in_array($type, array(self::INPUT_TYPE_CHECKBOX, self::INPUT_TYPE_RADIOBUTTON))) {
            $htmlOptions['label'] = $label;
            $htmlOptions['labelOptions'] = $labelOptions;
            $label = false;
        }

        $help = BsArray::popValue('help', $htmlOptions, '');
        $helpOptions = BsArray::popValue('helpOptions', $htmlOptions, array());
        if (!empty($help)) {
            $help = static::inputHelp($help, $helpOptions);
        }

        $input = isset($htmlOptions['input'])
            ? $htmlOptions['input']
            : static::createInput($type, $name, $value, $htmlOptions, $data);

        static::addCssClass('form-group', $groupOptions);

        if (!empty($layout)) {
            if ($layout === BsHtml::FORM_LAYOUT_HORIZONTAL) {
                $controlClass = BsArray::popValue('class', $controlOptions, self::$formLayoutHorizontalControlClass);
                static::addCssClass($controlClass, $controlOptions);
            }
            $labelOptions = static::setLabelOptionsByLayout($layout, $labelOptions);
        }

        if (!empty($color)) {
            static::addCssClass($color, $groupOptions);
        }
        static::addCssClass('control-label', $labelOptions);
        $output = static::openTag('div', $groupOptions);
        if ($label !== false) {
            $output .= parent::label($label, $name, $labelOptions);
        }
        $output .= static::controls($input . $help, $controlOptions);
        $output .= '</div>';
        return $output;
    }

    /**
     * Generates a help text for an input field.
     * @param string $help the help text.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated help text.
     */
    protected static function inputHelp($help, $htmlOptions)
    {
        $type = BsArray::popValue('type', $htmlOptions, self::HELP_TYPE_INLINE);
        return $type === self::HELP_TYPE_INLINE
            ? static::help($help, $htmlOptions)
            : static::helpBlock($help, $htmlOptions);
    }

    /**
     * Generates a help block.
     * @param string $text the help text.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated block.
     */
    public static function helpBlock($text, $htmlOptions = array())
    {
        $htmlOptions['type'] = self::HELP_TYPE_BLOCK;
        return static::help($text, $htmlOptions);
    }

    /**
     * Generates a help text.
     * @param string $text the help text.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated text.
     */
    public static function help($text, $htmlOptions = array())
    {
        $type = BsArray::popValue('type', $htmlOptions, self::HELP_TYPE_INLINE);
        static::addCssClass('help-' . $type, $htmlOptions);
        return static::tag($type === self::HELP_TYPE_INLINE ? 'span' : 'p', $htmlOptions, $text);
    }

    /**
     * Creates a form input of the given type.
     * @param string $type the input type.
     * @param string $name the input name.
     * @param string $value the input value.
     * @param array $htmlOptions additional HTML attributes.
     * @param array $data data for multiple select inputs.
     * @return string the input.
     * @throws CException if the input type is invalid.
     */
    protected static function createInput($type, $name, $value, $htmlOptions = array(), $data = array())
    {
        switch ($type) {
            case self::INPUT_TYPE_TEXT:
                return static::textField($name, $value, $htmlOptions);
			case self::INPUT_TYPE_TIME:
				return static::timeField($name, $value, $htmlOptions);
            case self::INPUT_TYPE_PASSWORD:
                return static::passwordField($name, $value, $htmlOptions);
            case self::INPUT_TYPE_URL:
                return static::urlField($name, $value, $htmlOptions);
            case self::INPUT_TYPE_EMAIL:
                return static::emailField($name, $value, $htmlOptions);
            case self::INPUT_TYPE_NUMBER:
                return static::numberField($name, $value, $htmlOptions);
            case self::INPUT_TYPE_TEL:
                return static::telField($name, $value, $htmlOptions);
            case self::INPUT_TYPE_RANGE:
                return static::rangeField($name, $value, $htmlOptions);
            case self::INPUT_TYPE_DATE:
                return static::dateField($name, $value, $htmlOptions);
            case self::INPUT_TYPE_TEXTAREA:
                return static::textArea($name, $value, $htmlOptions);
            case self::INPUT_TYPE_FILE:
                return static::fileField($name, $value, $htmlOptions);
            case self::INPUT_TYPE_RADIOBUTTON:
                return static::radioButton($name, $value, $htmlOptions);
            case self::INPUT_TYPE_CHECKBOX:
                return static::checkBox($name, $value, $htmlOptions);
            case self::INPUT_TYPE_DROPDOWNLIST:
                return static::dropDownList($name, $value, $data, $htmlOptions);
            case self::INPUT_TYPE_LISTBOX:
                return static::listBox($name, $value, $data, $htmlOptions);
            case self::INPUT_TYPE_CHECKBOXLIST:
                return static::checkBoxList($name, $value, $data, $htmlOptions);
            case self::INPUT_TYPE_INLINECHECKBOXLIST:
                return static::inlineCheckBoxList($name, $value, $data, $htmlOptions);
            case self::INPUT_TYPE_RADIOBUTTONLIST:
                return static::radioButtonList($name, $value, $data, $htmlOptions);
            case self::INPUT_TYPE_INLINERADIOBUTTONLIST:
                return static::inlineRadioButtonList($name, $value, $data, $htmlOptions);
            case self::INPUT_TYPE_UNEDITABLE:
                return static::uneditableField($value, $htmlOptions);
            case self::INPUT_TYPE_SEARCH:
                return static::searchQueryField($name, $value, $htmlOptions);
            default:
                throw new CException('Invalid input type "' . $type . '".');
        }
    }

    /**
     * Generates a text field input.
     * @param string $name the input name.
     * @param string $value the input value.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated input field.
     * @see static::textInputField
     */
    public static function textField($name, $value = '', $htmlOptions = array())
    {
        return static::textInputField('text', $name, $value, $htmlOptions);
    }

    /**
     * Generates a password field input.
     * @param string $name the input name.
     * @param string $value the input value.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated input field.
     * @see static::textInputField
     */
    public static function passwordField($name, $value = '', $htmlOptions = array())
    {
        return static::textInputField('password', $name, $value, $htmlOptions);
    }

    /**
     * Generates an input HTML tag.
     * This method generates an input HTML tag based on the given input name and value.
     * @param string $type the input type.
     * @param string $name the input name.
     * @param string $value the input value.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated input tag.
     */
    protected static function textInputField($type, $name, $value, $htmlOptions)
    {
        parent::clientChange('change', $htmlOptions);

        $htmlOptions = static::normalizeInputOptions($htmlOptions);

        $addOnClasses = static::getAddOnClasses($htmlOptions);
        $addOnOptions = BsArray::popValue('addOnOptions', $htmlOptions, array());
        static::addCssClass($addOnClasses, $addOnOptions);
        static::addCssClass('form-control', $htmlOptions);

        $prepend = BsArray::popValue('prepend', $htmlOptions, '');
        $prependOptions = BsArray::popValue('prependOptions', $htmlOptions, array());
        if (!empty($prepend)) {
            $prepend = static::inputAddOn($prepend, $prependOptions);
        }

        $append = BsArray::popValue('append', $htmlOptions, '');
        $appendOptions = BsArray::popValue('appendOptions', $htmlOptions, array());
        if (!empty($append)) {
            $append = static::inputAddOn($append, $appendOptions);
        }

        $output = '';
        if (!empty($addOnClasses)) {
            $output .= static::openTag('div', $addOnOptions);
        }
        $output .= $prepend . parent::inputField($type, $name, $value, $htmlOptions) . $append;
        if (!empty($addOnClasses)) {
            $output .= '</div>';
        }
        return $output;
    }

    /**
     * Normalizes input options.
     * @param array $options the options.
     * @return array the normalized options.
     */
    protected static function normalizeInputOptions($options)
    {
        static::addSpanClass($options);
        static::addTextAlignClass($options);
        $size = BsArray::popValue('size', $options);
        if (BsArray::popValue('block', $options, false)) {
            static::addCssClass('input-block-level', $options);
        } else {
            if (!empty($size)) {
                static::addCssClass('input-' . $size, $options);
            }
        }
        return $options;
    }

    /**
     * Returns the add-on classes based on the given options.
     * @param array $htmlOptions the options.
     * @return string the classes.
     */
    protected static function getAddOnClasses($htmlOptions)
    {
        $classes = array();
        if (BsArray::getValue('append', $htmlOptions)) {
            $classes[] = 'input-group';
        }
        if (BsArray::getValue('prepend', $htmlOptions)) {
            $classes[] = 'input-group';
        }
        return !empty($classes) ? implode(' ', $classes) : $classes;
    }

    /**
     * Generates an add-on for an input field.
     * @param string $addOn the add-on.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated add-on.
     */
    protected static function inputAddOn($addOn, $htmlOptions)
    {
        $addOnOptions = BsArray::popValue('addOnOptions', $htmlOptions, array());
        static::addCssClass('input-group-addon', $addOnOptions);
        return strpos($addOn, 'btn') === false // buttons should not be wrapped in a span
            ? static::tag('span', $addOnOptions, $addOn)
            : $addOn;
    }

    /**
     * Generates an open HTML element.
     * @param string $tag the tag name.
     * @param array $htmlOptions the element attributes.
     * @return string the generated HTML element tag.
     */
    public static function openTag($tag, $htmlOptions = array())
    {
        return static::tag($tag, $htmlOptions, false, false);
    }

    /**
     * Generates an url field input.
     * @param string $name the input name.
     * @param string $value the input value.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated input field.
     * @see static::textInputField
     */
    public static function urlField($name, $value = '', $htmlOptions = array())
    {
        return static::textInputField('url', $name, $value, $htmlOptions);
    }

    /**
     * Generates an email field input.
     * @param string $name the input name.
     * @param string $value the input value.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated input field.
     * @see static::textInputField
     */
    public static function emailField($name, $value = '', $htmlOptions = array())
    {
        return static::textInputField('email', $name, $value, $htmlOptions);
    }

    /**
     * Generates a number field input.
     * @param string $name the input name.
     * @param string $value the input value.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated input field.
     * @see static::textInputField
     */
    public static function numberField($name, $value = '', $htmlOptions = array())
    {
        return static::textInputField('number', $name, $value, $htmlOptions);
    }

    /**
     * Generates a range field input.
     * @param string $name the input name.
     * @param string $value the input value.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated input field.
     * @see static::textInputField
     */
    public static function rangeField($name, $value = '', $htmlOptions = array())
    {
        return static::textInputField('range', $name, $value, $htmlOptions);
    }

    /**
     * Generates a date field input.
     * @param string $name the input name.
     * @param string $value the input value.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated input field.
     * @see static::textInputField
     */
    public static function dateField($name, $value = '', $htmlOptions = array())
    {
        return static::textInputField('date', $name, $value, $htmlOptions);
    }

    /**
     * Generates a telephone field input.
     * @param string $name the input name.
     * @param string $value the input value.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated input field.
     * @see static::textInputField
     */
    public static function telField($name, $value = '', $htmlOptions = array())
    {
        return static::textInputField('tel', $name, $value, $htmlOptions);
    }

    /**
     * Generates a text area input.
     * @param string $name the input name.
     * @param string $value the input value.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated text area.
     */
    public static function textArea($name, $value = '', $htmlOptions = array())
    {
        $htmlOptions = static::normalizeInputOptions($htmlOptions);
        static::addCssClass('form-control', $htmlOptions);
        return parent::textArea($name, $value, $htmlOptions);
    }

    /**
     * Generates a file field input.
     * @param string $name the input name.
     * @param string $value the input value.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated input field.
     * @see CHtml::fileField
     */
    public static function fileField($name, $value = '', $htmlOptions = array())
    {
        return parent::fileField($name, $value, $htmlOptions);
    }

    /**
     * Generates a list box.
     * @param string $name the input name.
     * @param mixed $select the selected value(s).
     * @param array $data data for generating the list options (value=>display).
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated list box
     */
    public static function listBox($name, $select, $data, $htmlOptions = array())
    {
        if (isset($htmlOptions['multiple'])) {
            if (substr($name, -2) !== '[]') {
                $name .= '[]';
            }
        }
        BsArray::defaultValue('displaySize', 4, $htmlOptions);
        return static::dropDownList($name, $select, $data, $htmlOptions);
    }

    /**
     * Generates a drop down list.
     * @param string $name the input name.
     * @param string $select the selected value.
     * @param array $data data for generating the list options (value=>display).
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated drop down list.
     */
    public static function dropDownList($name, $select, $data, $htmlOptions = array())
    {
        static::addCssClass('form-control', $htmlOptions);
        return parent::dropDownList($name, $select, $data, $htmlOptions);
    }

    /**
     * Generates an inline check box list.
     * @param string $name name of the check box list.
     * @param mixed $select selection of the check boxes.
     * @param array $data $data value-label pairs used to generate the check box list.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated list.
     */
    public static function inlineCheckBoxList($name, $select, $data, $htmlOptions = array())
    {
        $htmlOptions['inline'] = true;
        return static::checkBoxList($name, $select, $data, $htmlOptions);
    }

    /**
     * Generates a check box list.
     * @param string $name name of the check box list.
     * @param mixed $select selection of the check boxes.
     * @param array $data $data value-label pairs used to generate the check box list.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated list.
     */
    public static function checkBoxList($name, $select, $data, $htmlOptions = array())
    {
        $inline = BsArray::popValue('inline', $htmlOptions, false);
        $separator = BsArray::popValue('separator', $htmlOptions, "\n");
        $container = BsArray::popValue('container', $htmlOptions, 'span');
        $containerOptions = BsArray::popValue('containerOptions', $htmlOptions, array());
        $labelOptions = BsArray::popValue('labelOptions', $htmlOptions, array());

        if($inline) {
            static::addCssClass('checkbox-inline', $labelOptions);
            $template = BsArray::popValue('template', $htmlOptions, '{beginLabel}{input}{labelTitle}{endLabel}');
        } else {
            $template = BsArray::popValue('template', $htmlOptions, parent::tag(
                'div',
                array('class'=>'checkbox'),
                '{beginLabel}{input}{labelTitle}{endLabel}'
            ));
        }

        if (substr($name, -2) !== '[]') {
            $name .= '[]';
        }

        $checkAll = BsArray::popValue('checkAll', $htmlOptions);
        $checkAllLast = BsArray::popValue('checkAllLast', $htmlOptions);
        if ($checkAll !== null) {
            $checkAllLabel = $checkAll;
            $checkAllLast = $checkAllLast !== null;
        }

        $items = array();
        $baseID = $containerOptions['id'] = BsArray::popValue('baseID', $htmlOptions, parent::getIdByName($name));
        $id = 0;
        $checkAll = true;

        foreach ($data as $value => $labelTitle) {
            $checked = !is_array($select) && !strcmp($value, $select) || is_array($select) && in_array($value, $select);
            $checkAll = $checkAll && $checked;
            $htmlOptions['value'] = $value;
            $htmlOptions['id'] = $baseID . '_' . $id++;
            $option = static::checkBox($name, $checked, $htmlOptions);
            $beginLabel = static::openTag('label', $labelOptions);
            $label = static::label($labelTitle, $htmlOptions['id'], $labelOptions);
            $endLabel=static::closeTag('label');
            $items[] = strtr($template, array(
                '{input}' => $option,
                '{beginLabel}' => $beginLabel,
                '{label}' => $label,
                '{labelTitle}' => $labelTitle,
                '{endLabel}' => $endLabel,
            ));
        }

        if (isset($checkAllLabel)) {
            $htmlOptions['value'] = 1;
            $htmlOptions['id'] = $id = $baseID . '_all';
            $option = static::checkBox($id, $checkAll, $htmlOptions);
            $beginLabel = static::openTag('label', $labelOptions);
            $label = static::label($checkAllLabel, $id, $labelOptions);
            $endLabel = static::closeTag('label');
            $item = strtr($template, array(
                '{input}' => $option,
                '{beginLabel}' => $beginLabel,
                '{label}' => $label,
                '{labelTitle}' => $checkAllLabel,
                '{endLabel}' => $endLabel,
            ));
            if ($checkAllLast) {
                $items[] = $item;
            } else {
                array_unshift($items, $item);
            }
            $name = strtr($name, array('[' => '\\[', ']' => '\\]'));
            $js = <<<EOD
jQuery('#$id').click(function() {
	jQuery("input[name='$name']").prop('checked', this.checked);
});
jQuery("input[name='$name']").click(function() {
	jQuery('#$id').prop('checked', !jQuery("input[name='$name']:not(:checked)").length);
});
jQuery('#$id').prop('checked', !jQuery("input[name='$name']:not(:checked)").length);
EOD;
            $cs = Yii::app()->getClientScript();
            $cs->registerCoreScript('jquery');
            $cs->registerScript($id, $js);
        }

        $inputs = implode($separator, $items);
        return !empty($container) ? static::tag($container, $containerOptions, $inputs) : $inputs;
    }

    /**
     * Generates a check box.
     * @param string $name the input name.
     * @param boolean $checked whether the check box is checked.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated check box.
     */
    public static function checkBox($name, $checked = false, $htmlOptions = array())
    {
        $label = BsArray::popValue('label', $htmlOptions, false);
        $labelOptions = BsArray::popValue('labelOptions', $htmlOptions, array());
        static::addCssClass('checkbox', $labelOptions);
        $checkBox = parent::checkBox($name, $checked, $htmlOptions);
        return $label !== false ? static::tag('label', $labelOptions, $checkBox . ' ' . $label) : $checkBox;
    }

    /**
     * Generates an inline radio button list.
     * @param string $name name of the radio button list.
     * @param mixed $select selection of the radio buttons.
     * @param array $data $data value-label pairs used to generate the radio button list.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated list.
     */
    public static function inlineRadioButtonList($name, $select, $data, $htmlOptions = array())
    {
        $htmlOptions['inline'] = true;
        return static::radioButtonList($name, $select, $data, $htmlOptions);
    }

    /**
     * Generates a radio button list.
     * @param string $name name of the radio button list.
     * @param mixed $select selection of the radio buttons.
     * @param array $data $data value-label pairs used to generate the radio button list.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated list.
     */
    public static function radioButtonList($name, $select, $data, $htmlOptions = array())
    {
        $inline = BsArray::popValue('inline', $htmlOptions, false);
        $separator = BsArray::popValue('separator', $htmlOptions, "\n");
        $container = BsArray::popValue('container', $htmlOptions);
        $containerOptions = BsArray::popValue('containerOptions', $htmlOptions, array());
        $labelOptions = BsArray::popValue('labelOptions', $htmlOptions, array());

        if($inline) {
            static::addCssClass('radio-inline', $labelOptions);
            $template = BsArray::popValue('template', $htmlOptions, '{beginLabel}{input}{labelTitle}{endLabel}');
        } else {
            $template = BsArray::popValue('template', $htmlOptions, parent::tag(
                'div',
                array('class'=>'radio'),
                '{beginLabel}{input}{labelTitle}{endLabel}'
            ));
        }

        $items = array();
        $baseID = $containerOptions['id'] = BsArray::popValue('baseID', $htmlOptions, parent::getIdByName($name));

        $id = 0;
        foreach ($data as $value => $labelTitle) {
            $checked = !strcmp($value, $select);
            $htmlOptions['value'] = $value;
            $htmlOptions['id'] = $baseID . '_' . $id++;
            $option = static::radioButton($name, $checked, $htmlOptions);
            $beginLabel = static::openTag('label', $labelOptions);
            $label = static::label($labelTitle, $htmlOptions['id'], $labelOptions);
            $endLabel = static::closeTag('label');
            $items[] = strtr($template, array(
                '{input}'=> $option,
                '{beginLabel}' => $beginLabel,
                '{label}' => $label,
                '{labelTitle}' => $labelTitle,
                '{endLabel}' => $endLabel,
            ));
        }

        $inputs = implode($separator, $items);
        return !empty($container) ? static::tag($container, $containerOptions, $inputs) : $inputs;
    }

    /**
     * Generates a radio button.
     * @param string $name the input name.
     * @param boolean $checked whether the radio button is checked.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated radio button.
     */
    public static function radioButton($name, $checked = false, $htmlOptions = array())
    {
        $label = BsArray::popValue('label', $htmlOptions, false);
        $labelOptions = BsArray::popValue('labelOptions', $htmlOptions, array());
        static::addCssClass('radio', $labelOptions);
        $radioButton = parent::radioButton($name, $checked, $htmlOptions);
        return $label !== false ? static::tag('label', $labelOptions, $radioButton . ' ' . $label) : $radioButton;
    }

    /**
     * Generates an uneditable input.
     * @param string $value the value.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated input.
     */
    public static function uneditableField($value, $htmlOptions = array())
    {
        static::addCssClass('uneditable-input', $htmlOptions);
        $htmlOptions = static::normalizeInputOptions($htmlOptions);
        return static::tag('span', $htmlOptions, $value);
    }

    /**
     * Generates a search input.
     * @param string $name the input name.
     * @param string $value the input value.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated input.
     */
    public static function searchQueryField($name, $value = '', $htmlOptions = array())
    {
        static::addCssClass('search-query', $htmlOptions);
        return static::textField($name, $value, $htmlOptions);
    }

    /**
     * Generates form controls.
     * @param mixed $controls the controls.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated controls.
     */
    public static function controls($controls, $htmlOptions = array())
    {

        if (BsArray::popValue('row', $htmlOptions, false)) {
            static::addCssClass('form-group', $htmlOptions);
        }
        $before = BsArray::popValue('before', $htmlOptions, '');
        $after = BsArray::popValue('after', $htmlOptions, '');
        if (is_array($controls)) {
            $controls = implode('', $controls);
        }
        $content = $before . $controls . $after;
        return static::tag('div', $htmlOptions, $content);
    }

    /**
     * Generates a control group with a password field.
     * @param string $name the input name.
     * @param string $value the input value.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     * @see static::textInputField
     */
    public static function passwordFieldControlGroup($name, $value = '', $htmlOptions = array())
    {
        return static::controlGroup(self::INPUT_TYPE_PASSWORD, $name, $value, $htmlOptions);
    }

    /**
     * Generates a control group with an url field.
     * @param string $name the input name.
     * @param string $value the input value.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     * @see static::controlGroup
     */
    public static function urlFieldControlGroup($name, $value = '', $htmlOptions = array())
    {
        return static::controlGroup(self::INPUT_TYPE_URL, $name, $value, $htmlOptions);
    }

    /**
     * Generates a control group with an email field.
     * @param string $name the input name.
     * @param string $value the input value.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     * @see static::controlGroup
     */
    public static function emailFieldControlGroup($name, $value = '', $htmlOptions = array())
    {
        return static::controlGroup(self::INPUT_TYPE_EMAIL, $name, $value, $htmlOptions);
    }

    /**
     * Generates a control group with a telephone field.
     * @param string $name the input name.
     * @param string $value the input value.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     * @see static::controlGroup
     */
    public static function telFieldControlGroup($name, $value = '', $htmlOptions = array())
    {
        return static::controlGroup(self::INPUT_TYPE_TEL, $name, $value, $htmlOptions);
    }

    /**
     * Generates a control group with a number field.
     * @param string $name the input name.
     * @param string $value the input value.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     * @see static::textInputField
     */
    public static function numberFieldControlGroup($name, $value = '', $htmlOptions = array())
    {
        return static::controlGroup(self::INPUT_TYPE_NUMBER, $name, $value, $htmlOptions);
    }

    /**
     * Generates a control group with a range field.
     * @param string $name the input name
     * @param string $value the input value
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     * @see static::controlGroup
     */
    public static function rangeFieldControlGroup($name, $value = '', $htmlOptions = array())
    {
        return static::controlGroup(self::INPUT_TYPE_RANGE, $name, $value, $htmlOptions);
    }

    /**
     * Generates a control group with a file field.
     * @param string $name the input name.
     * @param string $value the input value.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     * @see static::controlGroup
     */
    public static function dateFieldControlGroup($name, $value = '', $htmlOptions = array())
    {
        return static::controlGroup(self::INPUT_TYPE_DATE, $name, $value, $htmlOptions);
    }

    /**
     * Generates a control group with a text area.
     * @param string $name the input name.
     * @param string $value the input value.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     * @see static::controlGroup
     */
    public static function textAreaControlGroup($name, $value = '', $htmlOptions = array())
    {
        return static::controlGroup(self::INPUT_TYPE_TEXTAREA, $name, $value, $htmlOptions);
    }

    /**
     * Generates a control group with a file field.
     * @param string $name the input name.
     * @param string $value the input value.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     * @see static::controlGroup
     */
    public static function fileFieldControlGroup($name, $value = '', $htmlOptions = array())
    {
        return static::controlGroup(self::INPUT_TYPE_FILE, $name, $value, $htmlOptions);
    }

    /**
     * Generates a control group with a radio button.
     * @param string $name the input name.
     * @param bool $checked whether the radio button is checked.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     * @see static::controlGroup
     */
    public static function radioButtonControlGroup($name, $checked = false, $htmlOptions = array())
    {
        return static::controlGroup(self::INPUT_TYPE_RADIOBUTTON, $name, $checked, $htmlOptions);
    }

    /**
     * Generates a control group with a check box.
     * @param string $name the input name.
     * @param bool $checked whether the check box is checked.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     * @see static::controlGroup
     */
    public static function checkBoxControlGroup($name, $checked = false, $htmlOptions = array())
    {
        $type = self::INPUT_TYPE_CHECKBOX;

        $layout = BsArray::popValue('formLayout', $htmlOptions, '');
        $help = BsArray::popValue('help', $htmlOptions, '');
        $helpOptions = BsArray::popValue('helpOptions', $htmlOptions, array());
        $color = BsArray::popValue('color', $htmlOptions, false);
        $groupOptions = BsArray::popValue('groupOptions', $htmlOptions, false);
        $controlOptions = BsArray::popValue('controlOptions', $htmlOptions, false);
        $labelOptions = BsArray::popValue('labelOptions', $htmlOptions, array());
        $label = isset($htmlOptions['label']) ? $htmlOptions['label'] : $name;
        unset($htmlOptions['label']); //Checkboxes require different markup to what is generated by BsHtml::createInput()

        $output = '';
        $labelContent = '';

        if ($color) {
            if ($layout === BsHtml::FORM_LAYOUT_HORIZONTAL)
                static::addCssClass($color, $groupOptions);
            else
                static::addCssClass($color, $controlOptions);
        }

        if ($layout === BsHtml::FORM_LAYOUT_HORIZONTAL) {
            static::addCssClass('form-group', $groupOptions);
            $output .= parent::openTag('div', $groupOptions);
            $output .= parent::openTag('div', array('class' => static::$formLayoutHorizontalOffsetClass . ' ' . static::$formLayoutHorizontalControlClass));
            $output .= parent::openTag('div', array('class' => 'checkbox'));
        } else {
            static::addCssClass('checkbox', $controlOptions);
            $output .= parent::openTag('div', $controlOptions);
        }

        $input = isset($htmlOptions['input'])
            ? $htmlOptions['input']
            : static::createInput($type, $name, $checked, $htmlOptions);

        $labelContent .= $input;
        $labelContent .= $label;

        $labelOptions['for'] = parent::getIdByName($name);

        if (!empty($help))
            $labelContent .= static::inputHelp($help, $helpOptions);

        $output .= parent::tag('label', $labelOptions, $labelContent);
        $output .= parent::closeTag('div'); //close <div class="checkbox">

        if ($layout === BsHtml::FORM_LAYOUT_HORIZONTAL) {
            $output .= parent::closeTag('div'); //close <div class="col-lg-offset-2">
            $output .= parent::closeTag('div'); //close <div class="form-group">
        }
        return $output;
    }

    /**
     * Generates a control group with a drop down list.
     * @param string $name the input name.
     * @param string $select the selected value.
     * @param array $data data for generating the list options (value=>display).
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     * @see static::controlGroup
     */
    public static function dropDownListControlGroup($name, $select = '', $data = array(), $htmlOptions = array())
    {
        return static::controlGroup(self::INPUT_TYPE_DROPDOWNLIST, $name, $select, $htmlOptions, $data);
    }

    /**
     * Generates a control group with a list box.
     * @param string $name the input name.
     * @param string $select the selected value.
     * @param array $data data for generating the list options (value=>display).
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     * @see static::controlGroup
     */
    public static function listBoxControlGroup($name, $select = '', $data = array(), $htmlOptions = array())
    {
        return static::controlGroup(self::INPUT_TYPE_LISTBOX, $name, $select, $htmlOptions, $data);
    }

    /**
     * Generates a control group with a radio button list.
     * @param string $name the input name.
     * @param string $select the selected value.
     * @param array $data data for generating the list options (value=>display).
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     * @see static::controlGroup
     */
    public static function radioButtonListControlGroup($name, $select = '', $data = array(), $htmlOptions = array())
    {
        return static::controlGroup(self::INPUT_TYPE_RADIOBUTTONLIST, $name, $select, $htmlOptions, $data);
    }

    /**
     * Generates a control group with an inline radio button list.
     * @param string $name the input name.
     * @param string $select the selected value.
     * @param array $data data for generating the list options (value=>display).
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     * @see static::controlGroup
     */
    public static function inlineRadioButtonListControlGroup(
        $name,
        $select = '',
        $data = array(),
        $htmlOptions = array()
    )
    {
        return static::controlGroup(self::INPUT_TYPE_INLINERADIOBUTTONLIST, $name, $select, $htmlOptions, $data);
    }

    /**
     * Generates a control group with a check box list.
     * @param string $name the input name.
     * @param string $select the selected value.
     * @param array $data data for generating the list options (value=>display).
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     * @see static::controlGroup
     */
    public static function checkBoxListControlGroup($name, $select = '', $data = array(), $htmlOptions = array())
    {
        return static::controlGroup(self::INPUT_TYPE_CHECKBOXLIST, $name, $select, $htmlOptions, $data);
    }

    /**
     * Generates a control group with an inline check box list.
     * @param string $name the input name.
     * @param string $select the selected value.
     * @param array $data data for generating the list options (value=>display).
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     * @see static::controlGroup
     */
    public static function inlineCheckBoxListControlGroup($name, $select = '', $data = array(), $htmlOptions = array())
    {
        return static::controlGroup(self::INPUT_TYPE_INLINECHECKBOXLIST, $name, $select, $htmlOptions, $data);
    }

    /**
     * Generates a control group with an uneditable field.
     * @param string $select the input value.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     * @see static::controlGroup
     */
    public static function uneditableFieldControlGroup($value = '', $htmlOptions = array())
    {
        return static::controlGroup(self::INPUT_TYPE_UNEDITABLE, '', $value, $htmlOptions);
    }

    /**
     * Generates a control group with a search field.
     * @param string $name the input name.
     * @param string $select the input value.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     * @see static::controlGroup
     */
    public static function searchQueryControlGroup($name, $value = '', $htmlOptions = array())
    {
        return static::controlGroup(self::INPUT_TYPE_SEARCH, $name, $value, $htmlOptions);
    }

    /**
     * Generates a custom (pre-rendered) form control group.
     * @param string $input the rendered input.
     * @param string $name the input name.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     */
    public static function customControlGroup($input, $name, $htmlOptions = array())
    {
        $htmlOptions['input'] = $input;
        return static::controlGroup(self::INPUT_TYPE_CUSTOM, $name, '', $htmlOptions);
    }

    /**
     * Generates a control group with a text field for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     * @see static::activeControlGroup
     */
    public static function activeTextFieldControlGroup($model, $attribute, $htmlOptions = array())
    {
        return static::activeControlGroup(self::INPUT_TYPE_TEXT, $model, $attribute, $htmlOptions);
    }

    /**
     * Generates a control group with a time field for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     * @see static::activeControlGroup
     */
	public static function activeTimeFieldControlGroup($model, $attribute, $htmlOptions = array())
	{
		return static::activeControlGroup(self::INPUT_TYPE_TIME, $model, $attribute, $htmlOptions);
	}

    /**
     * Generates an active form row.
     * @param string $type the input type.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @param array $data data for multiple select inputs.
     * @return string the generated control group.
     */
    public static function activeControlGroup($type, $model, $attribute, $htmlOptions = array(), $data = array())
    {
        $color = BsArray::popValue('color', $htmlOptions);
        $groupOptions = BsArray::popValue('groupOptions', $htmlOptions, array());
        $controlOptions = BsArray::popValue('controlOptions', $htmlOptions, array());
        $labelOptions = BsArray::popValue('labelOptions', $htmlOptions, array());
        $layout = BsArray::popValue('formLayout', $htmlOptions);

        if (in_array($type, array(self::INPUT_TYPE_CHECKBOX, self::INPUT_TYPE_RADIOBUTTON))) {
            $htmlOptions['label'] = $model->getAttributeLabel($attribute);
            $htmlOptions['labelOptions'] = $labelOptions;
        }

        $help = BsArray::popValue('help', $htmlOptions, '');
        $helpOptions = BsArray::popValue('helpOptions', $htmlOptions, array());
        if (!empty($help)) {
            $help = static::inputHelp($help, $helpOptions);
        }
        $error = BsArray::popValue('error', $htmlOptions, '');

        $input = isset($htmlOptions['input'])
            ? $htmlOptions['input']
            : static::createActiveInput($type, $model, $attribute, $htmlOptions, $data);
        static::addCssClass('form-group', $groupOptions);

        if (!empty($layout)) {
            if ($layout === BsHtml::FORM_LAYOUT_HORIZONTAL) {
                $controlClass = BsArray::popValue('class', $controlOptions, self::$formLayoutHorizontalControlClass);
                static::addCssClass($controlClass, $controlOptions);
            }
        }

        if (!empty($color)) {
            static::addCssClass($color, $groupOptions);
        }

        $output = static::openTag('div', $groupOptions);

        if ($labelOptions !== false && $layout !== self::FORM_LAYOUT_INLINE) {
            if (isset($labelOptions['ex']) && empty($labelOptions['ex'])) {
                // todo: consider adding support for overriding the label with plain text.
	            unset($labelOptions['ex']);
	            $output .= parent::activeLabel($model, $attribute, $labelOptions);
            } else {
                $output .= parent::activeLabelEx($model, $attribute, $labelOptions);
            }
        }

        $output .= static::controls($input . $error . $help, $controlOptions);
        $output .= '</div>';
        return $output;
    }

    /**
     * Creates an active form input of the given type.
     * @param string $type the input type.
     * @param CModel $model the model instance.
     * @param string $attribute the attribute name.
     * @param array $htmlOptions additional HTML attributes.
     * @param array $data data for multiple select inputs.
     * @return string the input.
     * @throws CException if the input type is invalid.
     */
    protected static function createActiveInput($type, $model, $attribute, $htmlOptions = array(), $data = array())
    {
        switch ($type) {
            case self::INPUT_TYPE_TEXT:
                return static::activeTextField($model, $attribute, $htmlOptions);
            case self::INPUT_TYPE_PASSWORD:
                return static::activePasswordField($model, $attribute, $htmlOptions);
            case self::INPUT_TYPE_URL:
                return static::activeUrlField($model, $attribute, $htmlOptions);
            case self::INPUT_TYPE_EMAIL:
                return static::activeEmailField($model, $attribute, $htmlOptions);
            case self::INPUT_TYPE_NUMBER:
                return static::activeNumberField($model, $attribute, $htmlOptions);
            case self::INPUT_TYPE_TEL:
                return static::activeTelField($model, $attribute, $htmlOptions);
            case self::INPUT_TYPE_RANGE:
                return static::activeRangeField($model, $attribute, $htmlOptions);
            case self::INPUT_TYPE_DATE:
                return static::activeDateField($model, $attribute, $htmlOptions);
            case self::INPUT_TYPE_TEXTAREA:
                return static::activeTextArea($model, $attribute, $htmlOptions);
            case self::INPUT_TYPE_FILE:
                return static::activeFileField($model, $attribute, $htmlOptions);
            case self::INPUT_TYPE_RADIOBUTTON:
                return static::activeRadioButton($model, $attribute, $htmlOptions);
            case self::INPUT_TYPE_CHECKBOX:
                return static::activeCheckBox($model, $attribute, $htmlOptions);
            case self::INPUT_TYPE_DROPDOWNLIST:
                return static::activeDropDownList($model, $attribute, $data, $htmlOptions);
            case self::INPUT_TYPE_LISTBOX:
                return static::activeListBox($model, $attribute, $data, $htmlOptions);
            case self::INPUT_TYPE_CHECKBOXLIST:
                return static::activeCheckBoxList($model, $attribute, $data, $htmlOptions);
            case self::INPUT_TYPE_INLINECHECKBOXLIST:
                return static::activeInlineCheckBoxList($model, $attribute, $data, $htmlOptions);
            case self::INPUT_TYPE_RADIOBUTTONLIST:
                return static::activeRadioButtonList($model, $attribute, $data, $htmlOptions);
            case self::INPUT_TYPE_INLINERADIOBUTTONLIST:
                return static::activeInlineRadioButtonList($model, $attribute, $data, $htmlOptions);
            case self::INPUT_TYPE_UNEDITABLE:
                return static::activeUneditableField($model, $attribute, $htmlOptions);
            case self::INPUT_TYPE_SEARCH:
                return static::activeSearchQueryField($model, $attribute, $htmlOptions);
			case self::INPUT_TYPE_TIME:
				return static::activeTimeField($model, $attribute, $htmlOptions);
            default:
                throw new CException('Invalid input type "' . $type . '".');
        }
    }

    /**
     * Generates a password field input for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated input field.
     * @see static::activeTextInputField
     */
    public static function activePasswordField($model, $attribute, $htmlOptions = array())
    {
        return static::activeTextInputField('password', $model, $attribute, $htmlOptions);
    }

    /**
     * Generates an input HTML tag  for a model attribute.
     * This method generates an input HTML tag based on the given input name and value.
     * @param string $type the input type.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated input tag.
     */
    protected static function activeTextInputField($type, $model, $attribute, $htmlOptions)
    {
        parent::resolveNameID($model, $attribute, $htmlOptions);
        parent::clientChange('change', $htmlOptions);

        $htmlOptions = static::normalizeInputOptions($htmlOptions);
        $addOnClasses = static::getAddOnClasses($htmlOptions);
        $addOnOptions = BsArray::popValue('addOnOptions', $htmlOptions, array());
        static::addCssClass('form-control', $htmlOptions);

        $attributesLabel = $model->attributeLabels();
        $placeHolder = BsArray::popValue('placeholder', $htmlOptions, null);


        if ($placeHolder !== null) {
            $htmlOptions['placeholder'] = $placeHolder;
        } else if ($placeHolder !== false) {
            $htmlOptions['placeholder'] = isset($attributesLabel[$attribute]) ? $attributesLabel[$attribute] : '';
        }

        static::addCssClass($addOnClasses, $addOnOptions);

        $prepend = BsArray::popValue('prepend', $htmlOptions, '');
        $prependOptions = BsArray::popValue('prependOptions', $htmlOptions, array());
        if (!empty($prepend)) {
            $prepend = static::inputAddOn($prepend, $prependOptions);
        }

        $append = BsArray::popValue('append', $htmlOptions, '');
        $appendOptions = BsArray::popValue('appendOptions', $htmlOptions, array());
        if (!empty($append)) {
            $append = static::inputAddOn($append, $appendOptions);
        }

        $output = '';
        if (!empty($addOnClasses)) {
            $output .= static::openTag('div', $addOnOptions);
        }
        $output .= $prepend . parent::activeInputField($type, $model, $attribute, $htmlOptions) . $append;
        if (!empty($addOnClasses)) {
            $output .= '</div>';
        }
        return $output;
    }

    /**
     * Generates an url field input for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated input field.
     * @see static::activeTextInputField
     */
    public static function activeUrlField($model, $attribute, $htmlOptions = array())
    {
        return static::activeTextInputField('url', $model, $attribute, $htmlOptions);
    }

    /**
     * Generates an email field input for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated input field.
     * @see static::activeTextInputField
     */
    public static function activeEmailField($model, $attribute, $htmlOptions = array())
    {
        return static::activeTextInputField('email', $model, $attribute, $htmlOptions);
    }

    /**
     * Generates a telephone field input for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated input field.
     * @see static::activeTextInputField
     */
    public static function activeTelField($model, $attribute, $htmlOptions = array())
    {
        return static::activeTextInputField('tel', $model, $attribute, $htmlOptions);
    }

    /**
     * Generates a number field input for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated input field.
     * @see static::activeTextInputField
     */
    public static function activeNumberField($model, $attribute, $htmlOptions = array())
    {
        return static::activeTextInputField('number', $model, $attribute, $htmlOptions);
    }

    /**
     * Generates a range field input for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated input field.
     * @see static::activeTextInputField
     */
    public static function activeRangeField($model, $attribute, $htmlOptions = array())
    {
        return static::activeTextInputField('range', $model, $attribute, $htmlOptions);
    }

    /**
     * Generates a date field input for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated input field.
     * @see static::activeTextInputField
     */
    public static function activeDateField($model, $attribute, $htmlOptions = array())
    {
        return static::activeTextInputField('date', $model, $attribute, $htmlOptions);
    }

    /**
     * Generates a text area input for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated text area.
     */
    public static function activeTextArea($model, $attribute, $htmlOptions = array())
    {
        $htmlOptions = static::normalizeInputOptions($htmlOptions);
        if (!isset($htmlOptions['class']))
            $htmlOptions['class'] = 'form-control';

        if (!isset($htmlOptions['rows']))
            $htmlOptions['rows'] = '5';

        return parent::activeTextArea($model, $attribute, $htmlOptions);
    }

    /**
     * Generates a file field input for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated input field.
     * @see CHtml::activeFileField
     */
    public static function activeFileField($model, $attribute, $htmlOptions = array())
    {
        return parent::activeFileField($model, $attribute, $htmlOptions);
    }

    /**
     * Generates a radio button for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated radio button.
     */
    public static function activeRadioButton($model, $attribute, $htmlOptions = array())
    {
        $label = BsArray::popValue('label', $htmlOptions, false);
        $labelOptions = BsArray::popValue('labelOptions', $htmlOptions, array());
        $radioButton = parent::activeRadioButton($model, $attribute, $htmlOptions);
        static::addCssClass('radio', $labelOptions);
        return $label !== false ? static::tag('label', $labelOptions, $radioButton . ' ' . $label) : $radioButton;
    }

    /**
     * Generates a check box for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated check box.
     */
    public static function activeCheckBox($model, $attribute, $htmlOptions = array())
    {
        $label = BsArray::popValue('label', $htmlOptions, false);
        $labelOptions = BsArray::popValue('labelOptions', $htmlOptions, array());
        $checkBox = parent::activeCheckBox($model, $attribute, $htmlOptions);
        static::addCssClass('checkbox', $labelOptions);
        return $label !== false ? static::tag('label', $labelOptions, $checkBox . ' ' . $label) : $checkBox;
    }

    /**
     * Generates a list box for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $data data for generating the list options (value=>display).
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated list box
     */
    public static function activeListBox($model, $attribute, $data, $htmlOptions = array())
    {
        BsArray::defaultValue('displaySize', 4, $htmlOptions);
        return static::activeDropDownList($model, $attribute, $data, $htmlOptions);
    }

    /**
     * Generates a drop down list for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $data data for generating the list options (value=>display).
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated drop down list.
     */
    public static function activeDropDownList($model, $attribute, $data, $htmlOptions = array())
    {
        static::addCssClass('form-control', $htmlOptions);
        return parent::activeDropDownList($model, $attribute, $data, $htmlOptions);
    }

    /**
     * Generates an inline check box list for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $data $data value-label pairs used to generate the check box list.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated list.
     */
    public static function activeInlineCheckBoxList($model, $attribute, $data, $htmlOptions = array())
    {
        $htmlOptions['inline'] = true;
        return static::activeCheckBoxList($model, $attribute, $data, $htmlOptions);
    }

    /**
     * Generates a check box list for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $data $data value-label pairs used to generate the check box list.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated list.
     */
    public static function activeCheckBoxList($model, $attribute, $data, $htmlOptions = array())
    {
        parent::resolveNameID($model, $attribute, $htmlOptions);
        $selection = parent::resolveValue($model, $attribute);
        if ($model->hasErrors($attribute)) {
            parent::addErrorCss($htmlOptions);
        }
        $name = BsArray::popValue('name', $htmlOptions);
        $unCheck = BsArray::popValue('uncheckValue', $htmlOptions, '');
        $hiddenOptions = isset($htmlOptions['id']) ? array('id' => parent::ID_PREFIX . $htmlOptions['id']) : array('id' => false);
        $hidden = $unCheck !== null ? parent::hiddenField($name, $unCheck, $hiddenOptions) : '';
        return $hidden . static::checkBoxList($name, $selection, $data, $htmlOptions);
    }

    /**
     * Generates an inline radio button list for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $data $data value-label pairs used to generate the radio button list.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated list.
     */
    public static function activeInlineRadioButtonList($model, $attribute, $data, $htmlOptions = array())
    {
        $htmlOptions['inline'] = true;
        return static::activeRadioButtonList($model, $attribute, $data, $htmlOptions);
    }

    /**
     * Generates a radio button list for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $data $data value-label pairs used to generate the radio button list.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated list.
     */
    public static function activeRadioButtonList($model, $attribute, $data, $htmlOptions = array())
    {
        parent::resolveNameID($model, $attribute, $htmlOptions);
        $selection = parent::resolveValue($model, $attribute);
        $name = BsArray::popValue('name', $htmlOptions);
        $unCheck = BsArray::popValue('uncheckValue', $htmlOptions, '');
        $hiddenOptions = isset($htmlOptions['id']) ? array('id' => parent::ID_PREFIX . $htmlOptions['id']) : array('id' => false);
        $hidden = $unCheck !== null ? parent::hiddenField($name, $unCheck, $hiddenOptions) : '';
        return $hidden . static::radioButtonList($name, $selection, $data, $htmlOptions);
    }

    /**
     * Generates an uneditable input for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated input.
     */
    public static function activeUneditableField($model, $attribute, $htmlOptions = array())
    {
        parent::resolveNameID($model, $attribute, $htmlOptions);
        $value = parent::resolveValue($model, $attribute);
        BsArray::removeValues(array('name', 'id'), $htmlOptions);
        return static::uneditableField($value, $htmlOptions);
    }

    /**
     * Generates a search query input for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated input.
     */
    public static function activeSearchQueryField($model, $attribute, $htmlOptions = array())
    {
        static::addCssClass('search-query', $htmlOptions);
        return static::activeTextField($model, $attribute, $htmlOptions);
    }

    /**
     * Generates a text field input for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated input field.
     * @see static::activeTextInputField
     */
    public static function activeTextField($model, $attribute, $htmlOptions = array())
    {
        return static::activeTextInputField('text', $model, $attribute, $htmlOptions);
    }

	/**
	 * Generates a time field input for a model attribute
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated input field.
     * @see static::activeTextInputField
	 */
	public static function activeTimeField($model, $attribute, $htmlOptions = array())
	{
		return static::activeTextInputField('time', $model, $attribute, $htmlOptions);
	}

    /**
     * Generates a control group with a password field for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     * @see static::activeControlGroup
     */
    public static function activePasswordFieldControlGroup($model, $attribute, $htmlOptions = array())
    {
        return static::activeControlGroup(self::INPUT_TYPE_PASSWORD, $model, $attribute, $htmlOptions);
    }

    /**
     * Generates a control group with a url field for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     * @see static::activeControlGroup
     */
    public static function activeUrlFieldControlGroup($model, $attribute, $htmlOptions = array())
    {
        return static::activeControlGroup(self::INPUT_TYPE_URL, $model, $attribute, $htmlOptions);
    }

    /**
     * Generates a control group with a email field for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     * @see static::activeControlGroup
     */
    public static function activeEmailFieldControlGroup($model, $attribute, $htmlOptions = array())
    {
        return static::activeControlGroup(self::INPUT_TYPE_EMAIL, $model, $attribute, $htmlOptions);
    }

    /**
     * Generates a control group with a telephone field for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     * @see static::activeControlGroup
     */
    public static function activeTelFieldControlGroup($model, $attribute, $htmlOptions = array())
    {
        return static::activeControlGroup(self::INPUT_TYPE_TEL, $model, $attribute, $htmlOptions);
    }

    /**
     * Generates a control group with a number field for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     * @see static::activeControlGroup
     */
    public static function activeNumberFieldControlGroup($model, $attribute, $htmlOptions = array())
    {
        return static::activeControlGroup(self::INPUT_TYPE_NUMBER, $model, $attribute, $htmlOptions);
    }

    /**
     * Generates a control group with a range field for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     * @see static::activeControlGroup
     */
    public static function activeRangeFieldControlGroup($model, $attribute, $htmlOptions = array())
    {
        return static::activeControlGroup(self::INPUT_TYPE_RANGE, $model, $attribute, $htmlOptions);
    }

    /**
     * Generates a control group with a date field for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     * @see static::activeControlGroup
     */
    public static function activeDateFieldControlGroup($model, $attribute, $htmlOptions = array())
    {
        return static::activeControlGroup(self::INPUT_TYPE_DATE, $model, $attribute, $htmlOptions);
    }

    /**
     * Generates a control group with a text area for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     * @see static::activeControlGroup
     */
    public static function activeTextAreaControlGroup($model, $attribute, $htmlOptions = array())
    {
        return static::activeControlGroup(self::INPUT_TYPE_TEXTAREA, $model, $attribute, $htmlOptions);
    }

    /**
     * Generates a control group with a file field for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     * @see static::activeControlGroup
     */
    public static function activeFileFieldControlGroup($model, $attribute, $htmlOptions = array())
    {
        return static::activeControlGroup(self::INPUT_TYPE_FILE, $model, $attribute, $htmlOptions);
    }

    /**
     * Generates a control group with a radio button for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     * @see static::activeControlGroup
     */
    public static function activeRadioButtonControlGroup($model, $attribute, $htmlOptions = array())
    {
        $type = self::INPUT_TYPE_RADIOBUTTON;

        $layout = BsArray::popValue('formLayout', $htmlOptions, '');
        $help = BsArray::popValue('help', $htmlOptions, '');
        $helpOptions = BsArray::popValue('helpOptions', $htmlOptions, array());
        if (!empty($help)) {
            $help = static::inputHelp($help, $helpOptions);
        }

        $input = isset($htmlOptions['input'])
            ? $htmlOptions['input']
            : static::createActiveInput($type, $model, $attribute, $htmlOptions);
        $header = $layout === BsHtml::FORM_LAYOUT_HORIZONTAL ? '<div class="form-group"><div class="' . static::$formLayoutHorizontalOffsetClass . '"><div class="radio"><label>' : '<div class="radio"><label>';
        $output = $header;
        $output .= $input;
        $output .= $model->getAttributeLabel($attribute);
        $footer = $layout === BsHtml::FORM_LAYOUT_HORIZONTAL ? '</label></div></div></div>' : '</label></div>';
        $output .= $footer;
        return $output;
    }

    /**
     * Generates a control group with a check box for a model attribute.
     * @param $model
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     * @see static::activeControlGroup
     */
    public static function activeCheckBoxControlGroup($model, $attribute, $htmlOptions = array())
    {
        $type = self::INPUT_TYPE_CHECKBOX;
        $layout = BsArray::popValue('formLayout', $htmlOptions, '');
        $help = BsArray::popValue('help', $htmlOptions, '');
        $helpOptions = BsArray::popValue('helpOptions', $htmlOptions, array());
        $error = BsArray::popValue('error', $htmlOptions, false);
        $color = BsArray::popValue('color', $htmlOptions, false);
        $groupOptions = BsArray::popValue('groupOptions', $htmlOptions, false);
        $controlOptions = BsArray::popValue('controlOptions', $htmlOptions, false);
        $labelOptions = BsArray::popValue('labelOptions', $htmlOptions, array());
        $template = BsArray::popValue('template', $htmlOptions, '{beginLabel}{input}{labelTitle}{help}{error}{endLabel}');

        $output = '';

        if ($color) {
            if ($layout === BsHtml::FORM_LAYOUT_HORIZONTAL)
                static::addCssClass($color, $groupOptions);
            else
                static::addCssClass($color, $controlOptions);
        }

        if ($layout === BsHtml::FORM_LAYOUT_HORIZONTAL) {
            static::addCssClass('form-group', $groupOptions);
            $output .= parent::openTag('div', $groupOptions);
            $output .= parent::openTag('div', array('class' => static::$formLayoutHorizontalOffsetClass . ' ' . static::$formLayoutHorizontalControlClass));
            $output .= parent::openTag('div', array('class' => 'checkbox'));
        } else {
            static::addCssClass('checkbox', $controlOptions);
            $output .= parent::openTag('div', $controlOptions);
        }

        if(array_key_exists('uncheckValue',$htmlOptions))
        {
            $uncheck=$htmlOptions['uncheckValue'];
            unset($htmlOptions['uncheckValue']);
        }
        else
            $uncheck='0';

        if (isset($htmlOptions['input'])) {
            $input = $htmlOptions['input'];
        } else {
            $htmlOptions['uncheckValue'] = null;
            $input = static::createActiveInput($type, $model, $attribute, $htmlOptions);
        }

        if (!empty($help) && !$error)
            $help = static::inputHelp($help, $helpOptions);

        static::resolveNameId($model, $attribute, $htmlOptions);

        if ($uncheck !== null) {
            static::resolveNameId($model, $attribute, $htmlOptions);
            $hiddenOptions=isset($htmlOptions['id']) ? array('id'=>self::ID_PREFIX.$htmlOptions['id']) : array('id'=>false);
            $output .= static::hiddenField($htmlOptions['name'], $uncheck, $hiddenOptions);
        }
        $labelTitle = $model->getAttributeLabel($attribute);
        $beginLabel = static::openTag('label', $labelOptions);
        $label = static::label($labelTitle, $htmlOptions['id'], $labelOptions);
        $endLabel=static::closeTag('label');
        $output .= strtr($template, array(
            '{input}' => $input,
            '{beginLabel}' => $beginLabel,
            '{label}' => $label,
            '{labelTitle}' => $labelTitle,
            '{endLabel}' => $endLabel,
            '{error}' => $error,
            '{help}' => $help,
        ));
        
        $output .= parent::closeTag('div'); //close <div class="checkbox">

        if ($layout === BsHtml::FORM_LAYOUT_HORIZONTAL) {
            $output .= parent::closeTag('div'); //close <div class="col-lg-offset-2">
            $output .= parent::closeTag('div'); //close <div class="form-group">
        }
        return $output;
    }

    /**
     * Generates a control group with a drop down list for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $data data for generating the list options (value=>display).
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     * @see static::activeControlGroup
     */
    public static function activeDropDownListControlGroup($model, $attribute, $data = array(), $htmlOptions = array())
    {
        static::addCssClass('form-control', $htmlOptions);
        return static::activeControlGroup(self::INPUT_TYPE_DROPDOWNLIST, $model, $attribute, $htmlOptions, $data);
    }

    /**
     * Generates a control group with a list box for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $data data for generating the list options (value=>display).
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     * @see static::activeControlGroup
     */
    public static function activeListBoxControlGroup($model, $attribute, $data = array(), $htmlOptions = array())
    {
        return static::activeControlGroup(self::INPUT_TYPE_LISTBOX, $model, $attribute, $htmlOptions, $data);
    }

    /**
     * Generates a control group with a radio button list for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $data data for generating the list options (value=>display).
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     * @see static::activeControlGroup
     */
    public static function activeRadioButtonListControlGroup(
        $model,
        $attribute,
        $data = array(),
        $htmlOptions = array()
    )
    {
        return static::activeControlGroup(self::INPUT_TYPE_RADIOBUTTONLIST, $model, $attribute, $htmlOptions, $data);
    }

    /**
     * Generates a control group with an inline radio button list for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $data data for generating the list options (value=>display).
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     * @see static::activeControlGroup
     */
    public static function activeInlineRadioButtonListControlGroup(
        $model,
        $attribute,
        $data = array(),
        $htmlOptions = array()
    )
    {
        return static::activeControlGroup(
            self::INPUT_TYPE_INLINERADIOBUTTONLIST,
            $model,
            $attribute,
            $htmlOptions,
            $data
        );
    }

    /**
     * Generates a control group with a check box list for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $data data for generating the list options (value=>display).
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     * @see static::activeControlGroup
     */
    public static function activeCheckBoxListControlGroup($model, $attribute, $data = array(), $htmlOptions = array())
    {
        return static::activeControlGroup(self::INPUT_TYPE_CHECKBOXLIST, $model, $attribute, $htmlOptions, $data);
    }

    /**
     * Generates a control group with an inline check box list for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $data data for generating the list options (value=>display).
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     * @see static::activeControlGroup
     */
    public static function activeInlineCheckBoxListControlGroup(
        $model,
        $attribute,
        $data = array(),
        $htmlOptions = array()
    )
    {
        return static::activeControlGroup(self::INPUT_TYPE_INLINECHECKBOXLIST, $model, $attribute, $htmlOptions, $data);
    }

    /**
     * Generates a control group with a uneditable field for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     * @see static::activeControlGroup
     */
    public static function activeUneditableFieldControlGroup($model, $attribute, $htmlOptions = array())
    {
        return static::activeControlGroup(self::INPUT_TYPE_UNEDITABLE, $model, $attribute, $htmlOptions);
    }

    /**
     * Generates a control group with a search field for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     * @see static::activeControlGroup
     */
    public static function activeSearchQueryControlGroup($model, $attribute, $htmlOptions = array())
    {
        return static::activeControlGroup(self::INPUT_TYPE_SEARCH, $model, $attribute, $htmlOptions);
    }

    /**
     * Generates a custom (pre-rendered) active form control group.
     * @param string $input the rendered input.
     * @param CModel $model the data model.
     * @param string $attribute the attribute.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated control group.
     */
    public static function customActiveControlGroup($input, $model, $attribute, $htmlOptions = array())
    {
        $htmlOptions['input'] = $input;
        return static::activeControlGroup(self::INPUT_TYPE_CUSTOM, $model, $attribute, $htmlOptions);
    }

    /**
     * Displays a summary of validation errors for one or several models.
     * @param mixed $model the models whose input errors are to be displayed.
     * @param string $header a piece of HTML code that appears in front of the errors.
     * @param string $footer a piece of HTML code that appears at the end of the errors.
     * @param array $htmlOptions additional HTML attributes to be rendered in the container div tag.
     * @return string the error summary. Empty if no errors are found.
     */
    public static function errorSummary($model, $header = null, $footer = null, $htmlOptions = array())
    {
        $closeText = BsArray::popValue('closeText', $htmlOptions, self::CLOSE_TEXT);
        $closeOptions = BsArray::popValue('closeOptions', $htmlOptions, array());
        $close = '';
        
        if (isset($closeOptions['dismiss'])) {
            $close = $closeText !== false ? static::closeLink($closeText, '#', $closeOptions) : '';
        }
        
        // kind of a quick fix but it will do for now.
        static::addCssClass(self::$errorSummaryCss, $htmlOptions);
        return parent::errorSummary($model, $close . $header, $footer, $htmlOptions);
    }

    // Buttons
    // http://twitter.github.io/bootstrap/2.3.2/base-css.html#buttons
    // --------------------------------------------------

    /**
     * Displays the first validation error for a model attribute.
     * @param CModel $model the data model.
     * @param string $attribute the attribute name.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the rendered error. Empty if no errors are found.
     */
    public static function error($model, $attribute, $htmlOptions = array())
    {
        parent::resolveName($model, $attribute); // turn [a][b]attr into attr
        $error = $model->getError($attribute);
        return !empty($error) ? static::help($error, $htmlOptions) : '';
    }

    /**
     * Generates form controls row.
     * @param mixed $controls the controls.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated controls.
     */
    public static function controlsRow($controls, $htmlOptions = array())
    {
        $htmlOptions['row'] = true;
        return static::controls($controls, $htmlOptions);
    }

    /**
     * Generates form actions.
     * @param mixed $actions the actions.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated actions.
     */
    public static function formActions($actions, $htmlOptions = array())
    {
        static::addCssClass('form-group', $htmlOptions);
        if (is_array($actions)) {
            $actions = implode(' ', $actions);
        }
        $outPut = parent::openTag('div', $htmlOptions, array());
        $outPut .= parent::tag('div', array('class' => static::$formLayoutHorizontalOffsetClass . ' ' . static::$formLayoutHorizontalControlClass), $actions);
        $outPut .= parent::closeTag('div');
        return $outPut;
    }

    /**
     * Generates a submit button.
     * @param string $label the button label
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated button.
     */
    public static function submitButton($label = 'Submit', $htmlOptions = array())
    {
        return static::btn(self::BUTTON_TYPE_SUBMIT, $label, $htmlOptions);
    }

    /**
     * Generates a button.
     * @param string $type the button type.
     * @param string $label the button label text.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated button.
     */
    protected static function btn($type, $label, $htmlOptions = array())
    {
        static::addCssClass('btn', $htmlOptions);
        $color = BsArray::popValue('color', $htmlOptions);
        if (!empty($color)) {
            static::addCssClass('btn-' . $color, $htmlOptions);
        } else {
            static::addCssClass('btn-default', $htmlOptions);
        }
        $size = BsArray::popValue('size', $htmlOptions);
        if (!empty($size)) {
            static::addCssClass('btn-' . $size, $htmlOptions);
        }
        if (BsArray::popValue('block', $htmlOptions, false)) {
            static::addCssClass('btn-block', $htmlOptions);
        }
        if (BsArray::popValue('disabled', $htmlOptions, false)) {
            static::addCssClass('disabled', $htmlOptions);
        }
        $loading = BsArray::popValue('loading', $htmlOptions);
        if (!empty($loading)) {
            $htmlOptions['data-loading-text'] = $loading;
        }
        if (BsArray::popValue('toggle', $htmlOptions, false)) {
            $htmlOptions['data-toggle'] = 'button';
        }
        $icon = BsArray::popValue('icon', $htmlOptions);
        $iconOptions = BsArray::popValue('iconOptions', $htmlOptions, array());
        if (strpos($type, 'input') === false) {
            if (!empty($icon)) {
                $label = static::icon($icon, $iconOptions) . ' ' . $label;
            }
            $items = BsArray::popValue('items', $htmlOptions);
        }

        $navbarbtn = BsArray::popValue('type', $htmlOptions, false);
        if ($navbarbtn === BsHtml::BUTTON_TYPE_NAVBARBUTTON) {
            static::addCssClass('navbar-btn', $htmlOptions);
        }

        $dropdownOptions = $htmlOptions;
        BsArray::removeValues(array('groupOptions', 'menuOptions', 'dropup'), $htmlOptions);
        static::addSpanClass($htmlOptions); // must be called here as parent renders buttons
        static::addPullClass($htmlOptions); // must be called here as parent renders buttons
        return isset($items)
            ? static::btnDropdown($type, $label, $items, $dropdownOptions)
            : static::createButton($type, $label, $htmlOptions);
    }

    /**
     * Generates an icon.
     * @param string $icon the icon type.
     * @param array $htmlOptions additional HTML attributes.
     * @param string $tagName the icon HTML tag.
     * @return string the generated icon.
     */
    public static function icon($icon, $htmlOptions = array(), $tagName = 'span')
    {
        if (is_string($icon)) {
            if (strpos($icon, 'glyphicon') === false) {
                $icon = 'glyphicon-' . implode(' glyphicon-', explode(' ', $icon));
            }
            static::addCssClass('glyphicon ' . $icon, $htmlOptions);
            return static::openTag($tagName, $htmlOptions) . parent::closeTag($tagName); // tag won't work in this case
        }
        return '';
    }

    /**
     * Generates a button dropdown.
     * @param string $type the button type.
     * @param string $label the button label text.
     * @param array $items the menu items.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated button.
     */
    protected static function btnDropdown($type, $label, $items, $htmlOptions)
    {
        $menuOptions = BsArray::popValue('menuOptions', $htmlOptions, array());
        $groupOptions = BsArray::popValue('groupOptions', $htmlOptions, array());
        static::addCssClass('btn-group', $groupOptions);
        if (BsArray::popValue('dropup', $htmlOptions, false)) {
            static::addCssClass('dropup', $groupOptions);
        }

        $output = static::openTag('div', $groupOptions);
        if (BsArray::popValue('split', $htmlOptions, false)) {
            $output .= static::createButton($type, $label, $htmlOptions);
            $output .= static::dropdownToggleButton('', $htmlOptions);

        } else {
            $output .= static::dropdownToggleLink($label, $htmlOptions);
        }

        $output .= static::dropdown($items, $menuOptions);
        $output .= '</div>';
        return $output;
    }

    /**
     * Creates a button the of given type.
     * @param string $type the button type.
     * @param string $label the button label.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the button.
     * @throws CException if the button type is valid.
     */
    protected static function createButton($type, $label, $htmlOptions)
    {
        $url = BsArray::popValue('url', $htmlOptions, '#');
        $ajaxOptions = BsArray::popValue('ajaxOptions', $htmlOptions, array());
        switch ($type) {
            case self::BUTTON_TYPE_HTML:
                return parent::htmlButton($label, $htmlOptions);

            case self::BUTTON_TYPE_SUBMIT:
                $htmlOptions['type'] = 'submit';
                return parent::htmlButton($label, $htmlOptions);

            case self::BUTTON_TYPE_RESET:
                $htmlOptions['type'] = 'reset';
                return parent::htmlButton($label, $htmlOptions);

            case self::BUTTON_TYPE_IMAGE:
                return parent::imageButton($label, $htmlOptions);

            case self::BUTTON_TYPE_LINKBUTTON:
                return parent::linkButton($label, $htmlOptions);

            case self::BUTTON_TYPE_AJAXLINK:
                return parent::ajaxLink($label, $url, $ajaxOptions, $htmlOptions);

            case self::BUTTON_TYPE_AJAXBUTTON:
                $htmlOptions['ajax'] = $ajaxOptions;
                return parent::htmlButton($label, $htmlOptions);

            case self::BUTTON_TYPE_INPUTBUTTON:
                return parent::button($label, $htmlOptions);

            case self::BUTTON_TYPE_INPUTSUBMIT:
                $htmlOptions['type'] = 'submit';
                return parent::button($label, $htmlOptions);

            case self::BUTTON_TYPE_LINK:
                return static::link($label, $url, $htmlOptions);

            default:
                throw new CException('Invalid button type "' . $type . '".');
        }
    }

    /**
     * Generates a hyperlink tag.
     * @param string $text link body. It will NOT be HTML-encoded.
     * @param mixed $url a URL or an action route that can be used to create a URL.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated hyperlink
     */
    public static function link($text, $url = '#', $htmlOptions = array())
    {
        if ($url !== false) {
            $htmlOptions['href'] = parent::normalizeUrl($url);
        }
        static::clientChange('click', $htmlOptions);
        return static::tag('a', $htmlOptions, $text);
    }

    /**
     * Generates a dropdown toggle button.
     * @param string $label the button label text.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated button.
     */
    public static function dropdownToggleButton($label = '', $htmlOptions = array())
    {
        return static::dropdownToggle(self::BUTTON_TYPE_HTML, $label, $htmlOptions);
    }

    /**
     * Generates a dropdown toggle element.
     * @param string $tag the HTML tag.
     * @param string $label the element text.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated element.
     */
    protected static function dropdownToggle($type, $label, $htmlOptions)
    {
        static::addCssClass('dropdown-toggle', $htmlOptions);
        $label .= ' <span class="caret"></span>';
        $htmlOptions['data-toggle'] = 'dropdown';
        if (!isset($htmlOptions['name']))
            $htmlOptions['name'] = self::ID_PREFIX . self::$count++;
        if (!isset($htmlOptions['type']))
            $htmlOptions['type'] = 'button';
        parent::clientChange('click', $htmlOptions);
        return parent::tag('button', $htmlOptions, $label);
    }

    /**
     * Generates a dropdown toggle link.
     * @param string $label the link label text.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated link.
     */
    public static function dropdownToggleLink($label, $htmlOptions = array())
    {
        return static::dropdownToggle(self::BUTTON_TYPE_HTML, $label, $htmlOptions);
    }

    // todo: add methods for input button and input submit.

    /**
     * Generates a dropdown menu.
     * @param array $items the menu items.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated menu.
     */
    protected static function dropdown($items, $htmlOptions = array())
    {
        static::addCssClass('dropdown-menu', $htmlOptions);
        return static::menu($items, $htmlOptions);
    }

    /**
     * Generates a menu.
     * @param array $items the menu items.
     * @param array $htmlOptions additional HTML attributes.
     * @param integer $depth the current depth.
     * @return string the generated menu.
     */
    public static function menu(array $items, $htmlOptions = array(), $depth = 0)
    {
        // todo: consider making this method protected.
        if (!empty($items)) {
            $htmlOptions['role'] = 'menu';
            $output = static::openTag('ul', $htmlOptions);
            foreach ($items as $itemOptions) {

                if (is_string($itemOptions)) {
                    $output .= $itemOptions;
                } else {
                    if (isset($itemOptions['visible']) && $itemOptions['visible'] === false) {
                        continue;
                    }

                    //HotFix 06.03.2014
                    if (is_array($itemOptions) && array_key_exists('itemOptions', $itemOptions)) unset( $itemOptions['itemOptions'] );

                    // todo: consider removing the support for htmlOptions.
                    $options = BsArray::popValue('htmlOptions', $itemOptions, array());
                    if (!empty($options)) {
                        $itemOptions = BsArray::merge($options, $itemOptions);
                    }
                    $label = BsArray::popValue('label', $itemOptions, '');
                    if (BsArray::popValue('active', $itemOptions, false)) {
                        static::addCssClass('active', $itemOptions);
                    }
                    if (BsArray::popValue('disabled', $itemOptions, false)) {
                        static::addCssClass('disabled', $itemOptions);
                    }
                    if (!isset($itemOptions['linkOptions'])) {
                        $itemOptions['linkOptions'] = array();
                    }
                    $icon = BsArray::popValue('icon', $itemOptions);
                    if (!empty($icon)) {
                        $label = static::icon($icon) . ' ' . $label;
                    }
                    $items = BsArray::popValue('items', $itemOptions, array());
                    $url = BsArray::popValue('url', $itemOptions, false);
                    $divider = BsArray::popValue('divider', $itemOptions, false);

                    if ($divider) {
                        $output .= static::menuDivider($itemOptions);
                    } elseif ($url === false && empty($items)) {
                        $output .= static::dropDownHeader($label, $itemOptions);
                    } elseif (empty($items)) {
                        $itemOptions['linkOptions']['tabindex'] = -1;
                        $output .= static::menuLink($label, $url, $itemOptions);
                    } else {
                        $output .= static::menuDropdown($label, $url, $items, $itemOptions, $depth);
                    }
                }
            }
            $output .= '</ul>';
            return $output;
        } else {
            return '';
        }
    }

    /**
     * Generates a menu link.
     * @param string $label the link label.
     * @param array $url the link url.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated menu item.
     */
    public static function menuLink($label, $url, $htmlOptions = array())
    {
        $linkOptions = BsArray::popValue('linkOptions', $htmlOptions, array());
        $content = static::link($label, $url, $linkOptions);
        return static::tag('li', $htmlOptions, $content);
    }

    // Images
    // http://twitter.github.io/bootstrap/2.3.2/base-css.html#images
    // --------------------------------------------------

    /**
     * Generates a menu dropdown.
     * @param string $label the link label.
     * @param string $url the link URL.
     * @param array $items the menu configuration.
     * @param array $htmlOptions additional HTML attributes.
     * @param integer $depth the current depth.
     * @return string the generated dropdown.
     */
    protected static function menuDropdown($label, $url, $items, $htmlOptions, $depth = 0)
    {
        static::addCssClass($depth === 0 ? 'dropdown' : 'dropdown-submenu', $htmlOptions);
        $linkOptions = BsArray::popValue('linkOptions', $htmlOptions, array());
        $menuOptions = BsArray::popValue('menuOptions', $htmlOptions, array());
        static::addCssClass('dropdown-menu', $menuOptions);
        if ($depth === 0) {
            $defaultId = parent::ID_PREFIX . parent::$count++;
            BsArray::defaultValue('id', $defaultId, $menuOptions);
            $menuOptions['aria-labelledby'] = $menuOptions['id'];
            $menuOptions['role'] = 'menu';
        }
        $output = static::openTag('li', $htmlOptions);
        $output .= static::dropdownToggleMenuLink($label, $url, $linkOptions, $depth);
        $output .= static::menu($items, $menuOptions, $depth + 1);
        $output .= '</li>';
        return $output;
    }

    /**
     * Generates a dropdown toggle menu item.
     * @param string $label the menu item text.
     * @param string $url the menu item URL.
     * @param array $htmlOptions additional HTML attributes.
     * @param int $depth the menu depth at which this link is located
     * @return string the generated menu item.
     */
    public static function dropdownToggleMenuLink($label, $url = '#', $htmlOptions = array(), $depth = 0)
    {
        static::addCssClass('dropdown-toggle', $htmlOptions);
        if ($depth === 0) {
            $label .= ' <b class="caret"></b>';
        }
        $htmlOptions['data-toggle'] = 'dropdown';
        return static::link($label, $url, $htmlOptions);
    }

    /**
     * Generates a submit button.
     * @param string $label the button label
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated button.
     */
    public static function inputButton($label = 'Submit', $htmlOptions = array())
    {
        return static::btn(self::BUTTON_TYPE_INPUTBUTTON, $label, $htmlOptions);
    }

    /**
     * Generates a submit button.
     * @param string $label the button label
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated button.
     */
    public static function inputSubmitButton($label = 'Submit', $htmlOptions = array())
    {
        return static::btn(self::BUTTON_TYPE_INPUTSUBMIT, $label, $htmlOptions);
    }

    // Icons by Glyphicons
    // http://twitter.github.io/bootstrap/2.3.2/base-css.html#icons
    // --------------------------------------------------

    /**
     * Generates a reset button.
     * @param string $label the button label
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated button.
     */
    public static function resetButton($label = 'Reset', $htmlOptions = array())
    {
        return static::btn(self::BUTTON_TYPE_RESET, $label, $htmlOptions);
    }

    //
    // COMPONENTS
    // --------------------------------------------------

    // Dropdowns
    // http://twitter.github.io/bootstrap/2.3.2/components.html#dropdowns
    // --------------------------------------------------

    /**
     * Generates an image submit button.
     * @param string $src the image URL
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated button.
     */
    public static function imageButton($src, $htmlOptions = array())
    {
        return static::btn(self::BUTTON_TYPE_IMAGE, $src, $htmlOptions);
    }

    /**
     * Generates a link that can initiate AJAX requests.
     * @param string $text the link body (it will NOT be HTML-encoded.)
     * @param mixed $url the URL for the AJAX request.
     * @param array $ajaxOptions AJAX options.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated link.
     */
    public static function ajaxLink($text, $url, $ajaxOptions = array(), $htmlOptions = array())
    {
        $htmlOptions['url'] = $url;
        $htmlOptions['ajaxOptions'] = $ajaxOptions;
        return static::btn(self::BUTTON_TYPE_AJAXLINK, $text, $htmlOptions);
    }

    /**
     * Generates a push button that can submit the current form in POST method.
     * @param string $label the button label
     * @param mixed $url the URL for the AJAX request.
     * @param array $ajaxOptions AJAX options.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated button.
     */
    public static function ajaxSubmitButton($label, $url, $ajaxOptions = array(), $htmlOptions = array())
    {
        $ajaxOptions['type'] = 'POST';
        $htmlOptions['type'] = 'submit';
        return static::ajaxButton($label, $url, $ajaxOptions, $htmlOptions);
    }

    /**
     * Generates a push button that can initiate AJAX requests.
     * @param string $label the button label.
     * @param mixed $url the URL for the AJAX request.
     * @param array $ajaxOptions AJAX options.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated button.
     */
    public static function ajaxButton($label, $url, $ajaxOptions = array(), $htmlOptions = array())
    {
        $ajaxOptions['url'] = $url;
        $htmlOptions['ajaxOptions'] = $ajaxOptions;
        return static::btn(self::BUTTON_TYPE_AJAXBUTTON, $label, $htmlOptions);
    }

    /**
     * Generates an image tag with rounded corners.
     * @param string $src the image URL.
     * @param string $alt the alternative text display.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated image tag.
     */
    public static function imageRounded($src, $alt = '', $htmlOptions = array())
    {
        $htmlOptions['type'] = self::IMAGE_TYPE_ROUNDED;
        return static::image($src, $alt, $htmlOptions);
    }

    // Button groups
    // http://twitter.github.io/bootstrap/2.3.2/components.html#buttonGroups
    // --------------------------------------------------

    /**
     * Generates an image tag.
     * @param string $src the image URL.
     * @param string $alt the alternative text display.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated image tag.
     */
    public static function image($src, $alt = '', $htmlOptions = array())
    {
        $type = BsArray::popValue('type', $htmlOptions);
        if (!empty($type)) {
            static::addCssClass('img-' . $type, $htmlOptions);
        }
        return parent::image($src, $alt, $htmlOptions);
    }

    /**
     * Generates an image tag with circle.
     * @param string $src the image URL.
     * @param string $alt the alternative text display.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated image tag.
     */
    public static function imageCircle($src, $alt = '', $htmlOptions = array())
    {
        $htmlOptions['type'] = self::IMAGE_TYPE_CIRCLE;
        return static::image($src, $alt, $htmlOptions);
    }

    /**
     * Generates an image tag within polaroid frame.
     * @param string $src the image URL.
     * @param string $alt the alternative text display.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated image tag.
     */
    public static function imageThumbnail($src, $alt = '', $htmlOptions = array())
    {
        $htmlOptions['type'] = self::IMAGE_TYPE_THUMBNAIL;
        return static::image($src, $alt, $htmlOptions);
    }

    /**
     * Generates an image tag within polaroid frame.
     * @param string $src the image URL.
     * @param string $alt the alternative text display.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated image tag.
     */
    public static function imageResponsive($src, $alt = '', $htmlOptions = array())
    {
        $htmlOptions['type'] = self::IMAGE_TYPE_RESPONSIVE;
        return static::image($src, $alt, $htmlOptions);
    }


    // Button dropdowns
    // http://twitter.github.io/bootstrap/2.3.2/components.html#buttonDropdowns
    // --------------------------------------------------

    /**
     * Generates a vertical button group.
     * @param array $buttons the button configurations.
     * @param array $htmlOptions additional HTML options.
     * @return string the generated button group.
     */
    public static function verticalButtonGroup(array $buttons, $htmlOptions = array())
    {
        $htmlOptions['vertical'] = true;
        return static::buttonGroup($buttons, $htmlOptions);
    }

    /**
     * Generates a button group.
     * @param array $buttons the button configurations.
     * @param array $htmlOptions additional HTML options.
     * @return string the generated button group.
     */
    public static function buttonGroup(array $buttons, $htmlOptions = array())
    {
        if (!empty($buttons)) {
            static::addCssClass('btn-group', $htmlOptions);

            if (BsArray::popValue('justified', $htmlOptions, false)) {
                static::addCssClass('btn-group-justified', $htmlOptions);
            }

            if (BsArray::popValue('vertical', $htmlOptions, false)) {
                static::addCssClass('btn-group-vertical', $htmlOptions);
            }

            $toggle = BsArray::popValue('toggle', $htmlOptions);
            if (!empty($toggle)) {
                $htmlOptions['data-toggle'] = 'buttons-' . $toggle;
            }
            $parentOptions = array(
                'color' => BsHtml::BUTTON_COLOR_DEFAULT,
                'size' => BsArray::popValue('size', $htmlOptions),
                'disabled' => BsArray::popValue('disabled', $htmlOptions)
            );
            $output = static::openTag('div', $htmlOptions);
            foreach ($buttons as $buttonOptions) {


                $own = BsArray::popValue('own', $buttonOptions, false);
                if (isset($buttonOptions['visible']) && $buttonOptions['visible'] === false) {
                    continue;
                }
                if (!empty($own)) {
                    $output .= $own;
                    continue;
                }
                $type = BsArray::popValue('type', $buttonOptions, false);
                // todo: consider removing the support for htmlOptions.
                $options = BsArray::popValue('htmlOptions', $buttonOptions, array());
                if (!empty($options)) {
                    $buttonOptions = BsArray::merge($options, $buttonOptions);
                }
                $buttonLabel = BsArray::popValue('label', $buttonOptions, '');
                $buttonOptions = BsArray::copyValues(array('color', 'size', 'disabled'), $parentOptions, $buttonOptions);
                $items = BsArray::popValue('items', $buttonOptions, array());
                if (!empty($items)) {
                    $output .= static::buttonDropdown($buttonLabel, $items, $buttonOptions);
                } else {

                    if (!empty($type) && $type = self::BUTTON_TYPE_LINK)
                        $output .= static::linkButton($buttonLabel, $buttonOptions);
                    else
                        $output .= static::button($buttonLabel, $buttonOptions);
                }
            }
            $output .= '</div>';
            return $output;
        }
        return '';
    }

    // Navs
    // http://twitter.github.io/bootstrap/2.3.2/components.html#navs
    // --------------------------------------------------

    /**
     * Generates a button with a dropdown menu.
     * @param string $label the button label text.
     * @param array $items the menu items.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated button.
     */
    public static function buttonDropdown($label, $items, $htmlOptions = array())
    {
        $htmlOptions['items'] = $items;
        $type = BsArray::popValue('type', $htmlOptions, self::BUTTON_TYPE_LINKBUTTON);
        return static::btn($type, $label, $htmlOptions);
    }

    /**
     * Generates a link submit button.
     * @param string $label the button label.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated button tag.
     */
    public static function linkButton($label = 'Submit', $htmlOptions = array())
    {
        return static::btn(self::BUTTON_TYPE_LINK, $label, $htmlOptions);
    }

    /**
     * Generates in a alert a link
     * @param string $label
     * @param array $htmlOptions
     * @return string
     */
    public static function alertLink($label = '', $htmlOptions = array())
    {
        static::addCssClass('alert-link', $htmlOptions);
        return static::createButton(self::BUTTON_TYPE_LINK, $label, $htmlOptions);
    }

    /**
     * Generates an button.
     * @param string $label the button label text.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated button.
     */
    public static function button($label = 'Button', $htmlOptions = array())
    {
        return static::htmlButton($label, $htmlOptions);
    }

    /**
     * Generates an HTML submit button.
     * @param string $label label for button
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated button.
     */
    public static function htmlButton($label = 'Button', $htmlOptions = array())
    {
        return static::btn(self::BUTTON_TYPE_HTML, $label, $htmlOptions);
    }

    /**
     * Generates a button toolbar.
     * @param array $groups the button group configurations.
     * @param array $htmlOptions additional HTML options.
     * @return string the generated button toolbar.
     */
    public static function buttonToolbar(array $groups, $htmlOptions = array())
    {
        if (!empty($groups)) {
            static::addCssClass('btn-toolbar', $htmlOptions);
            $parentOptions = array(
                'color' => BsArray::popValue('color', $htmlOptions),
                'size' => BsArray::popValue('size', $htmlOptions),
                'disabled' => BsArray::popValue('disabled', $htmlOptions)
            );
            $output = static::openTag('div', $htmlOptions);
            foreach ($groups as $groupOptions) {
                if (isset($groupOptions['visible']) && $groupOptions['visible'] === false) {
                    continue;
                }
                $items = BsArray::popValue('items', $groupOptions, array());
                if (empty($items)) {
                    continue;
                }
                // todo: consider removing the support for htmlOptions.
                $options = BsArray::popValue('htmlOptions', $groupOptions, array());
                if (!empty($options)) {
                    $groupOptions = BsArray::merge($options, $groupOptions);
                }
                $groupOptions = BsArray::copyValues(array('color', 'size', 'disabled'), $parentOptions, $groupOptions);
                $output .= static::buttonGroup($items, $groupOptions);
            }
            $output .= '</div>';
            return $output;
        }
        return '';
    }

    /**
     * Generates a button with a split dropdown menu.
     * @param string $label the button label text.
     * @param array $items the menu items.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated button.
     */
    public static function splitButtonDropdown($label, $items, $htmlOptions = array())
    {
        $htmlOptions['split'] = true;
        return static::buttonDropdown($label, $items, $htmlOptions);
    }

    /**
     * Generates a stacked tab navigation.
     * @param array $items the menu items.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated menu.
     */
    public static function stackedTabs($items, $htmlOptions = array())
    {
        $htmlOptions['stacked'] = true;
        return static::tabs($items, $htmlOptions);
    }

    /**
     * Generates a tab navigation.
     * @param array $items the menu items.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated menu.
     */
    public static function tabs($items, $htmlOptions = array())
    {
        return static::nav(self::NAV_TYPE_TABS, $items, $htmlOptions);
    }

    /**
     * Generates a navigation menu.
     * @param string $type the menu type.
     * @param array $items the menu items.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated menu.
     */
    public static function nav($type, $items, $htmlOptions = array())
    {
        static::addCssClass('nav', $htmlOptions);
        if (!empty($type)) {
            if ($type == 'navbar')
                static::addCssClass('navbar-nav', $htmlOptions);
            else
                static::addCssClass('nav-' . $type, $htmlOptions);

        }
        $justified = BsArray::popValue('justified', $htmlOptions, false);
        if ($justified) {
            static::addCssClass('nav-justified', $htmlOptions);
        }
        if ($type !== self::NAV_TYPE_LIST && BsArray::popValue('stacked', $htmlOptions, false)) {
            static::addCssClass('nav-stacked', $htmlOptions);
        }
        return static::menu($items, $htmlOptions);
    }

    /**
     * Generates a stacked pills navigation.
     * @param array $items the menu items.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated menu.
     */
    public static function stackedPills($items, $htmlOptions = array())
    {
        $htmlOptions['stacked'] = true;
        return static::pills($items, $htmlOptions);
    }

    /**
     * Generates a pills navigation.
     * @param array $items the menu items.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated menu.
     */
    public static function pills($items, $htmlOptions = array())
    {
        return static::nav(self::NAV_TYPE_PILLS, $items, $htmlOptions);
    }

    public static function listGroup($items, $htmlOptions = array())
    {
        $htmlOptions['listGroup'] = true;
        return static::listGroupHeader($items, $htmlOptions);
    }

    /**
     * Generates a navigation menu.
     * @param array $items the menu items.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated menu.
     */
    public static function listGroupHeader($items, $htmlOptions = array())
    {
        if (!empty($type)) {
            static::addCssClass('nav-' . $type, $htmlOptions);
        }
        return static::listGroupMenu($items, $htmlOptions);
    }

    /**
     * Generates a menu.
     * @param array $items the menu items.
     * @param array $htmlOptions additional HTML attributes.
     * @param integer $depth the current depth.
     * @return string the generated menu.
     */
    public static function listGroupMenu(array $items, $htmlOptions = array(), $depth = 0)
    {
        // todo: consider making this method protected.
        if (!empty($items)) {
            $htmlOptions['class'] = 'list-group';
            $output = static::openTag('ul', $htmlOptions);
            foreach ($items as $itemOptions) {
                if (is_string($itemOptions)) {
                    $output .= $itemOptions;
                } else {
                    if (isset($itemOptions['visible']) && $itemOptions['visible'] === false) {
                        continue;
                    }
                    // todo: consider removing the support for htmlOptions.
                    $options = BsArray::popValue('htmlOptions', $itemOptions, array());
                    static::addCssClass('list-group-item', $itemOptions);
                    if (!empty($options)) {
                        $itemOptions = BsArray::merge($options, $itemOptions);
                    }
                    $label = BsArray::popValue('label', $itemOptions, '');

                    if (BsArray::popValue('active', $itemOptions, false)) {
                        static::addCssClass('active', $itemOptions);
                    }
                    if (BsArray::popValue('disabled', $itemOptions, false)) {
                        static::addCssClass('disabled', $itemOptions);
                    }
                    if (!isset($itemOptions['linkOptions'])) {
                        $itemOptions['linkOptions'] = array();
                    }
                    $icon = BsArray::popValue('icon', $itemOptions);
                    if (!empty($icon)) {
                        $label = static::icon($icon) . ' ' . $label;
                    }
                    $items = BsArray::popValue('items', $itemOptions, array());
                    $url = BsArray::popValue('url', $itemOptions, false);
                    if (empty($items)) {
                        $itemOptions['linkOptions']['tabindex'] = -1;
                        $output .= static::menuLink($label, $url, $itemOptions);
                    } else {
                        $output .= static::menuDropdown($label, $url, $items, $itemOptions, $depth);
                    }
                }
            }
            $output .= '</ul>';
            return $output;
        } else {
            return '';
        }
    }

    /**
     * Generates a list navigation.
     * @param array $items the menu items.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated menu.
     */
    public static function navList($items, $htmlOptions = array())
    {
        foreach ($items as $i => $itemOptions) {
            if (!isset($itemOptions['url']) && !isset($itemOptions['items'])) {
                $label = BsArray::popValue('label', $itemOptions, '');
                $items[$i] = static::menuHeader($label, $itemOptions);
            }
        }
        return static::nav(self::NAV_TYPE_LIST, $items, $htmlOptions);
    }

    /**
     * Generates a menu header.
     * @param string $label the header text.
     * @param array $htmlOptions additional HTML options.
     * @return string the generated header.
     */
    public static function menuHeader($label, $htmlOptions = array())
    {
        $linkOptions = BsArray::popValue('linkOptions', $htmlOptions, array());
        static::addCssClass('nav-header', $htmlOptions);
        return static::tag('li', $htmlOptions, $label);
    }

    /**
     * Generates a menu text.
     * @param string $label the emphasis text.
     * @param array $htmlOptions additional HTML options.
     * @return string the generated emphasis.
     */
    public static function menuText($label, $htmlOptions = array())
    {
        static::addCssClass('navbar-text', $htmlOptions);
        $pull = BsArray::popValue('pull', $htmlOptions, false);

        if ($pull)
            static::addCssClass('pull-' . $pull, $htmlOptions);

        return static::emphasis($label, $htmlOptions);
    }

    /**
     * Generates a menu header.
     * @param string $label the header text.
     * @param array $htmlOptions additional HTML options.
     * @return string the generated header.
     */
    public static function dropDownHeader($label, $htmlOptions = array())
    {
        $linkOptions = BsArray::popValue('linkOptions', $htmlOptions, array());
        static::addCssClass('dropdown-header', $htmlOptions);
        return static::tag('li', $htmlOptions, $label);
    }

    /**
     * Generates a menu divider.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated menu item.
     */
    public static function menuDivider($htmlOptions = array())
    {
        $linkOptions = BsArray::popValue('linkOptions', $htmlOptions, array());
        static::addCssClass('divider', $htmlOptions);
        return static::tag('li', $htmlOptions);
    }

    /**
     * Generates a tabbable tabs menu.
     * @param array $tabs the tab configurations.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated menu.
     */
    public static function tabbableTabs($tabs, $htmlOptions = array())
    {
        return static::tabbable(self::NAV_TYPE_TABS, $tabs, $htmlOptions);
    }


    /**
     * Generates a tabbable menu.
     * @param string $type the menu type.
     * @param array $tabs the tab configurations.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated menu.
     */
    protected static function tabbable($type, $tabs, $htmlOptions = array())
    {
        static::addCssClass('tabbable', $htmlOptions);
        $placement = BsArray::popValue('placement', $htmlOptions);
        if (!empty($placement)) {
            static::addCssClass('tabs-' . $placement, $htmlOptions);
        }
        $menuOptions = BsArray::popValue('menuOptions', $htmlOptions, array());
        $contentOptions = BsArray::popValue('contentOptions', $htmlOptions, array());
        static::addCssClass('tab-content', $contentOptions);
        $panes = array();
        $menu = static::nav($type, static::normalizeTabs($tabs, $panes), $menuOptions);
        $content = static::tag('div', $contentOptions, implode('', $panes));
        $output = static::openTag('div', $htmlOptions);
        $output .= $placement === self::TABS_PLACEMENT_BELOW ? $content . $menu : $menu . $content;
        $output .= '</div>';
        return $output;
    }

    /**
     * Normalizes the tab configuration.
     * @param array $tabs the tab configuration.
     * @param array $panes a reference to the panes array.
     * @param integer $i the running index.
     * @return array the items.
     */
    protected static function normalizeTabs($tabs, &$panes, $i = 0)
    {
        $menuItems = array();
        foreach ($tabs as $tabOptions) {
            if (isset($tabOptions['visible']) && $tabOptions['visible'] === false) {
                continue;
            }
            $menuItem = array();
            $menuItem['icon'] = BsArray::popValue('icon', $tabOptions);
            $menuItem['label'] = BsArray::popValue('label', $tabOptions, '');
            $menuItem['active'] = BsArray::getValue('active', $tabOptions, false);
            $menuItem['disabled'] = BsArray::popValue('disabled', $tabOptions, false);
            $menuItem['itemOptions'] = BsArray::popValue('itemOptions', $tabOptions, array());
            $menuItem['linkOptions'] = BsArray::popValue('linkOptions', $tabOptions, array());
            $items = BsArray::popValue('items', $tabOptions, array());
            if (!empty($items)) {
                $menuItem['linkOptions']['data-toggle'] = 'dropdown';
                $menuItem['items'] = static::normalizeTabs($items, $panes, $i);
            } else {
                $paneOptions = BsArray::popValue('paneOptions', $tabOptions, array());
                $id = $paneOptions['id'] = BsArray::popValue('id', $tabOptions, 'tab_' . ++$i);
                $menuItem['linkOptions']['data-toggle'] = 'tab';
                $menuItem['url'] = '#' . $id;
                static::addCssClass('tab-pane', $paneOptions);
                if (BsArray::popValue('fade', $tabOptions, true)) {
                    static::addCssClass('fade', $paneOptions);
                }
                if (BsArray::popValue('active', $tabOptions, false)) {
                    static::addCssClass('active in', $paneOptions);
                }
                $paneContent = BsArray::popValue('content', $tabOptions, '');
                $panes[] = static::tag('div', $paneOptions, $paneContent);
            }
            $menuItems[] = $menuItem;
        }
        return $menuItems;
    }

    /**
     * Generates a tabbable pills menu.
     * @param array $pills the pills configurations.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated menu.
     */
    public static function tabbablePills($pills, $htmlOptions = array())
    {
        return static::tabbable(self::NAV_TYPE_PILLS, $pills, $htmlOptions);
    }

    /**
     * Generates a navbar.
     * @param string $content the navbar content.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated navbar.
     *
     * @see http://getbootstrap.com/components/#navbar
     */
    public static function navbar($content, $htmlOptions = array())
    {
        static::addCssClass('navbar', $htmlOptions);
        $position = BsArray::popValue('position', $htmlOptions);
        if (!empty($position)) {
            static::addCssClass('navbar-' . $position, $htmlOptions);
        }
        $color = BsArray::popValue('color', $htmlOptions);
        if (!empty($color)) {
            static::addCssClass('navbar-' . $color, $htmlOptions);
        }
        BsArray::defaultValue('role', 'navigation', $htmlOptions);
        return static::tag('nav', $htmlOptions, $content);;
    }

    /**
     * Generates a brand link for the navbar.
     * @param string $label the link label text.
     * @param string $url the link url.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated link.
     */
    public static function navbarBrandLink($label, $url, $htmlOptions = array())
    {
        static::addCssClass('navbar-brand', $htmlOptions);
        return static::link($label, $url, $htmlOptions);
    }

    /**
     * Generates a text for the navbar.
     * @param string $text the text.
     * @param array $htmlOptions additional HTML attributes.
     * @param string $tag the HTML tag.
     * @return string the generated text block.
     */
    public static function navbarText($text, $htmlOptions = array(), $tag = 'p')
    {
        static::addCssClass('navbar-text', $htmlOptions);
        return static::tag($tag, $htmlOptions, $text);
    }

    /**
     * Generates a menu divider for the navbar.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated divider.
     */
    public static function navbarMenuDivider($htmlOptions = array())
    {
        static::addCssClass('divider', $htmlOptions);
        return static::tag('li', $htmlOptions);
    }

    // Breadcrumbs
    // http://getbootstrap.com/components/#breadcrumbs
    // --------------------------------------------------

    /**
     * Generates a navbar form.
     * @param mixed $action the form action URL.
     * @param string $method form method (e.g. post, get).
     * @param array $htmlOptions additional HTML attributes
     * @return string the generated form.
     */
    public static function navbarForm($action, $method = 'post', $htmlOptions = array())
    {
        static::addCssClass('navbar-form', $htmlOptions);
        return static::form($action, $method, $htmlOptions);
    }

    // Pagination
    // http://twitter.github.io/bootstrap/2.3.2/components.html#pagination
    // --------------------------------------------------

    /**
     * Generates a navbar search form.
     * @param mixed $action the form action URL.
     * @param string $method form method (e.g. post, get).
     * @param array $htmlOptions additional HTML attributes
     * @return string the generated form.
     */
    public static function navbarSearchForm($action, $method = 'post', $htmlOptions = array())
    {
        static::addCssClass('navbar-search', $htmlOptions);
        return static::searchForm($action, $method, $htmlOptions);
    }

    /**
     * Generates a search form.
     * @param mixed $action the form action URL.
     * @param string $method form method (e.g. post, get).
     * @param array $htmlOptions additional HTML options.
     * @return string the generated form.
     */
    public static function searchForm($action, $method = 'post', $htmlOptions = array())
    {
        static::addCssClass('form-search', $htmlOptions);
        $inputOptions = BsArray::popValue('inputOptions', $htmlOptions, array());
        $inputOptions = BsArray::merge(array('type' => 'text', 'placeholder' => 'Search'), $inputOptions);
        $name = BsArray::popValue('name', $inputOptions, 'search');
        $value = BsArray::popValue('value', $inputOptions, '');
        $output = static::beginFormBs(self::FORM_LAYOUT_SEARCH, $action, $method, $htmlOptions);
        $output .= static::searchQueryField($name, $value, $inputOptions);
        $output .= parent::endForm();
        return $output;
    }

    /**
     * Generates a collapse element.
     * @param string $target the CSS selector for the target element.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated icon.
     */
    public static function navbarCollapseLink($target, $htmlOptions = array())
    {
        static::addCssClass('navbar-toggle', $htmlOptions);
        $htmlOptions['data-toggle'] = 'collapse';
        $htmlOptions['data-target'] = $target;
        $content = '<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>';
        BsArray::defaultValue('type', 'button', $htmlOptions);
        return static::tag('button', $htmlOptions, $content);
    }

    /**
     * Generates a breadcrumb menu.
     * @link http://www.yiiframework.com/doc/api/1.1/CBreadcrumbs
     * @param array $links the breadcrumb links.
     * @return string the generated breadcrumb.
     */
    public static function breadcrumbs($links)
    {
        $breadCrumbWidget = new BsBreadcrumb();
        $breadCrumbWidget->links = $links;
        return $breadCrumbWidget->run();
    }

    // Labels and badges
    // http://twitter.github.io/bootstrap/2.3.2/components.html#labels-badges
    // --------------------------------------------------

    /**
     * Generates a pagination.
     * @param array $items the pagination buttons.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated pagination.
     */
    public static function pagination(array $items, $htmlOptions = array())
    {
        if (!empty($items)) {
            static::addCssClass('pagination', $htmlOptions);
            $size = BsArray::popValue('size', $htmlOptions);
            if (!empty($size)) {
                static::addCssClass('pagination-' . $size, $htmlOptions);
            }
            $align = BsArray::popValue('align', $htmlOptions);
            if (!empty($align)) {
                static::addCssClass('pagination-' . $align, $htmlOptions);
            }
            $listOptions = BsArray::popValue('listOptions', $htmlOptions, array());
            $output = static::openTag('ul', $htmlOptions, $listOptions);
            foreach ($items as $itemOptions) {
                // todo: consider removing the support for htmlOptions.
                $options = BsArray::popValue('htmlOptions', $itemOptions, array());
                if (!empty($options)) {
                    $itemOptions = BsArray::merge($options, $itemOptions);
                }
                $label = BsArray::popValue('label', $itemOptions, '');
                $url = BsArray::popValue('url', $itemOptions, false);
                $output .= static::paginationLink($label, $url, $itemOptions);
            }
            $output .= '</ul>';
            return $output;
        }
        return '';
    }

    /**
     * Generates a pagination link.
     * @param string $label the link label text.
     * @param mixed $url the link url.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated link.
     */
    public static function paginationLink($label, $url, $htmlOptions = array())
    {
        $linkOptions = BsArray::popValue('linkOptions', $htmlOptions, array());
        if (BsArray::popValue('active', $htmlOptions, false)) {
            $label .= static::tag('span', array('class' => 'sr-only'), BsArray::popValue('activeLabelSrOnly', $htmlOptions, '(current)'));
            static::addCssClass('active', $htmlOptions);
        }
        if (BsArray::popValue('disabled', $htmlOptions, false)) {
            static::addCssClass('disabled', $htmlOptions);
        }
        $content = static::link($label, $url, $linkOptions);
        return static::tag('li', $htmlOptions, $content);
    }

    // Typography
    // http://twitter.github.io/bootstrap/2.3.2/components.html#typography
    // --------------------------------------------------

    /**
     * Generates a pager.
     * @param array $links the pager buttons.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated pager.
     */
    public static function pager(array $links, $htmlOptions = array())
    {
        if (!empty($links)) {
            static::addCssClass('pager', $htmlOptions);
            $output = static::openTag('ul', $htmlOptions);
            foreach ($links as $itemOptions) {
                // todo: consider removing the support for htmlOptions.
                $options = BsArray::popValue('htmlOptions', $itemOptions, array());
                if (!empty($options)) {
                    $itemOptions = BsArray::merge($options, $itemOptions);
                }
                $label = BsArray::popValue('label', $itemOptions, '');
                $url = BsArray::popValue('url', $itemOptions, false);
                $output .= static::pagerLink($label, $url, $itemOptions);
            }
            $output .= '</ul>';
            return $output;
        }
        return '';
    }

    /**
     * Generates a pager link.
     * @param string $label the link label text.
     * @param mixed $url the link url.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated link.
     */
    public static function pagerLink($label, $url, $htmlOptions = array())
    {
        $linkOptions = BsArray::popValue('linkOptions', $htmlOptions, array());
        if (BsArray::popValue('previous', $htmlOptions, false)) {
            static::addCssClass('previous', $htmlOptions);
        }
        if (BsArray::popValue('next', $htmlOptions, false)) {
            static::addCssClass('next', $htmlOptions);
        }
        if (BsArray::popValue('disabled', $htmlOptions, false)) {
            static::addCssClass('disabled', $htmlOptions);
        }
        $content = static::link($label, $url, $linkOptions);
        return static::tag('li', $htmlOptions, $content);
    }

    // Thumbnails
    // http://twitter.github.io/bootstrap/2.3.2/components.html#thumbnails
    // --------------------------------------------------

    /**
     * Generates a label span.
     * @param string $label the label text.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated span.
     */
    public static function labelBs($label, $htmlOptions = array())
    {
        static::addCssClass('label', $htmlOptions);
        $color = BsArray::popValue('color', $htmlOptions);
        if (!empty($color)) {
            static::addCssClass('label-' . $color, $htmlOptions);
        }
        return static::tag('span', $htmlOptions, $label);
    }

    /**
     * Generates a badge span.
     * @param string $label the badge text.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated span.
     */
    public static function badge($label, $htmlOptions = array())
    {
        static::addCssClass('badge', $htmlOptions);
        $color = BsArray::popValue('color', $htmlOptions);
        if (!empty($color)) {
            static::addCssClass('badge-' . $color, $htmlOptions);
        }
        return static::tag('span', $htmlOptions, $label);
    }

    /**
     * Generates a hero unit.
     * @param string $heading the heading text.
     * @param string $content the content text.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated hero unit.
     */
    public static function jumbotron($heading, $content, $htmlOptions = array())
    {
        static::addCssClass('jumbotron', $htmlOptions);
        $headingOptions = BsArray::popValue('headingOptions', $htmlOptions, array());
        $output = static::openTag('div', $htmlOptions);
        $output .= static::openTag('div', array('class' => 'content'));
        $output .= static::tag('h1', $headingOptions, $heading);
        $output .= $content;
        $output .= '</div>';
        $output .= '</div>';
        return $output;
    }

    // Alerts
    // http://twitter.github.io/bootstrap/2.3.2/components.html#alerts
    // --------------------------------------------------

    /**
     * Generates a pager header.
     * @param string $heading the heading text.
     * @param string $subtext the subtext.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated pager header.
     */
    public static function pageHeader($heading, $subtext = '', $htmlOptions = array())
    {
        static::addCssClass('page-header', $htmlOptions);
        $headerOptions = BsArray::popValue('headerOptions', $htmlOptions, array());
        $subtextOptions = BsArray::popValue('subtextOptions', $htmlOptions, array());
        $output = static::openTag('div', $htmlOptions);
        $output .= static::openTag('h1', $headerOptions);
        $output .= parent::encode($heading) . ' ' . static::tag('small', $subtextOptions, $subtext);
        $output .= '</h1>';
        $output .= '</div>';
        return $output;
    }

    public static function rowThumbnails(array $thumbnails, $htmlOptions)
    {
        if (empty($thumbnails))
            return false;

        $output = static::openTag('div', array('class' => 'row'));
        $row = BsArray::popValue('row', $htmlOptions, false);
        if (!$row) {
            $row = array(
                'lg' => '3',
                'md' => '4',
                'sm' => '6',
                'xs' => '12'
            );
        }
        foreach ($thumbnails as $timage) {
            $output .= static::openTag('div', array(
                'class' => static::generateThumbnailRowClass($row)
            ));
            if (isset($timage['image'])) {
                $image = $timage['image'];
            }
            if (isset($timage['url'])) {
                $url = $timage['url'];
            }
            $output .= static::thumbnailLink(parent::tag('img', $image), $url);
            $output .= "</div>";
        }
        $output .= "</div>";
        return $output;
    }

    private static function generateThumbnailRowClass($row)
    {
        $cssCLass = '';
        foreach ($row as $key => $value) {
            $cssCLass .= "col-{$key}-{$value} ";
        }
        return $cssCLass;
    }

    /**
     * set the label CssClass by Layout
     * @param string $layout
     * @param array $labelOptions
     * @return array new label options
     */
    public static function setLabelOptionsByLayout($layout, $labelOptions = array())
    {

        if (empty($layout)) {
            BsHtml::addCssClass('control-label', $labelOptions);
            return $labelOptions;
        }
        if ($layout === BsHtml::FORM_LAYOUT_INLINE) {
            BsHtml::addCssClass('control-label', $labelOptions);
            BsHtml::addCssClass('sr-only', $labelOptions);
            return $labelOptions;
        }

        $labelClass = BsArray::popValue('class', $labelOptions, BsHtml::$formLayoutHorizontalLabelClass);
        BsHtml::addCssClass('control-label', $labelOptions);
        BsHtml::addCssClass($labelClass, $labelOptions);
        return $labelOptions;

    }

    /**
     * Generates a list of thumbnails.
     * @param array $thumbnails the list configuration.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated thumbnails.
     */
    public static function thumbnails(array $thumbnails, $htmlOptions = array())
    {
        if (!empty($thumbnails)) {
            static::addCssClass('thumbnails', $htmlOptions);
            $defaultSpan = BsArray::popValue('span', $htmlOptions, 3);
            $output = static::openTag('ul', $htmlOptions);
            foreach ($thumbnails as $thumbnailOptions) {
                if (isset($thumbnailOptions['visible']) && $thumbnailOptions['visible'] === false) {
                    continue;
                }
                // todo: consider removing the support for htmlOptions.
                $options = BsArray::popValue('htmlOptions', $thumbnailOptions, array());
                if (!empty($options)) {
                    $thumbnailOptions = BsArray::merge($options, $thumbnailOptions);
                }
                $thumbnailOptions['itemOptions']['span'] = BsArray::popValue('span', $thumbnailOptions, $defaultSpan);
                $caption = BsArray::popValue('caption', $thumbnailOptions, '');
                $captionOptions = BsArray::popValue('captionOptions', $thumbnailOptions, array());
                static::addCssClass('caption', $captionOptions);
                $label = BsArray::popValue('label', $thumbnailOptions);
                $labelOptions = BsArray::popValue('labelOptions', $thumbnailOptions, array());
                if (!empty($label)) {
                    $caption = static::tag('h3', $labelOptions, $label) . $caption;
                }
                $content = !empty($caption) ? static::tag('div', $captionOptions, $caption) : '';
                $image = BsArray::popValue('image', $thumbnailOptions);
                $imageOptions = BsArray::popValue('imageOptions', $thumbnailOptions, array());
                $imageAlt = BsArray::popValue('alt', $imageOptions, '');
                if (!empty($image)) {
                    $content = parent::image($image, $imageAlt, $imageOptions) . $content;
                }
                $url = BsArray::popValue('url', $thumbnailOptions, false);
                $output .= $url !== false
                    ? static::thumbnailLink($content, $url, $thumbnailOptions)
                    : static::thumbnail($content, $thumbnailOptions);
            }
            $output .= '</ul>';
            return $output;
        } else {
            return '';
        }
    }

    // Progress bars
    // http://twitter.github.io/bootstrap/2.3.2/components.html#progress
    // --------------------------------------------------

    /**
     * Generates a link thumbnail.
     * @param string $content the thumbnail content.
     * @param mixed $url the url that the thumbnail links to.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated thumbnail.
     */
    public static function thumbnailLink($content, $url = '#', $htmlOptions = array())
    {
        $itemOptions = BsArray::popValue('itemOptions', $htmlOptions, array());
        static::addCssClass('thumbnail', $htmlOptions);
        $content = static::link($content, $url, $htmlOptions);
        return $content;
    }

    /**
     * Generates a thumbnail.
     * @param string $content the thumbnail content.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated thumbnail.
     */
    public static function thumbnail($content, $htmlOptions = array())
    {
        $itemOptions = BsArray::popValue('itemOptions', $htmlOptions, array());
        static::addCssClass('thumbnail', $htmlOptions);
        //$output = static::openTag('li', $itemOptions);
        $output = static::tag('div', $htmlOptions, $content);
//        $output .= '</li>';
        return $output;
    }

    /**
     * Generates an alert block.
     * @param string $color the color of the alert.
     * @param string $message the message to display.
     * @param array $htmlOptions additional HTML options.
     * @return string the generated alert.
     */
    public static function blockAlert($color, $message, $htmlOptions = array())
    {
        $htmlOptions['block'] = true;
        return static::alert($color, $message, $htmlOptions);
    }

    /**
     * Generates an alert.
     * @param string $color the color of the alert.
     * @param string $message the message to display.
     * @param array $htmlOptions additional HTML options.
     * @return string the generated alert.
     */
    public static function alert($color, $message, $htmlOptions = array())
    {
        static::addCssClass('alert', $htmlOptions);
        if (!empty($color)) {
            static::addCssClass('alert-' . $color, $htmlOptions);
        }
        if (BsArray::popValue('in', $htmlOptions, true)) {
            static::addCssClass('in', $htmlOptions);
        }
        if (BsArray::popValue('block', $htmlOptions, false)) {
            static::addCssClass('alert-block', $htmlOptions);
        }
        if (BsArray::popValue('fade', $htmlOptions, true)) {
            static::addCssClass('fade', $htmlOptions);
        }
        $closeText = BsArray::popValue('closeText', $htmlOptions, self::CLOSE_TEXT);
        $closeOptions = BsArray::popValue('closeOptions', $htmlOptions, array());
        $closeOptions['dismiss'] = self::CLOSE_DISMISS_ALERT;
        $output = static::openTag('div', $htmlOptions);
        $output .= $closeText !== false ? static::closeLink($closeText, '#', $closeOptions) : '';
        $output .= $message;
        $output .= '</div>';
        return $output;
    }

    /**
     * Generates a close link.
     * @param string $label the link label text.
     * @param mixed $url the link url.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated link.
     */
    public static function closeLink($label = self::CLOSE_TEXT, $url = '#', $htmlOptions = array())
    {
        $htmlOptions['href'] = $url;
        return static::close('a', $label, $htmlOptions);
    }

    /**
     * Generates a close element.
     * @param string $tag the tag name.
     * @param string $label the element label text.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated element.
     */
    protected static function close($tag, $label, $htmlOptions = array())
    {
        static::addCssClass('close', $htmlOptions);
        $dismiss = BsArray::popValue('dismiss', $htmlOptions);
        if (!empty($dismiss)) {
            $htmlOptions['data-dismiss'] = $dismiss;
        }
        $htmlOptions['type'] = 'button';
        return static::tag($tag, $htmlOptions, $label);
    }

    // Media objects
    // http://twitter.github.io/bootstrap/2.3.2/components.html#media
    // --------------------------------------------------

    /**
     * Generates an animated progress bar.
     * @param integer $width the progress in percent.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated progress bar.
     */
    public static function animatedProgressBar($width = 0, $htmlOptions = array())
    {
        $htmlOptions['animated'] = true;
        return static::stripedProgressBar($width, $htmlOptions);
    }

    /**
     * Generates a striped progress bar.
     * @param integer $width the progress in percent.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated progress bar.
     */
    public static function stripedProgressBar($width = 0, $htmlOptions = array())
    {
        $htmlOptions['striped'] = true;
        return static::progressBar($width, $htmlOptions);
    }

    /**
     * Generates a progress bar.
     * @param integer $width the progress in percent.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated progress bar.
     */
    public static function progressBar($width = 0, $htmlOptions = array())
    {
        $progressOption = array();
        $barOption = $htmlOptions;

        static::addCssClass('progress', $progressOption);
        $color = BsArray::popValue('color', $htmlOptions);

        if (!empty($color)) {
            static::addCssClass('progress-bar progress-bar-' . $color, $barOption);
        }
        if (BsArray::popValue('striped', $htmlOptions, false)) {
            static::addCssClass('progress-striped', $progressOption);
        }
        if (BsArray::popValue('active', $htmlOptions, false)) {
            static::addCssClass('active', $progressOption);
        }

        $content = BsArray::popValue('content', $htmlOptions);

        if (!empty($content)) {
            $barOption['content'] = $content;
        }

        $content = static::bar($width, $barOption);
        return static::tag('div', $progressOption, $content);
    }

    // Misc
    // http://twitter.github.io/bootstrap/2.3.2/components.html#misc
    // --------------------------------------------------

    /**
     * Generates a progress bar.
     * @param integer $width the progress in percent.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated bar.
     */
    protected static function bar($width = 0, $htmlOptions = array())
    {
        static::addCssClass('progress-bar', $htmlOptions);

        $color = BsArray::popValue('color', $htmlOptions);
        if (!empty($color)) {
            static::addCssClass('progress-bar-' . $color, $htmlOptions);
        }

        if ($width < 0) {
            $width = 0;
        }
        if ($width > 100) {
            $width = 100;
        }
        $default = array(
            'role' => 'progressbar',
            "aria-valuenow" => $width,
            "aria-valuemin" => 0,
            "aria-valuemax" => 100
        );
        foreach ($default as $key => $item) {
            $htmlOptions[$key] = $item;
        }

        static::addCssStyle("width: {$width}%;", $htmlOptions);
        $content = BsArray::popValue('content', $htmlOptions, '');
        return static::tag('div', $htmlOptions, $content);
    }

    /**
     * Appends a CSS style string to the given options.
     * @param string $style the CSS style string.
     * @param array $htmlOptions the options.
     * @return array the options.
     */
    public static function addCssStyle($style, &$htmlOptions)
    {
        if (is_array($style)) {
            $style = implode('; ', $style);
        }
        $style = rtrim($style, ';');
        $htmlOptions['style'] = isset($htmlOptions['style'])
            ? rtrim($htmlOptions['style'], ';') . '; ' . $style
            : $style;
    }

    /**
     * Generates a stacked progress bar.
     * @param array $bars the bar configurations.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated progress bar.
     */
    public static function stackedProgressBar(array $bars, $htmlOptions = array())
    {
        if (!empty($bars)) {
            static::addCssClass('progress', $htmlOptions);
            $output = static::openTag('div', $htmlOptions);
            $totalWidth = 0;
            foreach ($bars as $barOptions) {
                if (isset($barOptions['visible']) && !$barOptions['visible']) {
                    continue;
                }
                $width = BsArray::popValue('width', $barOptions, 0);
                $tmp = $totalWidth;
                $totalWidth += $width;
                if ($totalWidth > 100) {
                    $width = 100 - $tmp;
                }
                $output .= static::bar($width, $barOptions);
            }
            $output .= '</div>';
            return $output;
        }
        return '';
    }

    /**
     * Generates a label span.
     * @param string $label the label text.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated span.
     */
    public static function bsLabel($label, $htmlOptions = array())
    {
//        $htmlOptions = self::addCssClass('label', $htmlOptions);
        $color = BsArray::popValue('color', $htmlOptions);
        if (!empty($color))
            static::addCssClass('label label-' . $color, $htmlOptions);
        else
            static::addCssClass('label label-default', $htmlOptions);

        return static::tag('span', $htmlOptions, $label);
    }

    /**
     * Generates a list of media objects.
     * @param array $items item configurations.
     * @param array $htmlOptions additional HTML attributes.
     * @return string generated list.
     */
    public static function mediaList(array $items, $htmlOptions = array())
    {
        if (!empty($items)) {
            static::addCssClass('media-list', $htmlOptions);
            $output = '';
            $output .= static::openTag('ul', $htmlOptions);
            $output .= static::medias($items, 'li');
            $output .= '</ul>';
            return $output;
        }
        return '';
    }

    //
    // JAVASCRIPT
    // --------------------------------------------------

    // Modals
    // http://twitter.github.io/bootstrap/2.3.2/javascript.html#modals
    // --------------------------------------------------

    // todo: create modal methods here.

    // Tooltips and Popovers
    // http://twitter.github.io/bootstrap/2.3.2/javascript.html#tooltips
    // http://twitter.github.io/bootstrap/2.3.2/javascript.html#popovers
    // --------------------------------------------------

    /**
     * Generates multiple media objects.
     * @param array $items item configurations.
     * @param string $tag the item tag name.
     * @return string generated objects.
     */
    public static function medias(array $items, $tag = 'div')
    {
        if (!empty($items)) {
            $output = '';
            foreach ($items as $itemOptions) {
                if (isset($itemOptions['visible']) && $itemOptions['visible'] === false) {
                    continue;
                }
                // todo: consider removing the support for htmlOptions.
                $options = BsArray::popValue('htmlOptions', $itemOptions, array());
                if (!empty($options)) {
                    $itemOptions = BsArray::merge($options, $itemOptions);
                }
                $image = BsArray::popValue('image', $itemOptions);
                $heading = BsArray::popValue('heading', $itemOptions, '');
                $content = BsArray::popValue('content', $itemOptions, '');
                BsArray::defaultValue('tag', $tag, $itemOptions);
                $output .= static::media($image, $heading, $content, $itemOptions);
            }
            return $output;
        }
        return '';
    }

    /**
     * Generates a single media object.
     * @param string $image the image url.
     * @param string $heading the heading text.
     * @param string $content the content text.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the media object.
     */
    public static function media($image, $heading, $content, $htmlOptions = array())
    {
        $tag = BsArray::popValue('tag', $htmlOptions, 'div');
        static::addCssClass('media', $htmlOptions);
        $linkOptions = BsArray::popValue('linkOptions', $htmlOptions, array());
        BsArray::defaultValue('pull', self::PULL_LEFT, $linkOptions);
        $imageOptions = BsArray::popValue('imageOptions', $htmlOptions, array());
        static::addCssClass('media-object', $imageOptions);
        $contentOptions = BsArray::popValue('contentOptions', $htmlOptions, array());
        static::addCssClass('media-body', $contentOptions);
        $headingOptions = BsArray::popValue('headingOptions', $htmlOptions, array());
        static::addCssClass('media-heading', $headingOptions);
        $items = BsArray::popValue('items', $htmlOptions);

        $output = static::openTag($tag, $htmlOptions);
        $alt = BsArray::popValue('alt', $imageOptions, '');
        $href = BsArray::popValue('href', $linkOptions, '#');
        if (!empty($image)) {
            $output .= static::link(parent::image($image, $alt, $imageOptions), $href, $linkOptions);
        }
        $output .= static::openTag('div', $contentOptions);
        $output .= static::tag('h4', $headingOptions, $heading);
        $output .= $content;
        if (!empty($items)) {
            $output .= static::medias($items);
        }
        $output .= '</div>';
        $output .= static::closeTag($tag);
        return $output;
    }

    /**
     * Generates a well element.
     * @param string $content the well content.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated well.
     */
    public static function well($content, $htmlOptions = array())
    {
        static::addCssClass('well', $htmlOptions);
        $size = BsArray::popValue('size', $htmlOptions);
        if (!empty($size)) {
            static::addCssClass('well-' . $size, $htmlOptions);
        }
        return static::tag('div', $htmlOptions, $content);
    }

    // Carousel
    // http://twitter.github.io/bootstrap/2.3.2/javascript.html#carousel
    // --------------------------------------------------

    /**
     * Generates a close button.
     * @param string $label the button label text.
     * @param array $htmlOptions the HTML options for the button.
     * @return string the generated button.
     */
    public static function closeButton($label = self::CLOSE_TEXT, $htmlOptions = array())
    {
        return static::close('button', $label, $htmlOptions);
    }

    /**
     * Generates a collapse link.
     * @param string $label the link label.
     * @param string $target the CSS selector.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated link.
     */
    public static function collapseLink($label, $target, $htmlOptions = array())
    {
        $htmlOptions['data-toggle'] = 'collapse';
        return static::link($label, $target, $htmlOptions);
    }

    /**
     * Generates a tooltip.
     * @param string $label the tooltip link label text.
     * @param mixed $url the link url.
     * @param string $content the tooltip content text.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated tooltip.
     */
    public static function tooltip($label, $url, $content, $htmlOptions = array())
    {
        $htmlOptions['data-toggle'] = 'tooltip';
        return static::tooltipPopover($label, $url, $content, $htmlOptions);
    }

    /**
     * Generates a base tooltip.
     * @param string $label the tooltip link label text.
     * @param mixed $url the link url.
     * @param string $title the tooltip title text.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated tooltip.
     */
    protected static function tooltipPopover($label, $url, $title, $htmlOptions)
    {
        $htmlOptions['title'] = $title;
        if (BsArray::popValue('animation', $htmlOptions)) {
            $htmlOptions['data-animation'] = true;
        }
        if (BsArray::popValue('html', $htmlOptions)) {
            $htmlOptions['data-html'] = true;
        }
        if (BsArray::popValue('selector', $htmlOptions)) {
            $htmlOptions['data-selector'] = true;
        }
        $placement = BsArray::popValue('placement', $htmlOptions);
        if (!empty($placement)) {
            $htmlOptions['data-placement'] = $placement;
        }
        $trigger = BsArray::popValue('trigger', $htmlOptions);
        if (!empty($trigger)) {
            $htmlOptions['data-trigger'] = $trigger;
        }
        if (($delay = BsArray::popValue('delay', $htmlOptions)) !== null) {
            $htmlOptions['data-delay'] = $delay;
        }
        return static::link($label, $url, $htmlOptions);
    }

    /**
     * Generates a popover.
     * @param string $label the popover link label text.
     * @param string $title the popover title text.
     * @param string $content the popover content text.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated popover.
     */
    public static function popover($label, $title, $content, $htmlOptions = array())
    {
        $htmlOptions['data-content'] = $content;
        $htmlOptions['data-toggle'] = 'popover';
        return static::tooltipPopover($label, '#', $title, $htmlOptions);
    }

    // UTILITIES
    // --------------------------------------------------

    /**
     * Generates an image carousel.
     * @param array $items the item configurations.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated carousel.
     */
    public static function carousel(array $items, $htmlOptions = array())
    {
        if (!empty($items)) {
            $id = BsArray::getValue('id', $htmlOptions, parent::ID_PREFIX . parent::$count++);
            BsArray::defaultValue('id', $id, $htmlOptions);
            $selector = '#' . $id;
            static::addCssClass('carousel', $htmlOptions);
            if (BsArray::popValue('slide', $htmlOptions, true)) {
                static::addCssClass('slide', $htmlOptions);
            }
            $interval = BsArray::popValue('data-interval', $htmlOptions);
            if ($interval) {
                $htmlOptions['data-interval'] = $interval;
            }
            $pause = BsArray::popValue('data-pause', $htmlOptions);
            if ($pause) {
                $htmlOptions['data-pause'] = $pause;
            }
            $indicatorOptions = BsArray::popValue('indicatorOptions', $htmlOptions, array());
            $innerOptions = BsArray::popValue('innerOptions', $htmlOptions, array());
            static::addCssClass('carousel-inner', $innerOptions);
            $prevOptions = BsArray::popValue('prevOptions', $htmlOptions, array());
            $prevLabel = BsArray::popValue('label', $prevOptions, '&lsaquo;');
            $nextOptions = BsArray::popValue('nextOptions', $htmlOptions, array());
            $nextLabel = BsArray::popValue('label', $nextOptions, '&rsaquo;');
            $hidePrevAndNext = BsArray::popValue('hidePrevAndNext', $htmlOptions, false);
            $output = static::openTag('div', $htmlOptions);
            $output .= static::carouselIndicators($selector, count($items), $indicatorOptions);
            $output .= static::openTag('div', $innerOptions);
            foreach ($items as $i => $itemOptions) {
                if (isset($itemOptions['visible']) && $itemOptions['visible'] === false) {
                    continue;
                }
                if ($i === 0) { // first item should be active
                    static::addCssClass('active', $itemOptions);
                }
                $content = BsArray::popValue('content', $itemOptions, '');
                $image = BsArray::popValue('image', $itemOptions, '');
                $imageOptions = BsArray::popValue('imageOptions', $itemOptions, array());
                $imageAlt = BsArray::popValue('alt', $imageOptions, '');
                if (!empty($image)) {
                    $content = parent::image($image, $imageAlt, $imageOptions);
                }
                $label = BsArray::popValue('label', $itemOptions);
                $caption = BsArray::popValue('caption', $itemOptions);
                $output .= static::carouselItem($content, $label, $caption, $itemOptions);
            }
            $output .= '</div>';
            if (!$hidePrevAndNext) {
                $output .= static::carouselPrevLink($prevLabel, $selector, $prevOptions);
                $output .= static::carouselNextLink($nextLabel, $selector, $nextOptions);
            }
            $output .= '</div>';
            return $output;
        }
        return '';
    }

    /**
     * Generates an indicator for the carousel.
     * @param string $target the CSS selector for the target element.
     * @param integer $numSlides the number of slides.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated indicators.
     */
    public static function carouselIndicators($target, $numSlides, $htmlOptions = array())
    {
        static::addCssClass('carousel-indicators', $htmlOptions);
        $output = static::openTag('ol', $htmlOptions);
        for ($i = 0; $i < $numSlides; $i++) {
            $itemOptions = array('data-target' => $target, 'data-slide-to' => $i);
            if ($i === 0) {
                $itemOptions['class'] = 'active';
            }
            $output .= static::tag('li', $itemOptions, '', true);
        }
        $output .= '</ol>';
        return $output;
    }

    /**
     * Generates a carousel item.
     * @param string $content the content.
     * @param string $label the item label text.
     * @param string $caption the item caption text.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated item.
     */
    public static function carouselItem($content, $label, $caption, $htmlOptions = array())
    {
        static::addCssClass('item', $htmlOptions);
        $overlayOptions = BsArray::popValue('overlayOptions', $htmlOptions, array());
        static::addCssClass('carousel-caption', $overlayOptions);
        $labelOptions = BsArray::popValue('labelOptions', $htmlOptions, array());
        $captionOptions = BsArray::popValue('captionOptions', $htmlOptions, array());
        $url = BsArray::popValue('url', $htmlOptions, false);
        if ($url !== false) {
            $content = static::link($content, $url);
        }
        $output = static::openTag('div', $htmlOptions);
        $output .= $content;
        if (isset($label) || isset($caption)) {
            $output .= static::openTag('div', $overlayOptions);
            if ($label) {
                $output .= static::tag('h4', $labelOptions, $label);
            }
            if ($caption) {
                $output .= static::tag('p', $captionOptions, $caption);
            }
            $output .= '</div>';
        }
        $output .= '</div>';
        return $output;
    }

    /**
     * Generates a previous link for the carousel.
     * @param string $label the link label text.
     * @param mixed $url the link url.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated link.
     */
    public static function carouselPrevLink($label, $url = '#', $htmlOptions = array())
    {
        static::addCssClass('carousel-control left', $htmlOptions);
        $htmlOptions['data-slide'] = 'prev';
        return static::link($label, $url, $htmlOptions);
    }

    /**
     * Generates a next link for the carousel.
     * @param string $label the link label text.
     * @param mixed $url the link url.
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated link.
     */
    public static function carouselNextLink($label, $url = '#', $htmlOptions = array())
    {
        static::addCssClass('carousel-control right', $htmlOptions);
        $htmlOptions['data-slide'] = 'next';
        return static::link($label, $url, $htmlOptions);
    }

    /**
     * @param $className
     * @param $htmlOptions
     * @return mixed
     */
    public static function addClassName($className, $htmlOptions)
    {
        if (is_array($className))
            $className = implode(' ', $className);
        $htmlOptions['class'] = isset($htmlOptions['class']) ? $htmlOptions['class'] . ' ' . $className : $className;
        return $htmlOptions;
    }
}
