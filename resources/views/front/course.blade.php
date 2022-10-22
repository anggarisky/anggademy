<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Free How-To Design & Code Tutorials Online by Anggademy</title>
    <meta name="description" content="Anggademy provides updated daily tutorials, learn over 10,000 design and code how-to tutorials. Improve your software development skills, ui/ux design, web design, and more.">
    <meta name="keywords" content="Flutter, Android Studio, Figma, SwiftUI, HTML CSS, Bootstrap, Tailwind CSS, Laravel, React Native, Webflow, JavaScript, Adobe XD, Web Design, Mobile App Development">
    <meta name="author" content="Anggademy" />

    <meta image="{{ asset('images/logo-anggademy.png') }}">
    <meta property="og:type" content="article">
    <meta property="og:image" content="{{ asset('images/logo-anggademy.png') }}">
    <meta content="index, follow" name="robots" />
    <meta property="og:type" content="article">
    <meta property="og:title" content="Free How-To Design & Code Tutorials Online by Anggademy">
    <meta property="og:site_name" content="Anggademy">
    <meta property="og:url" content="https://anggademy.com/course">
    <meta property="og:description" content="Anggademy provides updated daily tutorials, learn over 10,000 design and code how-to tutorials. Improve your software development skills, ui/ux design, web design, and more.">

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
            <div class="col-lg-12 col-12">
                <h2 class="text-size-28 text-black">
                    My Latests Courses
                </h2>
                <p class="text-gray">
                    Improve your skills to get that future dream job
                </p>
            </div>
        </div>
        <div class="row">
            @foreach($latest_courses as $course)
                <div class="col-lg-3 col-6 course-card">
                    <a href="{{ route('details', $course->slug) }}">
                        <img src="{{ Storage::url($course->thumbnail) }}" alt="learn {{ $course->title }} Anggademy" class="img-fluid">
                    </a>
                    <a href="{{ route('details', $course->slug) }}" class="no-text-decoration">
                        <h3 class="mt-3 text-black text-size-18">
                            {{ $course->title }}
                        </h3>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="row mt-3 paging-custom">
            <div class="col-12">
              {{ $latest_courses->links() }}
            </div>
          </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>