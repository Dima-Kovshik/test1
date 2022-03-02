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
 * * Настройки MySQL
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
define( 'AUTH_KEY',         'saDJAk;%1mhi5^iN*9d6k2<_5_jMkW~i2UDS,UbNy?4Sf-i0Zy^}ier^?pzGF&G6' );
define( 'SECURE_AUTH_KEY',  '+f48:PIGcz FTTHxNxk`Oi6l_Dy{;,~C<w`CbxoXqGWs{ijWmeYyb2,dB=Ue>p?0' );
define( 'LOGGED_IN_KEY',    '):L(?,HlLJC^}J]-4dp)D $LkNF~%gf{{at$+7Zet{i$^y#0+TP_;)&D;TmCCrGB' );
define( 'NONCE_KEY',        ']uC1X^ZLZL5Vw4@{YsJA[NYM!(jdS+%j:p:2/1,J_iK-#IPxNz`fSP*:ZoOyrF{3' );
define( 'AUTH_SALT',        'KiWXTi)!dl`NHj^qgfRmKyI7>:$n<Ls:m=Vp&pzR9Jeomf/%Zh+3y4rl<4RKVO$N' );
define( 'SECURE_AUTH_SALT', 'f5j=y^(PT7F)o0[lW#6(TI`;~#V>]#uN^utsM>0?EBq,)96*&r!<(f.wVTe+*&at' );
define( 'LOGGED_IN_SALT',   'W1X-_ft<W;X|1rFau.$Wl-<>j1sSh{XU5HpKXa1!bzjSZ1|$#a^y$Gv9Sdjg0}6>' );
define( 'NONCE_SALT',       'F}iQ|jM6BX/![zxZ)$4Yy[$lhT{ep+s y8{ke1K1K.aoKO(] 86Os#sWNr{/dUWD' );

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
