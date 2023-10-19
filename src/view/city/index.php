<div class="card">
    <div class="card-header">
        City list
        <a class="btn btn-success" href="index.php?page=city&action=create">Add new</a>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">City Name</th>
                <th scope="col">Country</th>
                <th scope="col">Area</th>
                <th scope="col">Population</th>
                <th scope="col">GDP</th>
                <th scope="col">description</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php if (count($city) > 0) : ?>
                <?php foreach ($city as $key => $city): ?>
                <tr>
                    <th scope="row"><?php echo $key + 1?></th>
                    <td><?php echo $city['city_name'] ?></td>
                    <td><?php echo  $city['country'] ?></td>
                    <td><?php echo $city['area'] ?></td>
                    <td><?php echo $city['population'] ?></td>
                    <td><?php echo $city['gdp'] ?></td>
                    <td><?php echo $city['description'] ?></td>
                    <td>
                        <a href="index.php?page=city&action=delete&id=<?php echo $city['id'] ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                        <a href="index.php?page=city&action=update&id=<?php echo $city['id'] ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="index.php?page=city&action=detail&id=<?php echo $city['id'] ?>" class="btn btn-primary"><i class="fa-solid fa-info"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">No data</td>
                </tr>
            <?php endif; ?>

            </tbody>
        </table>
    </div>
</div>


