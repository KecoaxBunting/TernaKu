<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ternak</title>
    @include('layout.bootstrap')
    @include('layout.font')
</head>

<body>
    <form action="/ternak" method="POST">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="farmName" class="form-label">Nama Ternak</label>
            <input type="text" class="form-control" id="farmName" name="farmName">
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">location</label>
            <input type="text" class="form-control" id="location" name="location">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>
