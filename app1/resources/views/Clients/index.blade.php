<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container overflow-hidden text-center">

        <div class="row ">
            @if (Session::has('msg'))
                <div class="mt-2 alert alert-success col " role="alert">
                    {{ Session::get('msg') }}

                </div>
            @endif

            <div class="d-grid col gap-2 d-md-flex justify-content-md-end ">
                <a class="btn btn-primary me-md-2 mt-2 mb-3" type="button" href="{{ route('clients.create') }}">create
                    new client</a>
            </div>
        </div>
        <table class="table table-secondary">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">phone</th>
                    <th scope="col"> created At</th>
                    <th scope="col">action</th>

                </tr>
            </thead>
            <tbody>

                @if ($clients->isNotEmpty())
                    @foreach ($clients as $client)
                        <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td>{{ $client->name }}</td>
                            <td>{{ $client->email }}</td>
                            <td>{{ $client->phone }}</td>
                            <td>{{ $client->created_at }}</td>
                            <td>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                    <form action="{{ route('clients.delete') }} " method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id" value="{{ $client->id }}">
                                        <button class="btn btn-danger me-md-2" type="submet">delete</button>
                                    </form>

                                    <a href="{{ route('clients.edite', $client->id) }}" class="btn btn-primary"
                                        type="button">edit</a>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="6" class="text-center"> no clients founded</td>
                    </tr>

                @endif




            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
