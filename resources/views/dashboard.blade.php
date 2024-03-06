<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Monitoring Data Absensi</title>
</head>
<body>
  <table>
    <thead>
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
    <tbody>
        @foreach($absensi as $absen)
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

</body>
</html>
