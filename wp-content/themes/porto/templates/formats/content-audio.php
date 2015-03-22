<div class="post-audio">
<?php 
    $video = get_post_meta( get_the_ID(), '_format_audio_embed', true );
    $output = wp_oembed_get( $video );
    echo str_replace( array( '<div class="video-container">', '</div>' ), '', $output );
?>
</div>