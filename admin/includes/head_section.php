<?php
// Initialize the session
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header('Location: ' . BASE_URL . 'login');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <head>
    <script
      async="async"
      src="https://www.googletagmanager.com/gtag/js?id=UA-176728070-2"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());
      gtag("config", "UA-176728070-2");
    </script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&amp;family=Roboto+Mono&amp;display=swap"
      rel="stylesheet"
    />
    <link
      href="https://nasrul.dev/panely/v1.0/assets/build/styles/ltr-core.css"
      rel="stylesheet"
    />
    <link
      href="https://nasrul.dev/panely/v1.0/assets/build/styles/ltr-vendor.css"
      rel="stylesheet"
    />
    <link
      href="https://nasrul.dev/panely/v1.0/assets/build/styles/ltr-dashboard1.css"
      rel="stylesheet"
    />
    <link
      href="https://nasrul.dev/panely/v1.0/assets/images/favicon.ico"
      rel="shortcut icon"
      type="image/x-icon"
    />
    <!-- ckeditor -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.8.0/ckeditor.js"></script>