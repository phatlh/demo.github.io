<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt,
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'flat' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'f[m=Z0D3Koc:R5Fx?U,O}pC{& BP}FOw%kr^i[l~>V|:b0=&&9Us}OR--^UkH.,R' );
define( 'SECURE_AUTH_KEY',  'JrE*#qb?=>9h8aR{)^Y#IcOK0eX>uo]ORIo=dk1T)wL}Rc>pynE[)|[#n4KWW#EC' );
define( 'LOGGED_IN_KEY',    'h:^<PwuR&8t9o`KI?0*9uOGI/!a.;}P3)`(kYIj*M<N:qzq/~.*)(jdI;T?)So!0' );
define( 'NONCE_KEY',        'nNGDfP(+r-0h!srg(ZvrE{`e6EP)^Vn]l0,N[XPx!0`gnj_.IKz&5(D1c3s4Wi{!' );
define( 'AUTH_SALT',        '1=TDtWrhQuzCp2,^EEY(t@VFrg]c4KP_-6+~K##rfECI&=)Gi}&rjKxA-q8pXvn$' );
define( 'SECURE_AUTH_SALT', 'ZW^s$=.YnW2+oyvPi~[7=}T=U?J8^>}W@Nw9ZvGkf?pbLWF5e7Z>fG-`Y3q x=kP' );
define( 'LOGGED_IN_SALT',   '1m^&mv?Kbglb6u9zJIHQT}h5W$9hDj4@9m aho`>X<~qn/W;~$>M*v4U9@=JQ6RZ' );
define( 'NONCE_SALT',       '6&w*bKt0d6&J6c^FgaT7;ZySTgT)NXlwNx !65m.EO`T&8K=K) B4^@0A%O~LemT' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
