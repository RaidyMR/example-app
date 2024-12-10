{{-- <p> Nama : {{ $nama[0] }} </p>
<p> NIM : {{ $nim[0] }} </p>
<p> Nilai : {{ $nilai[0]  }} </p> --}}

@foreach ($nama as $index => $n)
    <p> Nama : {{ $n }} </p>
    <p> NIM : {{ $nim[$index] }} </p>
    <p> Nilai : {{ $nilai[$index] }} </p>
    <p> --------------- </p>
@endforeach

{{-- [0, ucup]
[1, Ujang]
[2, ....] --}}