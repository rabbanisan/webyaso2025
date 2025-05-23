<?php
defined('BASEPATH') or exit('No direct script access allowed');

function is_active($uri)
{
  // echo "URI saat ini:";
  $CI = &get_instance();
  return ($CI->uri->uri_string() === $uri) ? 'active' : '';
}
