@php 
    use App\Traits\functionsTrait;
@endphp
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">        
        <title>{{ $seo['meta']['title'] }}</title>
        <meta name="description" content="{{ $seo['meta']['description'] }}">
        <meta name="keywords" content="{{ $seo['meta']['keywords'] }}">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="application-name" content="Website">
        <meta name="author" content="Caribbean Taxi">
        <meta name="robots" content="index,follow">
        <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.ico">
        <link rel="sitemap" type="application/xml" title="Sitemap" href="/sitemap.xml">
        <meta name="csrf-token" content="{{ csrf_token() }}">     
        <link rel="canonical" href="{{ url()->current() }}">
        <link rel="alternate" hreflang="x-default" href="{{ url()->current() }}">   
        @if(sizeof($seo['alternate']) > 0)            
            @foreach($seo['alternate'] as $key => $value)
                <link rel="alternate" hreflang="{{$key}}" href="{{ url('/') }}{{$value}}">
            @endforeach
        @endif
        <link rel="preconnect" href="https://www.googletagmanager.com">
        <link rel="dns-prefetch" href="https://www.googletagmanager.com">
        <meta name="og:url" content="{{ url()->current() }}">
        <meta name="og:type" content="website">
        <meta name="og:title" content="{{ $seo['meta']['title'] }}">
        <meta name="og:description" content="{{ $seo['meta']['description'] }}">
        <meta name="og:image" content="/assets/img/social/facebook.jpg">
        <meta property="og:locale" content="es-MX">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $seo['meta']['title'] }}">
        <meta name="twitter:description" content="{{ $seo['meta']['description'] }}">
        <meta name="twitter:image" content="/assets/img/social/twitter.jpg">
        
        <link href="{{ mix('/assets/css/base.min.css') }}" rel="preload" as="style" >
        <link href="{{ mix('/assets/css/base.min.css') }}" rel="stylesheet">        
        <script defer src="{{ mix('/assets/js/base/index.min.js') }}"></script>

        @stack('push-top')

        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/682b4275b26df01905316062/1irkfn78h';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
        <!--End of Tawk.to Script-->

        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "LocalBusiness",
                "name": "Taxi Riviera Maya",
                "priceRange": "$$",
                "image": [
                    "https://caribbean-taxi.com/assets/img/website/logo.webp"
                ],
                "hasMap": "https://www.google.com/maps/place/Caribbean+Taxi/@21.0383514,-86.8689682,15z/data=!4m6!3m5!1s0x8f4e81e477a28935:0x2613d52928408f18!8m2!3d21.0383514!4d-86.8689682!16s%2Fg%2F11l287r9yd?hl=es&entry=tts",       
                "telephone": "+52 (998) 387.0238",
                "url": "https://caribbean-taxi.com",
                "sameAs": [
                    "https://www.facebook.com/taxirivieramayaMX",
                    "https://www.tripadvisor.com.mx/Attraction_Review-g150807-d10857097-Reviews-Taxi_Riviera_Maya-Cancun_Yucatan_Peninsula.html"
                ],
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "Alfredo V. Bonfil",
                    "addressLocality": "Cancun",
                    "addressRegion": "Quintana Roo",
                    "postalCode": "77565",
                    "addressCountry": "Mexico"
                },                    
                "openingHoursSpecification": {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": "SUN-MON",
                    "opens": "24 hrs"
                },
                "geo": {
                    "@type": "GeoCoordinates",
                    "latitude": 21.03858878502456,
                    "longitude": 86.86897265996767
                },                
                "Logo": "https://caribbean-taxi.com/assets/img/website/logo.webp"
            }
        </script>
        
</head>
<body>
    @yield('content')
    @stack('push-bottom')    
</body>
</html>