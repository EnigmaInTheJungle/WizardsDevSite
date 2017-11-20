<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wd_db');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'O}3xS <0+XaVaA}Y_}1b.b@u~G4D}98t=s@@7]ECa= e>@x 5n8k@M,IrT&uBv_Z');
define('SECURE_AUTH_KEY',  'y,x0KT<!r5Q]FDk<)1I|txNU` owr`cc6<>lpR~ger&s~q9hY`95sGVBjB0NNbsB');
define('LOGGED_IN_KEY',    'vTea>35uGB_nW-6 XX=u@z5VW/VWd4$h;zMYC/EW_B]5f+Zwv0goy~1V/R%=L8N#');
define('NONCE_KEY',        'y.@$KL43a:Pqqu>&^-Aiv~TF V7afB#GCG~{&FuVK>nPAq3V!V Bz30d{9A!]>a$');
define('AUTH_SALT',        'vyCU,:pjykB/zCMX1VVUC*@0-_rM/m`r}y7#c7*|7@mPmGXSU~=Y*v2U(AE$=&vD');
define('SECURE_AUTH_SALT', 'gcYK3q)G_]~aoV<Ha}j#aHTy)&t{a<l?-9V_Fp=KY:u3oI`Z5J-[*oeKzzPZbMgG');
define('LOGGED_IN_SALT',   '5j3o`tJ7Lt6781t$!;08=xc,9|V9:[OIQ,~G(ob|Y.W~UNmzk0WWvqclRMKA+HAS');
define('NONCE_SALT',       'x.nJ*@NjSGka%_(FDbEDnAMasP/yN)##SajT[MfK/l)aO17,TzNFj:MDBrm(gfHK');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
