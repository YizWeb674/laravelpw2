<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card mt-5">
                <div class="card-body">
                    <h3>Hasil Biodata:</h3>
                    <table>
                        <tr>
                            <td>Nama : </td>
                            <td>{{ $nama }}</td>
                        </tr>
                        <tr>
                            <td>Tempat Tanggal Lahir : </td>
                            <td> {{ $ttl }}</td>
                        </tr>
                        <tr>
                            <td>Gender : </td>
                            <td>{{ $jenisKelamin }}</td>
                        </tr>
                        <tr>
                            <td>Hobi : </td>
                            <td>{{ $hobi }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>