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
define( 'DB_NAME', 'wordpress-projet' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '7_<@=FV].1_]o0&Rp|P]fRlyf|g.|$S %-M7>6xT]g=i_>s?!Y:J}/(IX_6mVm^z' );
define( 'SECURE_AUTH_KEY',  '^g4iC./?TEm=FYkG?0Si.5*bF<N9C?CsRJV=w>OaX&q=@.k$-u{mO)@yn8O)qY5B' );
define( 'LOGGED_IN_KEY',    '[XkWMCfMZ+ghcLW?!tv>|O22+qMu]S+&GU_=K<1Jm<i]NUu|6nJf7 Xl:ItTps,Z' );
define( 'NONCE_KEY',        '4!aC7l>=Pq-(^S/ECwGw;|W):cXmoa>--6w{ds`;)3)t-I;Ria5>p]eYnlgFwiC!' );
define( 'AUTH_SALT',        '#6UH>0L}y~ E1m(du/?cisN|G2[kJnGh32ADch{n8d}6nyS`u4ts]Emxz9jxe.gc' );
define( 'SECURE_AUTH_SALT', 'A;?pQacLEB(c1:*{`?^_wi!. ^sy8i-P!epMY?tIho=veCw=s7`oecTbySy4s,#P' );
define( 'LOGGED_IN_SALT',   '8Yz1Ve$Ff7$/Q&ll)t:;`5u}4wp|FXO!t{sm#{enSEl=kqkO yva TnWLzb=S+ZU' );
define( 'NONCE_SALT',       'Ta/.U`3sN0gP<2=nRu`sC *c*N (< ?UzzkInV_Zj0P~60}*GUmxw!cWkII}6`S_' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
