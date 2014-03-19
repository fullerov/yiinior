<?php

if(!empty($this->bgcolor))
	$bgcolor=$this->bgcolor;
else
	$bgcolor='#000';

if(!empty($this->autoplay))
	$autoplay=$this->autoplay;
else
	$autoplay='false';

if(!empty($this->autohide))
	$autohide=$this->autohide;
else
	$autohide='false';

if(!empty($this->video)) {
	
	
				  $iphone = stristr($_SERVER['HTTP_USER_AGENT'],"iPhone");
                  $ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
                  $ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
				  $android=strpos($_SERVER['HTTP_USER_AGENT'],"Android");
                     if ($ipad == TRUE || $iphone == TRUE || $ipod == TRUE) {
                       
					echo '<video src="'.$this->video.'" width="'.$this->width.'" height="'.$this->height.'"></video>';    
					}
					elseif($android==TRUE)
					{
						echo ' <a target="_blank" width="'.$this->width.'" height="'.$this->height.'" href="'.$this->video.'"><img width="'.$this->width.'" height="'.$this->height.'" src="'.$this->img.'"/></a>';					
	
					}
					else
					{
	
	echo '<script type="text/javascript" src="'.$this->scrpt.'"></script> 
		<div id="'.$this->id.'"></div>
		<script type="text/javascript">
		//<![CDATA[
	var flashvars = {};
	flashvars.image = "";	
	
	flashvars.movie = "'.$this->video.'";
	flashvars.autoplay = "'.$autoplay.'";			
	flashvars.loop = "false";
	
	flashvars.autohide = "'.$autohide.'";
	
	flashvars.fullscreen = "true";
	
	flashvars.color_text = "0xFFFFFF";
	flashvars.color_seekbar = "0x13ABEC";
	flashvars.color_loadingbar = "0x828282";
	flashvars.color_seekbarbg = "0x333333";
	
	flashvars.color_button_out = "0x333333";
	flashvars.color_button_over = "0x000000";
	flashvars.color_button_highlight = "0xffffff";
	
	var params = {};
	params.allowfullscreen = "true";
	params.allowscriptaccess = "always";
	params.bgcolor = "'.$bgcolor.'";
	
	var attributes = {};
	attributes.align = "middle";
	
	swfobject.embedSWF("'.Yii::app()->request->baseUrl.$this->swfUrl.'", "'.$this->id.'", "'.$this->width.'", "'.$this->height.'", "9.0.45", "", flashvars, params, attributes);
//]]>
</script>';
	
	
					}
	
}

?>