@extends('books.bookmainlayout')

@section('content')
  <section class="row" style="margin:0;">
      <section class="col-md-2"></section>
      <section class="col-md-8">
    <form action="{{ url('/books/edit/save') }}" method='post' class="form">
        {{ csrf_field() }}
        <section class="form-group">
            <label for="isbn" class="col-form-label" style="font-weight:bold;">ISBN</label>
        <span style="color:#f00;">

        @if($errors->has('isbn'))
          @foreach($errors->get('isbn') as $message)
           {{ $message }}
          @endforeach
        @endif

        </span>
            <input type="text" name="isbn" id="isbn" class="form-control"  value="{{ $book->isbn }}" readonly>
        </section>
        <section class="form-group">
            <label for="isbn" class="col-form-label" style="font-weight:bold;">Book Title</label>

            <span style="color:#f00;">

                @if($errors->has('booktitle'))
                  @foreach($errors->get('booktitle') as $message)
                   {{ $message }}
                  @endforeach
                @endif

            </span>

            <input type="text" name="booktitle" id="booktitle" class="form-control" value="{{ $book->bookTitle }}">
        </section>
        <section class="form-group">
            <label for="isbn" class="col-form-label" style="font-weight:bold;">Book Author</label>

            <span style="color:#f00;">

                @if($errors->has('bookauthor'))
                  @foreach($errors->get('bookauthor') as $message)
                   {{ $message }}
                  @endforeach
                @endif

            </span>

            <input type="text" name="bookauthor" id="bookauthor" class="form-control" value="{{ $book->bookAuthor }}">
        </section>
        <section class="form-group" style="display:flex; justify-content: center">
            <button type="submit" class="btn btn-primary">Add</button>
            <button type="reset" class="btn btn-danger">Clear</button>
        </section>
    </form>
      </section>
      <section class="col-md-2"></section>
  </section>
@endsection
