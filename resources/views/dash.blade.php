@extends('sidebar')

@section('title', 'Dashboard')

@section('content')
    <!-- Isi halaman dashboard di sini -->
    <div class="row">
        <div class="col">
            <div class="card" style="width: 50px">satu</div>
        </div>
        <div class="col">
            <div class="card" style="width: 50px">dua</div>
        </div>
    </div>
    <div class="card" style="background-color: #EEEEEE; max-height:500px; margin-top:5px; box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.5); overflow-y: auto">
        <div class="card-body">
            <h2>hoyo games</h2>
            <ol>
                <li>genshin</li>
                <li>honkai</li>
                <li>hsr</li>
            </ol>
            <h3>rockstar games</h3>
            <ul>
                <li>GTA san andreas</li>
                <li>GTA V</li>
                <li>GTA Vice City</li>
                <li>Red dead redemption</li>
                <li>RDR 2</li>
                <li>GTA 3</li>
                <li>GTA 4</li>
            </ul>
            <h4>capcom games</h4>
            <ul style="font-display: ">
                <li>Resident Evil Series</li>
                <li>Assasin's Creed series</li>
                <div><i class="bi bi-arrow-return-right">BOI</i></div>
                <li>randm</li>
            </ul>
            <h1>KING</h1>
            <ol style="font-size: 23pt">
                <li>afrizal is a king</li>
                <li>no, just kidding</li>
                <li>cuma ngisi konten</li>
                <li>apalah</li>
                <li style="font-size: 30pt">kalo uini jadi gmn</li>
                <li>masih kurang jauh</li>
                <li>huhuhaha</li>
            </ol>
        </div>
    </div>
@endsection
