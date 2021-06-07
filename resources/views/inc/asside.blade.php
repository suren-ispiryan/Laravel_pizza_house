@section('asside')

  <div id="asside" style="text-align: center; margin-top: 10%">
    <h4 style="margin: 0 0 20px 0">Order pizza here</h4>
    <div class="goToList">
      <a href="add_pizza">
        <input type="submit" value="Order Pizza" class="btn btn-success">
      </a>
    </div>


    @if( session('isAdmin') )
        <h4 style="margin: 50px 0 20px 0">Create pizza</h4>
        <div>
          <a href="add_pizza">
            <button type="submit" class="btn btn-warning">
                <a style="list-style-type: none; text-decoration: none; color: black"; 
                  href="create_pizza">
                  Add pizza type
                </a>
            </button>
            </a>
        </div>
      @endif

  </div>
  