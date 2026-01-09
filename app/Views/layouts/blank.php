<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title><?= $title ?? 'Landing Page | Código Nativo' ?></title>
    <meta name="description" content="<?= $description ?? 'Codigo Nativo - Agencia de diseño web profesional' ?>">
    <meta name="keywords" content="<?= $keywords ?? 'diseño web, desarrollo web, marketing digital' ?>">

    <meta property="og:title" content="<?= $title ?? 'Codigo Nativo' ?>">
    <meta property="og:description" content="<?= $description ?? 'Agencia de diseño web profesional' ?>">
    <meta property="og:image" content="<?= $ogImage ?? 'images/og-image.png' ?>">
    <meta property="og:url" content="<?= $ogUrl ?? 'https://www.codigonativo.com' ?>">
    <meta name="twitter:card" content="summary_large_image">

    <link rel="icon" type="image/png" sizes="32x32" href="<?= URL_PATH ?>assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= URL_PATH ?>assets/images/favicon/android-chrome-512x512.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= URL_PATH ?>assets/images/favicon/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= URL_PATH ?>assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= URL_PATH ?>assets/images/favicon/favicon-16x16.png">
    <link rel="shortcut icon" href="<?= URL_PATH ?>assets/images/favicon/favicon.ico" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&family=Poppins:wght@400;500;600;700;800&display=swap;&family=PlayfairDisplay:wght@400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= URL_PATH ?>assets/css/normalize.css">
    <link rel="stylesheet" href="<?= URL_PATH ?>assets/css/style.min.css">

    <?php if (isset($customCSS)): ?>
        <link rel="stylesheet" href="<?= URL_PATH ?>assets/css/<?= $customCSS ?>">
    <?php endif; ?>

    <?php if (isset($customScripts)): ?>
        <?php foreach ($customScripts as $script): ?>
            <script src="<?= URL_PATH ?>assets/js/<?= $script ?>" defer></script>
        <?php endforeach; ?>
    <?php endif; ?>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-8DDYN9VZKZ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-8DDYN9VZKZ');
    </script>

    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W6R7NGFS');</script>
</head>
<body>

    <?= $content ?>

</body>
</html>
