<?php

/**
 * Set html language code.  Default is English.
 *
 * @see https://www.w3schools.com/tags/ref_language_codes.asp
 */
$language = 'en';

/**
 * This is how the email address will appear on the page.
 * You'll probably not want to put your contact email address
 * in plain text, because it will be scraped and spammed by bots.
 *
 * There are a few steps you can take, such as those in the
 * referenced link:
 *
 * @see https://www.smartlabsoftware.com/howto/hide-email-spambots.htm
 */
$contactEmail = 'username [at] gmail.com';

/**
 * Set whatever text is desired to show
 * on the main "For Sale" page.
 */
$contactText = "Please contact {$contactEmail}";
$domain = trim($_SERVER["HTTP_HOST"]);
$afterDomainText = ' is for sale.';
$headTitle = strtoupper($domain) . $afterDomainText;
$bodyTitle = $domain . $afterDomainText;

/**
 * Turn on output buffering to make
 * the page load more quickly.
 */
ob_start();

?>
<!DOCTYPE html>
<html lang="<?= $language; ?>">
<head>
<meta charset="utf-8">
<title><?= $headTitle; ?></title>
<link rel="icon" type="image/x-icon" href="/favicons/favicon.ico">
<style>
#divMainText {
  font-size: 30px;
}
.text-center {
  text-align: center;
}
</style>
</head>
<body>

<div id="divMainText" class="text-center">
    <h1><?= $bodyTitle; ?></h1>
    <h2><?= $contactText; ?></h2>
    <p>&copy; <?= date('Y') . " {$domain}"; ?></p>
</div>

<!-- Template Provided by Mobile Code Media http://mobilecodemedia.com -->

</body>
</html>

<?php

/**
 * Output everything that was buffered.
 */
ob_end_flush();
