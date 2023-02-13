<a href="{{ route('list_proposal') }}">Kembali</a>
<h1>Detail Proposal</h1>
<hr>
<h3>{{ $proposal->judul }}</h3>
<h4>{{ $proposal->abstrak }}</h4>
@if ($proposal->status == 1)
    <p> Draft </p>
@elseif ($proposal->status == 2)
    <p> Acc Dosbing </p>
@endif
<hr>
<form action="{{ route('acc_dosbing') }}" method="post">
    @csrf
    @method('PATCH')
    <input type="hidden" name="id" value="{{$proposal->id}}">
    <button>ACC</button>
</form>
