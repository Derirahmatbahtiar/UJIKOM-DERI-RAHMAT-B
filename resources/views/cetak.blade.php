<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print struk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container table">
<div class="container">
    <br>
    <h3 style="text-align:center;">Struk Syukur kasir</h3>
    <br>
   
    <div class="container">
    <table  class="table table-bordered border-dark">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Produk id</th>
            <th scope="col">Tanggal jual</th>
            <th scope="col">Harga satuan</th>
            <th scope="col">Quantity</th>
            <th scope="col">Status</th>
            <th scope="col">Item discount</th>
            </tr>
        </thead>

        @foreach($detail as $detail)
        
<?php $no = 1;?>

            <tr>
                <td>{{$no++}}</td>
                <td>{{$detail -> produk_id}}</td>
                <td>{{$detail -> tgl_penjualan}}</td>
                <td>Rp : {{$detail -> total_harga}} </td>
                <td>{{$detail -> jumlah_produk}}</td>
                <td>{{$detail -> status}}</td>
                <td>0.00,-</td>

                
        @endforeach
        </tr>
        </table>
    <div class="container">
        <h5>Total harga
        <td>Rp : {{$detail -> SubTotal}}</td>
        </h5>
    </div>

    <hr style="">
    <h6 style="margin-left:2%;">Tanggal transaksi :
    <td>{{$detail -> tgl_penjualan}}</td>
    </h6>
    <img style="margin-left:25%;" src="/storage/image/qr.png" alt="">
    <hr>
    <h6 style="text-align:center;">=== copyright @syukur kasir ===</h6>



    <script type="text/javascript">
        window.print();
    </script>

</div>

</div>
</body>
</html>