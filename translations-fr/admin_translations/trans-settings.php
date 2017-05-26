<?php
$txt_html_title                = "Paramètres";
$txt_main_title                = "Paramètres";
$txt_tab_general               = "Général";
$txt_tab_email                 = "Email";
$txt_tab_apis                  = "APIs";
$txt_tab_payment               = "Paiement";
$txt_site_name                 = "Nom du site";
$txt_html_lang                 = "HTML lang";
$txt_html_lang_explain         = "la valeur de l'attribut lang html";
$txt_country_name              = "Nom du pays";
$txt_country_name_explain      = "Sera utilisé dans la page de résultats des listages. (<em>e.g.</em> Restaurants aux <em>États Unis</em>)";
$txt_country_code              = "Code du pays";
$txt_country_code_explain      = "ISO 3166-1 alpha-2</a> – Code de pays à deux lettres, sera également utilisé pour construire url canonique donc ne pas changer souvent";
$txt_default_city_id           = "ID de la ville par défaut";
$txt_default_city_id_explain   = "ID de ligne de la base de données de la ville de défaut ";
$txt_default_city_slug         = "Slug de ville de défaut";
$txt_default_city_slug_explain = "Les slugs sont utilisés dans les URLs, nom minuscule de la ville par défaut sans caractères spéciaux ou espaces (utilisez plutôt le tiret).";
$txt_items_per_page            = "Objets par page";
$txt_items_per_page_explain    = "Nombre d'éléments à afficher sur chaque page de résultats";
$txt_max_pics                  = "Photos max";
$txt_max_pics_explain          = "Combien de photos chaque entreprise peut-elle importer?";
$txt_default_cat               = "Catégorie de défaut";
$txt_timezone                  = "Fuseau horaire";
$txt_timezone_explain          = "Entre votre fuseau horaire. <a href='http://php.net/manual/en/timezones.php' target='_blank'>Cliquer ici</a> pour une liste de valeures possibles.";
$txt_default_lat               = "Latitude par défaut.";
$txt_default_lng               = "Longitude de défaut.";
$txt_admin_email               = "Email d'admin.";
$txt_dev_email                 = "Email du dev.";
$txt_smtp_server               = "Serveur SMTP";
$txt_smtp_user                 = "SMPT user";
$txt_smtp_pass                 = "SMPT pass";
$txt_smtp_port                 = "SMPT port";
$txt_gmaps_key                 = "Clé Google Maps";
$txt_gmaps_key_explain         = "Cet clé API est requise pour afficher les maps sur votre site.<br><a href='https://developers.google.com/maps/documentation/javascript/get-api-key' target='_blank'>Instructions sur la façon d'obtenir une clé API</a><br>Assurez-vous également de ne pas activer la facturation pour l'utilisation de l'API ou assurez-vous de rester sous l'utilisation de quota gratuit. <a href='https://developers.google.com/maps/faq#usage-limits' target='_blank'>Cliquer ici</a> pour plus d'informations à ce sujet.";
$txt_paypal_mode               = "Mode paypal (en direct ou sandbox)";
$txt_live                      = "En direct";
$txt_sandbox                   = "Sandbox";
$txt_paypal_merchant_id        = "ID Marchand Paypal";
$txt_paypal_sandbox_merch_id   = "ID Marchand Paypal Sandbox";
$txt_paypal_bn                 = "Paypal Bn";
$txt_paypal_bn_explain         = "Un identifiant de la source qui a construit le code pour le bouton que l'acheteur a cliqué, parfois appelé build notation. <a href='https://developer.paypal.com/docs/classic/paypal-payments-standard/integration-guide/Appx_websitestandard_htmlvariables/' target='_blank'>Voir format ici </a>. Insérer seulement &lt;compagnie&gt; (Voir docs à propos &lt;company&gt;. Ne pas insérer _&lt;Service&gt;_&lt;Produit&gt;_&lt;Pays&gt;).";
$txt_paypal_checkout_logo_url  = "URL du Logo de Checkout de Paypal";
$txt_paypal_checkout_logo_url_explain = "L'URL du logo qui sera utilisé sur la page de paiement Paypal.";
$txt_currency_code             = "Code de devise";
$txt_currency_code_explain 	   = "3-caractères <a href='https://en.wikipedia.org/wiki/ISO_4217#Active_codes' target='_blank'>ISO-4217</a> code de devise. Ceci sera utilisé lors de l'envoi de données à Paypal.";
$txt_currency_symbol           = "Symbole de la devise";
$txt_paypal_locale			   = "Page de connexion Paypal locale";
$txt_notify_url  			   = "Notifier l'URL";
$txt_notify_url_explain 	   = "URL du fichier du gestionnaire IPN de Paypal";

// v.1.05
$txt_facebook_key              = "Clé API de Facebook";
$txt_facebook_key_explain      = "Utilisé pour la connexion sociale.";
$txt_facebook_secret           = "Secret API Facebook";
$txt_twitter_key               = "Clé API de Twitter";
$txt_twitter_key_explain       = "Utilisé pour la connexion sociale.";
$txt_twitter_secret            = "Secret API Twitter";

// v.1.06
$txt_paypal_header             = "Paramètres Paypal";
$txt_gateway_mode              = "Gateway Mode";
$txt_gateway_currency          = "Devise ";
$txt_2checkout_header          = "Paramètres 2Checkout";
$txt_2checkout_sid             = "2Checkout SID";
$txt_2checkout_sandbox_sid     = "2Checkout Sandbox SID";
$txt_2checkout_secret          = "2Checkout Mot Secret";
$txt_2checkout_lang            = "2Checkout Languae";
$txt_2checkout_notify_url      = "2Checkout URL Globale (Notifications)";
$txt_mercadopago_header        = "Paramètres MercadoPago";

// v.1.08
$txt_stripe_header             = "Paramètres Stripe";
$txt_stripe_test_mode          = "Tester";
$txt_test_secret_key           = "Test Secret Key";
$txt_test_publishable_key      = "Test Publishable Key";
$txt_live_secret_key           = "Live Secret Key";
$txt_live_publishable_key      = "Live Publishable Key";
$txt_stripe_currency_code      = "3-Lettre Code ISO";
$txt_mail_after_post           = "Recevoir une notification sur l'annonce / modifier la liste?";