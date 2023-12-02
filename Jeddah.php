<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="JeddahStyle.css">
    <title>Jeddah</title>
</head>

<body>
    <nav>
        <div id="logo-img">
            <img src="img/logo.png" alt="Logo" style="width:100px;height:65px;">
        </div>
        <div id="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
        <ul>
            <li>
                <a href="Home.html">Home</a>
            </li>
            <li>
                <a href="Riyadh.php">Ryiadh</a>
            </li>
            <li>
                <a class="active" href="Jeddah.php">Jeddah</a>
            </li>
            <li>
                <a href="Dammam.php">Dammam</a>
            </li>
            <li><img src="img/night.png" alt="night mode" id="theam" height="77">
            </li>
        </ul>
    </nav>

    <main>

        <h2 class="page-heading">Jeddah</h2>

        <section>
            <div class="card">
                <div class="card-image">
                    <a>
                        <img src="img/56.jpg" alt="Card Image">
                    </a>
                </div>

                <div class="card-description">
                    <a>
                        <h3>Private Horse Riding Experience at Red Sea</h3>
                    </a>
                    <p>This activity is unique as it’s is an incredible way to enjoy the Red Sea and explore the desert
                        in Jeddah while being active and outdoorsy. During this activity you will enjoy horse riding
                        with locals and enjoy the calm and beautiful horses beach</p>
                </div>
            </div>

            <div class="card">
                <div class="card-image">
                    <a>
                        <img src="img/37.jpg" alt="Card Image">
                    </a>
                </div>

                <div class="card-description">
                    <a>
                        <h3>Private Morning Desert Safari with Quad Bike Tours Jeddah</h3>
                    </a>
                    <p>Discover the beauty of the desert at dawn with our special morning desert safari tour in Jeddah.
                        Leave the bustling city life behind turn round yourself with the serenity and tranquility of the
                        desert taking you to before the dawn, our experienced driver will drive you along the sand dunes
                        under the starlit sky to the desert camp. Enjoy the beauty of the desert as the first light of
                        the sun kisses the desert flow, and the world welcomes a new day.
                        Sit on a dune and watch the sunrise with your friends and family with a warm cup of Arabic
                        coffee in your hand. Get ready to go on an adventure of a lifetime with a dune bashing session
                        where you will be taken on a wild ride driving through sand dunes. This thriller experience
                        ensures you the right dose of adrenaline rush to your morning desert safari jeddah Get ready for
                        an unforgettable quad bike tour in Jeddah to explore the Jeddah desert with no limits and rules.
                    </p>

                </div>
            </div>

            <div class="card">
                <div class="card-image">
                    <a>
                        <img src="img/ac.jpg" alt="Card Image">
                    </a>
                </div>

                <div class="card-description">
                    <a>
                        <h3>Moon Valley Hike from Jeddah City</h3>
                    </a>
                    <p>Hiking through the Moon Valley. It feels like we are on a different planet. the unreal experience
                        made you connect to Saudi nature from a different perspective. This Hike is a must for someone
                        looking for quilty time out of the city.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-image">
                    <a>
                        <img src="img/76.jpg" alt="Card Image">
                    </a>
                </div>

                <div class="card-description">
                    <a>
                        <h3>Dune Bashing Desert Safari Trip

                        </h3>
                    </a>
                    <p>Enjoy a high-energy immersion into the Saudi Arabian desert during this full-day shared adventure
                        tour from Jeddah. Try out a range of desert safari activities, from rock climbing and hiking to
                        sand skiing and dune bashing. Round-trip transportation from Jeddah is included, plus unlimited
                        snacks and refreshments.

                    </p>

                </div>
            </div>

            <div class="card">
                <div class="card-image">
                    <a>
                        <img src="img/70.jpg" alt="Card Image">
                    </a>
                </div>

                <div class="card-description">
                    <a>
                        <h3>Full day Jeddah City Private Tour

                        </h3>
                    </a>
                    <p>The city of Jeddah offers unparalleled options for fun, exciting adventures, multiculturalism,
                        and luxury to its visitors. Enjoy your time with me during an exciting day trip. You will be
                        baffled by the beauty and the various destinations you'll be visiting. Be prepared to engage all
                        your senses to make the most out of your trip to this charming city.
                    </p>
                </div>
            </div>

            <div class="card">
                <div class="card-image">
                    <a>
                        <img src="img/57.jpg" alt="Card Image">
                    </a>
                </div>

                <div class="card-description">
                    <a>
                        <h3>Jeddah Old Town Tour (Al Balad)</h3>
                    </a>
                    <p>Explore the local products and observe the local people on this private tour of Jeddah, or Al
                        Balad. You’ll see kids playing, people sharing tea, and you’ll see the Balad spirit. Easily meet
                        your private guide at Jeddah Old Gate, and then you’ll be on your way. Your guide will also
                        organize snacks and drinks to keep you fueled up.
                    </p>
                </div>
            </div>
        </section>
        <footer>
        <h2 id="comments">Comments</h2>
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
        echo "Comment deleted successfully";
    } else {
        echo "Error deleting comment: " . $conn->error;
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
                echo "<p><strong>" . $row['name'] . ":<br></strong> " . $row['comment'] . "<br> <em>(" . $row['created_at'] . ")<br></em>";
                echo " <span><a href='Jeddah.php?edit_id=" . $row['id'] . "'>Edit</a></span>";
                echo " <span><a href='Jeddah.php?delete_id=" . $row['id'] . "' onclick=\"return confirm('Are you sure you want to delete this comment?');\">Delete</a></p></span>";
            }
        } else {
            echo "No comments yet.";
        }

        $conn->close();
        ?>


<hr>


<?php 
        
    if (!isset($_GET['edit_id'])) {
?>
    <h2 id="add-c">Add a Comment</h2>
    <form action="add_comment_Jeddah.php" method="post" id="comment">
        <label for="name">Name:</label>
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
        <form action="add_comment_Jeddah.php" method="post" id="comment">
            <input type="hidden" name="edit_id" value="<?php echo $edit_id; ?>">
            <p>
                <label>Edit your comment</label>
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
        var theam = document.getElementById('theam');
        theam.onclick = function () {
            document.body.classList.toggle('dark');
            if (document.body.classList.contains('dark')) {
                theam.src = "img/light.png";
            }
            else {
                theam.src = "img/night.png";
            }
        }
    </script>

</body>

</html>