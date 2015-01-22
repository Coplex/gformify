<?php 
  /*
  Plugin Name: Gformify
  Plugin URI: http://www.coplex.com
  Description: Wrap/Add Bootstrap classes and styles for Gravity Forms
  Version: 0.1
  Author:  Coplex
  Author URI: http://www.coplex.com
  License: GPL2
  */

  defined('ABSPATH') or die("You will not pass");


 /**
   * Enqueue styles
   *
   * Note: I'll need to refactor this to point to the minified file when gulp starts minifying our style assets
   */ 
  class gformifyEnqueue
  {

    //  Constructor method called on each new created object
    public function __construct() {
      add_action('wp_enqueue_scripts', array($this, 'enqueueAssets'));
    }

    public function enqueueAssets() {
      wp_register_style( 'gformify-style', plugins_url( 'gformify/assets/css/gformify.less' ), array(), '3.3.1' );
      wp_register_script( 'gformify', plugins_url( 'gformify/assets/js/gformify.js' ), array('jquery'), null, false );

      //  Need to set this as a fallback and check theme for bootstrap before enqueuing
      wp_register_style( 'co-gformify', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css', array(), '3.3.1' );
      
      wp_enqueue_style( 'gformify-style' );
      wp_enqueue_script( 'gformify' );

      wp_enqueue_style( 'co-gformify' );
    }

  }

  $enqueue = new gformifyEnqueue;

?>