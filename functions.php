<?php
function dafina_script_enqueue()
{
  wp_enqueue_style(
    "costumstyle",
    get_template_directory_uri() . "/css/dafina.css",
    [],
    "1.0.0",
    "all"
  );
}
add_action("wp_enqueue_scripts", "dafina_script_enqueue");

function dafina_theme_setup()
{
  add_theme_support("menus");

  register_nav_menu("primary", "Primary Header Navigation");
  register_nav_menu("secondary", "Footer Navigation");
}
add_action("init", "dafina_theme_setup");

add_theme_support("custom-background");
add_theme_support("custom-header");
add_theme_support("post-thumbnails");
add_theme_support("post-formats", ["aside", "image", "video"]);
