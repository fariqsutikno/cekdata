@extends('layouts.template')

@push('style')
    <!-- CDN DataTables Script -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <!-- CDN Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/brands.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/regular.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/solid.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/svg-with-js.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/v4-font-face.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/v4-shims.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/v5-font-face.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/brands.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/conflict-detection.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/fontawesome.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/regular.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/solid.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/v4-shims.min.js">
@endpush


@section('content')
    <div class="container p-3 mt-3">
        <h3 class="mb-4 font-weight-bold">Data Pokok Anggota Barzada31</h3>
        <table id="example" class="display" style="width:100%; height:100%">
            <thead>
                <tr>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>TTL</th>
                    <th>Nama Ayah</th>
                    <th>No Telp</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataSiswa as $dataPerSiswa)
                    <tr>
                        <td>3110202019</td>
                        <td>{{ $dataPerSiswa->fullName }}</td>
                        <td>{{ $dataPerSiswa->class12 }}</td>
                        <td>{{ $dataPerSiswa->birthPlace }},
                            {{ date('d M Y', strtotime($dataPerSiswa->birthDate)) }}
                        </td>
                        <td>{{ $dataPerSiswa->fatherName }}</td>
                        <td><a href="https://wa.me/{{ $dataPerSiswa->myPhone }}">{{ $dataPerSiswa->myPhone }}</a></td>
                        <td>
                            <button class="btn btn-rounded btn-success btn-sm"><i class="fa-solid fa-eye"></i></button>
                            <button class="btn btn-rounded btn-warning btn-sm"><i
                                    class="fa-solid fa-pen-to-square"></i></button>
                            <button class="btn btn-rounded btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@push('script')
    <!-- DataTables Script -->
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "order": [
                    [3, "desc"]
                ]
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
@endpush
