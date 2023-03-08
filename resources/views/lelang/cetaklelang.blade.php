<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Hasil Lelang</title>
</head>
<body>
    <div class="form-group">
        <p align="center">Laporan lelang</p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%">
        <tr>
            <th>No</th>
            <th>Nama barang</th>
            <th>Harga awal</th>
            <th>Harga Akhir</th>
            <th>Pemenang</th>
            <th>Status</th>
        </tr>
        @foreach ($historylelang as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->lelang->barang->nama_barang }}</td>
            <td>{{ $item->lelang->barang->harga_awal}}</td>
            <td>{{ $item->lelang->harga_akhir}}</td>
            <td>{{ $item->lelang->pemenang }}</td>
            <td>{{ $item->status }}</td>
        </tr>
        @endforeach
        </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>