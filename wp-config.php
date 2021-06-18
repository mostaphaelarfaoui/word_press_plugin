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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'tY`*Ual*S-O#A3c&H,x^]E&wQT=$=iLpaI,My)rJ&(p*jd8bnq+6U,UVR}EOIpPf' );
define( 'SECURE_AUTH_KEY',  'b<tLAh+yYyd!(WDL6#7Oc=T@A48X$r~O&J$jQ~*KAhr/c^4UU0FWg[qaeH2!t,3$' );
define( 'LOGGED_IN_KEY',    '7>(03WTy*U*JI1n0F(<iMS:vI4SMjx:[<qu_?i#Ax-f^0oYHvIfZXyKF`u[pufl=' );
define( 'NONCE_KEY',        '.T_H5tdyd!Xqq{yy3$pm+4N|Dv!hVm2n[b9s>f-)NX}VqnSsUVO~>Y@_X5*O;Lbs' );
define( 'AUTH_SALT',        '^Oiuq:m[AvopXK92Z kvpMlY-ML7(MH}@{cA2q#L^7qY$4dLbx=g^w-ZgOdsmSrC' );
define( 'SECURE_AUTH_SALT', 'u?1.b}`Qi?[O2|IGBd2TyVi1skmMU1p;{$?2o@P@<}JYC$Nf/4j^Li>b-BpIS}XG' );
define( 'LOGGED_IN_SALT',   'qcsWAi#ivj#}T{CNfJ&GDw4XSb*31Kg#+L9bxF5 |ul$j+lFV/HFUm<&7G2&C;IO' );
define( 'NONCE_SALT',       '>^V!fR3i~Q@~j42!.!KCgb*mwEq@G5k0I$fpaea+d _Gcg=ps+PMqnRMU=aJT*V?' );
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
