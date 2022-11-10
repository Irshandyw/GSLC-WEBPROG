@extends('main')

@section('container')
    <div class="text-center mb-4">
        <h3>Nilaimu Adalah.. </h3>
        {{$nilai}}
    </div>
    <div class="d-flex justify-content-center">
        @if (($nilai >= 0) and ($nilai <= 60))
            <div>
                Mohon Maaf, nilai kamu belum memenuhi passing grade.
            </div>
        @else
            <div>
               Pertahankan! Nilaimu diatas rata-rata
            </div>
        @endif
    </div>

@endsection

