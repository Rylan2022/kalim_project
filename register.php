<?php require_once 'common/nevber.php'; ?>



<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-body p-4">
                        <h2 class="text-center mb-4">Registration Form</h2>
                        
                        <form class="row g-3" action="connect.php" method="POST">
                            <!-- Name Fields -->
                            <div class="col-md-6">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="firstName" required>
                            </div>
                            <div class="col-md-6">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="lastName" required>
                            </div>

                            <!-- Email and Password -->
                            <div class="col-md-6">
                                <label for="inputEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputEmail" name="email" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="inputPassword" name="password" required>
                            </div>

                            <!-- Bio and Message Fields -->
                            <div class="col-12">
                                <label for="inputBio" class="form-label">Bio</label>
                                <textarea class="form-control" id="inputBio" name="bio" rows="3" placeholder="Tell us about yourself"></textarea>
                            </div>
                            <div class="col-12">
                                <label for="inputMessage" class="form-label">Message</label>
                                <textarea class="form-control" id="inputMessage" name="message" rows="3" placeholder="Your message here"></textarea>
                            </div>

                            <!-- Address Fields -->
                            <div class="col-12">
                                <label for="inputFullAddress" class="form-label">Full Address</label>
                                <textarea class="form-control" id="inputFullAddress" name="fullAddress" rows="2" placeholder="1234 Main St, Apt 101, Springfield, IL"></textarea>
                            </div>

                            <!-- City Section -->
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">City</label>
                                <input type="text" class="form-control" id="inputCity" name="city">
                            </div>
                            
                            <!-- Gender and Checkbox Radio Buttons -->
                            <div class="col-12">
                                <div class="card p-3">
                                    <label class="form-label">Gender</label>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="gender" value="Male" id="genderMale">
                                        <label class="form-check-label" for="genderMale">Male</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="gender" value="Female" id="genderFemale">
                                        <label class="form-check-label" for="genderFemale">Female</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="gender" value="Others" id="genderOthers" checked>
                                        <label class="form-check-label" for="genderOthers">Others</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="genderNotDisclose" name="genderNotDisclose">
                                        <label class="form-check-label" for="genderNotDisclose">Prefer not to disclose</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary px-5">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require_once 'common/footer.php'; ?>