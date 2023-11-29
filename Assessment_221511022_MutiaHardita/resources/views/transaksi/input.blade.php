<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Transaksi</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-4">
        <h2 class="text-center mb-4">Form Input Data Transaksi</h2>
        <form method="post" action="{{ route('transaksi.inputData') }}">
            @csrf
            <div class="form-group">
                <label for="JumlahBarang">Jumlah Barang</label>
                <input type="text" class="form-control" id="JumlahBarang" name="JumlahBarang" required>
            </div>
            <div class="form-group">
                <label for="HargaSatuan">Harga Satuan</label>
                <input type="number" class="form-control" id="HargaSatuan" name="HargaSatuan" required min="0">
            </div>
            <div class="form-group">
                <label for="Total">Total</label>
                <input type="text" class="form-control" id="Total" name="Total" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>