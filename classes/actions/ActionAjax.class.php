<?php
/**
 * OpenСomments - плагин для гостевых комментариев
 *
 * Автор:	flexbyte 
 * Профиль:	http://livestreet.ru/profile/flexbyte/
 * Сайт:	http://flexbyte.com
 **/

/**
 * Класс обработки ajax запросов
 *
 */
class PluginOpencomments_ActionAjax extends PluginOpencomments_Inherit_ActionAjax {


	/**
	 * Предпросмотр текста
	 *
	 */
	protected function EventPreviewText() {

		if ($this->oUserCurrent) {
			parent::EventPreviewText();
			return;
		}

		$sText=getRequest('text',null,'post');
		$sTextResult = nl2br(strip_tags($sText));
		$this->Viewer_AssignAjax('sText',$sTextResult);
	}


}
?>