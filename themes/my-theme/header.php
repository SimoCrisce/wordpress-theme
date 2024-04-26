<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= get_bloginfo() ?></title>
    <?php wp_head() ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark mb-3" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="<?= site_url() ?>"><?= get_bloginfo() ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
            <a class="nav-link active" aria-current="page" href="<?= site_url() ?>">Home</a>
            </div>
        </div>
    </div>
    </nav>
    <div class="container">
