<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Barang</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <h2 class="text-center mb-4">Form Update Data Barang</h2>
        <form method="post" action="{{ route('barang.update', ['id' => $barang->KodeBarang]) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="NamaBarang">Nama Barang</label>
                <input type="text" class="form-control" id="NamaBarang" name="NamaBarang" value="{{ $barang->NamaBarang }}" required>
            </div>
            <div class="form-group">
                <label for="Satuan">Satuan</label>
                <input type="text" class="form-control" id="Satuan" name="Satuan" value="{{ $barang->Satuan }}" required>
            </div>
            <div class="form-group">
                <label for="HargaSatuan">Harga Satuan</label>
                <input type="number" class="form-control" id="HargaSatuan" name="HargaSatuan" value="{{ $barang->HargaSatuan }}" required min="0">
            </div>
            <div class="form-group">
                <label for="Stok">Stok</label>
                <input type="number" class="form-control" id="Stok" name="Stok" value="{{ $barang->Stok }}" required min="0">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>