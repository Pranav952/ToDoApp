<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
      a{
        margin-left:110rem; 
      }
      #btn{

     
     
        width: 70px;
        height: 30px;
        margin: 1px;
      
       
      
      

      }
      #btn2{
        margin-left: -110rem;
      }
   
      </style>
  </head>
  <body>  
    <a href="{{url("/homebill/create")}}"><button type="button" id="btn" class="btn btn-primary">Add</button></a>
  <a href="{{url('/homebill/trash')}}"> <button type="button" id="btn" class="btn btn-primary">Trash</button></a>


     <table class="table" border="1px">
        <thead>
            <tr>
                <th>Month</th>
                <th>HomeRent</th>
                <th>Waste</th>
                <th>Water</th>
                <th>Internet</th>
                <th>PreviousElecRead</th>
                <th>CurrentElecRead</th>
                <th>UnitConsumed</th>
                <th>Amount</th>
                <th>TotalAmount</th>
                <th colspan="2"><center>Action</center></th>
    
              
            </tr>
        </thead>
        <tbody>
          @foreach ($homeBills as $items)
            <tr>
            
                <td>{{$items->Month}}</td>
                <td>{{$items->HomeRent}}</td>
                <td>{{$items->Waste}}</td>
                <td>{{$items->Water}}</td>
                <td>{{$items->Internet}}</td>
                <td>{{$items->PreviousElecRead}}</td>
                <td>{{$items->CurrentElecRead}}</td>
                <td>{{$items->UnitConsumed}}</td>
                <td>{{$items->Amount}}</td>
                <td>{{$items->TotalAmount}}</td>
                <td>
                  <a href="{{url("/homebill/delete")}}/{{$items->id}}"><button class="btn btn-danger" id="btn2">Move To Trash</button></a>
                </td>
               <td>
                  <a href="{{url("/homebill/edit")}}/{{$items->id}}"><button class="btn btn-primary" id="btn2">Edit</button>
                  </td>
               

            </tr>
            @endforeach
       

        </tbody>
      </table>
  </body>
</html>