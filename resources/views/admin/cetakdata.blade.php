<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body onload="window.print()">
    
    <div class="row">
        <div class="col-12">
            <table class="table table-stripped">
                <tr class="text-center">
                    <th>Nama</th>
                    <th>Buku</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Status</th>
                </tr>
                @foreach ($dtpeminjam as $p)
                <tr class="text-center" style="vertical-align: middle;">
                    <td>{{ $p->user['name'] }}</td>
                    <td>{{ $p->buku['judul'] }}</td>
                    <td>{{ $p->tanggalpeminjaman }}</td>
                    <td>{{ $p->tanggalpengembalian }}</td>
                    <td>{{ $p->status }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>