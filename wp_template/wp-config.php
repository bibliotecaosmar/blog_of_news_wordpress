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
define( 'AUTH_KEY',         '3->?%wJsv^-MqV7F)1-h@N-Aq+W_VG, 6-^TG6}XU+E_W;R2QiS7(!{p!s}V<Zcb' );
define( 'SECURE_AUTH_KEY',  '3)x4^E|n.e^= wI&H(~/%9CNcv#rjncj9%Dp<z7|4j0,Ny:Z9+xc/3fn/WPSj~J}' );
define( 'LOGGED_IN_KEY',    '_[EuJ@|OwjWV||nU[*y5_ks6df@KUPf%9`xFTmlES XUT4l*&_VHY<T.eR8Iu03n' );
define( 'NONCE_KEY',        'gir6oXlPHZ+ShL+?SJ]Gmq5taIS6zrwEF_UNkyEStpLCh$RqX3l2qQ83eUJB/e+o' );
define( 'AUTH_SALT',        'ZLKR~ZY=/0G^SrYO2f)J88&9bAbu3Qxk1+t1yO@hN63i]sgt.DY?pV@m<]S!OP*)' );
define( 'SECURE_AUTH_SALT', 'rG8i1^vJzN;@st`jsm|%X21&Zf`.KX?BP]T!mo_:uMyI4}B[#}HQimW-v99t%X O' );
define( 'LOGGED_IN_SALT',   'yc_#Up)9nZK(g%G!y&g^Y5r@JS&4w$Mx6Je}}CQ<{?V;j_E=R%v$mnTKioXy#l{o' );
define( 'NONCE_SALT',       'lr/a@VM*ao5za.r_,0LIHT9:(ebg_U_lA5}.%W5qL}+<v6RY#[LUX@v4+]!b`/t<' );

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
