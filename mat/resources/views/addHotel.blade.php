@extends('layouts.black')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Hotel</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href= "{{ asset('../../dist/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6" style="margin-left:300px;margin-top:100px;margin-bottom:50px">
            <!-- general form elements -->
            <div class="card card-primary" >
              <div class="card-header">
                <h3 class="card-title">Add Hotel</h3>
              </div>
              <!-- /.card-header -->
               <!-- Success Message -->
					@if(session()->has('success'))
						<div class="alert">
							<ul>
							    @foreach(session()->get('success') as $message)
								<li>
							    	{{$message}}
								</li>
								@endforeach
                     @endif
               
              <!-- form start -->
              <form role="form" action="{{ route('dishi') }}" method="POST">
              @csrf
                  <div class="form-group">
                      <label for="caption">Caption *</label>
                      <input type="text" class="form-control" name="caption" id="caption" placeholder="Enter a caption for the hotel" required>
                  </div>

                  <div class="form-group">
                      <label for="name">Name *</label>
                      <input type="text" class="form-control" name="name" id="name" placeholder="Enter the name of the hotel" required>
                  </div>

                  <div class="form-group">
                    <label for="description">Description *</label>
                    <textarea rows = "5" cols = "40" name = "description" placeholder = "Enter a description for the hotel" required></textarea>
                  </div>

                  <div class="form-group">
                      <label for="price">Price Per Night *</label>
                      <input type="text" class="form-control"name="price" id="price" placeholder="Enter the price per night for the hotel" required>
                  </div>

                  <div class="custom-file">
                      <label>Photo</label>
                      <input type="file" class="custom-file-input" name="photo" id="customFile">
                      <label class="custom-file-label" for="customFile">Upload Photo</label>
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add</button>
                </div>
              </form>
              </div>
              </div>
            </div>
            <!-- /.card -->
              <!-- jQuery -->
              <script src="{{ asset('../../plugins/jquery/jquery.min.js')}}"></script>
              <!-- Bootstrap 4 -->
              <script src="{{ asset('../../plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
              <!-- bs-custom-file-input -->
              <script src= "{{ asset('../../plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
              <!-- AdminLTE App -->
              <script src="{{ asset('../../dist/js/adminlte.min.js')}}"></script>
              <!-- AdminLTE for demo purposes -->
              <script src="{{ asset('../../dist/js/demo.js')}}"></script>
              <script type="text/javascript">
                  $(document).ready(function () {
                      bsCustomFileInput.init();
                  });
              </script>

</body>
</html>
@endsection





