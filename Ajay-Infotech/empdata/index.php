<?php
require "database/config.php";

// Fetch employee data from database
try {
    $stmt = $pdo->prepare("SELECT * FROM emp");
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($data) {
    } else {
        echo "Sorry, there is no data available.";
    }
} catch (PDOException $e) { // Fix: Remove the dollar sign before 'PDOException'
    echo "Error: " . $e->getMessage(); // Fix: Correct method name casing 'getMessage()'
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajay Infotech - Employee Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="static/css/style.css">
        <style>
        .img {
            width:50px;
            height:auto;
            border-radius:30px;
            float:right;
        }
    </style>
</head>
<body>
    <h1 class="text-center m-3">Employee Data</h1>

    <!-- Row s Start Here -->
    <div class="container">

  <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
    <?php if($data): ?>
        <?php foreach($data as $row): ?>
    <div class="col">
      <a href="employee_details.php?full_name=<?= urldecode($row['full_name']);?>">
        <div class="p-3 border bg-light">
            <p><?= htmlspecialchars($row['full_name']); ?></p>
            <p><?= htmlspecialchars($row['date_now']) ?></p>
            <p><?= htmlspecialchars($row['note']) ?></p>
            <img class="img" src="<?= $row['batch'] ?>" alt="">

        </div>
        </a>
    </div>
    <?php endforeach; ?>
    <?php endif; ?>
  </div>
</div>
    <!-- Row s Ends Here -->

    <!-- boootstrap scripting start -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- boootstrap scripting end -->

</body>
</html>

