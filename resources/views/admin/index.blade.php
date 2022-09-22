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
        <div class="row">
            <div class="col-lg-12 col-12">
                <h2>
                    Manage Courses
                </h2>
                <p class="mt-4">
                    <a href="{{ route('admin.create.course') }}" class="btn btn-primary">New Course</a>
                </p>
            </div>
            <div class="col-lg-12 col-12 mt-4">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Content</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($courses as $course)
                      <tr>
                        <td width="40%">{{ $course->title }}</td>
                        <td width="20%">
                            <iframe width="200" height="120" src="https://www.youtube-nocookie.com/embed/{{ $course->content }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </td>
                        <td>
                            <a href="#" class="btn btn-primary" taget="_blank">View</a>
                            <a href="#" class="btn btn-info">Edit</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>