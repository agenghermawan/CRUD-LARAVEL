@extends('layout.layout')

@section('headname','Table')

@section('isi')
<section class="content">
    <div class="row">
    
      <div class="col-12"> 
        <div class="card">
          <div class="card-header">
             <a href="form"> <i class="fas fa-plus-square" style="float: right"></i></a>
            <h3 class="card-title">DataTable with default features</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>USERNAME</th>
                <th>EMAIL</th>
                <th>CREATED </th>
                <th>ACTION</th>
              </tr>
              </thead>

              <tbody>
                @foreach ($table as $item)
              
              <tr>
                <td>{{$item->email}} </td>
                <td>{{$item->username}} </td>
                <td>{{$item->created_at}} </td>
                <td>
                  <a href="" class="btn btn-primary"> Edit </a>
                  {{-- <form action="{{$item -> id}}" method="post" class="d-inline">
                  @method('delete') 
                  @csrf
                 <button class="btn btn-danger" type="submit"> Delete </button>
                  </form> --}}
                  
                  <a href="/table/destroy/{{$item->id}}" class="btn btn-danger"> Delete </a>
                </td>
              </tr>   
              
                 @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>

<!-- /.content-wrapper -->
@endsection