<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link style="background-color: black;" href="img/logo.png" rel="icon">
<title>Employee Application Form - Ajay Infotech</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=keyboard_arrow_down" />
<style>
/* Basic styling */
body {
font-family: Arial, sans-serif;
background-color: #f4f4f9;
display: flex;
justify-content: center;
padding: 20px;
}
.form-container {
width: 100%;
max-width: 800px;
background-color: #ffffff;
padding: 20px;
box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
border-radius: 8px;
}
h1, h2, p {
color: #333;
}
.form-section {
margin-bottom: 20px;
padding: 15px;
border-top: 1px solid #e0e0e0;
}
.form-group {
margin-bottom: 15px;
}
.form-group label {
font-weight: bold;
margin-bottom: 5px;
display: block;
}
.form-group input,
.form-group select,
.form-group textarea {
width: 100%;
padding: 8px;
font-size: 16px;
border: 1px solid #ddd;
border-radius: 4px;
}
.form-group input[type="radio"],
.form-group input[type="checkbox"] {
width: auto;
}
.submit-button {
background-color: #4285F4;
color: white;
padding: 12px;
font-size: 18px;
border: none;
border-radius: 4px;
cursor: pointer;
width: 100%;
}

/* img {
    width: 100%;
    max-width: 400px;
    height: auto;
} */

