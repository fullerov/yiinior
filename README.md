<b>Yiinior 1.0</b>


Flash video player without any logos or copyright on screen. Based on free
version of FlashJunior player(http://www.flashjunior.ch/). 
Support: FLV, MP4, AVI, MOV, Youtube, Vimeo (Android and iOS like link to video for default player)

<i>//Флэш видео плеер без каких-либо логотипов и копирайтов на экране. Основан на
бесплатной версии FlashJunior плеера (http://www.flashjunior.ch/). 
Поддерживает: FLV, MP4, AVI, MOV, Youtube, Vimeo (Android и iOS как ссылку на видео для плеера по-умолчанию)</i>
____________________________________________________________________________

author Alexander Shapovalov <mail@shapovalov.org>

<i>//автор Александр Шаповалов <mail@shapovalov.org></i>

Usage:

<i>//Использование:</i>

Download and extract in: yii_web_root/protected/extensions

<i>//Скачайте и распакуйте в: yii_корневая_директория/protected/extensions</i>

Add this code in your view:

<i>//Добавьте данный код к Вашему представлению:</i>

<?php  
 
	$this->widget('ext.Yiinior.Yiinior', array(
	'video'=>"http://yousite.com/video/6.flv",
	'id' => 'yiinior',
	'width'=>640,
	'height'=>480,
	'autoplay'=>'false',
	'autohide'=>'true',
	'bgcolor'=>'#000'
));

?>

Where: 

'video' => address to video file,
'id' => player id,
'width' => player width,
'height' => player height,
'bgcolor' => player background color before player loading
'autoplay'=>enable or disable auto play video,
'autohide'=>enable or disable auto hide players menu,

<i>
//Где: 

'video' => адрес до видео файла,
'id' => идентификатор плеера,
'width' => ширина плеера,
'height' => высота плеера,
'bgcolor' => задний фон плеера перед его полной загрузкой
'autoplay'=>включение или отключение автопроигования видео,
'autohide'=>включение или отключение автоматического скрытия меню плеера</i>