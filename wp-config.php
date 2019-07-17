<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
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

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'petzworld');


/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');


/** Senha do banco de dados MySQL */
define('DB_PASSWORD', "");


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
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'k!rti7CaTaY,=E;PSFq^D[SF=%edi3>1y->J[h-s0}Tqa0|c|.)K*uXK00Xf%/-`');

define('SECURE_AUTH_KEY',  'FUivDRz;j6#fNFM?-HHwCYW6t%v6*bJv%/Bke-`F4Rej9=`t]qPul`GSNonoV^>O');

define('LOGGED_IN_KEY',    'SUSY8p#H};bVT/0JQibQ`LDgV%SkMzJ>YhK?Aw__mgHM=g8fY}t:%H;*O0Df 4B/');

define('NONCE_KEY',        'xem4~[<$Mg4d/&E9.t0EbHfVRo3`ivZe@gqQ|bm#sO>=Qi;|wixxV]bkkiE3lSzC');

define('AUTH_SALT',        '?,kr@G:S^wF+]94}3~.mh(Pfv*hHU]#9!N2751uP/ebrl$Ix5GO2y$ld*sIbms$9');

define('SECURE_AUTH_SALT', 'UV=tKp3S6>p1%`%<5``R#m)rRTT%}vO<(u`./hF53_R|E&~-uY<3~H9Y=r:Qaxfa');

define('LOGGED_IN_SALT',   'OHzqZoHJv(FA9IJF[<r%cmz@wX(O~=#<0&Z}o@4W,|^/<??z)uE^6DYZ^h|kTx&~');

define('NONCE_SALT',       'Hzgg)id.|q0m}5-4d*ZL%Sj7{c.BmP6Kxvb-0)vnVs]sJzq@,)`|(6~$L_3NF]ko');


/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo de debug do WordPress.
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
