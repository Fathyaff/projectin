<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <title>Show All Projects</title>
</head>
<body>
    <div>
        <table id="tableAllProject">
            <thead>
                <tr>
                    <td>Nama Project</td>  
                    <td>Deskripsi</td>
                    <td>Fitur</td>  
                    <td>Durasi</td>  
                    <td>Harga</td>
                    <td>Pilih</td>  
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->nama }}</td> <!-- Nama -->
                    <td>{{ $project->deskripsi }}</td> <!-- Deskripsi -->
                    <td> <!-- List Fitur -->
                    @foreach ($project->listFitur as $fitur)
                        <li>{{ $fitur->nama_fitur }}</li>
                    @endforeach
                    </td> 
                    <td>{{ $project->duration }} Bulan</td> <!-- Durasi -->
                    <td>{{ $project->min_harga }} - {{ $project->max_harga }}</td> <!-- Harga -->
                    <td><button>Apply</button></td> <!-- Harga -->
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        $('#tableAllProject').DataTable();
    </script>
</body>
</html>