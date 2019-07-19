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
define( 'AUTH_KEY',         '~fz@n}e^S7jCC~&*%*!by#}#FyzV{#;BO+jcEdq[+NwxWx^iw~<B:odv=(Tpt<y0' );
define( 'SECURE_AUTH_KEY',  'W)[O$BI_B}rk{^IFxip%,?%dhEJGH3ZetBVB.ev 5,0yOX^cf8^=)ii^0jHd6ML/' );
define( 'LOGGED_IN_KEY',    'PbLW]ndI0O&LCpX|[]rF7&ZAj-B6hg=stUvA,KO0X$am 1qzq!hS(mc`9+T<;C a' );
define( 'NONCE_KEY',        '2Gs@FCUW`by8p9-L1>K<J]JIFnem`OdlW>k>PYa`Ii{U{hqP+C^[AX=Ht-2Za1M)' );
define( 'AUTH_SALT',        'k`5B9AWYT5on<T J;XDGOfR~-CVW.%=Zhu&`!XwTaJg~t[+-^yAPiTaaQS+8:$z<' );
define( 'SECURE_AUTH_SALT', 'dy(XXD$m6qaWXA6|Hzikp;9}Yy=r&^ebp;t~-g3bx}-3)_j;5ZbYRw/Dq*zOiX/K' );
define( 'LOGGED_IN_SALT',   ']#5s(Hu_QOUl*3dOo5Z[?yzRB#m#~&9{:e|S`Vu!ajklHwsj4}^Jv#}()&l0hMmO' );
define( 'NONCE_SALT',       'pIb`IF-/|t=wrmE43>g2*l-W5v|]i~C2wWPIkUA)QM/BKZ.=t:5tHjvsrI@<;$DW' );

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
