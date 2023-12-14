<?php
include __DIR__ . '/../header.php';
include __DIR__ . '/../../Model/Movie.php';
$result = Movie::fetchAll($conn, 'movies');
?>
<section class="container">
    <h2>Movies</h2>
    <div class="row gy-4">
        <?php

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_object('Movie')) {
                $row->printCard($row->formatCard());

            }
        } elseif ($result) {
            echo "0 results";
        } else {
            echo "query error";
        }



        ?>

    </div>
</section>
<?php
include __DIR__ . '/../footer.php';
?>