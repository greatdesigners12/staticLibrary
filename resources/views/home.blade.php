@extends("template")

@section('content')
<form method="GET" ">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Search</label>
      <input type="text" class="form-control" name="search" value="<?= (isset($_GET["search"])) ? $_GET["search"] : "" ?>" placeholder="Search">
    </div>
   
    <button type="submit" class="btn btn-primary">Search</button>
  </form>
    <h1>Writers in My library</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Country</th>
            <th scope="col">Description</th>
            <th scope="col">Contact</th>
            <th scope="col">Photo</th>
          </tr>
        </thead>
        <tbody>
           
            @php($desc = "")
        @foreach($data as $i=>$writer)
            @if($writer->first)
            @php($desc = "first")
        @elseif($i == count($data) - 1)
            @php($desc = "end")
        @elseif(($i+1) % 2 == 0)
            @php($desc = "genap")
        @elseif(($i+1) % 2 == 1)
            @if(($i+1) == count($data)/2)
                @php($desc = "tengah")
            @else
                @php($desc = "ganjil")
            @endif
        @endif
        
          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            
            <td><a href="writer/{{$writer["id"]}}">{{$writer["name"]}}</a> </td>
            <td>{{$writer["country"]}}</td>
            <td>{{$desc}}</td>
            <td>{{$writer["contact"]}}</td>
            <td>
                @if($writer["image_name"] != "")
                <img src="img/{{$writer["image_name"]}}" alt="">
                @else
                    Gambar tidak ditemukan
                @endif
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{$data->links('pagination::bootstrap-4')}}
      <h1 class="my-3">Book</h1>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Title</th>
            <th scope="col">Synopsis</th>
            <th scope="col">Writer Name</th>
          </tr>
        </thead>
        
        <tbody>
        @foreach($dataBook as $i=>$book)
    
          <tr>
            <th scope="row">{{$i}}</th>
            <td>{{$book["title"]}} </td>
            <td>{{$book["synopsis"]}}</td>
            
            <td>{{$book["contact"]}}</td>
            <td>
                
                {{$book["writer_name"]}}
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{$dataBook->links('pagination::bootstrap-4')}}

@endsection

