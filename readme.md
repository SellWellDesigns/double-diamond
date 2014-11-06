# Changing from Summer to Winter

All that needs to change is the stylesheet.  Both stylesheets are included in the `<head>` of the document, however only one is to be uncommented at a time.

There are 2 files which must be changed to switch seasons:

* `app/views/layouts/site.blade.php`
* `app/views/layouts/secondary.blade.php`

In the case of both files, you will find the stylesheet includes located between lines: `12-16`
You just have to comment out one season, and uncomment the other.