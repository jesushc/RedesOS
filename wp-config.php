<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'jhcsdt_word');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'jhcsdt_jesus');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'administrador7');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'Mb$3@f8]1AU-v9^:/R0C@0z<mkE{_o5Cp*+/en#/-$o-IT+u>H;+Fe;8|Yok`#l-'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', 'dW%3-4?1 -uvgMY6Lw|HnZ#|b@4wj-uhRLoYHf$*fq_:nw&nUMM.%=^m0|9Q;1jl'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'Rn!-QDL~|3>]yw8iE0Mr&<nY%NbR!f?|P9=YNreBCTl^+}|4 /4G7!a4-PK]6JtA'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', '_JhnE}]k[>O.G1$5E>q+e#(P|)Bm~xR5DGBo!Pz8^;YygqmeYq|W`{Y,sLkNe)#n'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'Qw8W]xdd%KOaz+D*?E-5!0r<G4l DEzof|!y[/J92M*oIsE?OdUm y/&}`v@^YHL'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'Woa{]F4CGb8EN%{;2EA2U%}oK-AWP N@/+fh6*4;n~oVcx=~ ug^*U||y4|1&tL2'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'L*+7vnYz4/@=cvL=[b88WQ8Cp=({>|a1Gx|)=l?}H!LI_;>nYpbrE[H /82)`>Ml'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', 'E0B+ &JugQAndw$L3]hxK9:<DMU|Ni|$y&mU!V|}WdOOh&uZRpzHGRR$`g=dV9o '); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

