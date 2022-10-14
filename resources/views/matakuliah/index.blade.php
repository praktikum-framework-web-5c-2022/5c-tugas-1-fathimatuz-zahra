@extends('layout.master')
@section('title', 'Mata Kuliah')
@section('content')

    <!--Jumbotron-->
    <section class="jumbotron text-center">
        <div class="container">
          <h1 class="display-4">Selamat Datang di Halaman Mata Kuliah</h1>
          <p class="lead">Berikut beberapa mata kuliah yang ada di Fasilkom Unsika</p>
        </div>
      </section>
    <!--Jumbotron-->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <table class="table table-sm">
                    <thead class="table-light">
                      <tr>
                        <th scope="col">Kode Mata Kuliah</th>
                        <th scope="col">Mata Kuliah</th>
                        <th scope="col">Dosen Pengampu</th>
                        <th scope="col">Jumlah SKS</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        @foreach ($matakuliah as $mk => $matakuliah)
                        <tr>
                            <td>{{ $kodemk[$mk]}}</td>
                          <td>{{ $matakuliah }}</td>
                          <td>{{ $dosenpengampu[$mk]}}</td>
                          <td>{{ $sks[$mk]}}</td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

    <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"
        ></script>
</body>
</html>


@endsection
