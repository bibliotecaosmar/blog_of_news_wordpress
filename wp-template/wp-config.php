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
define( 'DB_NAME', 'wstwp' );

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
define( 'AUTH_KEY',         '<KT:*~$~?SfL+#=tNf63Z.AyXTn})iJ2_jpX5:_w]{jE#oF(>0ald9$ObVxz`5#y' );
define( 'SECURE_AUTH_KEY',  'eBB:y+YEV $JmYHmyo?CooJz0o5)uTnd1:{kc.|:*7[#rK3p!{4prrL[7;mblwa_' );
define( 'LOGGED_IN_KEY',    'C)z&TOB.K#(W|6t@.3amF:9o&0l%O&*E2l](tned7@MUy&q7#<Q#ZHeS>=AATPHK' );
define( 'NONCE_KEY',        's*@4n[?[)99to!pe8+%!Yhn]%w/vw6I_Iy3Dq{m6a?t]SICI[l(:@v8K_K{ez,>?' );
define( 'AUTH_SALT',        'XXG^0Luj~1^7K7!=mip46cY_ZM I2Idqj0Zosd ?htQhbGd,P`aClN8KS=5L[)Xz' );
define( 'SECURE_AUTH_SALT', '87iuncQ]U^V`{u[~oJ_6H7MD;H04^4~W&{Rf84Ck=dnt}izH(GE dJMCb5M;fD%H' );
define( 'LOGGED_IN_SALT',   'WhIxqd&t~=u$XwS,CL&AZm0>*Uv9:F>Xb5CU-0Xq4D@J${$xg)Z%pm?a3A;F|hIa' );
define( 'NONCE_SALT',       'swua9X JeJ7b8d-0jX1;(Bk[)Yd3BLd%su:UXxYvD7MEGUPGxPQ+nAecHfHtCf1(' );

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
