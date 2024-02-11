<html>
    <head>
    <title>HomeBill</title>
    <style>
  
    .btn{
        width: 10rem;
        height: 2rem;
        margin-left:-11rem; 
    }
    p{
        color: red;
        font-family: arial;
        opacity: inherit;

    }
    
        </style>
       
    </head>


    <body>
       <marquee direction="right" scrollamount=40 width="100%">  <h1>{{ isset($title)?? ''}}</h1></marquee>
       <form method="post" action="{{$url}}">
        @csrf
        <div class="coantainer-fluid">
    <div class="container">
      <div class="row">
        <div class="col-lg-1.5">
        Month:<input type="text" name="Month"  value="{{isset($homeBills)? $homeBills->Month: old(("Month"))}}">
        <br>
        @error("Month")
      <p>{{$message}}</p> 
        @enderror
        </div>
    
    <div class="col-lg-1.5">
        HomeRent:<input type="text" name="HomeRent" value="{{isset($homeBills)? $homeBills->HomeRent: ""}}">
        <br>
          @error("HomeRent")
      <p>{{$message}}</p>
        @enderror
    </div>
    <div class="col-lg-1.5">
        Waste:<input type="text" name="Waste"  value="{{isset($homeBills)? $homeBills->Waste: ""}}">
         <br>
        @error("Waste")
      <p>{{$message}}</p>
        @enderror
    </div>
 <div class="col-lg-1.5">
            Water:<input type="text" name="Water" value="{{isset($homeBills)? $homeBills->Water: ""}}">
             <br>
        @error("Water")
      <p>{{$message}}</p>
        @enderror
    </div>
  
    <div class="col-lg-1.5">
        Internet:<input type="text" name="Internet" value="{{isset($homeBills)? $homeBills->Internet: ""}}">
         <br>
        @error("Internet")
      <p>{{$message}}</p>
        @enderror
    </div>
    <div class="col-lg-1.5">
       PreviousElecRead:<input type="text" name="PreviousElecRead" value="{{isset($homeBills)? $homeBills->PreviousElecRead: ""}}">
        <br>
        @error("PreviousElecRead")
      <p>{{$message}}</p>
          @enderror
    </div>
    <div class="col-lg-1.5">
      CurrentElecRead:<input type="text" name="CurrentElecRead" value="{{isset($homeBills)? $homeBills->CurrentElecRead: ""}}">
       <br>
        @error("CurrentElecRead")
      <p>{{$message}}</p>
        @enderror
    </div>
    <div class="col-lg-1.5">
        UnitConsumed:<input type="text" name="UnitConsumed" value="{{isset($homeBills)? $homeBills->UnitConsumed: ""}}">
         <br>
        @error("UnitConsumed")
      <p>{{$message}}</p>
        @enderror
    </div>
    <div class="col-lg-1.5">
        Amount(unit):<input type="text" name="Amount"  value="{{isset($homeBills)? $homeBills->Internet: ""}}">
         <br>
        @error("Amount")
      <p>{{$message}}</p>
        @enderror
    </div>
    <div class="col-lg-1.5">
        Total Amount:<input type="text" name="TotalAmount" value="{{isset($homeBills)? $homeBills->TotalAmount: ""}}" >
         <br>
        @error("TotalAmount")
      <p>{{$message}}</p>
        @enderror
        
    </div>
</div>
</div>
 <center><button type="submit" class="btn">Submit</button></center>
</form>
    </body>
</html>
