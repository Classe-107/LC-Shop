<?php
include __DIR__ . '/../header.php';
include __DIR__ . '/../../Model/Movie.php';
if (isset($_POST['title'])) {
    $data = $_POST;
    var_dump($data);
    $movie_id = Movie::create($conn, $data, 'movies');
    //header("Location: show.php?id=$movie_id");
}

?>
<section class="container">
    <div class="d-flex">
        <h2>Create new movie</h2>
    </div>

    <div class="row gy-4">
        <div class="col">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" required>
                </div>
                <div class="mb-3">
                    <label for="original_title" class="form-label">Original Title</label>
                    <input type="text" class="form-control" id="original_title" name="original_title"
                        placeholder="Enter original title" required>
                </div>
                <div class="mb-3">
                    <label for="language" class="form-label">Language</label>
                    <input type="text" class="form-control" id="language" name="language" placeholder="Enter language"
                        required>
                </div>
                <div class="mb-3">
                    <label for="vote" class="form-label">Vote</label>
                    <input type="number" class="form-control" id="vote" name="vote" placeholder="Enter vote" required>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="text" class="form-control" id="image" name="image" placeholder="Enter image" required>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
                <button type="reset" class="btn btn-default"></button>Cancella</button>
            </form>
        </div>
    </div>
</section>
<?php
include __DIR__ . '/../footer.php';
?>