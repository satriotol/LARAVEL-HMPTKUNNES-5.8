<h1>
    TABEL MAHASISWA
</h1>
@foreach($mahasiswa as $p)
<tr>
    <td>
        <p>{{ $p->Nama }}</p>
    </td>
    <td>
        <p>{{ $p->Kelas }}</p>
    </td>
    <td>
        <img src="{{ $p->Foto }}" alt="">
    </td>
    <td>
        <p>{!! $p->Quote !!}</p>
    </td>
</tr>
@endforeach
<h1>
    TABEL DATA
</h1>
@foreach ($data as $p)
<p>{{ $p->Nama }}</p>

@endforeach