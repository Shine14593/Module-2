

<form action="index.php?page=city&action=store" method="post">
    <div class="mb-3">
        <label for="" class="form-label">City Name</label>
        <input type="text" name="city_name" class="form-control">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Country</label>
        <input type="text" name="country" class="form-control" >
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Area</label>
        <input type="number" name="area" class="form-control" >
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Population</label>
        <input type="number" name="population" class="form-control" >
    </div>
    <div class="mb-3">
        <label for="" class="form-label">GDP</label>
        <input type="number" name="gdp" class="form-control" >
    </div>
    <div class="mb-3">
        <label for="" class="form-label">description</label>
        <input type="text" name="description" class="form-control" >
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="index.php?page=city&action=show-list">Cancel</a>
</form>
