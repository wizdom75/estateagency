@section('showcase')
<div class="jumbotron text-center" style="border-radius:0">
    <div class="container">
        <h1>Estate Agency</h1>
        <p class="lead">The best Estate Agency in all of England. This site uses Laravel version 5.7</p>
    </div>
    <div class=" center-block ">
        <form action="/search" method="get">
            <div class="input-group mx-auto col-md-6">
                    <input name="q" type="text" class="form-control" placeholder="SE28, Bexley, Greenwich ..." aria-label="" aria-describedby="button-addon4">
                    <div class="input-group-append" id="button-addon4">
                      <button type="submit" class="btn btn-outline-secondary" type="button" name='buy' value="Y" >Buy</button>
                      <button type="submit" class="btn btn-outline-secondary" type="button" name='buy' value="N">Rent</button>
                    </div>
                  </div>
        </form>
    </div>

</div>