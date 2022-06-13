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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'alura' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         ')d4A=Bm[xA#ab3NcI!P$63!Tzw)c+(.S9o`:$ab_j.?V2G)`+|-,s!g{DC5<iKr?' );
define( 'SECURE_AUTH_KEY',  'wLndM8_#L_l,`]`DmdA<1E;y;(lEO4:h7@#zsEVXMwL@j~t+mG+-f&>3Dea}o~}<' );
define( 'LOGGED_IN_KEY',    'Qx?g-Kag~CI#?87oG_cW-Ezf4eZgGXC2t~o-9>9`@61hd9+LzDp-W^Loa3]|o3E{' );
define( 'NONCE_KEY',        'T!hO1TP_$bbl$0=A;3F6+%.6h]U?j{!$26Bs=+=3|Pj@cA^`m]OLcbY&L>|Hs)$]' );
define( 'AUTH_SALT',        'V@o$~YBN}t)S<+nwXSz@-=2haDX_,Z+Rgtz;)C(F[S-@2lrScz;Gn=|HV!Y+Wsf{' );
define( 'SECURE_AUTH_SALT', 'nKTfC=w50lG6Y?1BQ{D75{p4 w}KsTtnkJ-,Q;<_[2/i*^{-CVxXB^E&*oa],EW[' );
define( 'LOGGED_IN_SALT',   '5kj|+xs!Eawko<bkE.O(2b/Vf8oo=euoA*~xXR#E,C%WYAO~lZ[^n3ZlA)lHS?KS' );
define( 'NONCE_SALT',       'tNr@QYzbBihA<[ _J3d+g2J8}=oP19GJsl`f)|.NN3$GaI7I]R |W:SgZ-6nsOeS' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
