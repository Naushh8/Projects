<?php
include 'connect.php';
session_start();

// Check if session variable 'log' exists and is not empty
if (!isset($_SESSION['log']) || $_SESSION['log'] == '') {
    header("Location: sindex.php");
    exit();
}

include 'header.php';

// Get form data
$source = $_POST['source'];
$dest = $_POST['dest'];
$class = $_POST['class'];
$type = $_POST['type'];
$no = $_POST['number'];

// Check if source and destination are the same
if ($source == $dest) {
    echo "<h1 style='text-align: center;'>Selected source and destination are the same. Please refill the details.</h1><br><br>";
} else {
    echo "<h1 style='text-align: center;'><b><img src='https://img.icons8.com/cotton/80/000000/route.png'/> SELECT ROUTE AND PROCEED TO CHECKOUT:</b></h1>";

    // Use parameterized query to avoid SQL Injection
    $stmt = $connect->prepare("SELECT * FROM `price` WHERE `source` = ? AND `dest` = ? AND `type` = ? AND `class` = ?");
    $stmt->bind_param("ssss", $source, $dest, $type, $class);
    $stmt->execute();
    $result = $stmt->get_result();

    // Initialize variables
    $final = null;
    $Route = null;

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $final = $row["Price"];
            $Route = $row["Route"];
            $final = $final * $no;

            echo "<br><br><h1 style='text-align: center;'>Total <b>{$class} Class, {$type}</b> Journey type fare from <b>{$source} to {$dest}</b> is: ₹<b>{$final}</b> and route via <b>{$source} {$Route} {$dest}</b></h1><br><br>";

            echo '<div style="text-align: center;">
                    <form action="pay.php" method="post">
                        <button style="background-color: black; padding: 25px 70px;" type="submit">
                            <span style="color: white;"><h3>Checkout</h3></span>
                        </button>
                    </form>
                  </div>';
        }
    } else {
        echo "<br><br><h1 style='text-align: center;'>No routes found for the selected options. Please try again.</h1><br><br>";
        $final = 0; // Assign a default value to avoid undefined variable error
        $Route = "Unavailable";
    }

    // Store session data
    $_SESSION['final'] = $final;
    $_SESSION['source'] = $source;
    $_SESSION['dest'] = $dest;
    $_SESSION['Class'] = $class;
    $_SESSION['Type'] = $type;
    $_SESSION['NoOfpass'] = $no;
    $_SESSION['Route'] = $source . $Route . $dest;
}
?>

<br><br>
<div style="text-align: center;">
    <form action="book.php" method="post">
        <button style="background-color: black; padding: 28px 80px;" type="submit">
            <span style="color: white;"><h3>Go back</h3></span>
        </button>
    </form>
</div>

<?php include 'footer.php'; ?>
