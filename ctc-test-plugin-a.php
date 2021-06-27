<?php
add_shortcode('test_plugin_a', 'test_plugin_a_dothing');
function test_plugin_a_init() {
  function test_plugin_a_dothing() {
    $output = 'Ich bin das Test-Plugin A und ich funktioniere!';
    return $output;
  }
}
add_action('init', 'test_plugin_a_init');
?>
