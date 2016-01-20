<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <title>@yield('title')</title>
  {!!Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css')!!}
  {!!Html::style('css/myStyle.css')!!}
  
</head>
<body>

@section('navbar')
<div class="container-fluid">
 
  <nav class="navbar navbar-inverse">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Laravel 5</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
        <ul class="nav navbar-nav">
          <li class="active"><a href="{{url('index')}}">Home <span class="sr-only">(current)</span></a></li>
          <!-- <li><a href="#">Contact</a></li> -->
        </ul>
      


        <form class="navbar-form navbar-right" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Search</button>
        </form>
        
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
 </div>

@show
<div class="container">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2 ContentBg">
    
      @yield('content')
      @yield('createContact')
      @yield('store')
      @yield('editContact')
      
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2 createBg">
      
    </div>
  </div>
</div>


  
  @section('footer')
  <div class="container-fluid footer">
    <nav class="navbar navbar-inverse" >
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <h4>Copyright &copy; Hossain Mamun {{date('Y')}}</h4>
        </div>
      </div>
    </nav>
  </div>
  @show



{!!Html::script('https://code.jquery.com/jquery-2.2.0.min.js')!!}
{!!Html::script('js/custom.js')!!}
{!!Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js')!!}
</body>
</html>
      