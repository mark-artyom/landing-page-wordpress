<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         's0;s}?Q<W&6j$vaW3VQ,/ayTc1[#D:xN2?FA_+kMpXB@53=TG32k*|$08UZls/_i' );
define( 'SECURE_AUTH_KEY',  '(F2L7&BsPGq4:W8xgIS~M#[IJB:m:kS,$m>4<Js.8?Un4w G{Dxn`u2`R6r|qUW=' );
define( 'LOGGED_IN_KEY',    '(1((aFGX}Q5R!zkgs 3[)e^+A(D(ChU?AH)Kq.,0]>X;H[M3;eJOJ~JB;!GUQDsT' );
define( 'NONCE_KEY',        ';K2A:xb~?=p[bc-u6^(:2|6X!J6Z&8BG~@ypQ->-%7cgwCl4QT[R*E@&ffw*?<&H' );
define( 'AUTH_SALT',        'R{mYoW}0Gq>VRFM?&FsqL)9&xb)VagL_;,;xZkA~5Mo #Q6epl/:#bdc2F.[t9]t' );
define( 'SECURE_AUTH_SALT', '],fl!D^>5&$3Y;nmvRAYXq&sD`Z^Ak[[zvplAQvBy4r<NBwT|o|+A5J!ur*>kT+K' );
define( 'LOGGED_IN_SALT',   'C}#0kS4s7{UMfSz[64uS{Z${T{OUi3r0NM|sD&31Hp@[l[O(X(f}!H7?Xg.>-On_' );
define( 'NONCE_SALT',       'E*Zt&WP<R& O7+0fYf*LhR[t?2ZEuDz1qz!HG[_tZ|^}5+NGC2Olk$<f!1Hv|HK|' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
