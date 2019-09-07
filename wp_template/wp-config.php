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
define( 'DB_NAME', 'wp_wst' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '.Q)Iga^o}ra0qeSIILC V[XH{84qH~H>-vKXOh[z>E<Ua^=(I&x*vy[Dd/4k`U}v' );
define( 'SECURE_AUTH_KEY',  '0&Z#7sAlT<*f[Ys{QG;{l>{.B&:h-NpF/&@Z Kg#D*$6o)i`l]J#1=wmrkE-)>};' );
define( 'LOGGED_IN_KEY',    '!?T.Mr~;:Lcz[r$c?7$V>,e H71ZelE$5_u}.E64Vdi/y&.lGsGW<.G`^:$TUoSV' );
define( 'NONCE_KEY',        '9Qp3Mm#HZvz4uXV_}J=.9z&m1oTR7n,*HN|N6G?5*b-c}X#YBy)G(z?|z x>o1L~' );
define( 'AUTH_SALT',        't HPn$ElAC=<,ze;O^g=;6_QFL/mnu%by]w?tLNyK{Vj@U|Bf1{b~#^kBR#DaN<i' );
define( 'SECURE_AUTH_SALT', '(7n;q{m_x6-Z6+^qy,.kT:H|KW>o74;^DejY^;1YfgG0y1s:QF(QQJ2:!T3p[V-n' );
define( 'LOGGED_IN_SALT',   'YVZFa9 Hf)Tl,)kD6uo;{OK-/:Vmw4n89Gr~5LELK3T`2PZf]I:dg-xf WDsrl_q' );
define( 'NONCE_SALT',       'QFqK^U8@jLn!>dM}ACzN[p;M.,*wF9H;f)[TJeL&MbsR[TII(vmY9e1T9Up:nAM8' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
