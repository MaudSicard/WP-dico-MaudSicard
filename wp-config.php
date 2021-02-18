<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'Articles' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'X`HbG,R5c-Xhks^o5^l1-*YaMg}ZKid;}.N|=/gY^QFWM<84gBE.ONk0OsTfp,?[');
define('SECURE_AUTH_KEY',  '`8cR`|GCxyFT3(k]-]9boJv.1uvktq5QAoclqcPiRB+%hq #ZBrh8w|lG-9q*7,R');
define('LOGGED_IN_KEY',    'ztXMP6SA.QH+Q>e{QnQmF6.{H[UBtg4u:Tr(+-})pK]{;y&:u=9!s{9jx<3/ Sqr');
define('NONCE_KEY',        '$;]pY+z5l<R&o6BK4JIu1Cer%{z,e:jM$.glcZ:4{]16c5nH7>Z~p6?5DNhg|Hsp');
define('AUTH_SALT',        'y- i7;teh,QU;r(w+Sv6)VXDXM(8`!3xs1w<n8=H;|El8tpS&6&-)@EasB(M^t!b');
define('SECURE_AUTH_SALT', '=&d>sXsgsF3k/u1AC}C_5g2C{1$|m}^4:11bO1=uRMG|4wa5! Z7@r*bRzzGG+-r');
define('LOGGED_IN_SALT',   '{5^r<s(J];OKgtHk+tL)L{|kO5HrskCBd#:S*:>b5m_/YC0;ArU|hgfqYKU~dl$ ');
define('NONCE_SALT',       'mL][XI8]H()V(%TK5+E,rL[VYeeY-hkZ(1j<Xv1&@H LLBh+j8.jfT.w:F|O$TJh');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wpoz_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );
define( 'FS_METHOD', 'direct');

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
