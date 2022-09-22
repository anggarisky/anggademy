<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
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