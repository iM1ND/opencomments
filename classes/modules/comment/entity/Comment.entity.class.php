<?php
/**
 * OpenСomments - плагин для гостевых комментариев
 *
 * Автор:	flexbyte 
 * Профиль:	http://livestreet.ru/profile/flexbyte/
 * Сайт:	http://flexbyte.com
 **/

class PluginOpencomments_ModuleComment_EntityComment extends PluginOpencomments_Inherit_ModuleComment_EntityComment 
{ 
    public function getGuestName() {
        return $this->_aData['guest_name'];
    }
    public function getGuestEmail() {
        return $this->_aData['guest_email'];
    }
    
    public function setGuestName($data) {
        $this->_aData['guest_name']=$data;
    }
    public function setGuestEmail($data) {
        $this->_aData['guest_email']=$data;
    }
}
?>