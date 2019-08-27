#Setting up a custom theme
##[for step by step insctructions checkout on php and setting up a wordpress theme check out this video from Free code camp
](https://www.youtube.com/watch?v=KibbYf9avko)
##Be sure to install wordpress locally(I used fly wheel to set up my local environment)

##once you have the name of your site right click and open in finder/folder, copy these files to the name of the theme you choose inside of app/public/wp-content/themes/(name of your theme)

#php basics

#file structure/hhierarchy
##File setup/naming is critial for wordpress development for example in order to set up a template for single posts and sigle pages we need to include... here is an image which breaks down the file hhierarchy
![alt text](https://developer.wordpress.org/files/2014/10/Screenshot-2019-01-23-00.20.04.png "chart from worpress docs")

#Some Wp global functions/hooks that are used are:
####Note that all the following functins should be wrapped in: <?php ?> tag
##wp_footer();
### sets up footer.php file so that we can export
##wp_header();
### sets up header.php file so that we can export
##get_header();
### imports header
##get_footer();
### imports footer
##echo site_url('');
### gets root url of website
## echo get_template_directory_uri();
### sets the root of your directory, useful for img tag

##[but heres a ist of functions directly from Wordrpess
](https://codex.wordpress.org/Function_Reference)

