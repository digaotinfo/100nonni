<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', '100nonni');

/** Usuário do banco de dados MySQL */
// define('DB_USER', '100nonni');
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
// define('DB_PASSWORD', 'b6j9n4j2');
define('DB_PASSWORD', 'mysql');

/** nome do host do MySQL */
// define('DB_HOST', 'mysql.100nonni.com');
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0f3b77144c1b654a53f980a07fb8cdaecca36bfc512ea0edafbd4c8655a3c206');
define('SECURE_AUTH_KEY',  '6e926bfdbe8e321ead035c1f926bd7c6f995686f6fd063fe0c3bab490c556975');
define('LOGGED_IN_KEY',    '1b80e33805c53101938b437b3ba19e81ad7dc6cc70b64c415dad143aa3d69f38');
define('NONCE_KEY',        '6d42edde4633dc20a7f2a09865c2f0c81cdfc5e50eae5c9f37896d5684361658');
define('AUTH_SALT',        '723fdf762ab71b1cca5bce463853632ed74b6f4a46151ee96288d84dab7f1a95');
define('SECURE_AUTH_SALT', '2b6cda0894e962411f382eeff425d11f519bd2e1407bb0639f2fbe5e450541eb');
define('LOGGED_IN_SALT',   'ffa728cb97932ab59bdd9a5aa2d7dee252d6afab6d0ccd4de42c21fc6dda1faa');
define('NONCE_SALT',       '793e5d7f11e0a81cdcca37a51b79a3b03d6991abc5191ac023fffed910fd1fa3');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
