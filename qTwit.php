<?php
/*
 Plugin Name: qTwit (for Wordpress)
 Plugin URI: http://kylehotchkiss.com/blog/productions/qTwit/
 Description: qTwit displays your latest tweets, but faster.
 Author: Kyle Hotchkiss [Productions]
 Version: 0.5
 Author URI: http://kylehotchkiss.com
*/

class WP_Widget_qTwit extends WP_Widget {
 function WP_Widget_qTwit() {
  $widget_ops = array( 'classname' => 'widget_qTwit', 'description' => __( "qTwit displays your latest tweets, but faster." ) );
  $this->WP_Widget('qTwit', __('qTwit'), $widget_ops);
 }
    
 function widget($args, $instance) {
  extract($args);
  echo $before_widget;
  echo $before_title;
  if(!empty($instance['title'])){echo $instance['title'];}else{echo "Tweet, Tweet";}
  echo $after_title;
  ?>
  <script type="text/javascript">
   jQuery(document).ready(function($) {
    $(".tweetList-<?php echo $args['widget_id'] ?>").tweet({
     username:"<?php if(!empty($instance['username'])){echo $instance['username'];}else{echo "kylehotchkiss";}?>",
     count: <?php echo $instance['total']; ?>,
     loading_text:"Loading Tweets..."
    });
   });
  </script>
  <div class="tweetList-<?php echo $args['widget_id'] ?>" style="margin-bottom:0;padding-bottom:0;"></div>
  <noscript>
   <div>
    Uh-Oh! In order to view this widget, you must enable Javascript.
   </div>
  </noscript>
  <!--<div style="font-size:9px;font-style:italic;text-align:right;"><a href="http://twitter.com/<?php echo $instance['username'];?>/">See more on Twitter</a>.</div>-->
  <?php echo $after_widget;
 }
 
 function update($new_instance, $old_instance) {
  return $new_instance;
 }

function form($instance) { ?>
 <div id="qTwit-admin-panel">
 <p>
  <label for="<?php echo $this->get_field_id("title") ?>" style="display:block;">Title:</label>
  <input type="text" id="<?php echo $this->get_field_id("title") ?>" name="<?php echo $this->get_field_name("title") ?>" value="<?php echo $instance["title"]; ?>" style="width:100%;"/>
 </p>
 <p>
  <label for="<?php echo $this->get_field_id("username") ?>" style="display:block;">Your Twitter Username:</label>
  <input type="text" id="<?php echo $this->get_field_id("username") ?>" name="<?php echo $this->get_field_name("username") ?>" value="<?php echo $instance["username"]; ?>" style="width:100%;"/>
 </p>
 <p>
  <label for="<?php echo $this->get_field_id("total") ?>" style="display:block;">Number of Tweets:</label>
  <select id="<?php echo $this->get_field_id("total") ?>" name="<?php echo $this->get_field_name("total") ?>" default="<?php echo $instance["total"]; ?>" style="width:100%;">
   <option value="1" <?php if ($instance["total"] == 1){echo 'selected="selected"';}?>>1</option>
   <option value="2" <?php if ($instance["total"] == 2){echo 'selected="selected"';}?>>2</option>
   <option value="3" <?php if ($instance["total"] == 3){echo 'selected="selected"';}?>>3</option>
   <option value="4" <?php if ($instance["total"] == 4){echo 'selected="selected"';}?>>4</option>
   <option value="5" <?php if ($instance["total"] == 5){echo 'selected="selected"';}?>>5</option>
  </select>
 </p>
</div><?php
 } 
}

function widget_qTwit_jsInit() {
 wp_enqueue_script('qTwit', WP_PLUGIN_URL . '/qtwit/jquery.tweet.js', array('jquery'));
}

add_action('widgets_init', create_function('', 'return register_widget("WP_Widget_qTwit");'));
add_action('init', 'widget_qTwit_jsInit');
?>
