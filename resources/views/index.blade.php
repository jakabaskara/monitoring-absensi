@extends('layout.main')

@section('content')
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
            @foreach ($absensi['data'] as $absen)
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
@endsection
