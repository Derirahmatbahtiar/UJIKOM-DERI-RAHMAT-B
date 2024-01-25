<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    @include('layout.navbar')
    <br>
    <h1 style="text-align: center">PENJUALAN</h1>
    <br>
    <div class="container">
        <form action={{ url('/tambah-penjualan') }} method="POST">
            @method('POST')
            @csrf
            <label class="row row-cols-lg-auto g-3 align-items-center"
                style="  display: grid; grid-template-columns: auto auto auto; gap: 10px 10px;">

                <div class="col-12">
                    <select class="form-select"  name="produk">
                        <option selected>Pilih Produk...</option>
                        @foreach ($produk as $produk)
                            <option value="{{$produk->produk_id}}" >{{ $produk->nama_produk }}
                           </option>
                        @endforeach
                    </select>
                </div>
                <input type="hidden" name="penjualan_id" value={{ $penjualan_id }}>
                <div class="col-12">
                    <label class="visually-hidden" for="inlineFormInputGroupUsername">Jumlah Produk</label>
                    <div class="input-group">
                        <div class="form-outline" style="width: 22rem;">
                            <input value="qty" min="1" type="number" id="typeNumber" class="form-control"
                                placeholder="qty" name="qty" />
                        </div>
                    </div>
                </div>
                <select class="form-select" name ="pelanggan" >
                    <option selected>Nama Pelanggan</option>
                    @foreach ($pelanggan as $pelanggan)
                        <option value="{{$pelanggan->pelanggan_id}}" >{{ $pelanggan->nama_pelanggan }}</option>
                    @endforeach
                </select>

                <div class="col-12">
                    <button class="btn btn-outline-dark">Tambah</button>
                </div>
            </label>
        </form>
    </div>
    <BR><br>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-bordered" style="width:80%">
                <thead>
                    <tr>
                        <th scope="col" style="text-align: center; width:5%">no</th>
                        <th scope="col" style="text-align: center; width:5%">Nama Produk</th>
                        <th scope="col" style="text-align: center; width:5%">Harga</th>
                        <th scope="col" style="text-align: center;width:5%">Qty</th>
                        <th scope="col" style="text-align: center; width:5%">Sub Total</th>
                    </tr>
                </thead>
                <?php $no = 1; 
                      $total_harga = 0?>
                <tbody>
                    @foreach($detail_penjualan as $detail_penjualan   )
                    <tr>
                        <th>{{$no++}}</th>
                        <th>{{$detail_penjualan->nama_Produk}}</th>
                        <th>{{$detail_penjualan->harga}}</th>
                        <th>{{$detail_penjualan->jumlah_Produk}}</th>
                        <th>{{$detail_penjualan->SubTotal}}</th>
                        <?php  $total_harga = $total_harga + $detail_penjualan->SubTotal ?>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
    <div class="container">
    <h1> Total Harga : {{number_format($total_harga,0,',','.')}}</h1>
</div>

    <form action="{{}}" method="POST">
        
    </form>

</body>

</html>