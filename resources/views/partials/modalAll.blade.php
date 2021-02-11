<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mx-3" data-toggle="modal" data-target="#staticBackdrop">
    All cars
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">All cars</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body p-0">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Year</th>
                    <th scope="col">Color</th>
                    <th scope="col">Price</th>
                    <th scope="col">Discount</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($carAll as $item)
                  @if ($item->discount)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->brand}}</td>
                        <td>{{$item->year}}</td>
                        <td>{{$item->color}}</td>
                        <td><p class="text-crossed m-0">{{$item->price}}</p>{{$item->price - ($item->price * $item->discount/100)}}</td>
                        <td>{{$item->discount}}</td>
                        <td><form action="/deleteCar/{{$item->id}}" method="POST">
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form></td>
                    </tr>
                  @else
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->brand}}</td>
                        <td>{{$item->year}}</td>
                        <td>{{$item->color}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->discount}}</td>
                        <td><form action="/deleteCar/{{$item->id}}" method="POST">
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form></td>
                    </tr>
                    @endif
                  @endforeach
                </tbody>
            </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>