<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('/css/style.css')}}">
    <title>UKK Kalkulator</title>
</head>
<body>
    <div class="container">
        <center><h1>- APLIKASI KALKULATOR -</h1></center>
        <label for="bio">Nama : Syaefinda Thysa Wafiqah</label>
        <br>
        <label for="bio">Kelas : XII PPLG 1</label>
        <div class="kalkulator">
            <input type="text" name="result" value="{{ isset($result) ? $result : '' }}" readonly>
                <form action="{{ url('/kalkulator/calculate') }}" method="post">
                    @csrf
                        <input type="text" name="a1" placeholder="Masukkan angka 1">
                        <select name="op">
                            <option value="tambah">+</option>
                            <option value="kurang">-</option>
                            <option value="kali">*</option>
                            <option value="bagi">/</option>
                        </select>
                        <input type="text" name="a2" placeholder="Masukkan angka 2">
                        <br>
                        <center><button type="submit" name="hitung">HITUNG</button></center>
                </form>
        </div>
    </div>

</body>
</html>
