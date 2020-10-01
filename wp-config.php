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
define( 'DB_NAME', 'site' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'd$:&=u]R}A/0i,BS`BUXV`!0ia**XjaSXgS&SB2mq[=RM- $h<)Xl5C/Zj>1DEMs' );
define( 'SECURE_AUTH_KEY',  'UWV^{A|C2B#v)*3Ifx:W7HjGKUSBe)13O9MP[PwMXj<0o_JhGME/{P.z0P[Xm!*x' );
define( 'LOGGED_IN_KEY',    '^pS#(W=pdEBKu_V&cA}>c_f(`CQ1M8Vu:tUI>e`Gy/t&vU89S[~x725j<}bI<Sh:' );
define( 'NONCE_KEY',        'pK,Am]O;tyS~*J97f nfE2%yam*&E*CCHC{)zC:Xrz}E,H%ftNCO]`U6._xw<[K:' );
define( 'AUTH_SALT',        'EHsMY9WEi{rDBa}n-8q-Xy[r=x0|.U9x4e,@0[Y-9L5?U=zZ>3SKtSMTb{~,LltJ' );
define( 'SECURE_AUTH_SALT', ')v2I~vv0jHEGL(QI$ADxh)FMFrLX%BJ($bltYTATq &3^6w)1*-Wi|oG? H?t)pn' );
define( 'LOGGED_IN_SALT',   'jP/DiuN9Z<Vnbiot~9C7 6^.Unc$RhCtL_~tMx1m-O;u118Ma?VB~!(Z J(L$<kD' );
define( 'NONCE_SALT',       'NTEH/t>=k?,xqe)IgM}RWCz=$%IAxB4*/|Zkbi#wxnJ1PAY]r{R/s0B0-J`FRTc@' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'site_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
