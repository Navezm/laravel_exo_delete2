<section class="container">
    <h1>Add a car :</h1>
    <form action="/addCar" method="POST">
        @csrf
        <div class="form-group">
        <label for="exampleInputEmail1">Brand</label>
        <input type="text" name="brand" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Year</label>
            <input type="number" name="year" class="form-control">
        </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Color</label>
            <input type="text" name="color" class="form-control">
        </div>
        </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input type="number" name="price" class="form-control">
        </div>
        </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Discount</label>
            <input type="number" name="discount" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>