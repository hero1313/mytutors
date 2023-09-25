@extends('admin.index')
@section('content')
<div class="add-book">
    <form action="../admin/add-book" enctype='multipart/form-data' method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">სახელი</label>
            <input type="text"  name="subject" class="form-control" >
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">ავტორი</label>
            <input type="text"  name="author" class="form-control" >
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">წელი</label>
            <input type="number"  name="years" class="form-control" >
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">წიგნის ბმული</label>
            <input type="text"  name="book_link" class="form-control" >
        </div>
        <select name="level" class="form-select" >
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>
        
        <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@stop