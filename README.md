CuraCMS
=======

Extremely Simple CMS. Requires no knowledge other than html to theme for.
Currently, there is no backend, but it is not too difficult to edit/add pages.

The default theme, is pretty ugly as I just chucked something together for development 
purposes, however I will work on putting out a nicer version.


Upcoming Features
--------
* Built in theme elements/libraries
* Proper Backend
* JSON based version, rather than SQL (Won't require installation, faster, less config)
* Update Script

Installing CuraCMS
--------
Installing CuraCMS is an extremely simple process and takes under a minute if you already know your sql information

Steps taken are as follows:

1.  Download curaCMS from the Official Page
2.  Upload curaCMS to your server and extract files
3.  Edit config.php according to your mysql information.
4.  Direct your browser to [curaCMS directory]/install.php
5.  Installation is complete! You may want to remove install.php to avoid the risk of security issues.

Adding Content
--------

Adding content (as of the current version) requires you to add content to a mysql table. I know that this is not ideal and will be introducing a more simple, Client friendly way of adding and editing content in a future version of curaCMS

If you would like more information on this, or would like to help out you can email me at henry.greaves1@gmail.com

Adding content is not that difficult, and just requires you to be able to navigate the mysql interface.

__Step One__

Open up phpMyAdmin or which ever mysql interface you are using. On a standard webhost, this will be located on the control panel under mysql or something similar.



__Step Two__

Open the database created during installation (the name of which is specified under config.php) and then open up the table "cms".

![Step Two](http://i.imgur.com/jbmEFu6.jpg)



__Step Three__

Go to the insert tab and fill out the fields accordingly.
id should be left blank as it automatically will be assigned, title is the name of the page as it appears on your navigation bar, and content is the page content
![Step Three](http://i.imgur.com/DqzP9ze.jpg)

Formatting Content
--------
Content is standard html. You are able to add additional styling with "style" tags. Similarly, javascript can be added using "script"

In the default theme, each segment of content should be wrapped in <article> and </article> tags. 

Editing/Updating Pages
--------
Open the browse tag of phpMyAdmin and click "Edit" next to the page you would like to edit
![Editing Pages](http://i.imgur.com/G4uPeYX.jpg)

Theme Design
=======

Your theme should be saved in a file called "theme.php" in the root directory.
A curaCMS theme is comprised of standard html, and placeholders.

| Variable                      	| Description                                                                  	|
|-------------------------------	|------------------------------------------------------------------------------	|
| <?php echo $t_stylesheet;?>   	| Location of the stylesheet for your theme (can be changed under config.php). 	|
| <?php echo $html_title; ?>    	| Title of the page you are currently on.                                      	|
| <?php echo $html_nav_items;?> 	| All of the items in the navigation bar wrapped in <li> </li> tags.           	|
| <?php echo $html_content;?>   	| Content of the page you are currently on.                                    	|
| <?php echo $s_name?>          	| Name of your website (can be changed under config.php)                       	|
| <?php echo $s_footer?>        	| Footer for your website (can be changed under config.php)                    	|
| <?php echo $p_id?>            	| ID of the page you are currently on.                                         	|

Example Theme
`<html>
<head>
        <link href=<?php echo $t_stylesheet;?> rel="stylesheet"/>
        <title><?php echo $html_title; ?> | <?php echo $s_name?></title>
</head>
<body>
        <section>
        <nav><ul><?php echo $html_nav_items;?></ul></nav>
                <?php echo $html_content ?>
        <footer><?php echo $s_footer;?></footer>
        </section>
</body>`

