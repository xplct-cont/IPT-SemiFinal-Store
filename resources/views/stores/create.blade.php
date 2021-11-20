@extends('pages\base')

@section('content')


    <h1>Add New Store</h1>
  <div class="row">
     <div class="col-md-5">
        {!! Form::open(['url'=>'/stores', 'method' =>'post'])  !!}

        <div class="form-group">
           
            {{Form::label('name', 'Store Name')}}
            {{Form::text('name', null, ['class'=>'form-control'])}}
    
        </div>

        <div class="form-group">
           
            {{Form::label('location', 'Location')}}
            {{Form::text('location', null, ['class'=>'form-control'])}}
    
        </div>

        <div class="form-group">
           
            {{Form::label('owner')}}
            {{Form::text('owner', null, ['class'=>'form-control'])}}
    
        </div>

        <div class="form-group">
           
            {{Form::label('net_worth')}}
            {{Form::number('net_worth', null, ['class'=>'form-control'])}}     
        </div> 
            <button class="btn btn-dark float-right">
                   Create Store

            </button>
        </div>
    
        {!! Form::close()  !!}
     </div>
<div class="col-md-6">
    @if (count($errors)>0)

    <div class="card">
<div class = "card-body bg-danger text-warning">
    All Fields Required!
<ul>
    @foreach ($errors->all() as $err)
    <li>{{$err}}</li>      
    @endforeach
</ul>
</div>

    </div>
        
    @endif
</div>
  </div>

@endsection