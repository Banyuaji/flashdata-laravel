<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>Data siswa</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
            </div>
            <div class="col-md-12">
                <div class="jumbotron">
                    <h2>Table calon siswa</h2>
                </div>
            </div>
            <div class="col-md-11">
                @if (session()->has('pesan'))
                    <div class="alert alert-success">{{ session()->get('pesan') }}</div>
                @endif
                @if (session()->has('pesand'))
                    <div class="alert alert-danger">{{ session()->get('pesand') }}</div>
                @endif
                @if (session()->has('pesane'))
                    <div class="alert alert-info">{{ session()->get('pesane') }}</div>
                @endif
            </div>
            <div class="col-md-1">
                <a class="btn btn-success" href="{{ route('go') }}"> Create </a>
            </div>
            <div class="col-md-12">
                <br>
            </div>
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <th>No</th>
                        <th>Nipd</th>
                        <th>Nama Siswa</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal lahir</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($siswa as $i)
                            <tr>
                                <td>{{ $i->id }}</td>
                                <td>{{ $i->nipd }}</td>
                                <td>{{ $i->nama_siswa }}</td>
                                <td>{{ $i->tempat_lahir }}</td>
                                <td>{{ $i->tanggal_lahir }}</td>
                                <td>{{ $i->kelas }}</td>
                                <td>{{ $i->jurusan }}</td>
                                <td>
                                    <a class="btn btn-info" href="{{ route('edit', $i->id) }}"> Edit </a>
                                    <a class="btn btn-danger" href="{{ route('destroy', $i->id) }}" onclick="return confirm('delete this data?')"> Delete </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>