<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <title>Import</title>
</head>

<body>


    <form class="row g-3" action="/import_file" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="col-auto">
            {{-- <label for="formFile" class="form-label">Default file input example</label> --}}
            <input class="form-control" type="file" id="formFile" name="file">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Importer</button>
        </div>
    </form>


</body>

</html>
