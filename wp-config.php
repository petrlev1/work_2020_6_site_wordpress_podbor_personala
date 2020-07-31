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
define( 'DB_NAME', 'levendeev2_ts1' );

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
define( 'AUTH_KEY',         'pAlLuMjPKK<HOX4P6ri$^2bzg@$-rtN0.Df=Z.G*lGx&Z#QL[+h59W,8XH|^29~Z' );
define( 'SECURE_AUTH_KEY',  'tSJ#zM.vali7yX?Ea-BISy)LQ^aA)*YR[Nhz0Iz@19nO-v>s`<wc4ADk7,P}v^Wd' );
define( 'LOGGED_IN_KEY',    '[1M9%1(v?9nJDhh%P[sYR`e8{`cgk@:dr)?hA*#>Aiy>;bS~$_yL;w<Cyi[Rnw9g' );
define( 'NONCE_KEY',        'mN^#kUomvT%V8uh!b>= #^Nm.@Y^z$HuWdg^z]iF-4jg;rfXT+kE_,t;%lLl863T' );
define( 'AUTH_SALT',        '&VO?_6. sbeZCKwGq:n6MfkFK>G,B12~ZXhbdQ8>e[T]EW*=(G;j^G(h&vcQ~8y&' );
define( 'SECURE_AUTH_SALT', 'M}L<Uft0~x?LWr$Go,|xPBWw:7/Zbt2|6juDbnPTbnFO_d+(CxoUykE3$P|*JF:f' );
define( 'LOGGED_IN_SALT',   '_Yb@MN+Knw>4,xCi}nxu Cy:^8}hxioZL,lH]2+9&3KH2%C|Od1o!J -E,~7$ ^=' );
define( 'NONCE_SALT',       '4@T=BQ~@5m$W2rO%biSJkX}NYyD=a=eJ#_2?eZF{l{[DHDm=viNX)/o=Arvtm}!(' );

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
