<section class="row" style="margin: 0; height: 85vh;">
    <section class="col-sm-1"></section>
    <section class="col-sm-10">
        <table class="table" id="messagestable">
            <thead>
                <tr class="table-head">
                    <th>Book No.</th>
                    <th>Book Title</th>
                    <th>Book Author</th>
                </tr>
            </thead>
            <tbody>
            @foreach($allBooks as $book)
                <tr>
                    <td>{{ $book->isbn }}</td>
                    <td>{{ $book->bookTitle }}</td>
                    <td>{{ $book->bookAuthor }}</td>
                <td style="width:9em;"><a href="{{ url('/books/edit/'.encrypt($book->isbn)) }}"><img src="{{ asset('icons/icons8-edit-file-80.png') }}" title="Edit" alt="Edit" style="height:30%; width:30%;"></a></td>
                    <td style="width:9m;"><a href=""><img src="{{ asset('icons/icons8-delete-file-80.png') }}" title="Delete" alt="Delete" style="height:30%; width:30%;"></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
    <section class="col-sm-1"></section>
</section>
<section class="row" style="margin:0;">
    <section class="col-sm-12" style="display:flex; justify-content:center;">
        {{ $allBooks->links() }}
    </section>
</section>

