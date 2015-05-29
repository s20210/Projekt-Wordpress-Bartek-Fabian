<?php
/**
 * Podstawowa konfiguracja WordPressa.
 *
 * Ten plik zawiera konfiguracje: ustawień MySQL-a, prefiksu tabel
 * w bazie danych, tajnych kluczy i ABSPATH. Więcej informacji
 * znajduje się na stronie
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Kodeksu. Ustawienia MySQL-a możesz zdobyć
 * od administratora Twojego serwera.
 *
 * Ten plik jest używany przez skrypt automatycznie tworzący plik
 * wp-config.php podczas instalacji. Nie musisz korzystać z tego
 * skryptu, możesz po prostu skopiować ten plik, nazwać go
 * "wp-config.php" i wprowadzić do niego odpowiednie wartości.
 *
 * @package WordPress
 */

// ** Ustawienia MySQL-a - możesz uzyskać je od administratora Twojego serwera ** //
/** Nazwa bazy danych, której używać ma WordPress */
define('DB_NAME', 'WP');

/** Nazwa użytkownika bazy danych MySQL */
define('DB_USER', 'root');

/** Hasło użytkownika bazy danych MySQL */
define('DB_PASSWORD', '');

/** Nazwa hosta serwera MySQL */
define('DB_HOST', 'localhost');

/** Kodowanie bazy danych używane do stworzenia tabel w bazie danych. */
define('DB_CHARSET', 'utf8mb4');

/** Typ porównań w bazie danych. Nie zmieniaj tego ustawienia, jeśli masz jakieś wątpliwości. */
define('DB_COLLATE', '');

/**#@+
 * Unikatowe klucze uwierzytelniania i sole.
 *
 * Zmień każdy klucz tak, aby był inną, unikatową frazą!
 * Możesz wygenerować klucze przy pomocy {@link https://api.wordpress.org/secret-key/1.1/salt/ serwisu generującego tajne klucze witryny WordPress.org}
 * Klucze te mogą zostać zmienione w dowolnej chwili, aby uczynić nieważnymi wszelkie istniejące ciasteczka. Uczynienie tego zmusi wszystkich użytkowników do ponownego zalogowania się.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'e*ne}{][s,E:Ia#ET%Yxl,&q4PjtV>sG~6lr/P0O6QcZ(^GtWZfdJ9^7^thh`n}0');
define('SECURE_AUTH_KEY',  'uK`G){%#9z,{)qD/>Z6haqDyv<XPkvfjwGv%C0zS1GJ-j&E(/!g([|cCRraaE9ed');
define('LOGGED_IN_KEY',    'GA]o|zH6e,-$@?lhsMhT &XH0P;^VKe ^vyan/rr(_gn{zVK%VVVb>A1zvJtQ^yY');
define('NONCE_KEY',        'I[gQoi/~psB~4dv`[j#TL~W4|vxbINMk$|j$tAxBVv,&oA3!aWDqK+i(SC#SM}qN');
define('AUTH_SALT',        'Xq|2v;T6$GVME(?`Xb$h|X(JA Ezu7W-u|rV@HN^nsBC Cnr/|2y+eLWp,SCA[QK');
define('SECURE_AUTH_SALT', ',}TswV)-?,Ne`pxR*LV-<`_qL,F50GWn4WgC](f|-L@CZ p~zQ4<63m053}}^]#[');
define('LOGGED_IN_SALT',   'WH6#2B>thU,^a7UiNI8r)yV,p!:5S-NT?ANza}}I+W5xm!A&~1S/+6_m35R|-B&:');
define('NONCE_SALT',       '5pv|}RN6f_D<Rr}qFKu!_%8fgn+k!>?9^KTyCDW?n@,)l#e r)QCU/k@^-#HL!Nu');

/**#@-*/

/**
 * Prefiks tabel WordPressa w bazie danych.
 *
 * Możesz posiadać kilka instalacji WordPressa w jednej bazie danych,
 * jeżeli nadasz każdej z nich unikalny prefiks.
 * Tylko cyfry, litery i znaki podkreślenia, proszę!
 */
$table_prefix  = 'wp_';

/**
 * Dla programistów: tryb debugowania WordPressa.
 *
 * Zmień wartość tej stałej na true, aby włączyć wyświetlanie ostrzeżeń
 * podczas modyfikowania kodu WordPressa.
 * Wielce zalecane jest, aby twórcy wtyczek oraz motywów używali
 * WP_DEBUG w miejscach pracy nad nimi.
 */
define('WP_DEBUG', false);

/* To wszystko, zakończ edycję w tym miejscu! Miłego blogowania! */

/** Absolutna ścieżka do katalogu WordPressa. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ustawia zmienne WordPressa i dołączane pliki. */
require_once(ABSPATH . 'wp-settings.php');
