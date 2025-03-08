<?php
require "database/config.php";

// Get the "full_name" from the query parameter
$full_name = isset($_GET['full_name']) ? $_GET['full_name'] : '';

// Fetch employee details based on full_name
try {
    if ($full_name) {
        // Prepared statement to avoid SQL injection
        $stmt = $pdo->prepare("SELECT * FROM emp WHERE full_name = :full_name");
        $stmt->bindParam(':full_name', $full_name, PDO::PARAM_STR);
        $stmt->execute();
        $employee = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$employee) {
            echo "Employee Not Found";
            exit();
        }
    } else {
        echo "No Employee Selected";
        exit();
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ensure 'full_name' is set in the URL
    $full_name = isset($_GET['full_name']) ? $_GET['full_name'] : '';

    if (!$full_name) {
        echo "No Employee Selected";
        exit();
    }

    // Retrieve the note from the form
    $note = $_POST['note'];
    $batchFilePath = '';

    // Handle the batch file upload (it can be any file type)
    if (isset($_FILES['batch']) && $_FILES['batch']['error'] === UPLOAD_ERR_OK) {
        $batchName = $_FILES['batch']['name'];
        $batchTmpPath = $_FILES['batch']['tmp_name'];
        $batchExtension = strtolower(pathinfo($batchName, PATHINFO_EXTENSION));

        // Specify the upload directory
        $uploadDirBatch = 'uploads/batch/';

        // Ensure the directory exists
        if (!is_dir($uploadDirBatch)) {
            mkdir($uploadDirBatch, 0777, true);
        }

        // Define a unique filename to avoid conflicts
        $uniqueBatchName = uniqid() . '.' . $batchExtension;
        $batchFilePath = $uploadDirBatch . $uniqueBatchName;

        // Move the uploaded file to the server
        if (move_uploaded_file($batchTmpPath, $batchFilePath)) {
            echo "<script>
            alert('File uploaded successfully!');
            window.location.href = 'index.php';
          </script>";
        } else {
            echo "Failed to upload file.<br>";
        }
    }

    // Check if the employee already exists
    $stmt = $pdo->prepare("SELECT full_name FROM emp WHERE full_name = :full_name");
    $stmt->bindParam(':full_name', $full_name, PDO::PARAM_STR);
    $stmt->execute();
    $existingEmployee = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($existingEmployee) {
        // If employee exists, update their note and batch
        $stmt = $pdo->prepare("UPDATE emp SET note = :note, batch = :batch WHERE full_name = :full_name");
        $stmt->bindParam(':note', $note, PDO::PARAM_STR);
        $stmt->bindParam(':batch', $batchFilePath, PDO::PARAM_STR);
        $stmt->bindParam(':full_name', $full_name, PDO::PARAM_STR);
        $stmt->execute();

        // echo "Employee record updated successfully for " . htmlspecialchars($full_name);
    } else {
        // If employee does not exist, insert a new record
        $stmt = $pdo->prepare("INSERT INTO emp (full_name, note, batch) VALUES (:full_name, :note, :batch)");
        $stmt->bindParam(':full_name', $full_name, PDO::PARAM_STR);
        $stmt->bindParam(':note', $note, PDO::PARAM_STR);
        $stmt->bindParam(':batch', $batchFilePath, PDO::PARAM_STR);
        $stmt->execute();

        echo "New employee record created successfully for " . htmlspecialchars($full_name);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .image-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .image-wrapper {
            text-align: center;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f8f9fa;
        }
        .image-wrapper img {
            width: 200px;
            height: auto;
            border-radius: 5px;
        }
                .note {
            background-color: #f9f9f9; /* Light grey background */
            border: 1px solid #ddd; /* Border around the note */
            padding: 20px; /* Spacing inside the note */
            border-radius: 5px; /* Rounded corners */
            font-size: 16px; /* Font size */
            color: #333; /* Text color */
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow */
            text-align: center; /* Center the text */
            margin-top: 20px; /* Margin from top */
        }

        .note-form {
            max-width: 500px;
            margin: 0 auto; /* Center the form */
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .note-form label {
            font-size: 16px;
            color: #333;
            display: block;
            margin-bottom: 10px;
        }

        .note-form input[type="text"],
        .note-form input[type="file"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 20px;
            box-sizing: border-box;
            background-color: #fff;
        }

        .note-form input[type="text"]:focus,
        .note-form input[type="file"]:focus {
            border-color: #007bff; /* Blue border on focus */
            outline: none;
        }

        .note-form button {
            width: 100%;
            padding: 12px;
            background-color: #007bff; /* Button color */
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .note-form button:hover {
            background-color: #0056b3; /* Darker shade on hover */
        }

        .note-form button:active {
            background-color: #004085; /* Even darker shade when clicked */
        }


    </style>
</head>
<body>
    <h1 class="text-center text-danger m-5">Employee Information <span style="color:pink;background-color:black;"><?= htmlspecialchars($employee['full_name']) ?></span></h1>
    <div class="container">

        <!-- First Row with 4 Columns -->
        <div class="row">
            <!-- Column 1: Images -->
            <div class="col-md-3">
                <div class="image-container">
                <div class="image-wrapper">
                        <p>Passport Photo</p>
                        <?php 
                        $passportPhotoUrl = '/form/' . htmlspecialchars($employee['passport_photo']);
                        ?>
                        <img src="<?= $passportPhotoUrl; ?>" alt="Passport Photo" />
                    </div>

                    <!-- Resume -->
                    <div class="image-wrapper">
                        <p>Resume</p>
                        <?php 
                        $resumeUrl = '/form/' . htmlspecialchars($employee['resume']);
                        ?>
                        <img src="<?= $resumeUrl; ?>" alt="Resume" />
                    </div>

                    <!-- PAN Card -->
                    <div class="image-wrapper">
                        <p>PAN Card</p>
                        <?php 
                        $panPhotoUrl = '/form/' . htmlspecialchars($employee['pan_photo']);
                        ?>
                        <img src="<?= $panPhotoUrl; ?>" alt="PAN Card" />
                    </div>

                    <!-- Aadhar Card -->
                    <div class="image-wrapper">
                        <p>Aadhar Card</p>
                        <?php 
                        $aadharPhotoUrl = '/form/' . htmlspecialchars($employee['aadhar_photo']);
                        ?>
                        <img src="<?= $aadharPhotoUrl; ?>" alt="Aadhar Card" />
                    </div>
                </div>
            </div>

            <!-- Column 2: Employee Information -->
            <div class="col-md-3">
                <!-- <h3 class="text-danger">Employee Information</h3> -->
                <p><strong>First Name:</strong> <?= htmlspecialchars($employee['salutation']) . ' ' . htmlspecialchars($employee['first_name']); ?></p>
                <p><strong>Last Name:</strong> <?= htmlspecialchars($employee['last_name']); ?></p>
                <p><strong>Father Name:</strong> <?= htmlspecialchars($employee['father_name']); ?></p>
                <p><strong>Date of Birth:</strong> <?= htmlspecialchars($employee['dob']); ?></p>
                <p><strong>Marital Status:</strong> <?= htmlspecialchars($employee['material_status']); ?></p>
                <p><strong>Blood Group:</strong> <?= htmlspecialchars($employee['b_group']); ?></p>
                <p><strong>Mobile Number:</strong> <?= htmlspecialchars($employee['mobile_number']); ?></p>
                <p><strong>Email:</strong> <?= htmlspecialchars($employee['email']); ?></p>
                <p><strong>Adhaar Card Number:</strong> <?= htmlspecialchars($employee['adhaar_number']); ?></p>
                <p><strong>Languages Known:</strong> <?= htmlspecialchars($employee['languages']); ?></p>
                <p><strong>Gender:</strong> <?= htmlspecialchars($employee['gender']); ?></p>
                <p><strong>Emergency Contact:</strong> <?= htmlspecialchars($employee['emergency_contact_person']); ?></p>
                <p><strong>Emergency Contact Number:</strong> <?= htmlspecialchars($employee['emergency_contact_number']); ?></p>
                <p><strong>Relationship with Person:</strong> <?= htmlspecialchars($employee['emergency_contact_relation']); ?></p>
                <p><strong>Name of the Emergency Contact 2 :</strong> <?= htmlspecialchars($employee['emergency_contact_person2']); ?></p>
                <p><strong>Emergency Contact Number 2 :</strong> <?= htmlspecialchars($employee['emergency_contact_number2']); ?></p>
                <p><strong>Relationship with Person 2 :</strong> <?= htmlspecialchars($employee['emergency_contact_relation2']); ?></p>
                <p><strong>How many members are in your family? :</strong> <?= htmlspecialchars($employee['no_family_members']); ?></p>
                <p><strong>List your family members' details :</strong> <?= htmlspecialchars($employee['list_nrao']); ?></p>
                <p><strong>List family members residing with you :</strong> <?= htmlspecialchars($employee['list_family_residing']); ?></p>

            </div>

            <!-- Column 3: Additional Information -->
            <div class="col-md-3">
                <!-- <h3 class="text-primary">Additional Information</h3> -->
                <p><strong>Present Address:</strong> <?= htmlspecialchars($employee['present_address']); ?></p>
                <p><strong>Present Address City :</strong> <?= htmlspecialchars($employee['present_address_city']); ?></p>
                <p><strong>Present Address Pincode  :</strong> <?= htmlspecialchars($employee['present_address_pincode']); ?></p>
                <p><strong>Present Address State :</strong> <?= htmlspecialchars($employee['present_address_state']); ?></p>
                <p><strong>Present Address Country :</strong> <?= htmlspecialchars($employee['present_address_country']); ?></p>
                <p><strong>Present Address Country :</strong> <?= htmlspecialchars($employee['present_address_country']); ?></p>
                <p><strong>Permanent Address :</strong> <?= htmlspecialchars($employee['permanent_address']); ?></p>
                <p><strong>Permanent City :</strong> <?= htmlspecialchars($employee['permanent_address_city']); ?></p>
                <p><strong>Permanent Pincode :</strong> <?= htmlspecialchars($employee['permanent_address_pincode']); ?></p>
                <p><strong>Permanent State :</strong> <?= htmlspecialchars($employee['permanent_address_state']); ?></p>
                <p><strong>Permanent Country :</strong> <?= htmlspecialchars($employee['permanent_address_country']); ?></p>
                <p><strong>Bank Name:</strong> <?= htmlspecialchars($employee['bank_name']); ?></p>
                <p><strong>Name as on Account:</strong> <?= htmlspecialchars($employee['name_on_account']); ?></p>
                <p><strong>Account Number:</strong> <?= htmlspecialchars($employee['bank_account_number']); ?></p>
                <p><strong>IFSC Code:</strong> <?= htmlspecialchars($employee['ifsc_code']); ?></p>
                <p><strong>Your experience:</strong> <?= htmlspecialchars($employee['work_experience']); ?></p>
                <p><strong>Company Name:</strong> <?= htmlspecialchars($employee['company_name']); ?></p>
                <p><strong>Your Designation:</strong> <?= htmlspecialchars($employee['your_designation']); ?></p>
                <p><strong>Name, Email ID, and Contact Number of Reporting Manager:</strong> <?= htmlspecialchars($employee['nec_reporting_manager']); ?></p>
                <p><strong>Start Date :</strong> <?= htmlspecialchars($employee['working_start_date']); ?></p>
                <p><strong>Tentative End Date :</strong> <?= htmlspecialchars($employee['working_end_date']); ?></p>
                <p><strong>Reason for Leaving :</strong> <?= htmlspecialchars($employee['reason_for_leaving']); ?></p>

            </div>

            <!-- Column 4: New Column -->
            <div class="col-md-3">
                <!-- <h3 class="text-info">New Details</h3> -->


                <p><strong>SSC (Obtained marks)</strong> <?= htmlspecialchars($employee['ssc_total_marks']); ?></p>
                <p><strong>SSC (Percentage)</strong> <?= htmlspecialchars($employee['ssc_percentage']); ?></p>
                <p><strong>SSC Completion Year</strong> <?= htmlspecialchars($employee['ssc_completion_year']); ?></p>
                <p><strong>SSC Institution Name</strong> <?= htmlspecialchars($employee['ssc_institute_name']); ?></p>
                <p><strong>HSC (Obtained marks)</strong> <?= htmlspecialchars($employee['hsc_total_marks']); ?></p>
                <p><strong>HSC (Percentage)</strong> <?= htmlspecialchars($employee['hsc_percentage']); ?></p>
                <p><strong>HSC (Percentage)</strong> <?= htmlspecialchars($employee['hsc_percentage']); ?></p>
                <p><strong>HSC Completion Year</strong> <?= htmlspecialchars($employee['hsc_completion_year']); ?></p>
                <p><strong>HSC Stream</strong> <?= htmlspecialchars($employee['hsc_stream']); ?></p>
                <p><strong>HSC Institution Name</strong> <?= htmlspecialchars($employee['hsc_institue_name']); ?></p>
                <p><strong>Graduation (Obtained marks)</strong> <?= htmlspecialchars($employee['graduation_total_marks']); ?></p>
                <p><strong>Graduation (CGPA)</strong> <?= htmlspecialchars($employee['graduation_percentage']); ?></p>
                <p><strong>Graduation Completion Year</strong> <?= htmlspecialchars($employee['graduation_completion_year']); ?></p>
                <p><strong>Graduation Degree</strong> <?= htmlspecialchars($employee['graduation_degree']); ?></p>
                <p><strong>Graduation Institution Name</strong> <?= htmlspecialchars($employee['graduation_institute_name']); ?></p>
                <p><strong>Mention any certifications, if any</strong> <?= htmlspecialchars($employee['certificate']); ?></p>
                <p><strong>Which position(s) are you interested in?</strong> <?= htmlspecialchars($employee['position_skills']); ?></p>
                <p><strong>Which skills do you have?</strong> <?= htmlspecialchars($employee['items_you_know']); ?></p>
                <p><strong>Date</strong> <?= htmlspecialchars($employee['date']) . ' from ' . htmlspecialchars($employee['place'])  ?></p>
            </div>
        </div>
    </div>
    
        <div class="container">
        <div class="row">
            <div class="col-md-3">
                <p></p>
            </div>
            <div class="col-md-9 note mt-3 mb-5">
            <form action="employee_details.php?full_name=<?= urlencode($employee['full_name']) ?>" method="POST" enctype="multipart/form-data" class="note-form" style="text-align:center; max-width:600px; margin:auto;">
                <div class="form-group mb-3">
                    <label for="note">Write A Note:</label>
                    <input type="text" name="note" id="note" placeholder="Enter your note" required class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label for="batch">Upload Batch File (Image, PDF, Excel, etc.):</label>
                    <input type="file" name="batch" id="batch" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>




            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
