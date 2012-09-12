<?php
// File Version: 4
// Hack's Park Shoutbox: www.hackspark.com

// Translated by JCS [Profile 104627]
// Checked by JulesW [Profile 221464]
// Russian translated by Bugo (http://dragomano.ru)

// errors javascript
$txt['sb_12'] = 'Сообщение не должно быть короче '; // javascript alert
$txt['sb_12b'] = 'Сообщение не должно быть длиннее '; // javascript alert
$txt['sbe_1'] = 'Данное сообщение было отправлено'; // javascript alert
$txt['sbe_2'] = 'Вы забанены'; // javascript alert
$txt['sbe_3'] = 'Перезагрузите страницы, чтобы увидеть причину'; // javascript alert
$txt['sbe_4'] = 'Вам не разрешён просмотр <i>чата</i>';

// smileys
$txt['sb_more'] = 'ещё';
$txt['sb_more_title'] = 'Дополнительные смайлы';
$txt['sb_close'] = 'Закрыть';
$txt['sb_pick'] = 'Выберите смайлик';

// ban
$txt['sb_8'] = 'Не задано';

// color picker
$txt['sb_13'] = 'Применить';
$txt['sb_14'] = 'Отмена';
$txt['sb_15'] = 'Образец';
$txt['sb_16'] = 'Выбран';
$txt['sb_17'] = 'Сброс';

// shoutbox links
$txt['sb_61'] = 'Панель модерации';
$txt['sb_62'] = 'Обновить';
$txt['sb_63'] = 'Открыть в отдельном окне';

// moderation panel
$txt['sbm_1'] = 'Панель управления';
$txt['sbm_2'] = 'Вам не разрешено управление мини-чатом';
$txt['sbm_3'] = 'Доступ запрещён';
$txt['sbm_5'] = 'Навигация';
$txt['sbm_6'] = 'Вам не разрешена очистка чата'; // javascript alert
$txt['sbm_7'] = 'Мини-чат очищен'; // javascript alert
$txt['sbm_8'] = 'Подтвердите для очистки чата'; // javascript alert
$txt['sbm_9'] = 'Вам не разрешено удаление сообщений'; // javascript alert
$txt['sbm_10'] = 'Сообщение отредактировано'; // javascript alert
$txt['sbm_11'] = 'Сообщение удалено'; // javascript alert
$txt['sbm_12'] = 'Подтвердите удаление сообщения'; // javascript alert
$txt['sbm_13'] = 'Окончание';
$txt['sbm_14'] = 'Автор';
$txt['sbm_15'] = 'Список забаненных пользователей';
$txt['sbm_16'] = 'Нет забаненных пользователей';
$txt['sbm_17'] = 'Заполните форму для бана пользователя';
$txt['sbm_18'] = 'Поиск пользователей';
$txt['sbm_19'] = 'Причина';
$txt['sbm_20'] = 'Дней до истечения';
$txt['sbm_21'] = 'Бан пользователей';
$txt['sbm_22'] = 'Пользователи';
$txt['sbm_23'] = 'Выбранные пользователи не существуют'; // javascript alert
$txt['sbm_24'] = 'Выбранные пользователи забанены'; // javascript alert
$txt['sbm_25'] = 'Подтвердите для удаления бана'; // javascript alert
$txt['sbm_26'] = 'Бан удален'; // javascript alert
$txt['sbm_27'] = 'Бан отредактирован'; // javascript alert
$txt['sbm_28'] = 'Редактирование сообщения'; // javascript alert
$txt['sbm_29'] = 'Подтвердите для сохранения стиля\nОтмените для удаления стиля'; // javascript alert
$txt['sbm_30'] = 'Вы должны указать хотя бы одного пользователя'; // javascript alert
$txt['sbm_31'] = 'Укажите причину'; // javascript alert
$txt['sbm_32'] = 'Укажите количество дней для бана\nОставьте пустым для установки неограниченного бана'; // javascript alert

// admin panel
$txt['sba_1'] = 'Управление мини-чатом';
$txt['sba_3'] = 'Настройки мини-чата';
$txt['sba_5'] = 'Сохранить настройки';

// admin settings
$txt['sba_alert'] = '<span class="smalltext error">Не изменяйте этот параметр, если не понимаете, для чего он!</span>';
$txt['sbas_disable'] = 'Отключить <i>мини-чат</i>';
$txt['sbas_startHide'] = 'Автоскрытие <i>мини-чата</i>';
$txt['sbas_backgroundColor'] = 'Фоновый цвет окна сообщений';
$txt['sbas_textColor'] = 'Цвет текста сообщений';
$txt['sbas_boxTitle'] = 'Заголовок <i>окна мини-чата</i>';
$txt['sbas_refreshShouts'] = 'Время обновления <i>окна сообщений</i>';
$txt['sbas_startShouts'] = 'Число сообщений, показываемых при первой загрузке';
$txt['sbas_keepShouts'] = 'Число сохраняемых сообщений в <i>чате</i><br />' . $txt['sba_alert'];
$txt['sbas_height'] = 'Высота окна <i>мини-чата</i>';
$txt['sbas_printClass'] = 'Класс (CSS) сообщений';
$txt['sbas_timeColor'] = 'Цвет текста времени';
$txt['sbas_timeFormat'] = '<a href="http://www.php.su/functions/?strftime" target="_blank">Формат времени</a>';
$txt['sbas_maxMsgLenght'] = 'Максимальная длина сообщений';
$txt['sbas_minMsgLenght'] = 'Минимальная длина сообщений';
$txt['sbas_maxLinkLenght'] = 'Максимальная длина ссылок';
$txt['sbas_fixLongWords'] = 'Максимальная длина слов';
$txt['sbas_disableTags'] = 'Отключенные BB-теги:<br />Перечислите теги, которые хотите запретить: <i>smileys, b, i, u, faces, color, bgcolor</i>';
$txt['sbas_faces'] = 'Используемые шрифты';
$txt['sbas_showActions'] = 'Страницы, на которых <i>мини-чат</i> будет отображаться';
$txt['sbas_out_main'] = 'Страницы, на которых <i>мини-чат</i> НЕ будет работать<br />' . $txt['sba_alert'];
$txt['sbas_showform_down'] = 'Показывать поле для ввода сообщений под окном чата';
$txt['sbas_showmsg_down'] = 'Показывать новые сообщения внизу';

?>