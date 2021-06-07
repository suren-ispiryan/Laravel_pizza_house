<h2 style="text-align: center; color: green">Pizza ordered successfully</h2>
<h3 style="text-align: center; color: red"> Your order</h3>

<div style="display: flex; justify-content: center">
  @foreach ($chosen as $pizzaInfo)
    <div style="padding: 15px 40px; margin: 15px 10px; text-align: center; min-width: 200px; border: 1px black solid">
      <h2 style="color: green">Your info</h2>
      <p style="text-align: center"><b>Name:</b> {{ $order->name }}</p>
      <p style="text-align: center"><b>Adress:</b> {{ $order->adress }}</p><hr>
      <h2 style="color: green">Pizza info</h2>
      <p style="text-align: center"><b>Pizza name:</b> {{ $pizzaInfo->name }}</p>
      <p style="text-align: center"><b>Pizza price:</b> {{ $pizzaInfo->price }}</p>
      <p style="text-align: center"><b>Pizza ingredients:</b> {{ $pizzaInfo->ingradients }}</p>
    </div>
  @endforeach  
</div>

<div style="padding: 25px 100px">
  <h3 style="margin: 0; text-align: right; width: 100%; color: red">Total Price: {{ $total }} (AMD)</h3>
  <h3 style="margin: 10px 0 0 0; text-align: right; width: 100%; color: red">Total Price: {{ $total/8 }} (RUR)</h3>
  <h3 style="margin: 10px 0 0 0; text-align: right; width: 100%; color: red">Total Price: {{ $total/500 }} (USD)</h3>
</div>