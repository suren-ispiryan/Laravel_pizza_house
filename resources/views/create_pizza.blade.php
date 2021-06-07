<h1 style="text-align: center; color:red; margin-top: 50px">{{ session('message') }}</h1>

<form action="" method="POST" style="padding: 25px 50px; border: 1px black solid; max-width: 400px; text-align: center; margin: 50px 0 0 50%; transform: translate(-50%)">
  <h2 style="text-align: center">Add new pizza type</h2>
  <br>
  @csrf
  <input style="width: 95%; height: 35px; border:none; box-shadow: 1px 1px 5px black" type="text" name="name" placeholder="pizzas name">
  <input style="margin-top:10px; width: 95%; height: 35px; border:none; box-shadow: 1px 1px 5px black" type="number" name="price" placeholder="pizzas price">
  <input style="margin-top:10px; width: 95%; height: 35px; border:none; box-shadow: 1px 1px 5px black" type="textbox" name="ingradients" placeholder="pizzas ingradients">
  <input style="margin-top:20px; width: 40%; height: 35px; cursor:pointer" type="submit" name="add" value="add pizza">
</form>