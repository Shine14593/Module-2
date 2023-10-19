

<form action="index.php?page=city&action=edit&id=<?php echo $city['id'] ?>" method="post">
    <div class="mb-3">
        <label for="" class="form-label">City Name</label>
        <input type="text" name="city_name" value="<?php echo $city['city_name'] ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Country</label>
        <input type="text" name="country" value="<?php echo $city['country'] ?>" class="form-control" >
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Area</label>
        <input type="number" name="area" value="<?php echo $city['area'] ?>" class="form-control" >
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Population</label>
        <input type="number" name="population" value="<?php echo $city['population'] ?>" class="form-control" >
    </div>
    <div class="mb-3">
        <label for="" class="form-label">GDP</label>
        <input type="number" name="gdp" value="<?php echo $city['gdp'] ?>" class="form-control" >
    </div>
    <div class="mb-3">
        <label for="" class="form-label">description</label>
        <input type="text" name="description" value="<?php echo $city['description'] ?>" class="form-control" >
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="index.php?page=city&action=show-list">Cancel</a>
</form>
