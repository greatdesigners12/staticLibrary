@extends("template")

@section('content')
    <table class="table">
        <thead>
          <tr>
           
            <th scope="col">Name</th>
            <th scope="col">Contact</th>
            <th scope="col">Photo</th>
          </tr>
        </thead>
        <tbody>
           
           
          <tr>
           
            
            <td>{{$writer["name"]}} </td>
          
            <td>{{$writer["contact"]}}</td>
            <td>
                @if($writer["image_name"] != "")
                <img src="/img/{{$writer["image_name"]}}" alt="">
                @else
                    Gambar tidak ditemukan
                @endif
            </td>
          </tr>
          
        </tbody>
      </table>
      <h1>Book</h1>

      <table class="table">
        <thead>
          <tr>
           
            <th scope="col">Title</th>
            <th scope="col">Synopsis</th>
            <th scope="col">Photo</th>
          </tr>
        </thead>
        <tbody>
            @foreach($writer->books as $book)
                <tr>
                    <td>{{$book["title"]}} </td>
                
                    <td>{{$book["synopsis"]}}</td>
                    <td>
                        @if($book["coverphoto"] != "")
                        <img src="/img/{{$book["coverphoto"]}}" alt="">
                        @else
                            Gambar tidak ditemukan
                        @endif
                    </td>
                </tr>
            @endforeach
          
        </tbody>
      </table>
         
      
@endsection