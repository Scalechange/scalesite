<?php 

echo $before_widget;

if ( $title ) echo $before_title . $title . $after_title;
echo '
<div id="tweets_' . $this->id . '" class="latest-tweets twitter" data-account-id="' . $username . '" data-tweets-count="' . $post_count . '">
    <p>Please wait...</p>
</div>';  

echo $after_widget;