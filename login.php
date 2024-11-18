<?php require_once 'common/nevber.php'; ?>

    <!-- Enhanced Login Container -->
    <div class="container container-main">
        <div class="col-md-4 mx-auto login-box">
            <h3 class="text-center">Login Page</h3>
            <form action="login.php" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-login">Sign In</button>
                <div class="text-center mt-4">
                    <p class="mb-0" style="color: #64748b">Don't have an account? <a href="register.php" style="color: #4CAF50; font-weight: 500; text-decoration: none;">register</a></p>
                </div>
            </form>
        </div>
    </div>

    <?php require_once 'common/footer.php'; ?>