<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Absen Unit Group Kalimantan Barat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <table class="table table-striped table-hover table-sm">
        <thead class="table-dark text-center">
            <tr>
                <th>PIN</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Cloud ID</th>
                <th>Tanggal & Jam</th>
                <th>Type</th>
                <th>Status</th>
                <th>Verify</th>
            </tr>
        </thead>
        <tbody class="text-center">
            {{-- {{dd($absensi['data'])}} --}}
            @foreach($absensi['data'] as $absen)
            <tr>
                    <td>{{ $absen['PIN'] }}</td>
                    <td>{{ $absen['NIK'] }}</td>
                    <td>{{ $absen['Name'] }}</td>
                    <td>{{ $absen['Cloud ID'] }}</td>
                    <td>{{ $absen['Date Time'] }}</td>
                    <td>{{ $absen['Type'] }}</td>
                    <td>{{ $absen['Status'] }}</td>
                    <td>{{ $absen['Verify'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
crossorigin="anonymous"></script>
</body>
</html>