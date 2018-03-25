# wp-beirut-boilerplate
A Startup Boileplate for Wordpress Beirut Community

to install the boilerplate you need to do the following.

1. clone the repository using the following command.
	1. `git clone https://github.com/wpbeirut/wp-beirut-boilerplate.git` or
	2. `git clone https://github.com/wpbeirut/wp-beirut-boilerplate.git development` or
	3. `git clone https://github.com/wpbeirut/wp-beirut-boilerplate.git staging` or
	4. `git clone https://github.com/wpbeirut/wp-beirut-boilerplate.git production` or
2.  end the cloned repository and do the following commands.
	1. git submodule init
	2. git submodule update

3. after cloning the core submodule, we need to install wordpress to do so
	1. run the site as exmaple: http://localhost/wp-beirut-boilerplate/public_html/core/
	2. do the necessary settings in installing a regular wordpress installation by filling the database and site names etc.
	3. once done, open the wp-config.php located in the public_html/core, copy from top till the end of encrypted authentication code.
	4. after copying the content, rename the wp-content.php located in the core to wp-content-.php
	5. rename the public_html/index-.php to index.php, same go for public_html/wp-config-.php to wp-config.php
	6. duplicated or copy paste on same location the file wp-beirut-sample.php located in wp-beirut-config/env folder.
	7. name the new copy of wp-beirut-samplecopy.php to wp-beirut-dev.php (or -stg or -prd) depends on the server you are installing the boilerplate.
	8. open the renamed file and keep them don't replace the following lines `define('WP_HOME','http://localhost:8081/wp-beirut-boilerplate/public_html');
define('WP_COREURL',WP_HOME . '/core/');
define('WP_CONTENT_DIR',APP_ROOT.'/public_html/content');
define('WP_CONTENT_URL', WP_HOME.'/content');
define( 'WP_DEBUG', true );`

5. after those line you can paste the database connection and the authentication keys that you already copied from the original wp-config from the core file.
6. just replace the first line `define('WP_HOME','http://localhost:8081/wp-beirut-boilerplate/public_html')` by the correct home_url path.

after these steps you can login to the back end using the full url with /core/wp-admin
you will see in the themes, wp-beirut theme, and a wp-beirut child themes, also in the plugins
woocommerce with jetpack ready for activation in the boilerplate.


also for more information on how to install the boilerplate, you can watch the video demo
https://youtu.be/H0DSug1Q0kI