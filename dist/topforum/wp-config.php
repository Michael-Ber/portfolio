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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'topforum' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '!<N_A,AEr>UzQcWL:MzKKvtYLfGA#hh vm~|qzNRn}%JvVv{t4}MVcruWk24Unql' );
define( 'SECURE_AUTH_KEY',  'K/lg PfXNPBl<vZMH<FBs)cm~0[&_p!.27BVnI3S03fm)&F;@HwgCrG>QXbVy,=K' );
define( 'LOGGED_IN_KEY',    'UH%zU8`:,%P|v[M.PxZI:(UbWn7$5>?E6+W&}NG$N6j:%)&#f^GX%t@E{H|CIwu5' );
define( 'NONCE_KEY',        'L9EapHn!LL!6J7.`;+n[|X-fLx0P,/v+I6I_<OjF];$5/=qLWRyU^_r2+KIHBNGU' );
define( 'AUTH_SALT',        'Nm[bXOb^lxQZ(_4#1e3U& t9OW:^qPMNs3$:S oK36,zK(s+o2K>vjE@Ngs7*oeu' );
define( 'SECURE_AUTH_SALT', ')?[=x|W@,|Kvk<wJWB1`teXj/)48dPf^VJ.*xtg=`>@V7RD;,3;KgXXeb`i3@uYy' );
define( 'LOGGED_IN_SALT',   'XC*tZ;gz:YgMeWny`T#U}/AyIKrW2(K$&2@mo@ eL&_H9P:BtF}u vbsYd>7oe#Y' );
define( 'NONCE_SALT',       'G?5?8!nPF5GEqpAsk_(UfLM?uu5/+bxwazdpZ4r@&X+{WoP6w3FVr6-&oUpg>@ic' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
