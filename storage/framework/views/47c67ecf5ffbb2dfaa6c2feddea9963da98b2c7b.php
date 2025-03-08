<?php if(Route::currentRouteName() == 'home'): ?>
<!DOCTYPE html>
<html  lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <title><?php echo e($information->title); ?></title>
    <meta name="keywords" content="<?php echo e($information->keywords); ?>">
    <meta name="description" content="<?php echo e($information->description); ?>">
    <meta property="og:title" content="<?php echo e($information->title); ?>" />
    <meta property="og:keywords" content="<?php echo e($information->keywords); ?>" />
    <meta property="og:description" content="<?php echo e($information->description); ?>" />
    <meta property="og:image" content="<?php echo e(asset($information->logo)); ?>" />
    <meta property="og:image:secure_url" content="<?php echo e(asset($information->logo)); ?>" />
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "WebSite",
          "name": "<?php echo e($information->title); ?>",
          "description": "<?php echo e($information->description); ?>",
          "keywords": "<?php echo e($information->keywords); ?>",
          "url": "<?php echo e(request()->url()); ?>",
          "potentialAction": [
            {
              "@type": "SearchAction",
              "target": "https://www.google.com/search?q={search_term_string}",
              "query-input": "required name=search_term_string"
            },
            {
              "@type": "SearchAction",
              "target": "https://cn.bing.com/search?q={search_term_string}",
              "query-input": "required name=search_term_string"
            },
            {
              "@type": "SearchAction",
              "target": "https://www.baidu.com/s?wd={search_term_string}",
              "query-input": "required name=search_term_string"
            },
            {
              "@type": "SearchAction",
              "target": "https://www.so.com/s?q={search_term_string}",
              "query-input": "required name=search_term_string"
            },
            {
              "@type": "SearchAction",
              "target": "https://www.sogou.com/web?query={search_term_string}",
              "query-input": "required name=search_term_string"
            }
          ],
          "publisher": {
            "@type": "Organization",
            "name": "TG:myyjjpp",
            "logo": {
                    "@type": "ImageObject",
                    "url": "<?php echo e(asset($information->logo)); ?>"
                }
          },
          "language": "zh-CN",
        }
    </script>
<?php elseif(Route::currentRouteName() !== 'home' and Route::currentRouteName() !== 'article'): ?>
<!DOCTYPE html>
<html  lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <title><?php echo e($menu_page->name); ?> | <?php echo e($information->title); ?></title>
    <meta name="keywords" content="<?php echo e($menu_page->keywords); ?>">
    <meta name="description" content="<?php echo e($menu_page->description); ?>">
    <meta property="og:title" content="<?php echo e($information->title); ?>" />
    <meta property="og:keywords" content="<?php echo e($menu_page->keywords); ?>" />
    <meta property="og:description" content="<?php echo e($menu_page->description); ?>" />
    <meta property="og:image" content="<?php echo e(asset($menu_page->banner)); ?>" />
    <meta property="og:image:secure_url" content="<?php echo e(asset($menu_page->banner)); ?>" />
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "CollectionPage",
          "name": "<?php echo e($menu_page->name); ?>",
          "description": "<?php echo e($menu_page->description); ?>",
          "keywords": "<?php echo e($menu_page->keywords); ?>",
          "url": "<?php echo e(request()->url()); ?>",
          "publisher": {
            "@type": "Organization",
            "name": "LiRan",
            "logo": {
              "@type": "Text",
              "text": "<?php echo e($information->title); ?>"
            }
          },
          "breadcrumb": {
            "@type": "BreadcrumbList",
            "itemListElement": [
              {
                "@type": "ListItem",
                "position": 1,
                "item": {
                  "@id": "<?php echo e(url('/')); ?>",
                  "name": "<?php echo e($menus[1]->name); ?>"
                }
              },
              {
                "@type": "ListItem",
                "position": 2,
                "item": {
                  "@id": "<?php echo e(request()->url()); ?>",
                  "name": "<?php echo e($menu_page->name); ?>"
                }
              }
            ]
          }
        }
    </script>

