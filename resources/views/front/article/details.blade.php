<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $article_details->title }} | Anggademy</title>
    <meta name="description" content="In this course, we will learn about {{ $article_details->title }} from beginning so that you are able to prepare your dream career better with Anggademy.">
    <meta name="keywords" content="Flutter, Android Studio, Figma, SwiftUI, HTML CSS, Bootstrap, Tailwind CSS, Laravel, React Native, Webflow, JavaScript, Adobe XD, Web Design, Mobile App Development">
    <meta name="author" content="Anggademy" />

    <meta image="{{ Storage::url($article_details->thumbnail) }}">
    <meta property="og:type" content="article">
    <meta property="og:image" content="{{ Storage::url($article_details->thumbnail) }}">
    <meta content="index, follow" name="robots" />
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ $article_details->title }} | Anggademy">
    <meta property="og:site_name" content="Anggademy">
    <meta property="og:url" content="https://anggademy.com/details/{{ $article_details->slug }}">
    <meta property="og:description" content="In this course, we will learn about {{ $article_details->title }} from beginning so that you are able to prepare your dream career better with Anggademy.">

    <link rel="icon" href="{{ asset('images/logo-anggademy.png') }}"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-61SC4TGKHQ"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-61SC4TGKHQ');
    </script>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6524438331118007"
crossorigin="anonymous"></script>

</head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('course') }}">
            <img height="40" src="{{ asset('images/logo-anggademy.png') }}" alt="Anggademy How to Design & Code Tutorials">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('course') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('blog') }}">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('course') }}">Courses</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <div class="container py-5">
        <div class="row mb-3">
            <div class="col-lg-10 col-12 offset-lg-1">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <h1 class="header-primary">
                            {{ $article_details->title }}
                        </h1>
                        <p class="text-gray">
                            Posted on {{ $article_details->created_at }} • by Anggademy
                        </p>
                        <img src="{{ Storage::url($article_details->thumbnail) }}" alt="" class="my-3 img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <div class="row article-wrapper">
            <div class="col-lg-10 col-12 offset-lg-1">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        {!! $article_details->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>