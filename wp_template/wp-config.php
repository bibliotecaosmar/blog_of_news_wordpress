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
define( 'DB_NAME', 'wp_bt' );

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
define( 'AUTH_KEY',         '8!*X~dVz>33HKu!Nj1L%bc>l {spdF{)!X@>:Sn+n;E[OTRtf~)5MInf[;<6*~9t' );
define( 'SECURE_AUTH_KEY',  'O)0w|QT|D;[VfTX3]m&>#FFnvCHf20Iz(s>%)|O_%H_&Z53{#%Zz:&^W>^%05Fq#' );
define( 'LOGGED_IN_KEY',    'kUW8rmKogl|nw=Md%Inutq}6rdP,wm8$~;6P`@BMl{XE=6cY@gyMLFWF``Hz*1Ea' );
define( 'NONCE_KEY',        'Sm{E#;WfQ@Xq{|Q3>%IN%!%;`G=4;nX$x750$ig>uo_)eVo3.2Hh-z1t KB-t2Cc' );
define( 'AUTH_SALT',        'OPqPVk3zg@$~&(^a3mL+~y@@%,K%A`#mDef1R[]e;#c!096SW;%+2;!h$/u}hFs~' );
define( 'SECURE_AUTH_SALT', '5!O8O3qf#W9d/Q-B.U]KcTe7A cm8aST$&PPFg)|e6Q;SFV>kcJ[GtStFu]a}5p6' );
define( 'LOGGED_IN_SALT',   'oTeD04>U2N.ISuG-3<3|8t3k4d.pg=3Lz{a?J/ Z(>w@c3(6ndQ1#N>>~i$NlKS@' );
define( 'NONCE_SALT',       '(^+!0!g|/:-lY2FGN2Il+._g1|;,oQ,>oYN#c?M7<Yp*{Y:hI_O=^_aH&r~lSuv2' );

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
