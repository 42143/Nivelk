<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'blog_nivelk');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7`n8 RA!;O@?n9Hu$GWW3ukEgYC^3K4e?n|(QbEUmv 9oTYE/d/9nr#V[d(-e6wV');
define('SECURE_AUTH_KEY',  'gqO*%aV3}3FvKJ,CkN5_hgML.5n~8VC=;QS~$yb3|LSf?m/gy>ds|A<h`X2vl%8a');
define('LOGGED_IN_KEY',    'mqX;C$ZY&,g+3PdI=Kh?bg7S}A3G*Q}}P5Asut`Mh~TWnM*hMx@bm aaMu&ynx?V');
define('NONCE_KEY',        '%7y0  qpVRf7+Hz$UqybeM|vvYi?#8+y@^_-brD?NrO8A0Vmk3jRi97@oL3rO~^k');
define('AUTH_SALT',        'EE%dhFZ,g_z~?XI:i{+0k5-xbxT,!Vgc(RuB$65>W{(L6f*tyi{h5JF_TPXBDlK6');
define('SECURE_AUTH_SALT', ';suBZb[O(Rh)LkajpIMi3kL O]IY9vC@_cwnDM4QV>cN%5{E4V@Vb`^<}6n5LiYa');
define('LOGGED_IN_SALT',   'E}qIuaevNa@yH73~:jPwULDzb{9*A;bjS*|oeKi2dQAFMvLD7;$yabzMyQGl1F=P');
define('NONCE_SALT',       '.o>Aq6P Hphh<r]}zE@;!(ZAwzZ=@v^H#nmb>t?,AQq..KBm_SzDa8W+M+ZfXk>X');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
