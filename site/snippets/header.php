<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
    <meta name="description" content="<?= $site->description()->html() ?>">
    <meta name="keywords" content="<?= $site->keywords()->html() ?>">

    <?= css('assets/css/slj.css') ?>

  </head>
  <body>

    <header>
      <h1><?= $site->title()->html() ?></h1>
    </header>