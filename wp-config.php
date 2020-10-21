<?php
/**
 * إعدادات الووردبريس الأساسية
 *
 * عملية إنشاء الملف wp-config.php تستخدم هذا الملف أثناء التنصيب. لا يجب عليك
 * استخدام الموقع، يمكنك نسخ هذا الملف إلى "wp-config.php" وبعدها ملئ القيم المطلوبة.
 *
 * هذا الملف يحتوي على هذه الإعدادات:
 *
 * * إعدادات قاعدة البيانات
 * * مفاتيح الأمان
 * * بادئة جداول قاعدة البيانات
 * * المسار المطلق لمجلد الووردبريس
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** إعدادات قاعدة البيانات - يمكنك الحصول على هذه المعلومات من مستضيفك ** //
/** اسم قاعدة البيانات لووردبريس */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\alshrooq_ec\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'alshrooq_ec' );
/** اسم مستخدم قاعدة البيانات */
define( 'DB_USER', 'root' );
/** كلمة مرور قاعدة البيانات */
define( 'DB_PASSWORD', '' );
/** عنوان خادم قاعدة البيانات */
define( 'DB_HOST', 'localhost' );
/** ترميز قاعدة البيانات */
define( 'DB_CHARSET', 'utf8mb4' );
/** نوع تجميع قاعدة البيانات. لا تغير هذا إن كنت غير متأكد */
define( 'DB_COLLATE', '' );
/**#@+
 * مفاتيح الأمان.
 *
 * استخدم الرابط التالي لتوليد المفاتيح {@link https://api.wordpress.org/secret-key/1.1/salt/}
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':{Tj@:{1`l+lh6Qp+fhG*2q4#cD36%0kcuUU)^N_;mBr;&?/_6<C9j|GYq[[a*qM' );
define( 'SECURE_AUTH_KEY',  '^f^Ykwilg UBYESobt%[`c^#/|vy3 AQmd#ZKHdd= 3(4@]$)Ebas.T$[7usd M^' );
define( 'LOGGED_IN_KEY',    'j<##pu{1k4/rnK%]ZtP}eDFc=2[%{f+h}fS|{$J} r^q h`R6jnc)+TL(|;ox42b' );
define( 'NONCE_KEY',        '51!#%kEJ^mvWusC4l:q34Orx=+{g~{<.#9AMKV0Plr!=y~}yr=~%<lV|U6pN>x0&' );
define( 'AUTH_SALT',        'o#JZ!Hi#+pqKAN.E>6-!O*1Bair([7%;xk_3.D|{yjLONEaz8*MPq0vz**0=%+(9' );
define( 'SECURE_AUTH_SALT', 'J*>B!{[`tJO,$9o(hgLJ:B|7SPE=Sq=k@-DQ )38.2Qp@Eetf[+nk[ss[tsYgAf(' );
define( 'LOGGED_IN_SALT',   ':@+Rw>Ru{xS`)8,%m)uP|Pb[pYO>`.EUr_OD&$?)IdG;w^/l>.B_y^Tzq_0w}P3W' );
define( 'NONCE_SALT',       'Rs]s^/PDe^?|>$~2?nDy$e]A_Qs|5X]5IX6~E6Hc;EWi_R:}eVxjcgE+oK$MosZA' );
/**#@-*/
/**
 * بادئة الجداول في قاعدة البيانات.
 *
 * تستطيع تركيب أكثر من موقع على نفس قاعدة البيانات إذا أعطيت لكل موقع بادئة جداول مختلفة
 * يرجى استخدام حروف، أرقام وخطوط سفلية فقط!
 */
$table_prefix = 'wp_';
/**
 * للمطورين: نظام تشخيص الأخطاء
 *
 * قم بتغييرالقيمة، إن أردت تمكين عرض الملاحظات والأخطاء أثناء التطوير.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
/* هذا هو المطلوب، توقف عن التعديل! نتمنى لك التوفيق. */
/** المسار المطلق لمجلد ووردبريس. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** إعداد متغيرات الووردبريس وتضمين الملفات. */
require_once ABSPATH . 'wp-settings.php';
