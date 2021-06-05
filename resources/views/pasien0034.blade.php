<body>
    <div style="overflow-x:auto;">
        <a href="/tambah">Tambah Data </a>
        <table border="3">
        <style>
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        thead {
            background-color: #f2f2f2;
        }
        th, td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even){background-color: #f2f2f2}
        
        .tambah{
            padding: 8px 16px ;
            text-decoration: none;
        }

        </style>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pasien as $pasien)
                <tr>
                    <td>{{$pasien->id}}</td>
                    <td>{{$pasien->nama}}</td>
                    <td>{{$pasien->alamat}}</td>
                    <td>
                    <a href="/edit/{{ $pasien->id }}">Edit</a>
                    |
                    <a href="/hapus/{{ $pasien->id }}">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>