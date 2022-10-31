<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Agreement</title>
</head>
<body>

<Center><div class="container" style="background-color:yellow;margin-bottom: 10px;padding-top: 20px;padding-bottom: 20px;box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;border-radius: 6px;"><h4>Tenancy Agreement</h4></div></Center>

<div class="container">
@foreach ($events as $event)

I declare as Tenancy, <b> {{$Name}}</b>  to Agree and abide by the Owner, Named <b>{{ $event->name}}</b> of the House , <b> {{ $event->E_title}}</b> added on {{ $event->created_at}}.<br><br>
<center>More Infos </center><br>
<hr>

          Bedroom : <span class="badge bg-dark" style="float: right">{{ $event->bedroom}}</span><br>
           Bathroom : <span class="badge bg-dark"style="float: right">{{ $event->bathroom}}</span><br>
           Build-Up : <span class="badge bg-dark"style="float: right">{{ $event->sqft}} Sq.ft</span><br>
           Build Year: <span class="badge bg-dark"style="float: right">{{ $event->build_year}}</span><br>

  Reference ID : {{$event->Reference}}<br>
  Type : {{$event->Categorie}}<br>
  Furnishing : {{$event->Furnishing}}<br>
  Tenure : Freehold

<hr>
I also declare to pay every month the payment of <b>RM {{$event->price}}</b> starting from the date of signature of the Agreement. the House includes :<br>
<b>{{$event->about}}</b><br>


<br>

<span style="float:left">Owner Signature: {{ $event->name}}<br></span>   <span style="float:right">Tenants Signature: {{$Name}}<br></span><br><br>

@endforeach





</div>


</body>
</html>