<?php
/**
 * OpenСomments - плагин для гостевых комментариев
 *
 * Версия:	1.3
 * Автор:	flexbyte 
 * Профиль:	http://livestreet.ru/profile/flexbyte/
 * Сайт:	http://flexbyte.com
 **/
 
/**
 * Запрещаем напрямую через браузер обращение к этому файлу.
 */
if (!class_exists('Plugin')) {
	die('Hacking attemp!');
}

class PluginOpencomments extends Plugin {

	protected $aDelegates = array(
		'template' => array('comment_tree.tpl' => '_comment_tree.tpl', 'comment.tpl' => '_comment.tpl', 
		                    'blocks/block.stream_comment.tpl' => '_blocks/block.stream_comment.tpl', 'comment_list.tpl' => '_comment_list.tpl'),
	);
	
	protected $aInherits = array(
        'action' => array('ActionBlog','ActionAjax','ActionRss'),
		'mapper' => array('ModuleComment_MapperComment'),
        'entity' => array('ModuleComment_EntityComment')
    );
	
	/**
	 * Активация плагина
	 */
	public function Activate() {
        if( !$this->User_GetUserById(0) ) {
			$this->ExportSQL(dirname(__FILE__).'/dump.sql');
		}
		return true;
	}
	
	/**
	 * Инициализация плагина
	 */
	public function Init() {
	}
}
?>