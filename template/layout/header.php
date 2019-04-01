<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="/css/site.css" /> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Satisfy" rel="stylesheet"> -->
    
    <!-- <script src="/js/jquery-3.3.1.js"></script>
    <script src="/js/bootstrap.bundle.js"></script> -->

<!--CSS -->
        <HEADERCSS/>
        <HEADERJS/>
</head>
<body>

    <header class="blog-header py-3 headerwight">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="text-muted" href="#">Subscribe</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="#">Large</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">

      <a class="text-muted" href="/admin">Админка</a>

        <?= $this->drawRoute("loginform", "displayButton") ?>

      </div>
    </div>
  </header>

thit is heder
<div class="header-logo" style="text-align:center;">
    <img src="/img/toplogo.jpg" />
 </div>