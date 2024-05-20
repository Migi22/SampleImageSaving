<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID Processing</title>
    <link rel="stylesheet" href="./css/index.css"> <!-- Main stylesheet -->
    <link rel="stylesheet" href="./css/signature.css"> <!-- Signature stylesheet -->

</head>
<body>

<div class="first-top-container">
    <div class="second-top-container">
        <div class="image-container"><img src="./images/jmcCover.jpg" alt=""></div> <!-- Image container -->
        <form action="process_form.php" method="post" enctype="multipart/form-data">
            <img class="jmclogoimg" src="./images/jmclogo2.png"> <!-- JMC logo -->
            <div class="finner"> <!-- Form inner -->
                <div class="hfinner"> <!-- Half inner -->
                    <label for="firstname">First name</label> <!-- First name input -->
                    <input type="text" name="firstname" required>
                    <label for="MI">MI</label> <!-- Middle initial input -->
                    <input type="text" name="MI" required>
                </div>
                <div class="hfinner"> <!-- Half inner -->
                    <label for="lastname">Last name</label> <!-- Last name input -->
                    <input type="text" name="lastname" required>
                    <div class="custome-select"> <!-- Custom select -->
                        <label for="course">Course</label> <!-- Course select -->
                        <select name="course" id="course">
                            <!-- Course options -->
                            <option value="BEEd">BEEd</option>
                            <option value="BSA">BSA</option>
                            <option value="BSMA">BSMA</option>
                            <option value="BSTM">BSTM</option>
                            <option value="BSE-CE">BSE-CE</option>
                            <option value="BSE-SE">BSE-SE</option>
                            <option value="BSCrim">BSCrim</option>
                            <option value="BSIT">BSIT</option>
                            <option value="BSEMC">BSEMC</option>
                            <option value="BSN">BSN</option>
                            <option value="BSP">BSP</option>
                            <option value="BSRT">BSRT</option>
                            <option value="BSAg">BSAg</option>
                            <option value="BSBio">BSBio</option>
                            <option value="BSPsych">BSPsych</option>
                            <option value="BSSW">BSSW</option>
                            <option value="BSEMC">BSEMC</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="secondinner"> <!-- Second inner -->
                <div class="bfinner"> <!-- Bottom half inner -->
                    <div class="custome-select"> <!-- Custom select -->
                        <label for="yearlevel">Year Level</label> <!-- Year level select -->
                        <select name="yearlevel" id="yearlevel">
                            <option value="1">1st Year</option>
                            <option value="2">2nd Year</option>
                            <option value="3">3rd Year</option>
                            <option value="4">4th Year</option>
                        </select>
                    </div>
                    <label for="student_address">Student address</label> <!-- Student address input -->
                    <input type="text" name="student_address" required>
                </div>
                <div class="bfinner"> <!-- Bottom half inner -->
                    <label for="guardian_name">Guardian's name</label> <!-- Guardian's name input -->
                    <input type="text" name="guardian_name" required>
                    <div class="guardNum"> <!-- Guardian number -->
                        <label for="guardian_contact_number">Guardian's Contact No.</label> <!-- Guardian's contact number input -->
                        <input pattern="[0-9]{11}" name="guardian_contact_number" placeholder="(0999) 9999-9999" type="tel" required>
                    </div>
                    <label for="student_Birthday">Student's Birth Date</label> <!-- Student's birth date input -->
                    <input type="date" id="birthday" name="student_Birthday">
                </div>
            </div>
            <div class="tinner"> <!-- Top inner -->
                <div class="signature-container"> <!-- Signature container -->
                    <div><img class="signatureLogo" src="./images/signatureImg.png"></div> <!-- Signature image -->
                    <input type="file" name="signatureImage" id="signatureImage"> <!-- Signature file input -->
                </div>
                <div class="submit-container"> <!-- Submit container -->
                    <input type="submit" value="Submit"> <!-- Submit button -->
                </div>
            </div>
        </form>
    </div>
</div>

<script src="script.js"></script> <!-- JavaScript file -->

</body>
</html>
