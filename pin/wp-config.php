<?php
/**
 * WordPress基础配置文件。
 *
 * 本文件包含以下配置选项：MySQL设置、数据库表名前缀、密钥、
 * WordPress语言设定以及ABSPATH。如需更多信息，请访问
 * {@link http://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 * 编辑wp-config.php}Codex页面。MySQL设置具体信息请咨询您的空间提供商。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以手动复制这个文件，并重命名为“wp-config.php”，然后填入相关信息。
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'follenzo_pin');

/** MySQL数据库用户名 */
define('DB_USER', 'follenzo_pin');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'Fl726617Sy');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ':H49#*XeKq&*j|j P;flicjzU)r-[zbb6^gW^rD%IHZ-iMX+4f$?QcB(+t*z@F<v');
define('SECURE_AUTH_KEY',  'Eu4OiWL}tKx z`AB2S^Ra_Rbe_+-M%n*+Uv,S18=3p2ZiY<i=r#r>h52GjC2Ud3;');
define('LOGGED_IN_KEY',    'q-?fK[!E/-|J_P-3&L+lKY:xTc-@T}N }29|QIf?JeuT)m9+R)0N$gx@GAY 5k|a');
define('NONCE_KEY',        '{^z$>=-?HC6SV-q{[QvsmpFeF8G9RfC|U:#v#xbF+AJ+<{DGr3-]=m|f97p,xmK!');
define('AUTH_SALT',        '-`S-5y|hq$W|FVo98=v+1iLbv|b|~)wd1kq|]JGMND8u7gLj:8VvG tihK+?N0E*');
define('SECURE_AUTH_SALT', '}Ik@E9u>JG)+1&lFT_V{#DC0ial|t7$CGy;:-%|j)|rOrMRMQsyGKBxk6|8mzK>m');
define('LOGGED_IN_SALT',   'hp*7CoN@s7j7{h8R[RO8/m}G>&qfN--2GQa5V$TXt*2QYeIM@msWhh`}E30;)h.U');
define('NONCE_SALT',       'z:(j6-^P^:gSt1=97N@R##_Q&(aInbJf_MXRk23Z KeiUYi;/DD~zgLeD@;d 9~T');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'pin_';

/**
 * WordPress语言设置，中文版本默认为中文。
 *
 * 本项设定能够让WordPress显示您需要的语言。
 * wp-content/languages内应放置同名的.mo语言文件。
 * 例如，要使用WordPress简体中文界面，请在wp-content/languages
 * 放入zh_CN.mo，并将WPLANG设为'zh_CN'。
 */
define('WPLANG', 'zh_CN');

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
