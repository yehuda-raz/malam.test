wp_theme "malam" .
Base of ACF plugin.

1. Lode to your DB the db file malam.sql

2. change in DB table > wp_option> home_url & site_url to your host url
3. on wp-config files change your db host user and password
   define( 'DB_USER', '' ); ////SET YOUR DB NAME
   define( 'DB_PASSWORD', '' ); ////SET YOUR DB PASSWORD
   define( 'DB_HOST', 'localhost' ); ////SET YOUR DB HOST
4. /wp-admin
   u:root
   p:root

5. In admin side go to Settings > permalink > and click on Post name


6. For dev > Run npm install to get gulp and js module

- dev env > npm install start
- pro env > npm install biuld
