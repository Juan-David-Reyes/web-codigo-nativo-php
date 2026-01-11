<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title><?= $pageTitle ?? 'Agencia de Marketing Digital | Código Nativo' ?></title>
    <meta name="description" content="<?= $pageDescription ?? 'Codigo Nativo - Agencia de diseño web profesional para optimizar tu negocio online. Diseño, desarrollo y mantenimiento web.' ?>">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://www.codigonativo.com<?= $_SERVER['REQUEST_URI'] ?? '/' ?>">
    
    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_CO">
    <meta property="og:site_name" content="Código Nativo">
    <meta property="og:title" content="<?= $pageTitle ?? 'Agencia de Marketing Digital | Código Nativo' ?>">
    <meta property="og:description" content="<?= $pageDescription ?? 'Agencia de diseño web profesional para optimizar tu negocio online - Codigo Nativo' ?>">
    <meta property="og:image" content="https://www.codigonativo.com/assets/images/og-image.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:url" content="https://www.codigonativo.com">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@codigonativo">
    <meta name="twitter:creator" content="@codigonativo">
    <meta name="twitter:title" content="<?= $pageTitle ?? 'Agencia de Marketing Digital | Código Nativo' ?>">
    <meta name="twitter:description" content="<?= $pageDescription ?? 'Agencia de diseño web profesional para optimizar tu negocio online' ?>">
    <meta name="twitter:image" content="https://www.codigonativo.com/assets/images/og-image.png">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= URL_PATH ?>assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="512x512" href="<?= URL_PATH ?>assets/images/favicon/android-chrome-512x512.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= URL_PATH ?>assets/images/favicon/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= URL_PATH ?>assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= URL_PATH ?>assets/images/favicon/favicon-16x16.png">
    <link rel="shortcut icon" href="<?= URL_PATH ?>assets/images/favicon/favicon.ico">

    <!-- Preload Critical Resources -->
    <link rel="preload" href="<?= URL_PATH ?>assets/css/style.min.css" as="style">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?= URL_PATH ?>assets/css/style.min.css">
    <!-- Fuentes optimizadas: solo pesos necesarios con display=swap -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Poppins:wght@600;700&family=Playfair+Display:wght@400&display=swap" rel="stylesheet">

    <script src="<?= URL_PATH ?>assets/js/main.min.js" defer></script>

    <!-- Google Analytics - async optimizado -->
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-8DDYN9VZKZ');
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-8DDYN9VZKZ"></script>
    
    <!-- GTM - async optimizado -->
    <script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W6R7NGFS');
    </script>
    
    <!-- Schema.org Organization Markup -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Código Nativo",
        "url": "https://www.codigonativo.com",
        "logo": "https://www.codigonativo.com/assets/images/brand/dark_logo.svg",
        "description": "Agencia de diseño web profesional para optimizar tu negocio online",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "CO"
        },
        "sameAs": [
            "https://www.linkedin.com/company/codigonativo"
        ],
        "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "customer service",
            "availableLanguage": "Spanish"
        }
    }
    </script>
</head>
<body>

    <?php require VIEW_PATH . '/components/header.php'; ?>
    <?= $content ?>
    <?php require VIEW_PATH . '/components/footer.php'; ?>

</body>
</html>
