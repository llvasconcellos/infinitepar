<?php
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
define('DB_NAME', 'infinitepar');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '*************');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '.zhZAIA]4`gbM_FBk0f[`,y}yS5:huZDHi,$&0%O>_8*GeFCz`w%S{dI+lQb?Z@G');
define('SECURE_AUTH_KEY',  'Ih{C6IC(;v|T`Az9npyK?RuulDv}(.B[m8YK%7{F<NL.0C[Mv#VfZ`?oS=!d*QW+');
define('LOGGED_IN_KEY',    'r}J5QCV7OH;>Sz(OXhD`+|(h%CX_zfnr*.G<Yg@ur7URETsb,,mrQaniiB/IJn=:');
define('NONCE_KEY',        '^PIpf4crdTr1/(CS7@Vpak4E^T/+y$PKw6wHA)5Cg@OC8K]NNt%<Zy_/3E^N1?c*');
define('AUTH_SALT',        'XI,,~0C-^4;h]]SKMYC$j:%Lv;%yDuYm^U_BN>uj-&E;O~Of1|osE!*;AU{|C]06');
define('SECURE_AUTH_SALT', '4d2T]j;X<8B~bKs%VWuN[yE/ JmWo*k1lb?Rz1?!~,B+44kFSO~F^XiT3U_vndki');
define('LOGGED_IN_SALT',   '#+&D8g|+3T8/?<gFU.,j</-;f|9v)OvtczMESyEx~:Uk]`V-w8$EcCS*,}bN^M#Y');
define('NONCE_SALT',       '3m1&oz?m+fCYW0/@q-2^]N-/kM+0?VE5#I8`k_hWn@TrwSP;6,Hf}<AYDt7=g<F|');

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
