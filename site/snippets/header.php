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
      <section class="me">
        <div class="wrapper">
          <div class="column full">
            <h1><?= html::a($site->url(), $site->author()->html()) ?></h1>
          </div>
        </div>
      </section>
    </header>