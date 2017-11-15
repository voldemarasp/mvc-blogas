<!doctype html>
<html lang="en">
<head>
    <title><?= CONFIG['site_title']; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/<?= CONFIG['site_path']; ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/<?= CONFIG['site_path']; ?>/assets/css/style.css">
</head>
<body>
    <div class="container-fluid headeris">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <ul class="meniu">
                        <?php uFrame\Menu::show(); ?>
                    </div>
                    <div class="col-4">
                        <form action="/<?= CONFIG['site_path']; ?>BlogPost/Search" method="GET">
                            <div class="input-group mt-1"> 
                              <input name="search" type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
                              <span class="input-group-btn">
                                <button class="btn btn-outline-light" type="submit">Go!</button>
                            </span>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid slideris">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="slideris_title"><?= CONFIG['site_title']; ?></h2>
                </div>
            </div>
        </div>
    </div>              
    <div class="container-fluid contento_background_wrap">    
        <div class="container contento_wrapas">
            <div class="row">
                <div class="col-7 contentas">
                    <?php foreach ($data['postList'] as $post) {
                        ?>
                        <h2 class="text-center"><?= $post['title']; ?></h2>
                        <hr>
                        <?= substr($post['content'], 0, 400); ?>...
                        <div class="text-center">
                            <a href="http://localhost/Projektas/Objektinis%20MVC%20Blogas/blogpost/show/<?= $post['id']; ?>" class="btn btn-outline-light mt-5 mb-5" role="button" aria-pressed="true">Read more</a>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <div class="col-4 sidebaro_wrapas">
                    <div class="sidebaras">
                        <h2>ABOUT US</h2>
                        <hr>
                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque tellus sit amet tortor sodales interdum. Aenean nunc ligula, porttitor ac mauris non, placerat tempor felis. Ut purus purus, molestie vel ligula nec, porttitor tincidunt elit.</p>
                    </div>
                    <div class="sidebaras">
                        <h2>ADS</h2>
                        <hr>
                        <img src="<?= $data['ads']['url']; ?>" width="250">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid footeris">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="text-center">Copyright © Game Blog Pro 2017</p>  
                </div>
            </div>
        </div>
    </div>

    <script src="/<?= CONFIG['site_path']; ?>/assets/js/script.js"></script>
</body>
</html>