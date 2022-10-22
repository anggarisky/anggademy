<!doctype html>
<html lang="en">

<head>
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('vendor/laraberg/css/laraberg.css') }}">
</head>

<body>
  <div class="container py-5 my-5">
    <div class="row">
      <div class="col-lg-12 col-12">
        <h2>
          Edit Article
        </h2>
      </div>
      <div class="mt-4 col-lg-12 col-12">
        <form enctype="multipart/form-data" method="POST" action="{{ route('admin.article.update', $details->id) }}">
            @method('PUT')
            @csrf
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Judul</label>
            <input name="title" type="text" value="{{ $details->title }}" class="form-control" id="exampleInputEmail1"
                   aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Thumbnail</label><br>
            <img src="{{ Storage::url($details->thumbnail) }}" height="80" alt="">
            <input type="file" name="thumbnail" class="form-control" id="exampleInputPassword1">
          </div>
          <div style="margin-bottom: 10px;">
            <textarea id="article" name="content" hidden>{!! $details->content !!}</textarea>
            @error('article')
              <span class="invalid-feedback" style="color: red" role="alert">
                {{ $message }}
              </span>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
  </script>
  <script src="https://unpkg.com/react@17.0.2/umd/react.production.min.js"></script>
  <script src="https://unpkg.com/react-dom@17.0.2/umd/react-dom.production.min.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="{{ asset('vendor/laraberg/js/laraberg.js') }}"></script>
  <script>
    const mediaUpload = ({
      filesList,
      onFileChange
    }) => {
      setTimeout(async () => {
        let data = new FormData;
        Array.from(filesList).map(file => {
          data.append('image', file);
        });

        const information = await axios.post("{{ route('laraberg.upload') }}", data, {
          headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Content-Type': 'multipart/form-data'
          }
        }).then(function(response) {
          return response.data.msg;
        })

        const uploadedFiles = Array.from(filesList).map(file => {
          return {
            id: file.id,
            name: file.name,
            url: information
          }
        })

        onFileChange(uploadedFiles)
      }, 0)
    }
    Laraberg.init('article', {
      mediaUpload: mediaUpload,
      imageEditing: true,
      supportsLayout: true
    })
  </script>
</body>

</html>
