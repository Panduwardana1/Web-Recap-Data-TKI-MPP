<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Destination</title>
    <link rel="icon" href="{{ asset('img/lombok_tengah2.png') }}">
    @vite('resources/css/app.css')
</head>

<body>
    <div>
        <form action="{{ route('admin.destination.update', $destination->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <span>Country Name</span>
                <input type="text" name="country_name" value="{{ old('country_name', $destination->country_name) }}"
                    title="destination name" placeholder="Destinaiton name" required>
            </div>
            <button type="submit">Save</button>
        </form>
    </div>
</body>

</html>
