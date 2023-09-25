<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Campus Connect</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <style>
    .product-card {
      margin-bottom: 20px;
    }

    .product-card h2 {
      font-size: 18px;
      margin-top: 0;
    }

    .product-card p {
      font-size: 14px;
      margin-bottom: 0;
    }

    .no-results {
      font-size: 16px;
      font-weight: bold;
      color: red;
    }
  </style>
</head>

<body>
  <?php include 'navbar.php'; ?>

  <br>
  <br>

  <div class="container">
    <h3 class="text-center">All The Stuff People Has got</h3>
    <h6 class="text-center text-muted">All the items that people have found are listed below. If what you've lost is included in the list, please click on the product name to learn more.</h6>

    <div class="row">
      <?php
        $conn = mysqli_connect('localhost', 'root', '', 'connect');

        if ($conn === false) {
          die('Connection failed: ' . mysqli_connect_error());
        }

        $sql = 'SELECT product_name, post_id FROM lost_and_found';
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            $post_id = $row['post_id'];

            // Create a link to the page `activatemoredetails.php` with the `post_id` query parameter
            $link = "activatemoredetails.php?post_id=$post_id";

            echo '<div class="col-md-4">
              <div class="product-card card">
                <div class="card-body">
                  <h2 class="card-title">' . $row['product_name'] . '</h2>
                  <a href="' . $link . '" class="btn btn-primary">More details</a>
                </div>
              </div>
            </div>';
          }
        } else {
          echo '<p class="no-results">No products found.</p>';
        }

        mysqli_close($conn);
      ?>
    </div>
  </div>

  <br>

  <?php include 'footer.html'; ?>
</body>

</html>
