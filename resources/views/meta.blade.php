@if(Route::currentRouteName() == 'home')
<!DOCTYPE html>
<html  lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <title>{{ $information->title }}</title>
    <meta name="keywords" content="{{ $information->keywords }}">
    <meta name="description" content="{{ $information->description }}">
    <meta property="og:title" content="{{$information->title }}" />
    <meta property="og:keywords" content="{{ $information->keywords }}" />
    <meta property="og:description" content="{{ $information->description }}" />
    <meta property="og:image" content="{{ asset($information->logo) }}" />
    <meta property="og:image:secure_url" content="{{ asset($information->logo) }}" />
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "WebSite",
          "name": "{{ $information->title }}",
          "description": "{{ $information->description }}",
          "keywords": "{{ $information->keywords }}",
          "url": "{{ request()->url() }}",
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
                    "url": "{{ asset($information->logo) }}"
                }
          },
          "language": "zh-CN",
        }
    </script>
@elseif(Route::currentRouteName() !== 'home' and Route::currentRouteName() !== 'article')
<!DOCTYPE html>
<html  lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <title>{{ $menu_page->name }} | {{ $information->title }}</title>
    <meta name="keywords" content="{{ $menu_page->keywords }}">
    <meta name="description" content="{{ $menu_page->description }}">
    <meta property="og:title" content="{{ $information->title }}" />
    <meta property="og:keywords" content="{{ $menu_page->keywords }}" />
    <meta property="og:description" content="{{ $menu_page->description }}" />
    <meta property="og:image" content="{{ asset($menu_page->banner) }}" />
    <meta property="og:image:secure_url" content="{{ asset($menu_page->banner) }}" />
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "CollectionPage",
          "name": "{{ $menu_page->name }}",
          "description": "{{ $menu_page->description }}",
          "keywords": "{{ $menu_page->keywords }}",
          "url": "{{ request()->url() }}",
          "publisher": {
            "@type": "Organization",
            "name": "LiRan",
            "logo": {
              "@type": "Text",
              "text": "{{ $information->title }}"
            }
          },
          "breadcrumb": {
            "@type": "BreadcrumbList",
            "itemListElement": [
              {
                "@type": "ListItem",
                "position": 1,
                "item": {
                  "@id": "{{ url('/') }}",
                  "name": "{{ $menus[1]->name }}"
                }
              },
              {
                "@type": "ListItem",
                "position": 2,
                "item": {
                  "@id": "{{ request()->url() }}",
                  "name": "{{ $menu_page->name }}"
                }
              }
            ]
          }
        }
    </script>

@elseif(Route::currentRouteName() == 'article')
<!DOCTYPE html>
<html  lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <title>{{ $article->title }} | {{ $information->title }}</title>
    <meta name="keywords" content="{{ $article->title }}">
    <meta name="description" content="{{ $article->description }}">
    <meta property="og:title" content="{{ $information->title }}" />
    <meta property="og:keywords" content="{{ $article->title }}" />
    <meta property="og:description" content="{{ $article->description }}" />
    <meta property="og:image" content="{{ asset($article->image) }}" />
    <meta property="og:image:secure_url" content="{{ asset($article->image) }}" />
    <meta property="article:published_time" content="{{ $article->datatime }}">
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Article",
          "headline": "{{ $article->title }}",
          "description": "{{ $article->description }}",
          "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "{{ request()->url() }}"
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
              "text": "{{ $information->title }}"
            }
          },
          "datePublished": "{{ Carbon\Carbon::parse($article->datatime)->toIso8601String() }}",
          "dateModified": "{{ Carbon\Carbon::parse($article->datatime)->toIso8601String() }}",
          "image": {
            "@type": "ImageObject",
            "url": "{{ asset($article->image) }}",
            "width": 500,
            "height": 333
          }
          "language": "zh-CN",
         }
    </script>
    @endif
    <meta name="author" content="TG:myyjjpp">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="zh-CN">
    <meta name="robots" content="index, follow">
    <link rel="shortcut icon" href="{{ url($information->icon) }}" sizes="16x16 32x32 48x48 64x64">
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:image:type" content="image/webp" />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:site_name" content="{{ $information->title  }}" />
    <script src="{{ asset('lozad.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style> .jl-loadmore-btn-w {float: left;width: 100%;text-align: center;}.options_dark_skin .jl_btn_load {background: #000;}.jl_btn_load {transition: transform 0.5s ease, background 0.5s ease, color 0.5s ease, box-shadow 0.5s ease;position: relative;width: 194px;height: 45px;line-height: 45px;padding: 0px;background: #222;margin-top: 10px;color: #fff;text-align: left;text-shadow: none;text-decoration: none;cursor: pointer;filter: none;box-shadow: none;text-align: center;font-size: 11px;font-weight: 400;text-transform: uppercase;letter-spacing: 1px;display: inline-block;-webkit-border-radius: 100px;-moz-border-radius: 100px;border-radius: 100px;}.jl_btn_load:focus {text-decoration: none;color: #fff;}.jl_btn_load:hover {text-decoration: none !important;color: #fff;background: #222;-webkit-transform: translatey(-3px);transform: translatey(-3px);-webkit-box-shadow: 0 20px 30px rgba(0, 0, 0, .2);box-shadow: 0 20px 30px rgba(0, 0, 0, .2);}.jl_btn_load.btn-loading:after {content: "\f1ce";display: inline-block;font-family: "fontawesome";font-size: 19px;margin-left: 0px;position: relative;top: 1px;-webkit-animation: jlloading 1s linear infinite;-moz-animation: jlloading 1s linear infinite;-ms-animation: jlloading 1s linear infinite;-o-animation: jlloading 1s linear infinite;animation: jlloading 1s linear infinite;}</style>
    <style>.lozad {background-size: cover;background-position: center;opacity: 0;animation: fadeIn 0.5s ease;}  @keyframes fadeIn { from {opacity: 0;} to {opacity: 1;} }</style>
