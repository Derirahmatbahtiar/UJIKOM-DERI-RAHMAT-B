<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<style>
       .nav-link:hover{
    background-color:blue;
}
</style>

<body>

@include('layout.navbar')
<div style="display-flex">
<div style="display:flex;">
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px; height:90vh;">

    <a href="/tampilan" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none"> 
    <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
    <span class="fs-4">SYUKUR</span>

    </a>

    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
    <li class="nav-item">
        <a href="/tampilan" class="nav-link link-dark" aria-current="page">
        <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use>
        <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
            </svg>
        Home
        </a>
    </li>

    <li>
        <a href="/penjualan2" class="nav-link link-dark">
        <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use>
        <path d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0z"/>
            </svg>
        Orders
        </a>
    </li>

    <li>
        <a href="/data-barang" class="nav-link link-dark">
        <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use>
        <path d="M3.75 0a1 1 0 0 0-.8.4L.1 4.2a.5.5 0 0 0-.1.3V15a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4.5a.5.5 0 0 0-.1-.3L13.05.4a1 1 0 0 0-.8-.4h-8.5ZM15 4.667V5H1v-.333L1.5 4h6V1h1v3h6z"/>
        </svg>
        </svg>
        Products
        </a>
    </li>

    <li>
        <a href="/pelanggan" class="nav-link link-dark">
        <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use>
        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
        </svg>
        Customers
        </a>
    </li>

    <li>
        <a href="/data-penjualan" class="nav-link link-dark">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card-2-front-fill" viewBox="0 0 16 16">
        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm0 3a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1z"/>
        </svg>
        Penjualan
        </a>
    </li>

    

    </ul>
  </hr>

        <a href="/login-admin" class="nav-link link-dark">
        <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use>
        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
        </svg>
        logout
        </a>
</div>

<div class="container" style="width:45%;">
    <br>
    <h3 style="text-align:center;">Struk Syukur kasir</h3>
    <br>
   
    <div class="container">
    <table  class="table table-bordered" style="border:3px solid;">
        <thead style="border:3px solid;">
            <tr>
            <th scope="col">No</th>
            <th scope="col">Produk id</th>
            <th scope="col">Tanggal jual</th>
            <th scope="col">Nama barang</th>
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
                <td>{{$detail -> nama_produk}}</td>
                <td>Rp : {{number_format($detail->total_harga,0,',','.')}} </td>
                <td>{{$detail -> jumlah_produk}}</td>
                <td>{{$detail -> status}}</td>
                <td>0.00,-</td>
        @endforeach
        </tr>

        
        </table>
    <div class="container">
        <h5>Total harga
        <td>Rp : {{number_format($detail->SubTotal,0,',','.')}}</td>
        
    </div>

    <hr style="">
    <h6 style="margin-left:2%;">Tanggal transaksi :
    <td>{{$detail -> tgl_penjualan}}</td>
    </h6>
    <img style="margin-left:25%;" src="/storage/image/qr.png" alt="">
    <hr>
    <h6 style="text-align:center;">=== copyright @syukur kasir 2024-2025 ===</h6>
    
    <a href="/cetak/{{$detail->penjualan_id}}"  class="btn btn-outline-primary">Cetak struk</a>

</div>

</body>
</html>