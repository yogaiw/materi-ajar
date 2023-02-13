<html>
    <head>
        <title>Input Proposal</title>
    </head>
    <body>
        <a href="{{ route('list_proposal') }}">Lihat Proposal</a>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('buat_proposal') }}" method="post">
            @csrf
            <p>Judul</p>
            <input type="text" name="judul">
            <p>Abstrak</p>
            <input type="text" name="abstrak">
            <button>kirim</button>
        </form>
    </body>
</html>
