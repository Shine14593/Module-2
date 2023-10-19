<div class="card">
    <div class="card-header">
        City Detail
    </div>
    <div class="card-body">
        <div class="mb-3">
            <p>City Name: <?php echo $city['city_name'] ?></p>
        </div>
        <div class="mb-3">
            <p>Country: <?php echo $city['country'] ?></p>
        </div>
        <div class="mb-3">
            <p>Area: <?php echo $city['area'] ?></p>
        </div>
        <div class="mb-3">
            <p>Population: <?php echo $city['population'] ?></p>
        </div>
        <div class="mb-3">
            <p>GDP: <?php echo $city['gdp'] ?></p>
        </div>
        <div class="mb-3">
            <p>description: <?php echo $city['description'] ?></p>
        </div>
        <a href="index.php?page=city&action=edit">Edit</a>
        <a href="index.php?page=city&action=show-list">Back to list</a>
    </div>
</div>