.form-section img {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 100%;
    max-width: 400px;
    height: auto;
}

        /* Style for the custom dropdown */
        .custom-dropdown {
            position: relative;
            display: inline-block;
            width: 100%;
        }
        .select-box {
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 10px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .select-box:focus {
            outline: none;
        }
        .select-arrow {
            margin-left: 10px;
            font-size: 12px;
            transition: transform 0.3s;
        }
        .options-container {
            display: none;
            position: absolute;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 4px;
            max-height: 200px;
            overflow-y: auto;
            z-index: 1000;
            width: 100%;
        }
        .options-container.active {
            display: block;
        }
        .options-container.active + .select-box .select-arrow {
            transform: rotate(180deg);
        }
        .option-item {
            padding: 8px;
            cursor: pointer;
            display: flex;
            align-items: center;
        }
        .option-item:hover {
            background-color: #f1f1f1;
        }
        .option-item input {
            margin-right: 10px;
        }

        /* button styling start */
        .btn {
            background-color: #06A3DA; /* Default blue background */
            border-color: #06A3DA; 
            padding-top: 1rem !important;
            padding-bottom: 1rem !important;
            display: inline-block;
            font-weight: 600;
            line-height: 1.5;
            color: #fff;
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
            user-select: none;
            /* background-color: transparent; */
            border: 1px solid transparent;
            padding: .375rem .75rem;
            font-size: 1rem;
            border-radius: 2px;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .emergency-contact-section {
    margin-bottom: 20px;
}

.emergency-contact-row {
    display: flex;
    gap: 20px; /* Space between the two inputs */
    align-items: flex-start;
}

.emergency-contact-group {
    flex: 1;
    display: flex;
    flex-direction: column;
}

.emergency-contact-group label {
    margin-bottom: 5px;
    font-weight: bold;
}

.emergency-contact-group input {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 100%;
    box-sizing: border-box;
}

.emergency-contact-group-full {
    margin-top: 20px;
}

.emergency-contact-group-full label {
    margin-bottom: 5px;
    font-weight: bold;
}

.emergency-contact-group-full input {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 100%;
    box-sizing: border-box;
}

/* Optional: Media query for responsiveness */
@media (max-width: 768px) {
    .emergency-contact-row {
        flex-direction: column;
    }
}

.three-row-section {
    margin-bottom: 20px;
}

.three-row-row {
    display: flex;
    gap: 20px; /* Space between the two inputs */
    align-items: flex-start;
}

.three-row-group {
    flex: 1;
    display: flex;
    flex-direction: column;
}

.three-row-group label {
    margin-bottom: 5px;
    font-weight: bold;
}

.three-row-group input {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 100%;
    box-sizing: border-box;
}

.three-row-group-full {
    margin-top: 20px;
}

.three-row-group-full label {
    margin-bottom: 5px;
    font-weight: bold;
}

.three-row-group-full input {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 100%;
    box-sizing: border-box;
}

@media (max-width: 768px) {
    .three-row-row {
        flex-direction: column;
    }
}
</style>
</head>
<body>
    


<form action="./store_data.php" method="post" enctype="multipart/form-data">
<div class="form-container">
    <div class="form-section">
        <img src=".img/Vector.png" alt="">
    </div>
<h1>Employee Application Form</h1>
<p>Please fill the Employee Application Form for Ajay Infotech.</p>
<p>This form is automatically collecting emails from all respondents.</p>
<p>The form contains 13 sections & it shall take 30-45 minutes to fill it completely. Make sure that you have stable internet connection & that you fill this form without being disturbed.</p>
<p>In case of fields that are not applicable to you, please mention 'NA'. Where dates are not applicable to you, please select date as – 01/01/2001.</p>
<p>Please make sure that all responses are correct. Once you submit the form, you will not be able to edit the same.
</p>
<p>All information provided here will be treated with utmost confidentiality. Please give your responses with complete honesty.
</p>
<p>Should you have any queries/clarifications, please call the HR representative.</p>






<!-- Section 1: Basic Personal Details -->
<div class="form-section">
<h2>Section 1 : Basic Personal Details</h2>
<div class="form-group">
<label>Salutation *</label>
<input type="radio" name="salutation" value="Mr."> Mr.
<input type="radio" name="salutation" value="Ms."> Ms.
<input type="radio" name="salutation" value="Mrs."> Mrs.
</div>
<div class="form-group">
    <div class="three-row-section">
        <div class="three-row-row">
            <div class="three-row-group">
                <label>First Name *</label>
                <input type="text" name="first_name" required>
            </div>
            <div class="three-row-group">
                <label>Last Name *</label>
                <input type="text" name="last_name" required>
            </div>
            <div class="three-row-group">
                <label>Father's Name *</label>
                <input type="text" name="father_name" required>
            </div>
        </div>
    </div>

</div>

</div>

<!-- Section 2: Personal Details -->
<div class="form-section">
<h2>Section 2 : Personal Details</h2>
<div class="form-group">
    <div class="emergency-contact-section">
        <div class="emergency-contact-row">
            <div class="emergency-contact-group">
                <label>Date of Birth *</label>
                <input type="date" name="dob" required>
            </div>
            <div class="emergency-contact-group">
                <label>Marital Status</label>
                <select name="material_status" required>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                </select>
            </div>
            <div class="emergency-contact-group">
                <label>Blood Group *</label>
                    <select name="b_group" required>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="Not known">Not known</option>
                    </select>
            </div>
        </div>
    </div>

</div>
<div class="form-group">
    <div class="emergency-contact-section">
        <div class="emergency-contact-row">
            <div class="emergency-contact-group">
                <label>Mobile Number *</label>
                <input type="tel" name="mobile_number" required>
            </div>
            <div class="emergency-contact-group">
                    <label>Email ID *</label>
                    <input type="email" name="email" required>
            </div>
        </div>
    </div>
</div>



<div class="form-group">
    <div class="emergency-contact-section">
        <div class="emergency-contact-row">
            <div class="emergency-contact-group">
                <label>Adhaar Card Number *</label>
                <input type="text" name="adhaar_number" required>
            </div>
            <div class="emergency-contact-group">
                <label>Languages Known</label>
                <input type="text" name="languages" required>
            </div>
        </div>
    </div>
</div>

<div class="form-group">
<label>Gender *</label>
<input type="radio" name="gender" value="Male"> Male
<input type="radio" name="gender" value="Female"> Female
<input type="radio" name="gender" value="Other"> Other
</div>





</div>


<!-- section 3: Emergency Contact -->
 <div class="form-section">
<div class="emergency-contact-section">
    <h2>Section 3: Emergency Contact 1</h2>
    <div class="emergency-contact-row">
        <div class="emergency-contact-group">
            <label>Name of the Emergency Contact</label>
            <input type="text" name="emergency_contact_person" required>
        </div>
        <div class="emergency-contact-group">
            <label>Emergency Contact Number</label>
            <input type="text" name="emergency_contact_number" required>
        </div>
    </div>
    <div class="emergency-contact-group-full">
        <label>Relationship with Person</label>
        <input type="text" name="emergency_contact_relation" required>
    </div>
</div>
</div>



<!-- Section 4: Emergency Contact 2 -->
<div class="form-section">


<div class="emergency-contact-section">
    <h2>Section 4: Emergency Contact 2</h2>
    <div class="emergency-contact-row">
        <div class="emergency-contact-group">
            <label>Name of the Emergency Contact</label>
            <input type="text" name="emergency_contact_person2" required>
        </div>
        <div class="emergency-contact-group">
            <label>Emergency Contact Number</label>
            <input type="text" name="emergency_contact_number2" required>
        </div>
    </div>
    <div class="emergency-contact-group-full">
        <label>Relationship with Person</label>
        <input type="text" name="emergency_contact_relation2" required>
    </div>
</div>

</div>




<!-- Section 3: Documents -->
<div class="form-section">
<h2>Section 3 : Documents</h2>
<p>Upload the below mentioned documents</p>
<div class="form-group">
<label>Scanned Passport Size Photograph (Formal Attire) *</label>
<input type="file" name="passport_photo" required>
</div>
<div class="form-group">
<label>Your Recent Resume *</label>
<input type="file" name="resume" required>
</div>
<div class="form-group">
<label>PAN Card *</label>
<input type="file" name="pan_photo" required>
</div>
<div class="form-group">
<label>Aadhar Card (Front and Back) *</label>
<input type="file" name="aadhar_photo" required>
</div>
</div>

<!-- Section 4: Addresses -->
<div class="form-section">
<h2>Section 4 : Addresses</h2>
<p>Provide your present address and permanent details.</p>
<div class="form-group">
<label>Present Address Line 1 *</label>
<input type="text" name="present_address" required>
</div>

<div class="form-group">
<div class="emergency-contact-row">
    <div class="emergency-contact-group">
        <label>Present Address City *</label>
        <input type="text" name="present_address_city" required>
    </div>
    <div class="emergency-contact-group">
        <label>Present Address Pincode *</label>
        <input type="text" name="present_address_pincode" required>
    </div>
</div>  
</div>


<div class="form-group">
<div class="emergency-contact-row">
    <div class="emergency-contact-group">
        <label>Present Address State *</label>
        <input type="text" name="present_address_state" required>
    </div>
    <div class="emergency-contact-group">
        <label>Present Address Country *</label>
        <input type="text" name="present_address_country" required>
    </div>
</div>
</div>
</div>



<div class="form-section">

    <div class="form-group">
        <label>Permanent Address Line 1 *</label>
        <input type="text" name="permanent_address" required>
    </div>
<div class="form-group">
    <div class="emergency-contact-row">
        <div class="emergency-contact-group">
            <label>Permanent Address City *</label>
            <input type="text" name="permanent_address_city" required>
        </div>
        <div class="emergency-contact-group">
            <label>Permanent Address Pincode *</label>
            <input type="text" name="permanent_address_pincode" required>
        </div> 
    </div>
</div>
<div class="form-group">
    <div class="emergency-contact-row">
        <div class="emergency-contact-group">
            <label>Permanent Address State *</label>
            <input type="text" name="permanent_address_state" required>
        </div>
        <div class="emergency-contact-group">
            <label>Permanent Address Country *</label>
            <input type="text" name="permanent_address_country" required>
        </div>
    </div>
</div>
</div>

<!-- Section 5: Bank Account Details -->
<div class="form-section">
<h2>Section 5 : Bank Account Details</h2>
<p>Please provide details of your bank account for salary transfer.</p>
<div class="form-group">
<label>Bank Name *</label>
<input type="text" name="bank_name" required>
</div>
<div class="form-group">
<label>Name as on Account *</label>
<input type="text" name="name_on_account" required>
</div>
<div class="form-group">
    <div class="emergency-contact-row">
        <div class="emergency-contact-group">
            <label>Bank Account Number *</label>
            <input type="text" name="bank_account_number" required>
        </div>
        <div class="emergency-contact-group">
            <label>IFSC Code of the Branch *</label>
            <input type="text" name="ifsc_code" required>
        </div>
    </div>

</div>
</div>

<!-- Section 6: Family Details -->
<div class="form-section">
<h2>Section 6 : Family Details</h2>
<p>Please provide details of your family members.</p>
<div class="form-group">
<label>How many members are in your family? *</label>
<input type="number" name="no_family_members" required>
</div>
<div class="form-group">
<label>List your family members' details (Name, Relation, Age, Occupation)</label>
<textarea name="list_nrao" placeholder="e.g., 1. Ram-Brother-22-Student" required></textarea>
</div>
<div class="form-group">
<label>List family members residing with you</label>
<textarea name="list_family_residing" required></textarea>
</div>
</div>

<!-- Section 7: Education Details -->
<div class="form-section">
<h2>Section 7 : Education Details</h2>
<p>Please provide your educational background, starting with the most recent.</p>
<!-- SSC Details -->
<h3>SSC Details</h3>
<div class="form-group">
    <div class="three-row-section">
        <div class="three-row-row">
            <div class="three-row-group">
                <label>SSC (Obtained marks) *</label>
                <input type="text" name="ssc_total_marks" required>
            </div>
            <div class="three-row-group">
                <label>SSC (Percentage) *</label>
                <input type="number" step="0.01" name="ssc_percentage" required>  
            </div>
            <div class="three-row-group">
                <label>SSC Completion Year *</label>
                <input type="number" name="ssc_completion_year" required>
            </div>
        </div>
    </div>
</div>


<div class="form-group">
<label>SSC Institution Name *</label>
<input type="text" name="ssc_institute_name" required>
</div>
</div>
<!-- HSC Details -->
<div class="form-section">
<h3>HSC Details</h3>
<div class="form-group">
    <div class="three-row-section">
        <div class="three-row-row">
            <div class="three-row-group">
                <label>HSC (Obtained marks) *</label>
                <input type="text" name="hsc_total_marks" required>
            </div>
            <div class="three-row-group">
                <label>HSC (Percentage) *</label>
                <input type="number" step="0.01" name="hsc_percentage" required>
            </div>
            <div class="three-row-group">
                <label>HSC Completion Year *</label>
                <input type="number" name="hsc_completion_year" required>
            </div>
        </div>
    </div>
</div>
<div class="form-group">

</div>
<div class="form-group">
<label>HSC Stream *</label>
<select name="hsc_stream" required>
<option value="Science">Science</option>
<option value="Commerce">Commerce</option>
<option value="Arts">Arts</option>
</select>
</div>
<div class="form-group">
<label>Mention your Bi-Focal subjects *</label>
<input type="text" name="bio_foc_subject" required>
</div>
<div class="form-group">
</div>
<div class="form-group">
<label>HSC Institution Name *</label>
<input type="text" name="hsc_institue_name" required>
</div>
</div>
<!-- Graduation Details -->
 <div class="form-section">
<h3>Graduation Details</h3>
<div class="form-group">
    <div class="three-invoice-section">
        <div class="three-row-row">
            <div class="three-row-group">
                <label>Graduation (Obtained marks) *</label>
                <input type="text" name="graduation_total_marks" required>
            </div>
            <div class="three-row-group">
                <label>Graduation (CGPA) *</label>
                <input type="number" step="0.01" name="graduation_percentage" required>
            </div>
            <div class="three-row-group">
                <label>Graduation Completion Year *</label>
                <input type="number" name="graduation_completion_year" required>
            </div>
        </div>
    </div>
</div>

<div class="form-group">
<label>Graduation Degree *</label>
<input type="text" name="graduation_degree" required>
</div>
<div class="form-group">
<label>Graduation Institution Name *</label>
<input type="text" name="graduation_institute_name" required>
</div>
<!-- Certifications -->
<div class="form-group">
<label>Mention any certifications, if any *</label>
<input type="text" name="certificate">
</div>
</div>

<!-- Section 8: Work Experience Details -->
<div class="form-section">
<h2>Section 8 : Work Experience Details</h2>
<p>Provide details of your work experience starting with the most recent.</p>
<div class="form-group">
<label>Your experience *</label>
<select name="work_experience">
<option value="Fresher">Fresher</option>
<option value="1-2 years">1-2 years</option>
<option value="2-3 years">2-3 years</option>
</select>
</div>
<!-- Employment Details for Company 1 -->
<h3>Company 1</h3>
<div class="form-group">
<label>Company Name *</label>
<input type="text" name="company_name" required>
</div>
<div class="form-group">
<label>Your Designation *</label>
<input type="text" name="your_designation" required>
</div>
<div class="form-group">
<label>Name, Email ID, and Contact Number of Reporting Manager *</label>
<input type="text" name="nec_reporting_manager" required>
</div>
<div class="form-group">
    <div class="emergency-contact-section">
        <div class="emergency-contact-row">
            <div class="emergency-contact-group">
                <label>Start Date *</label>
                <input type="date" name="working_start_date" required>
            </div>
            <div class="emergency-contact-group">
                <label>Tentative End Date *</label>
                <input type="date" name="working_end_date" required>
            </div>
        </div>
    </div>
</div>
<div class="form-group">
<label>Reason for Leaving *</label>
<textarea name="reason_for_leaving" required></textarea>
</div>
</div>

<!-- Section 9: Skills -->
<div class="form-section">
    <h2>Section 9 : Skills</h2>
    <p>Select your skills and preferred job positions.</p>

<!-- Custom Multi-Select Dropdown for Job Positions -->
<div class="form-group">
    <label>Which position(s) are you interested in? *</label>
    <div class="custom-dropdown" id="positionDropdown">
        <div class="select-box" onclick="toggleDropdown('positionDropdown')">
            <span id="positionSelected">Select Positions Which Your Intrested In</span>
            <span class="select-arrow"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#434343"><path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/></svg></span> <!-- Dropdown arrow -->
        </div>
        <div class="options-container">
            <div class="option-item">
                <input type="checkbox" value="Support Executive" name="position_skills[]" onchange="updateSelected('positionSelected', 'positionDropdown')"> Support Executive
            </div>
            <div class="option-item">
                <input type="checkbox" value="Sales Executive" name="position_skills[]" onchange="updateSelected('positionSelected', 'positionDropdown')"> Sales Executive
            </div>
            <div class="option-item">
                <input type="checkbox" value="Tele-Communication Executive" name="position_skills[]" onchange="updateSelected('positionSelected', 'positionDropdown')"> Tele-Communication Executive
            </div>
            <div class="option-item">
                <input type="checkbox" value="Frontend Web Developer" name="position_skills[]" onchange="updateSelected('positionSelected', 'positionDropdown')"> Frontend Web Developer
            </div>
            <div class="option-item">
                <input type="checkbox" value="Backend Web Developer" name="position_skills[]" onchange="updateSelected('positionSelected', 'positionDropdown')"> Backend Web Developer
            </div>
            <div class="option-item">
                <input type="checkbox" value="TDL Developer" name="position_skills[]" onchange="updateSelected('positionSelected', 'positionDropdown')"> TDL Developer
            </div>
            <div class="option-item">
                <input type="checkbox" value="Graphic Designer" name="position_skills[]" onchange="updateSelected('positionSelected', 'positionDropdown')"> Graphic Designer
            </div>
            <div class="option-item">
                <input type="checkbox" value="Digital Marketing Executive" name="position_skills[]" onchange="updateSelected('positionSelected', 'positionDropdown')"> Digital Marketing Executive
            </div>
            <div class="option-item">
                <input type="checkbox" value="Other" name="position_skills[]" onchange="updateSelected('positionSelected', 'positionDropdown')"> Other
            </div>
        </div>
    </div>
</div>


<!-- Custom Multi-Select Dropdown for Skills -->
<div class="form-group">
    <label>Which skills do you have? *</label>
    <div class="custom-dropdown" id="skillsDropdown">
        <div class="select-box" onclick="toggleDropdown('skillsDropdown')">
            <span id="skillsSelected">Select Skills Which Do You Know</span>
            <span class="select-arrow"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#434343"><path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/></svg></span> <!-- Dropdown arrow -->
        </div>
        <div class="options-container">
            <div class="option-item">
                <input type="checkbox" value="Tally ERP 9" name="items_you_know[]" onchange="updateSelected('skillsSelected', 'skillsDropdown')"> Tally ERP 9
            </div>
            <div class="option-item">
                <input type="checkbox" value="Tally Prime" name="position_skills[]" onchange="updateSelected('skillsSelected', 'skillsDropdown')"> Tally Prime
            </div>
            <div class="option-item">
                <input type="checkbox" value="HTML, CSS, JS" name="items_you_know[]" onchange="updateSelected('skillsSelected', 'skillsDropdown')"> HTML, CSS, JS
            </div>
            <div class="option-item">
                <input type="checkbox" value="Java" name="items_you_know[]" onchange="updateSelected('skillsSelected', 'skillsDropdown')"> Java
            </div>
            <div class="option-item">
                <input type="checkbox" value="Python" name="items_you_know[]" onchange="updateSelected('skillsSelected', 'skillsDropdown')"> Python
            </div>
            <div class="option-item">
                <input type="checkbox" value="PHP" name="items_you_know[]" onchange="updateSelected('skillsSelected', 'skillsDropdown')"> PHP
            </div>
            <div class="option-item">
                <input type="checkbox" value="React" name="items_you_know[]" onchange="updateSelected('skillsSelected', 'skillsDropdown')"> React
            </div>
            <div class="option-item">
                <input type="checkbox" value="MongoDB" name="items_you_know[]" onchange="updateSelected('skillsSelected', 'skillsDropdown')"> MongoDB
            </div>
            <div class="option-item">
                <input type="checkbox" value="SQL" name="items_you_know[]" onchange="updateSelected('skillsSelected', 'skillsDropdown')"> SQL
            </div>
            <div class="option-item">
                <input type="checkbox" value="Figma" name="items_you_know[]" onchange="updateSelected('skillsSelected', 'skillsDropdown')"> Figma
            </div>
        </div>
    </div>
</div>

<!-- Section 10: Declaration -->
<div class="form-section">
    <h2>Section 10 : Declaration</h2>

    <p><b>1. Place of Work : </b>The Company reserves the right to change the Employee's position or location based on operational needs or performance.</p>
<p><b>2. Term and Probation : </b>Employment begins with a two-month probationary period, during which the Company may terminate employment at any time.</p>
<p><b>3. Work Schedule : </b>Working Days: Monday to Saturday <b>/</b> Working Hours: 9:00 am to 7:00 pm</p>
<p><b>4. Compensation : </b>Salary is paid monthly (or more frequently, at the Company’s discretion) through bank transfer only.
Reasonable, pre-approved expenses incurred during employment are reimbursed upon submission of receipt</p>
<p><b>5. Conduct and Responsibilities : </b>Employees must safeguard all Company property in their possession and maintain confidentiality regarding sensitive information.
Misconduct, including theft or defrauding the Company, will result in immediate termination. <br> The Employee is responsible for assigned tasks, collaborating with teams, maintaining systems, and providing progress updates.</p>
<p><b>6. Leave and Holidays : </b>The Employee is entitled to public holidays as decided by the Company but no additional paid leave.
Any leave requires prior notice to the Company. Absence without a valid excuse for more than three consecutive days may lead to termination.</p>
<p><b>7. Confidentiality and Intellectual Property : </b>The Employee must protect confidential information, including business models, customer lists, and trade secrets.
All work produced during employment is considered "work made for hire," with full rights owned by the Company.
Upon request, the Employee must assist the Company in securing intellectual property rights.</p>
<p><b>8. Non-Compete and Non-Solicitation : </b>For six months post-employment, the Employee shall not engage with the Company's clients or in competing businesses without written consent.
For 12 months after employment ends, the Employee cannot solicit the Company’s clients or encourage other employees to leave the Company.</p>
<p><b>9. Termination Notice : </b>The Company may terminate employment without notice in cases of misconduct.
If the Employee resigns, a minimum notice of one month is required. Failure to provide notice may result in financial penalties and a lack of a favorable relieving letter.</p>
<p><b>10. Absence Due to Illness or Injury : </b>In case of illness, the Employee must inform their reporting lead and submit medical certification if absent for more than three days.</p>

    <p>I hereby declare that all information provided in this form is true and accurate to the best of my knowledge. I have read and agree to all the rules and terms stated.</p>
    <div class="form-group">
        <label>Date *</label>
        <input type="date" name="date" required>
    </div>
    <div class="form-group">
        <label>Place *</label>
        <input type="text" name="place" required>
    </div>
    <div class="form-group">
        <label>Full Name *</label>
        <input type="text" name="full_name" required>
    </div>
    <div class="form-group">
        <input type="checkbox" name="agree" required> I agree to the terms and conditions.
    </div>
</div>

<!-- Submit Button -->
<div class="form-group">
    <button class="btn" type="submit">Submit Application</button>
</div>

</div> <!-- End of form-container -->

</form> <!-- Closing form tag if this is within a form element -->


<script>
    // Function to toggle dropdown
    function toggleDropdown(id) {
        const dropdown = document.querySelector(`#${id} .options-container`);
        dropdown.classList.toggle('active');
    }

    // Function to update selected items
    function updateSelected(displayId, dropdownId) {
        const checkboxes = document.querySelectorAll(`#${dropdownId} .option-item input:checked`);
        const selectedValues = Array.from(checkboxes).map(checkbox => checkbox.value);
        document.getElementById(displayId).innerText = selectedValues.join(', ') || 'Select Options';
    }

    // Close dropdown when clicking outside
    document.addEventListener('click', function (event) {
        if (!event.target.closest('.custom-dropdown')) {
            document.querySelectorAll('.options-container').forEach(container => container.classList.remove('active'));
        }
    });
</script>
