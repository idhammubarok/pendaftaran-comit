@php
    $today = date('d-m-Y');
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data register PKKMB $today.xls");
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style> .str{ mso-number-format:\@; } </style>
</head>
<body>
    <h3>Data Register Peserta PKKMB 2019</h3>
    <table border="1" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>No Handphone</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Jurusan</th>
            <th>Semester</th>
            <th>Peminatan</th>
        </tr>
        @php
        $no=1;    
        @endphp
        @foreach ($export as $row)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->email }}</td>
            <td class="str">{{ $row->no_hp }}</td>
            <td>{{ $row->tgl_lahir }}</td>
            <td>{{ $row->gender }}</td>
            <td>{{ $row->alamat }}</td>
            <td>{{ $row->jurusan }}</td>
            <td>{{ $row->semester }}</td>
            <td>{{ $row->peminatan }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>