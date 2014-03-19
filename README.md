- Yiinior 1.0
_______________________________________________________________________________________

Flash video player without any logos or copyright on screen. Based on free
version of FlashJunior player(http://www.flashjunior.ch/). 
Support: FLV, MP4, AVI, MOV, Youtube, Vimeo (Android and iOS like link to video for default player)

//Флэш видео плеер без каких-либо логотипов и копирайтов на экране. Основан на
бесплатной версии FlashJunior плеера (http://www.flashjunior.ch/). 
Поддерживает: FLV, MP4, AVI, MOV, Youtube, Vimeo (Android и iOS как ссылку на видео для плеера по-умачанию)
_______________________________________________________________________________________

author Alexander Shapovalov <mail@shapovalov.org>

//автор Александр Шаповалов <mail@shapovalov.org>

Usage:

//Использование:

Download and extract in: yii_web_root/protected/extensions

//Скачайте и распакуйте в: yii_корневая_директория/protected/extensions

Add this code in your view:

//Добавьте данный код к Вашему представлению:

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

//Где: 

'video' => адрес до видео файла,
'id' => идентификатор плеера,
'width' => ширина плеера,
'height' => высота плеера,
'bgcolor' => задний фон плеера перед его полной загрузкой
'autoplay'=>включение или отключение автопроигования видео,
'autohide'=>включение или отключение автоматического скрытия меню плеера,