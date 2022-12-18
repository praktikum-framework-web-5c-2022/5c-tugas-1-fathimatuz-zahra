@extends('layout.master')
@section('title', 'Dosen')
@section('content')

    <!--Jumbotron-->

    <section class="jumbotron text-center">
        <div class="container">
          <h1 class="display-4">Selamat Datang di Halaman Dosen</h1>
          <p class="lead">Berikut beberapa nama dosen Fasilkom Unsika</p>
        </div>
      </section>
    <!--Jumbotron-->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <table class="table table-sm">
                    <thead class="table-light">
                      <tr>
                        <th scope="col">Dosen</th>
                        <th scope="col">NIDN</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($dosen as $d => $dosen)
                      <tr>
                        <td>{{ $dosen }}</td>
                        <td>{{ $nidn [$d]}}</td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
            </div>
        </div>

    </div>

@endsection
