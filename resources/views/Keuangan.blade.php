@extends('layout.template')

@section('title', 'Keuangan')

<link rel="stylesheet" href="{{ asset('css/keuangan.css') }}">

@section('content')
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <div class="px-2">
        <h5 class="pemasukan">Pemasukan bulan ini: Rp.{{ $in_total }}</h5>
        <h5 class="pengeluaran">Pengeluaran bulan ini: Rp.{{ $out_total }}</h5>
    </div>
    {{-- <div class="chart">
        <h1>Pemasukan dan Pengeluaran</h1>
        <canvas id="myChart" height="100px"></canvas>
    </div> --}}
    <a class="btn btn-warning add m-2 rounded-4" href="{{ url('/keuangan/tambah') }}" role="button">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000" class="bi bi-plus"
            viewBox="0 0 16 16">
            <path
                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
        </svg>
        Tambah transaksi baru
    </a>
    @php
        $count = 0;
    @endphp
    @foreach ($transactions as $transaction)
        <div class="card mb-2 w-100 rounded-0 {{ $count % 2 == 0 ? 'even' : 'odd' }}" style="max-height: 250px">
            <div class="row g-0">
                <div class="col-md-4" style="max-height: 250px; max-width: 400px;">
                    <img src="{{ asset('storage/' . $transaction->foto) }}" class="img-fluid" alt="..."
                        style="max-height: 250px">
                </div>
                @php
                    $check = $transaction->transaction_type_id;
                @endphp
                <div class="col-md-8 d-flex justify-content-evenly">
                    <div class="card-body align-self-center {{ $check == 1 ? 'in' : 'out' }}">
                        <h4 class="card-title mb-0 text-capitalize">
                            {{ $transaction->transactionName }}</h4>
                        <p class="card-text text-body-secondary">Tanggal transaksi: {{ $transaction->transactionDate }}</p>
                        <h5 class="card-text">
                            Rp.{{ $transaction->price }}</h5>
                    </div>
                    <div class="card-body align-self-center">
                        <a class="nav-links float-end text-decoration-none"
                            href="{{ url('/keuangan/hapus/' . $transaction->id) }}"
                            onclick="return confirm('Apa kamu yakin?')">Hapus</a>
                        <a class="nav-links float-end px-5 text-decoration-none"
                            href="{{ url('/keuangan/edit/' . $transaction->id) }}">Edit</a>
                        <a class="nav-links float-end text-decoration-none"
                            href="{{ url('/keuangan/detail/' . $transaction->id) }}">Detail</a>
                    </div>
                </div>
            </div>
        </div>
        @php
            $count += 1;
        @endphp
    @endforeach
    {{-- <script type="text/javascript">
        var labels = {{ Js::from($labels) }};
        var data1 = {{ Js::from($in_total) }};
        var data2 = {{ Js::from($out_total) }};

        const data = {
            labels: labels,
            datasets: [{
                label: 'Pemasukan dan ',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: data2,
            }]
        };

        const config = {
            type: 'line',
            data: data,
            options: {}
        };

        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script> --}}
@endsection
