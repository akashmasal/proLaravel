<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    {{-- <div class="container my-5"> --}}
        <h1 class="text-center">Students Data</h1>
        <table class="table table-dark table-bordered my-5" width="80">
            <thead>
                <tr>
                    <th>studentId </th>
                    <th>studentFullName</th>
                    <th>studentUserName</th>
                    <th>studentEmail</th>
                    <th>studentPhoneNumber</th>
                    <th>studentGender</th>
                    <th>studentAddress</th>
                    <th>studentStatus</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->studentId }}</td>
                        <td>{{ $student->studentFullName }}</td>
                        <td>{{ $student->studentUserName }}</td>
                        <td>{{ $student->studentEmail }}</td>
                        <td>{{ $student->studentPhoneNumber }}</td>
                        @if ($student->studentGender == 'Male')
                            <td>
                                <span class="badge badge-primary">Male</span>
                            </td>
                        @elseif ($student->studentGender == 'Female')
                            <td>
                                <span class="badge badge-danger">Female</span>
                            </td>
                        @else
                            <td>
                                <span class="badge badge-success">Other</span>
                            </td>
                        @endif
                        <td>{{ $student->studentAddress }}</td>

                        @if ($student->studentStatus == 1)
                            <td>
                                <span class="badge badge-primary">Active</span>
                            </td>
                        @else()
                            <td>
                                <span class="badge badge-danger">Inactive</span>
                            </td>
                        @endif

                        <td>
                            <a class="btn btn-primary" href="{{ url('/update/' . $student->studentId) }}"
                                role="button">UPDATE</a>
                            <a class="btn btn-success" href="{{ url('/delete/' . $student->studentId) }}"
                                role="button">DELETE</a>
                        </td>

                    </tr>
                @endforeach
                {{-- <tr>
                    <td scope="row"></td>
                    <td></td>
                    <td></td>
                </tr> --}}
            </tbody>
        </table>
    {{-- </div> --}}
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
