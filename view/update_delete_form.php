<?php include('header.php') ?>

<?php if ($results) { ?>
    <section>
        <h2>Update Or Delete Data</h2>
        <?php foreach ($results as $result) {

            $id = $result['ID'];
            $city = $result['Name'];
            $country_code = $result['CountryCode'];
            $district = $result['District'];
            $population = $result['Population'];

        ?>
            <form class="update" action="." method="POST">
                <input type="hidden" name="action" value="update">
                <input type="hidden" name="id" value="<?= $id ?>">

                <label for="city-<?= $id ?>">City Name:</label>
                <input type="text" id="city-<?= $id ?>" name="city" value="<?= $city ?>" required>
                <label for="countryCode-<?= $id ?>">Country Code:</label>
                <input type="text" id="countryCode-<?= $id ?>" name="country_code" maxlength="3" value="<?= $country_code ?>" required>
                <label for="district-<?= $id ?>">District:</label>
                <input type="text" id="district-<?= $id ?>" name="district" value="<?= $district ?>">
                <label for="population-<?= $id ?>">Population:</label>
                <input type="text" id="population-<?= $id ?>" name="population" value="<?= $population ?>">
                <button>Update</button>
            </form>
            <form class="delete" action="." method="POST">
                <input type="hidden" name="action" value="delete">
                <input type="hidden" name="id" value="<?= $id ?>">

                <button class="red">Delete</button>
            </form>
        <?php } ?>
    </section>
<?php } else { ?>
    <p>Sorry, no results.</p><br>
<?php } ?>
<p><?php include('status.php') ?></p>
<a href=".">Back to Request Forms</a>

<?php include('footer.php') ?>