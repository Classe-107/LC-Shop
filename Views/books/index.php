<?php
include __DIR__ . '/../header.php';
include __DIR__ . '/../../Model/Book.php';
$result = Book::fetchAll($conn, 'books');
?>
<section class="container">
    <h2>Book</h2>
    <div class="row gy-4">
        <?php

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_object('Book')) {
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