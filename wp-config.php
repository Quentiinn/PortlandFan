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
define('DB_NAME', 'portlandFan');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'terminale');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '(g!Iek)_38R=Vpl`0{l8gy%I+V<ZET.e~~[r*BVk% UXpq16yte&}u);Ww2a`oL*');
define('SECURE_AUTH_KEY',  'K 06{CMz]-DYh,I9i[_=^ANW-.D57BC4Z`uG(54/k-iN(@d^/< 7TEZ0l&/2XeA8');
define('LOGGED_IN_KEY',    't)q3A_7Fe*](rl`w.c~=-0Emi*Z[3.c3r,0Yqd}Hl~=ShMxcT:E|?[w:vL|BE~=W');
define('NONCE_KEY',        '6n99T30A$7jrk[l|?>Jg<F3{:j=|Su.FeSYz/W;`pw;90R34u2)6+}+XpMJS45[0');
define('AUTH_SALT',        'lf}1 ,QY#?vE}iLQY]?ejfxSx3x5-no w;p:v>/0U+M6XB$>oz0,^elp=^B7zek}');
define('SECURE_AUTH_SALT', 'W1Pi4f+9_+$KaD3|GF1e,Sd7/}c5sPwFI%o14M:U`%U?ubbCjxt]9Nm}%0z9QH,F');
define('LOGGED_IN_SALT',   '5?qYSTj]K.xn3z B`*ab<b mjQH=Kh=dX}ecX`fmW;_aqmhAFqNad}Y_K4=J[o:%');
define('NONCE_SALT',       'Po,*q)qK$D<^vn)3qHx(@h8`cg!(Ck*GAr^sU|(2sKUhE?p7Vrz@YrTasab]!{IV');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
