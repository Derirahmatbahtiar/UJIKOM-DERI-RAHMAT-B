<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<style>
    .nav-link:hover{
    background-color:blue;
}

</style>

<body>
@include('layout.navbar')

    <div style="display:flex;">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px; height:90vh;">

        <a href="tampilan" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none"> 
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">SYUKUR</span>

        </a>

        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="tampilan" class="nav-link link-dark" aria-current="page">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use>
            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
                </svg>
            Home
            </a>
        </li>

        <li>
            <a href="penjualan" class="nav-link link-dark">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use>
            <path d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0z"/>
                </svg>
            Orders
            </a>
        </li>

        <li>
            <a href="data-barang" class="nav-link link-dark">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use>
            <path d="M3.75 0a1 1 0 0 0-.8.4L.1 4.2a.5.5 0 0 0-.1.3V15a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4.5a.5.5 0 0 0-.1-.3L13.05.4a1 1 0 0 0-.8-.4h-8.5ZM15 4.667V5H1v-.333L1.5 4h6V1h1v3h6z"/>
            </svg>
            </svg>
            Products
            </a>
        </li>

        <li>
            <a href="pelanggan" class="nav-link link-dark">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use>
            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
            </svg>
            Customers
            </a>
        </li>

        

        </ul>
      </hr>
  
            <a href="login-admin" class="nav-link link-dark">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use>
            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
            </svg>
            logout
            </a>
</div>


<div class="container">
    <br>
    <h3>ANDA BISA MEMBELI BARANG</h3>
    <br>

    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
        <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0"/>
        </svg>
        Tambahkan barang 
    </button>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Order barang</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            
        </div>
        

        <table  class="table table-bordered table-dark table table-bordered border-primary">
  <thead>
    <tr>
      <th scope="col">Produk id</th>
      <th scope="col">Tgl jual</th>
      <th scope="col">Total harga</th>
      <th scope="col">Pelanggan id</th>
    </tr>
  </thead>

@foreach($produk as $tambahkan)


    <tr>
        <td>{{$tambahkan -> produk_id}}</td>
        <td>{{$tambahkan -> nama_produk}}</td>
        <td>{{$tambahkan -> harga}} </td>
        <td>{{$tambahkan -> stok}}</td>
        <td>
            <div style="width:30%;">
            <input type="number" class="form-control" name="Qty" placeholder="Qty"></div>
        </td>
     
@endforeach
   </tr>
</table>


     
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary">Masukkan ke keranjang</button>
      </div>
    </div>
  </div>
</div>

<br>
<br>


<table  class="table table-bordered table-dark table table-bordered border-primary">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Tanggal jual</th>
      <th scope="col">Total harga</th>
      <th scope="col">Pelanggan id</th>
      <th scope="col">Qty</th>
    </tr>
  </thead>

@foreach($jual as $jual)


    <tr>
        <td>{{$jual -> penjualan_id}}</td>
        <td>{{$jual -> tgl_penjualan}}</td>
        <td>Rp {{$jual ->total_harga}} </td>
        <td>{{$jual -> pelanggan_id}}</td>
        
     
@endforeach
   </tr>
</table>

        <a href="" type="submit" class="btn btn-outline-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card-2-front-fill" viewBox="0 0 16 16">
            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm0 3a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1z"/>
            </svg>
            Beli barang disini
        </a>



</div>
</div>
</body>
</html>