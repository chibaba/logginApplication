<?php
function escape($string) {
  return htmlentities($string, ENT_ QUOTES, 'UTF-8');
}