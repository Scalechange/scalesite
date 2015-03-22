<?php

if( !get_setting( 'meta_authorbox' ) ) return;

$translate['author-title'] = get_setting( 'translate' ) ? get_setting( 'authorbox_title', 'Author' ) : __( 'Author', 'spyropress' );
?>
<div class="post-block post-author clearfix">
    <h3><i class="icon icon-user"></i><?php echo $translate['author-title']; ?></h3>
    </div>
<div class="post-meta">
	<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author_meta( 'display_name' ); ?></a>
</div>