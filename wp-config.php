<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wp' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5:-F`3106@O^a0<p:=0dh#kSjaBFe]dfYGT&Q ZOEptL%9D!ZBsB=*$am`3cv#Jf' );
define( 'SECURE_AUTH_KEY',  'PMtX-;Wr&DOnHldwt|IwMb.a(o=R6SK+hywJ}WC7m|@Nj4K6%?F:!APxz3vUOK$(' );
define( 'LOGGED_IN_KEY',    'HHc>9pm2ylW|Q+3i.kV3dYgS)#|6X/0]lDY6eAM~,a|Fn8w<|EXDtR4.4;V54 *p' );
define( 'NONCE_KEY',        'Xvo9h~fUnLjAhK)0#8A>jp3x =D7 A[a>^53NRFi88^{R@q.N&=_AA,5|UjYE*NL' );
define( 'AUTH_SALT',        'Hb!e;Xd9jJ9y4%3!Kj/|$(^Nh-5.0Yww~M4/qdL?[W@M}lR]X;#G(4Zke}wlcpnr' );
define( 'SECURE_AUTH_SALT', '6.w{r7[:=hXyBp?Si_lF?m<r ^(`-cb1T$% z%oAC&fH3=9!7@zvKpU#|X_.HxPA' );
define( 'LOGGED_IN_SALT',   '`lG2=Jyv6*Lhla|mR7^m{,H5C6e2L11Gof1Gt%RP8vI!JWu`c+@qRR6d<(LkabPp' );
define( 'NONCE_SALT',       'e?B;oq=4i!1UMme!2KXD-S6UZ,`q<>,s*{x!?n#Oz8{H#vK:jwvciJMnd{Ic75!s' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
