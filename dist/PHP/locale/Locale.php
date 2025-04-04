<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

if (!isset($_SESSION["lang"]) || $_SESSION["lang"] === "") {
  $_SESSION["lang"] = "ms-MY";
}

require_once($_SERVER['DOCUMENT_ROOT'] . '/PHP/locale/ms-MY.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/PHP/locale/en-MY.php');

function __($key) {
  global $_LOCALE_MS_MY, $_LOCALE_EN_MY;
  $lang = $_SESSION["lang"];

  if ($lang === "ms-MY") {
    return isset($_LOCALE_MS_MY[$key]) ? $_LOCALE_MS_MY[$key] : $key;
  } elseif ($lang === "en-MY") {
    return isset($_LOCALE_EN_MY[$key]) ? $_LOCALE_EN_MY[$key] : $key;
  } else {
    return $key;
  }
}
