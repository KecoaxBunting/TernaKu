@include('layout.bootstrap')
@include('layout.font')
<link rel="stylesheet" href="{{ asset('css/layout/navigation.css') }}">
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <ul class="list-group border-0">
        <a href="{{ url('/ternakSaya') }}" class="list-group-item list-group-item-action mt-1 py-3 1">Ternak Saya</a>
        <a href="{{ url('/dataPakan') }}" class="list-group-item list-group-item-action py-3 2">Data Pakan</a>
        <a href="{{ url('/produksi') }}" class="list-group-item list-group-item-action py-3 3">Produksi</a>
        <a href="{{ url('/keuangan') }}" class="list-group-item list-group-item-action py-3 4">Keuangan</a>
        <a href="{{ url('/aset') }}" class="list-group-item list-group-item-action py-3 5">Aset</a>
        <a href="{{ url('/staff') }}" class="list-group-item list-group-item-action py-3 6">Staff</a>
    </ul>
</div>

<script type="text/javascript" src="{{ asset('js/sideNav.js') }}"></script>
