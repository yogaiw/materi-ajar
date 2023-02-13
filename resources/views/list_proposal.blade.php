<html>
    <head>
        <title>Input Proposal</title>
    </head>
    <body>
        <a href="{{ route('input_proposal') }}">Input Proposal</a>
        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Abstrak</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($proposal as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><a href="{{ route('detail_proposal', ['id' => $item->id]) }}">{{ $item->judul }}</a></td>
                    <td>{{ $item->abstrak }}</td>
                    <td>
                        @if ($item->status == 1)
                            <p> Draft </p>
                        @elseif ($item->status == 2)
                            <p> Acc Dosbing </p>
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('delete_proposal')}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="id" value="{{ $item->id }}">
                            <button>Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
