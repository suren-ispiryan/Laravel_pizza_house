<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  
  <body>
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <h2 style="text-align: center" class="mt-3 mb-3"> Our menu </h2>
            
              <div class="row">
                <div class="col-md-12">
                  
                  <form action="" method="POST">
                  @csrf
                    <div class="row mb-4">
                      @foreach ($catalogue as $pizza)
                        <div class="col-md-4 p-2 mt-2" style="text-align: center; border:1px black solid">

                            <p style="display: flex; justify-content: space-between;">
                              <span>
                                Pizza count: 
                                <input type="number"
                                      name="count[{{ $pizza->id }}]"
                                      class="count"
                                      value="0"  
                                      style="height: 25px; width: 50px">
                              </span>
                              
                              <span>
                                Add to basket 
                                <input type="checkbox" 
                                      name="pizza_id[]" 
                                      class="checkbox"
                                      value={{ $pizza->id }}
                                      style="cursor: pointer; outline: 2px green solid">   
                              </span>
                            </p>

                            <p> <b> Pizza </b> {{ $pizza->id }} </p>
                            <p> <b> Pizza </b> {{ $pizza->name }} </p>
                            <p> <b> Price </b> {{ $pizza->price }} </p>
                            <p> <b> Ingredients </b> <br> {{ $pizza->ingradients }} </p> 
                        </div>           
                      @endforeach
                    </div>
                    
                  </div>
              </div>



              <div class="row">
                <div class="col-md-12">
                    <input type="text" 
                           name="name" 
                           style="width: 30%" 
                           class="mt-1 form-control" 
                           placeholder="Write your name">
                   
                    <input type="text" 
                           name="adress" 
                           style="width: 30%" 
                           class="mt-1 form-control" 
                           placeholder="Write your adress">
                   
                    <input type="submit" 
                           name="submit" 
                           value="order" 
                           style="width: 20%;margin-bottom: 50px" 
                           class="mt-2 form-control btn btn-success">
                  </form>
                </div>
              </div>


          </div>
        </div>
      </div>
    </div>
  </body>
</html>