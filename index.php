<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Print alamat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


    <div class="container mt-3">
        <div class="row">
            <h4>Print alamat system</h4>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <!-- inputan user akan di kirim ke print.php dengan metode post -->
                        <form action="print.php" method="POST">
                            <label class="mb-2">Penerima & hp</label>
                            <input type="text" name="penerima" class="form-control">
                            <label class="mb-2">Alamat</label>
                            <textarea name="alamat" cols="30" rows="10" class="form-control"></textarea>
                            <label>Kurir</label>
                            <select name="kurir" class="form-control">
                                <option value="jne">JNE</option>
                                <option value="jnt">JNT</option>
                            </select>
                            <label class="mb-2">Pengirim & hp</label>
                            <input type="text" name="pengirim" class="form-control">
                            <button class="btn btn-primary mt-3" type="sumbit" name="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>