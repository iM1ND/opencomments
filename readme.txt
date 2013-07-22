Плагин "OpenComments" (версия 1.3) для LiveStreet 1.0.3


ОПИСАНИЕ

Позволяет посетителям сайта оставлять комментарии под собственным именем.

Есть возможность отключать анонимные комментарии не используя деактивацию плагина.
Т.к. в случае деактивации все оставленные комментарии под именем гостя заменяются на логин гостевого пользователя, т.е. guest.

Для этого открываем файл /plugins/opencomments/config/config.php и меняем:
	Config::Set('opencomments.enabled', true);
на
	Config::Set('opencomments.enabled', false);

По умолчанию, плагин требует емайл от пользователя. Можно отключить:
	Config::Set('opencomments.ask_mail', false);

	
УСТАНОВКА

1. Скопировать плагин в каталог /plugins/
2. Через панель управления плагинами (/admin/plugins/) запустить его активацию.
3. Активация будет успешной если пользователя с ID = 0 не существует в базе (см. prefix_user).
   В противном случае, надо выполнить вручную след. SQL запрос:
	
	ALTER TABLE `prefix_comment` 
        ADD  `guest_name` VARCHAR( 150 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
        ADD  `guest_email` VARCHAR( 150 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL   


4. ВНИМАНИЕ!
Если у вас стоит другой шаблон, отличный от стандартных (new, developer, new-jquery, developer-jquery), 
необходимо скопировать и изменить след. файлы:
	comment_tree.tpl, comment.tpl, block.stream_comment.tpl, comment_list.tpl
в /plugins/opencomments/templates/skin/<имя_вашего_шаблона>

Изменения, к-е необходимо добавить можно найти с помощью утилиты WinMerge сравнив два файла, например:
файл 1 - /plugins/opencomments/templates/skin/default/comment.tpl  и
файл 2 - /templates/skin/new-jquery/comment.tpl


АВТОР
flexbyte(адаптация iMind)

САЙТ 
http://flexbyte.com