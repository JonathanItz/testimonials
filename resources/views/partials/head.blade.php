<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @if ( isset( $title ) )
            {{ $title }} - {{ config( 'app.name', 'Lemon Bestie' ) }}
        @else
            {{ config( 'app.name', 'Lemon Bestie' ) }}
        @endif
    </title>

    @if ( isset( $title ) )
        <meta name="twitter:title" content="{{ $title }} - {{ config( 'app.name', 'Lemon Bestie' ) }}" />
    @else
        <meta name="twitter:title" content="{{ config( 'app.name', 'Lemon Bestie' ) }}" />
    @endif

    @if ( isset( $description ) )
        <meta name="description" content="{{ $description }}">

        <meta name="twitter:description" content="{{ $description }}" />
    @else
        <meta name="description" content="A better, less bloated, alternative testimonial service">

        <meta name="twitter:description" content="A better, less bloated, alternative testimonial service" />
    @endif

    @if ( isset( $keywords ) )
        <meta name="keywords" content="{{ $keywords }}">
    @endif

    {{-- Social --}}
    @if ( isset( $title ) )
        <meta property="og:title" content="{{ $title }} - {{ config( 'app.name', 'Lemon Bestie' ) }}" />
    @else
        <meta property="og:title" content="Lemon Bestie" />
    @endif

    @if ( isset( $description ) )
        <meta property="og:description" content="{{ $description }}" />
    @else
        <meta property="og:description" content="A better, less bloated, alternative testimonial service" />
    @endif

    <meta name="twitter:card" content="summary_large_image" />
    <meta property="og:image" content="{{ asset( '/assets/images/social.jpg' ) }}" />
    <meta property="og:image:type" content="image/jpg" />
    <meta property="og:image:width" content="1500" />
    <meta property="og:image:height" content="500" />
    <meta name="twitter:image" content="{{ asset( '/assets/images/social.jpg' ) }}" />

    <link rel="icon" type="image/x-icon" href="{{asset('/assets/images/logo.png')}}">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @production
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-0PLQY091E5"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-0PLQY091E5');
        </script>
    @endproduction

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('header-scripts')
</head>