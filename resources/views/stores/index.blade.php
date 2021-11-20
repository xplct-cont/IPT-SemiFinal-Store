
@extends('pages\base')

@section('content')


@if($info = Session::get('info'))  

<div class="card">
  <div class="card-body bg-success text-light">
    {{$info}}
  </div>
</div>
    
@endif
<div class="add">
<div class="float-right">
  <a href="{{url('/stores/create')}}"  class = "btn btn-dark">
    Add New Store
  </a>
</div>
</div>
     <h1>Stores</h1>       
        <table class="table table-striped" >
            <thead class ="table table-bordered table-striped table-dark">
                <tr class="bg-secondary" >
                    <th>Store Name</th>
                    <th>Location</th>
                    <th>Owner </th>
                    <th>Net Worth </th>
                </tr>
            </thead>
            <tbody class = "table-striped table-dark">
                    <?php foreach ($stores as $s): ?> 
                     <tr>
                         
                
                             <td><?= $s->name ?> </td>
                             <td><?= $s->location ?> </td>
                             <td><?= $s->owner ?> </td>
                             <td><?= $s->net_worth ?> </td>                        
                     </tr>               
                    <?php endforeach; ?>                   
            </tbody>
        </table>

    </div>
</body>
@endsection


