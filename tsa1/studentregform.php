<?php
function safe_input($value) {
}

$last_name = '';
$first_name = '';
$middle_name = '';
$suffix = '';
$gender = '';
$gender_other = '';
$birth_year = '';
$birth_month = '';
$birth_day = '';
$birth_place = '';
$mother_tongue = '';
$mother_tongue_other = '';
$email = '';
$phone = '';

$preschool_name = '';
$preschool_year = '';
$elementary_name = '';
$elementary_year = '';
$junior_name = '';
$junior_year = '';
$senior_name = '';
$senior_strand = '';
$senior_year = '';
$college_name = '';
$college_course = '';
$college_year = '';

$formatted_name = '';
$formatted_gender = '';
$formatted_mother_tongue = '';
$formatted_dob = '';
$formatted_phone = '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f6ff;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 840px;
            margin: 32px auto;
            background: #fff;
            padding: 28px 32px;
            border-radius: 10px;
            box-shadow: 0 0 18px rgba(0,0,0,0.08);
        }
        h1 {
            text-align: center;
            margin-bottom: 24px;
            color: #1a1a1a;
        }
        .section {
            margin-bottom: 24px;
        }
        .section h2 {
            margin-bottom: 14px;
            font-size: 20px;
            border-bottom: 1px solid #d8d8d8;
            padding-bottom: 8px;
        }
        .field-group {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 18px;
        }
        .field {
            display: flex;
            flex-direction: column;
        }
        .field.full-width {
            grid-column: 1 / -1;
        }
        label {
            margin-bottom: 6px;
            font-weight: 600;
            color: #333;
        }
        input[type="text"],
        input[type="email"],
        select,
        textarea {
            padding: 10px 12px;
            border: 1px solid #c5c5c5;
            border-radius: 6px;
            outline: none;
            font-size: 14px;
        }
        textarea {
            resize: vertical;
        }
        .inline-fields {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 16px;
        }
        .radio-group,
        .checkbox-group {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }
        .option {
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 500;
        }
        button {
            background: #2563eb;
            color: #fff;
            border: none;
            padding: 13px 22px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.2s ease;
        }
        button:hover {
            background: #1d4ed8;
        }
        .alert {
            background: #ffe8e8;
            color: #991b1b;
            border: 1px solid #f5c2c7;
            padding: 14px 16px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .output {
            border: 1px solid #d1d5db;
            background: #f8fafc;
            padding: 18px;
            border-radius: 8px;
            margin-top: 24px;
        }
        .output p {
            margin: 8px 0;
            line-height: 1.5;
        }
    </style>
    <script>
        function toggleOther(fieldPrefix, selectedValue) {
            const otherField = document.getElementById(fieldPrefix + '_other_container');
            if (selectedValue === 'others' || selectedValue === 'other') {
                otherField.style.display = 'block';
            } else {
                otherField.style.display = 'none';
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Student Registration Form</h1>
        <form action="" method="post">
            <div class="section">
                <h2>Personal Information</h2>
                <div class="field-group">
                    <div class="field">
                        <label for="last_name">Last Name</label>
                        <input type="text" id="last_name" name="last_name" value="<?php echo $last_name; ?>" required>
                    </div>
                    <div class="field">
                        <label for="first_name">First Name</label>
                        <input type="text" id="first_name" name="first_name" value="<?php echo $first_name; ?>" required>
                    </div>
                    <div class="field">
                        <label for="middle_name">Middle Name</label>
                        <input type="text" id="middle_name" name="middle_name" value="<?php echo $middle_name; ?>" required>
                    </div>
                    <div class="field">
                        <label for="suffix">Suffix</label>
                        <input type="text" id="suffix" name="suffix" value="<?php echo $suffix; ?>">
                    </div>
                    <div class="field full-width">
                        <label>Gender</label>
                        <div class="radio-group">
                            <label class="option"><input type="radio" name="gender" value="male" <?php echo $gender === 'male' ? 'checked' : ''; ?> onchange="toggleOther('gender', this.value)" required> Male</label>
                            <label class="option"><input type="radio" name="gender" value="female" <?php echo $gender === 'female' ? 'checked' : ''; ?> onchange="toggleOther('gender', this.value)"> Female</label>
                            <label class="option"><input type="radio" name="gender" value="others" <?php echo $gender === 'others' ? 'checked' : ''; ?> onchange="toggleOther('gender', this.value)"> Others</label>
                        </div>
                    </div>
                    <div class="field full-width" id="gender_other_container" style="display: <?php echo $gender === 'others' ? 'block' : 'none'; ?>;">
                        <label for="gender_other">Please specify if Others</label>
                        <input type="text" id="gender_other" name="gender_other" value="<?php echo $gender_other; ?>">
                    </div>
                    <div class="field full-width">
                        <label>Date of Birth</label>
                        <div class="inline-fields">
                            <div class="field">
                                <select name="birth_year" required>
                                    <option value="">Year</option>
                                    <?php for ($y = 1980; $y <= date('Y'); $y++): ?>
                                        <option value="<?php echo $y; ?>" <?php echo $birth_year == $y ? 'selected' : ''; ?>><?php echo $y; ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                            <div class="field">
                                <select name="birth_month" required>
                                    <option value="">Month</option>
                                    <?php
                                    $months = [
                                        '01' => 'January', '02' => 'February', '03' => 'March', '04' => 'April',
                                        '05' => 'May', '06' => 'June', '07' => 'July', '08' => 'August',
                                        '09' => 'September', '10' => 'October', '11' => 'November', '12' => 'December'
                                    ];
                                    foreach ($months as $num => $name): ?>
                                        <option value="<?php echo $num; ?>" <?php echo $birth_month == $num ? 'selected' : ''; ?>><?php echo $name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="field">
                                <select name="birth_day" required>
                                    <option value="">Day</option>
                                    <?php for ($d = 1; $d <= 31; $d++): ?>
                                        <option value="<?php echo $d; ?>" <?php echo $birth_day == $d ? 'selected' : ''; ?>><?php echo $d; ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="field full-width">
                        <label for="birth_place">Place of Birth</label>
                        <input type="text" id="birth_place" name="birth_place" value="<?php echo $birth_place; ?>" required>
                    </div>
                    <div class="field full-width">
                        <label>Mother Tongue</label>
                        <div class="checkbox-group">
                            <label class="option"><input type="checkbox" name="mother_tongue[]" value="English" <?php echo in_array('English', (array)$mother_tongue) ? 'checked' : ''; ?> onchange="toggleOther('mother_tongue', this.checked && this.value === 'others')"> English</label>
                            <label class="option"><input type="checkbox" name="mother_tongue[]" value="Filipino" <?php echo in_array('Filipino', (array)$mother_tongue) ? 'checked' : ''; ?> onchange="toggleOther('mother_tongue', this.checked && this.value === 'others')"> Filipino</label>
                            <label class="option"><input type="checkbox" name="mother_tongue[]" value="others" <?php echo in_array('others', (array)$mother_tongue) ? 'checked' : ''; ?> onchange="toggleOther('mother_tongue', this.checked)"> Others</label>
                        </div>
                    </div>
                    <div class="field full-width" id="mother_tongue_other_container" style="display: <?php echo $mother_tongue === 'others' ? 'block' : 'none'; ?>;">
                        <label for="mother_tongue_other">Please specify if Others</label>
                        <input type="text" id="mother_tongue_other" name="mother_tongue_other" value="<?php echo $mother_tongue_other; ?>">
                    </div>
                    <div class="field">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>
                    </div>
                    <div class="field">
                        <label for="phone">Phone Number</label>
                        <input type="text" id="phone" name="phone" value="<?php echo $phone; ?>" required>
                    </div>
                </div>
            </div>

            <div class="section">
                <h2>Educational Background</h2>
                <div class="field-group">
                    <div class="field full-width">
                        <label for="preschool_name">Pre-school Name</label>
                        <input type="text" id="preschool_name" name="preschool_name" value="<?php echo $preschool_name; ?>" required>
                    </div>
                    <div class="field full-width">
                        <label for="preschool_year">Year Graduated</label>
                        <input type="text" id="preschool_year" name="preschool_year" value="<?php echo $preschool_year; ?>" required>
                    </div>
                    <div class="field full-width">
                        <label for="elementary_name">Elementary School Name</label>
                        <input type="text" id="elementary_name" name="elementary_name" value="<?php echo $elementary_name; ?>" required>
                    </div>
                    <div class="field full-width">
                        <label for="elementary_year">Year Graduated</label>
                        <input type="text" id="elementary_year" name="elementary_year" value="<?php echo $elementary_year; ?>" required>
                    </div>
                    <div class="field full-width">
                        <label for="junior_name">Junior Highschool Name</label>
                        <input type="text" id="junior_name" name="junior_name" value="<?php echo $junior_name; ?>" required>
                    </div>
                    <div class="field full-width">
                        <label for="junior_year">Year Graduated</label>
                        <input type="text" id="junior_year" name="junior_year" value="<?php echo $junior_year; ?>" required>
                    </div>
                    <div class="field full-width">
                        <label for="senior_name">Senior Highschool Name</label>
                        <input type="text" id="senior_name" name="senior_name" value="<?php echo $senior_name; ?>" required>
                    </div>
                    <div class="field">
                        <label for="senior_strand">Senior Highschool Strand</label>
                        <input type="text" id="senior_strand" name="senior_strand" value="<?php echo $senior_strand; ?>" required>
                    </div>
                    <div class="field">
                        <label for="senior_year">Year Graduated</label>
                        <input type="text" id="senior_year" name="senior_year" value="<?php echo $senior_year; ?>" required>
                    </div>
                    <div class="field full-width">
                        <label for="college_name">College Name</label>
                        <input type="text" id="college_name" name="college_name" value="<?php echo $college_name; ?>" required>
                    </div>
                    <div class="field">
                        <label for="college_course">College Course</label>
                        <input type="text" id="college_course" name="college_course" value="<?php echo $college_course; ?>" required>
                    </div>
                    <div class="field">
                        <label for="college_year">Year Graduated</label>
                        <input type="text" id="college_year" name="college_year" value="<?php echo $college_year; ?>" required>
                    </div>
                </div>
            </div>

            <div style="text-align: center; margin-top: 20px;">
                <button type="submit">Submit Registration</button>
            </div>
        </form>
    </div>
</body>
</html>