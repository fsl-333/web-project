
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="RiyadhStyle.css">
    <title>Riyadh</title>

    
</head>

<body>

    <nav>
        <div id="logo-img">

            <img src="img/logo.png" alt="Logo">

        </div>

        <ul>
            <li>
                <a href="Home.html">Home</a>
            </li>
            <li>
                <a class="active" href="Riyadh.php">Riyadh</a>
            </li>
            <li>
                <a href="Jeddah.php">Jeaddh</a>
            </li>
            <li>
                <a href="Dammam.php">Dammam</a>
            </li>

        </ul>

        <img src="img/night.png" alt="night mode" id="night">
    </nav>


    <main>
        <h2 class="page-heading">Riyadh</h2>

        <section>

            <div class="card">
                <div class="card-image">
                    <img src="img/cave.jpg" alt="Card Image">
                </div>

                <div class="card-description">

                    <h3>Ein Heet Cave</h3>


                    <p>
                        Ain Hit is a Halal cave famous for its limestone formations and natural water reservoir.
                        It is located in Jabal Jubail, about 40 kilometers from the city of Riyadh . It is a well-known
                        tourist site, and one of the most accessible caves in Saudi Arabia. Inside the cave there is an
                        underground lake in circular internal openings more than 30 meters deep and 150 meters long. In
                        the past, the water level was high, and caravans were supplied with water from it. However, the
                        water level has decreased recently.
                    </p>
                </div>
                <a href="https://www.visitsaudi.com/ar/see-do/destinations/riyadh/heet-cave-in-riyadh"
                    class="btn-readmore">more details</a>
            </div>
            </div>

            <div class="card">
                <div class="card-image">

                    <img src="img/hiss.jpg" alt="Card Image">

                </div>

                <div class="card-description">

                    <h3>Saudi National Museum</h3>


                    <p>
                        The Saudi National Museum, located in Riyadh, is a state-of-the-art facility that provides
                        visitors with a comprehensive overview of Saudi Arabia’s history, culture, and heritage. The
                        museum aims to promote an understanding of the kingdom's past and present, offering a glimpse
                        into its diverse cultural and historical tapestry.

                    </p>
                    <a href="https://nationalmuseum.moc.gov.sa/virtualtour/" class="btn-readmore">more details</a>
                </div>
            </div>



            <div class="card">
                <div class="card-image">
                    <img src="img/Diriyah22.jpg" alt="Card Image">
                </div>

                <div class="card-description">

                    <h3>Turaif Historical Neighborhood</h3>

                    <p>
                        This property was the first capital of the Saudi Dynasty,
                        in the heart of the Arabian Peninsula, north-west of Riyadh. Founded in the 15th century, it
                        bears witness to the Najdi architectural style,
                        which is specific to the centre of the Arabian peninsula.
                        In the 18th and early 19th century,
                        its political and religious role increased,
                        and the citadel at at-Turaif became the centre of the temporal power of the House of Saud and
                        the spread of the Salafiyya reform inside the Muslim religion. The property includes the remains
                        of many palaces and an urban ensemble built on the edge of the ad-Dir’iyah oasis.</p>
                    <a href="https://www.visitsaudi.com/ar/do/culture/at-turaif" class="btn-readmore">more details</a>
                </div>
            </div>

            <div class="card">
                <div class="card-image">

                    <img src="img/to.jpg" alt="Card Image">

                </div>

                <div class="card-description">

                    <h3> Al Faisaliya Tower</h3>


                    <p>
                        Al-Faisaliah Tower, Arabic is a commercial skyscraper and mixed-use complex located in the Olaya
                        district of Riyadh, Saudi Arabia. The 267-meter-tall office tower, the centerpiece of the Foster
                        + Partners development, is notable for being the first skyscraper built in Saudi Arabia and for
                        the massive stained glass wall in the hotel lobby, designed by architect Brian Clarke in
                        collaboration with Norman Foster. The center is the seventh tallest building in the Kingdom of
                        Saudi Arabia after the Kingdom Tower, Rafal Tower, and Abraj Al Bait,
                        and the center currently ranks as the 325th tallest building in the world. </p>
                    <a href="https://www.visitsaudi.com/ar/see-do/destinations/riyadh/burj-alfaisaliah-in-riyadh"
                        class="btn-readmore">more details</a>
                </div>
            </div>
            <div class="card">
                <div class="card-image">

                    <img src="img/eee.jpg" alt="Card Image">

                </div>

                <div class="card-description">

                    <h3>Al Bujairi Park</h3>


                    <p>
                        Al-Bujairi is commonly referred to as Al-Bujairi Historical District or Al-Bujairi Square, and
                        it is a cultural and historical area located in Riyadh, the capital city of Saudi Arabia. The
                        district is renowned for its preservation of traditional Saudi Arabian
                        architecture and its cultural significance. </p>
                    <a href="https://www.visitsaudi.com/ar/see-do/destinations/diriyah/albujairi-terrace-in-diriyah"
                        class="btn-readmore">more details</a>
                </div>
            </div>
            <div class="card">
                <div class="card-image">

                    <img src="img/sea.jpg" alt="Card Image">

                </div>

                <div class="card-description">

                    <h3>BLVD World</h3>


                    <p>
                        A first-class entertainment area suitable for families and individuals, bringing together 10
                        countries from around the world, in a place that provides you with activities for the first
                        time, such as the largest artificial lake in the world and boats that transport you from the
                        city to city with 11 stops, and it includes Aria. 15 who came to Riyadh from Las Vegas And the
                        largest football theater in the world, “The Sphere,” with an amusement park for fans of
                        enthusiasm
                        and excitement and other entertainment experiences
                    </p>
                    <a href="https://www.visitsaudi.com/ar/events/boulevard-world" class="btn-readmore">more details</a>
                </div>
            </div>
        </section>
    
    <footer>
    <h2>Comments</h2>