<?php elseif(Route::currentRouteName() == 'article'): ?>
<!DOCTYPE html>
<html  lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <title><?php echo e($article->title); ?> | <?php echo e($information->title); ?></title>
    <meta name="keywords" content="<?php echo e($article->title); ?>">
    <meta name="description" content="<?php echo e($article->description); ?>">
    <meta property="og:title" content="<?php echo e($information->title); ?>" />
    <meta property="og:keywords" content="<?php echo e($article->title); ?>" />
    <meta property="og:description" content="<?php echo e($article->description); ?>" />
    <meta property="og:image" content="<?php echo e(asset($article->image)); ?>" />
    <meta property="og:image:secure_url" content="<?php echo e(asset($article->image)); ?>" />
    <meta property="article:published_time" content="<?php echo e($article->datatime); ?>">
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Article",
          "headline": "<?php echo e($article->title); ?>",
          "description": "<?php echo e($article->description); ?>",
          "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "<?php echo e(request()->url()); ?>"
          },
          "author": {
            "@type": "Person",
            "name": "LiRan"
          },
          "publisher": {
            "@type": "Organization",
            "name": "LiRan",
            "logo": {
              "@type": "Text",
              "text": "<?php echo e($information->title); ?>"
            }
          },
          "datePublished": "<?php echo e(Carbon\Carbon::parse($article->datatime)->toIso8601String()); ?>",
          "dateModified": "<?php echo e(Carbon\Carbon::parse($article->datatime)->toIso8601String()); ?>",
          "image": {
            "@type": "ImageObject",
            "url": "<?php echo e(asset($article->image)); ?>",
            "width": 500,
            "height": 333
          }
          "language": "zh-CN",
         }
    </script>
    <?php endif; ?>
    <meta name="author" content="TG:myyjjpp">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="zh-CN">
    <meta name="robots" content="index, follow">
    <link rel="shortcut icon" href="<?php echo e(url($information->icon)); ?>" sizes="16x16 32x32 48x48 64x64">
    <meta property="og:url" content="<?php echo e(request()->url()); ?>" />
    <meta property="og:image:type" content="image/webp" />
    <link rel="canonical" href="<?php echo e(request()->url()); ?>" />
    <meta property="og:site_name" content="<?php echo e($information->title); ?>" />
    <script src="<?php echo e(asset('lozad.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style> .jl-loadmore-btn-w {float: left;width: 100%;text-align: center;}.options_dark_skin .jl_btn_load {background: #000;}.jl_btn_load {transition: transform 0.5s ease, background 0.5s ease, color 0.5s ease, box-shadow 0.5s ease;position: relative;width: 194px;height: 45px;line-height: 45px;padding: 0px;background: #222;margin-top: 10px;color: #fff;text-align: left;text-shadow: none;text-decoration: none;cursor: pointer;filter: none;box-shadow: none;text-align: center;font-size: 11px;font-weight: 400;text-transform: uppercase;letter-spacing: 1px;display: inline-block;-webkit-border-radius: 100px;-moz-border-radius: 100px;border-radius: 100px;}.jl_btn_load:focus {text-decoration: none;color: #fff;}.jl_btn_load:hover {text-decoration: none !important;color: #fff;background: #222;-webkit-transform: translatey(-3px);transform: translatey(-3px);-webkit-box-shadow: 0 20px 30px rgba(0, 0, 0, .2);box-shadow: 0 20px 30px rgba(0, 0, 0, .2);}.jl_btn_load.btn-loading:after {content: "\f1ce";display: inline-block;font-family: "fontawesome";font-size: 19px;margin-left: 0px;position: relative;top: 1px;-webkit-animation: jlloading 1s linear infinite;-moz-animation: jlloading 1s linear infinite;-ms-animation: jlloading 1s linear infinite;-o-animation: jlloading 1s linear infinite;animation: jlloading 1s linear infinite;}</style>
    <style>.lozad {background-size: cover;background-position: center;opacity: 0;animation: fadeIn 0.5s ease;}  @keyframes fadeIn { from {opacity: 0;} to {opacity: 1;} }</style>
<?php /**PATH /Applications/EServer/www/www.demo.com/resources/views/meta.blade.php ENDPATH**/ ?>