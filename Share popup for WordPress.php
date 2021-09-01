<?php
/**
 * Social Share popup for WordPress.
 * Source: https://hoolite.be/coding/add-a-social-share-popup-to-your-wordpress-blog-no-plugin/.
 */
?>

<div class="social-share">
	<a class="social-popup ss-facebook" itemprop="url" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url( get_permalink() ); ?>" target="_self">
		<img src="./img/facebook.svg" />
	</a>

	<a class="social-popup ss-twitter" itemprop="url" href="https://twitter.com/intent/tweet?text=<?php echo esc_html( get_the_title() ); ?>&url=<?php echo esc_url( get_permalink() ); ?>" target="_self">
		<img src="./img/twitter.svg" />
	</a>

	<a class="social-popup ss-linkedin" itemprop="url" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo esc_url( get_permalink() ); ?>&title=<?php echo esc_html( get_the_title() ); ?>&summary=&source=<?php echo esc_url( get_site_url() ); ?>" target="_self">
		<img src="./img/linkedin.svg" />
	</a>

	<a class="social-popup ss-email" itemprop="url" href="mailto:?&subject=<?php echo esc_html( get_the_title() ); ?>" target="_self">
		<img src="./img/email.svg" />
	</a>

	<a class="social-popup ss-whatsapp mobile-icon" itemprop="url" href="whatsapp://send?text=<?php echo esc_html( get_the_title() ); ?> <?php echo esc_url( get_permalink() ); ?>" target="_self">
		<img src="./img/whatsapp.svg" />
	</a>
</div>
