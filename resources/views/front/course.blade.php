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
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-61SC4TGKHQ"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-61SC4TGKHQ');
    </script>

</head>
  <body>
    <div class="container my-5 py-5">
        <div class="row mb-5">
            <div class="col-lg-12 col-12">
                <h2>
                    My Latests Courses
                </h2>
                <p>
                    Improve your skills to get that future dream job
                </p>
            </div>
        </div>
        <div class="row">
            @foreach($latest_courses as $course)
                <div class="col-lg-3 col-12">
                    <img src="{{ Storage::url($course->thumbnail) }}" alt="" class="img-fluid">
                    <a href="#">
                        <h3 class="mt-3">
                            {{ $course->title }}
                        </h3>
                    </a>
                    <p class="mt-3">
                        by Anggademy
                    </p>
                </div>
            @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>