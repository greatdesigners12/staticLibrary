@extends('template')

@section('content')

<form method="POST" action="{{route('createBook')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <input type="text" class="form-control" placeholder="Enter title" name="title">
    </div>
    @error('title')
      <div class="text-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
        <label for="exampleInputEmail1">Synopsis</label>
        <input type="text" class="form-control" placeholder="Enter Synopsis" name="synopsis">
    </div>
    @error('synopsis')
      <div class="text-danger">{{ $message }}</div>
    @enderror
    <div class="mb-3">
        <label for="formFile" class="form-label">Upload Gambar</label>
        <input class="form-control" type="file" id="formFile" name="picture">
        @error('picture')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
   
    <div class="form-group mb-3">
        <select class="form-select" name="writer_id" >
          <option value="" selected>Select writer name</option>
          @foreach ($writerData as $writer)
            
            <option value="{{$writer->id}}" >{{$writer->name}}</option>
          @endforeach
          
        </select>
        @error('writer_id')
            <div class="text-danger">{{ $message }}</div>
          @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection