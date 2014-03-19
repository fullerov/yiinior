<?php
/*
 * @author -\- автор  Alexander Shapovalov <mail@shapovalov.org>
 * 
 * usage -\- использование
<?php  
 
$this->widget('ext.Yiinior.Yiinior', array(
'video'=>"http://www.youtube.com/watch?v=qD2olIdUGd8",
'id' => 'yiinior',
'width'=>640,
'height'=>480,
'autoplay'=>'true',
'autohide'=>'true',
'bgcolor'=>'#000'
));

?>
 */

class Yiinior extends CWidget
{
	 /** The uppod.swf url -\- Ссылка на .swf файл uppod'а
     * @var string 
     */
    public $swfUrl;
	
	  /** The media file or stream video URL -\- Адрес медиа файла или потока (RTMP, mov, mp4, flv, avi)
     * The media file must be a string -\- Адрес к файлу\потоку должен иметь строковой тип данных
     *
     * @var string
     */
    public $video;
    /** Player width -\- Ширина плеера
     * @var integer
     */
    public $width;
    /** Player height. -\- Высота плеера
     * @var integer
     */
    public $height;
	 /** Player background color -\- Цвет заднего фона плеера
     * @var string
     */
	public $bgcolor;
	 /** Player id. -\- Идентификатор ИД плеера
     * @var string
     */
	public $id;
	 /** Autoplay - true/flase
     * @var string
     */
	public $autoplay;
	 /** Auto hide menu - true/flase
     * @var string
     */
	public $autohide;
	 /** The asset folder after published  -\- Папка со скриптами после публикации
     * @var string
     */
    private $assets;
    /** 
     * Publishing the assets  -\- Публикация скриптов
     **/
	protected $scrpt;
	protected $img;
	 
    private function publishAssets() 
    {
        $assets = dirname(__FILE__).DIRECTORY_SEPARATOR."assets".DIRECTORY_SEPARATOR;
        $this->assets = Yii::app()->getAssetManager()->publish($assets);
    }
    /** 
     * Register the core uppod js lib -\- Регистрация скрипта плеера библиотека js
     *
     */
    private function registerScripts()
    {
		
        $url = $this->publishAssets();

        

    }
    /** 
     * Initialize the widget and necessary properties -\- Инициализация виджета и необходимых свойств
     * 
     */
    public function init()
    {
        $this->publishAssets();
        $this->registerScripts();
		$this->img=$this->assets."/plr.png";
		$this->scrpt=$this->assets."/swfobject.js";
        if(empty($this->width)) $this->width = 320;
		if(empty($this->height)) $this->height = 240;
		if(!isset($this->bgcolor)) $this->bgcolor = '#000';
		if(!isset($this->id)) $this->id = 'yiiniorplayer';
        if(!isset($this->swfUrl)) $this->swfUrl = $this->assets."/player.swf";
    }
    /** 
     * Render uppod player -\- Отображение плеера
     * 
     */
    public function run()
    {
       
        	$this->render('yiinior');

    }
 
   
}