<?php
// Display comments from the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $delete_sql = "DELETE FROM comments WHERE id = $delete_id";

    if ($conn->query($delete_sql) === TRUE) {
        echo " <br>Comment deleted successfully";
    } else {
        echo "<br>Error deleting comment: " . $conn->error;
    }
}

if (isset($_GET['edit_id'])) {
    $edit_id = $_GET['edit_id'];
    $edit_result = $conn->query("SELECT * FROM comments WHERE id = $edit_id");

    if ($edit_result->num_rows > 0) {
        $edit_row = $edit_result->fetch_assoc();
        $edit_name = $edit_row['name'];
        // $edit_email = $edit_row['email'];
        $edit_comment = $edit_row['comment'];
    }
}

$sql = "SELECT * FROM comments ORDER BY created_at DESC";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo " <p><strong>" . $row['name'] . ":<br></strong> " . $row['comment'] . " <br><em>(" . $row['created_at'] . ")<br></em>";
                echo "<span> <a href='Riyadh.php?edit_id=" . $row['id'] . "'>Edit</a></span>";
                echo " <span><a href='Riyadh.php?delete_id=" . $row['id'] . "' onclick=\"return confirm('Are you sure you want to delete this comment?');\">Delete</a></p></span>";
            }
        } else {
            echo "<br> No comments yet.";
        }

        $conn->close();
        ?>


<hr>


<?php 
        
    if (!isset($_GET['edit_id'])) {
?>
    <h2 id="add-c">Add a Comment</h2>
    <form action="add_comment.php" method="post"id="comment">
        <label for="name" >Name:</label>
        <input type="text" name="name" required><br>

        <label for="comment">Comment:</label>
        <textarea name="comment" rows="4" required></textarea><br>

        <input type="submit" value="Add Comment">
    </form>

<?php 
    }
    
    if (isset($_GET['edit_id'])) {
        $edit_id = $_GET['edit_id'];
?>
        <h2 id="edit">Edit a Comment</h2>
        <form action="add_comment.php" method="post" id="comment">
            <input type="hidden" name="edit_id" value="<?php echo $edit_id; ?>">
            <p>
                <label>Edit:</label>
                <textarea name="edit_comment" required><?php echo $edit_comment; ?></textarea>
            </p>
            <p>
                <input type="submit" value="Update Comment" name="update_comment">
            </p>
        </form>
    </footer>
<?php } ?>

</main>
    <script>
        var night = document.getElementById('night');
        night.onclick = function () {
            document.body.classList.toggle('dark');
            if (document.body.classList.contains('dark')) {
                night.src = "img/light.png";
            }
            else {
                night.src = "img/night.png";
            }
        }
    </script>

</body>

</html>