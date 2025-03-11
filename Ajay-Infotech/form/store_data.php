<?php
require_once './config.php'; // Ensure the config file is included for the database connection

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    // Define the base directory where all uploads will be stored
    $uploadDir = 'uploads/';
    
    // Get the user's full name from the form input
    $fullName = htmlspecialchars($_POST['full_name'] ?? '');

    // Sanitize the full name to create a valid folder name
    $sanitizedFullName = preg_replace('/[^a-zA-Z0-9_-]/', '_', $fullName); // Replace special characters with underscores

    // Generate a unique folder name using the sanitized full name
    $userFolder = $uploadDir . $sanitizedFullName . '_' . uniqid() . '/';

    // Create the user-specific folder if it does not exist
    if (!is_dir($userFolder)) {
        mkdir($userFolder, 0777, true); // Create directory with full permissions
    }

    // Function to handle file uploads with validation
    function uploadFile($fileKey, $destinationDir) {
        if (isset($_FILES[$fileKey]) && $_FILES[$fileKey]['error'] === UPLOAD_ERR_OK) {
            $allowedTypes = ['image/jpeg', 'image/png', 'application/pdf']; // Allowed file types
            $fileType = mime_content_type($_FILES[$fileKey]['tmp_name']);
            
            // Validate file type
            if (!in_array($fileType, $allowedTypes)) {
                return null; // Invalid file type
            }

            $filePath = $destinationDir . basename($_FILES[$fileKey]['name']);
            if (move_uploaded_file($_FILES[$fileKey]['tmp_name'], $filePath)) {
                return $filePath;
            }
        }
        return null;
    }

    // Handle file uploads
    $passportPhoto = uploadFile('passport_photo', $userFolder);
    $resume = uploadFile('resume', $userFolder);
    $panPhoto = uploadFile('pan_photo', $userFolder);
    $aadharPhoto = uploadFile('aadhar_photo', $userFolder);
    
    date_default_timezone_set('Asia/Kolkata'); // Change to your local time zone

    // Collect data from the form using an associative array
    $data = [
        'salutation' => $_POST['salutation'] ?? null,
        'first_name' => $_POST['first_name'] ?? null,
        'last_name' => $_POST['last_name'] ?? null,
        'father_name' => $_POST['father_name'] ?? null,
        'personal_detail' => $_POST['personal_detail'] ?? null,
        'dob' => $_POST['dob'] ?? null,
        'mobile_number' => $_POST['mobile_number'] ?? null,
        'email' => $_POST['email'] ?? null,
        'gender' => $_POST['gender'] ?? null,
        'b_group' => $_POST['b_group'] ?? null,
        'adhaar_number' => $_POST['adhaar_number'] ?? null,
        'emergency_contact_person' => $_POST['emergency_contact_person'] ?? null,
        'emergency_contact_number' => $_POST['emergency_contact_number'] ?? null,
        'emergency_contact_relation' => $_POST['emergency_contact_relation'] ?? null,
        'emergency_contact_person2' => $_POST['emergency_contact_person2'] ?? null,
        'emergency_contact_number2' => $_POST['emergency_contact_number2'] ?? null,
        'emergency_contact_relation2' => $_POST['emergency_contact_relation2'] ?? null,
        'languages' => $_POST['languages'] ?? null,
        'material_status' => $_POST['material_status'] ?? null,
        'passport_photo' => $passportPhoto,  // Store passport photo path
        'resume' => $resume,  // Store resume path
        'pan_photo' => $panPhoto,  // Store PAN card path
        'aadhar_photo' => $aadharPhoto,  // Store Aadhar card path
        'present_address' => $_POST['present_address'] ?? null,
        'present_address2' => $_POST['present_address2'] ?? null,
        'present_address_city' => $_POST['present_address_city'] ?? null,
        'present_address_pincode' => $_POST['present_address_pincode'] ?? null,
        'present_address_state' => $_POST['present_address_state'] ?? null,
        'present_address_country' => $_POST['present_address_country'] ?? null,
        'permanent_address' => $_POST['permanent_address'] ?? null,
        'permanent_address2' => $_POST['permanent_address2'] ?? null,
        'permanent_address_city' => $_POST['permanent_address_city'] ?? null,
        'permanent_address_pincode' => $_POST['permanent_address_pincode'] ?? null,
        'permanent_address_state' => $_POST['permanent_address_state'] ?? null,
        'permanent_address_country' => $_POST['permanent_address_country'] ?? null,
        'bank_name' => $_POST['bank_name'] ?? null,
        'name_on_account' => $_POST['name_on_account'] ?? null,
        'bank_account_number' => $_POST['bank_account_number'] ?? null,
        'ifsc_code' => $_POST['ifsc_code'] ?? null,
        'no_family_members' => $_POST['no_family_members'] ?? null,
        'list_nrao' => $_POST['list_nrao'] ?? null,
        'list_family_residing' => $_POST['list_family_residing'] ?? null,
        'ssc_details' => $_POST['ssc_details'] ?? null,
        'ssc_total_marks' => $_POST['ssc_total_marks'] ?? null,
        'ssc_percentage' => $_POST['ssc_percentage'] ?? null,
        'ssc_completion_year' => $_POST['ssc_completion_year'] ?? null,
        'ssc_institute_name' => $_POST['ssc_institute_name'] ?? null,
        'hsc_details' => $_POST['hsc_details'] ?? null,
        'hsc_total_marks' => $_POST['hsc_total_marks'] ?? null,
        'hsc_percentage' => $_POST['hsc_percentage'] ?? null,
        'hsc_stream' => $_POST['hsc_stream'] ?? null,
        'bio_foc_subject' => $_POST['bio_foc_subject'] ?? null,
        'hsc_completion_year' => $_POST['hsc_completion_year'] ?? null,
        'hsc_institue_name' => $_POST['hsc_institue_name'] ?? null,
        'graduation_details' => $_POST['graduation_details'] ?? null,
        'graduation_total_marks' => $_POST['graduation_total_marks'] ?? null,
        'graduation_percentage' => $_POST['graduation_percentage'] ?? null,
        'graduation_degree' => $_POST['graduation_degree'] ?? null,
        'graduation_completion_year' => $_POST['graduation_completion_year'] ?? null,
        'graduation_institute_name' => $_POST['graduation_institute_name'] ?? null,
        'description_certification' => $_POST['description_certification'] ?? null,
        'certificate' => $_POST['certificate'] ?? null,
        'work_experience' => $_POST['work_experience'] ?? null,
        'company_name' => $_POST['company_name'] ?? null,
        'nec_reporting_manager' => $_POST['nec_reporting_manager'] ?? null,
        'nec_hr' => $_POST['nec_hr'] ?? null,
        'working_start_date' => $_POST['working_start_date'] ?? null,
        'working_end_date' => $_POST['working_end_date'] ?? null,
        'reason_for_leaving' => $_POST['reason_for_leaving'] ?? null,
        'company_name_two' => $_POST['company_name_two'] ?? null,
        'your_designation' => $_POST['your_designation'] ?? null,
        'nec_reporting_manager2' => $_POST['nec_reporting_manager2'] ?? null,
        'working_start_date2' => $_POST['working_start_date2'] ?? null,
        'working_end_date2' => $_POST['working_end_date2'] ?? null,
        'reason_for_leaving2' => $_POST['reason_for_leaving2'] ?? null,
        'position_skills' => json_encode($_POST['position_skills'] ?? []),
        'items_you_know' => json_encode($_POST['items_you_know'] ?? []),
        'date' => $_POST['date'] ?? null,
        'place' => $_POST['place'] ?? null,
        'full_name' => $_POST['full_name'] ?? null,
        'date_now' => date('Y-m-d H:i:s')
    ];
    
    echo 'Timestamp generated: ' . $data['date_now']; // Check the generated timestamp


    // Filter out any empty values to prevent inserting null columns unnecessarily
    $data = array_filter($data, function($value) {
        return $value !== null && $value !== '';
    });

    // Create the INSERT INTO query dynamically based on the array keys
    $columns = implode(', ', array_keys($data)); // Column names
    $placeholders = implode(', ', array_fill(0, count($data), '?')); // Placeholders for the query

    $sql = "INSERT INTO emp ($columns) VALUES ($placeholders)";

    try {
        // Prepare and execute the statement
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array_values($data)); // Bind the array values to the placeholders

        // Redirect after successful form submission
        header("Location: index.php");
        exit();
    } catch (PDOException $e) {
        // Handle database errors
        echo "Database error: " . $e->getMessage();
    }
}
?>
