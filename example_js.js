/**
 * EXAMPLE SOCIAL SHARE CSS Query.
 * Source: https: //hoolite.be/coding/add-a-social-share-popup-to-your-wordpress-blog-no-plugin/.
 */
if (('.social-share').length) {
    jQuery(document).ready(function () {
        jQuery('.social-popup').click(function (e) {
            e.preventDefault();
            window.open(jQuery(this).attr('href'), 'fbShareWindow', 'height=450, width=550, top=' + (jQuery(window).height() / 2 - 275) + ', left = ' + (jQuery(window).width() / 2 - 225) + ', toolbar = 0, location = 0, menubar = 0, directories = 0, scrollbars = 0');
            return false;
        });
    });
}