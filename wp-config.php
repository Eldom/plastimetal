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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'plastimetal');

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
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         't?nB}e?&Pdx!u.S2.z@ru%_H)V<p4M3jJ+?2-TUjp&>Lja>kTZNkkOzg>To;`KLC');
define('SECURE_AUTH_KEY',  '~^(i@L.81+ms[LEa0>cqOlxg#w*hG~?a%F[otl{:B~Jn}^]aI??qv00i`Z7&/}Rw');
define('LOGGED_IN_KEY',    'pdp%Anr:6&/csJC4`CC:i<$c)w(p<W8B+f4J(TB@FPyC!!L|&PXk,BsrM#]=;o)9');
define('NONCE_KEY',        'c=tLn1^mpJcNpFNQF)w~%u@:2y0#mo:*zY]ewnAp}g3^pSB)_B?fgbMZ_5YCx+TQ');
define('AUTH_SALT',        '`(=d%=63l?M{^ej4olpju>S~kE$@Vt]#tk[ZrkB%a(:YL{_,Q6KSvw/W6g;6>*L`');
define('SECURE_AUTH_SALT', 'C~G(Tc> z3hXES:X<_3V #un-TN8#2:;Ypk>yB8S|)W!#KhF;oQle%0O~h%)#f[h');
define('LOGGED_IN_SALT',   '-S0 ,;Dm;INdC*dF&8Mx6+r?ef3XYYDh,mk+f 7`|`.ePw*|O!kj)T%`q.VL=P-;');
define('NONCE_SALT',       'lmpOQe1n&Hn-!_d!aGE`Vf}pD4C`g`:yg$Vx:YMCfm~)8K|xcK1KOPP#8f87Fh-R');

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
