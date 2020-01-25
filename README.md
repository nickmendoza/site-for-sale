# Site For Sale Landing Page

### Summary:
Easily offer all of your sites for sale by displaying a message and listing a contact email address for your primary and parked domains.  It will dynamically display the domain for whichever site was visited in the site's title and on the page itself.  It also dynamically lists the current copyright year, based on the server's date.

![Demonstration Image](https://mobilecodemedia.com/wp-content/uploads/2020/01/site-for-sale.png)

### Instructions:
Clone the repository and move all of the files into your web root.  This is generally `/var/www/html` or your `public_html` folder:

```shell script
$ git clone git@github.com:nickmendoza/site-for-sale.git
```

Within `index.php`, set the language and set the contact email address:
```php
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
```

### License:

- MIT
- http://mobilecodemedia.com
