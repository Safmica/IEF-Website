<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login and Signup</title>
    
        <!-- Link CSS -->
        <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    
        <!-- SweetAlert2 CSS & JS -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>    
<body>

    <div class="container-login">
        <input type="checkbox" id="check-login" aria-hidden="true">

        <div class="signup">
            <form id="signupForm">
                @csrf
                <label class="lbl-signup" for="check-login" aria-hidden="true">Sign Up</label>
                <input class="input-signup" type="text" name="name" placeholder="Username" required>
                <input class="input-signup" type="email" name="email" placeholder="Email" required>
                <input class="input-signup" type="password" name="password" placeholder="Password" required>
                <input class="input-signup" type="password" name="password_confirmation" placeholder="Confirm Password" required>
                <p style="color: yellow; font-size: 0.7rem;font-family: Arial, sans-serif; text-align: center;">Password must contain min. 8 char</p>
                <button type="submit" class="btn-signup">Sign Up</button>
            </form>
        </div>

        <div class="login">
            <form id="loginForm">
                @csrf
                <label class="lbl-login" for="check-login" aria-hidden="true">Login</label>
                <input class="input-login" type="email" name="email" placeholder="Email" required>
                <input class="input-login" type="password" name="password" placeholder="Password" required>
                <button type="submit" class="btn-login">Login</button>
            </form>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        // Signup Form
        document.getElementById('signupForm').addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent form from reloading the page
            let formData = new FormData(this);
    
            fetch('/api/signup', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    return response.json().then(errorData => {
                        throw errorData;
                    });
                }
                return response.json();
            })
            .then(data => {
                // Show success popup
                Swal.fire({
                    icon: 'success',
                    title: 'Signup successful!',
                    text: 'Please log in.',
                    confirmButtonText: 'OK'
                }).then(() => {
                    document.getElementById('check-login').checked = true; // Switch to login form
                });
            })
            .catch(errorData => {
                // Get detailed error message from API and display in popup
                let errorMessage = 'Signup failed. Please try again.';
                
                // Check if the error message is present in the "error" key
                if (errorData && errorData.error) {
                    errorMessage = errorData.error;  // Use the error message from API
                } else if (errorData && errorData.message) {
                    errorMessage = errorData.message;  // Use general error message
                }
    
                Swal.fire({
                    icon: 'error',
                    title: 'Signup failed!',
                    text: errorMessage,
                    confirmButtonText: 'OK'
                });
            });
        });
    
        // Login Form
        document.getElementById('loginForm').addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent form from reloading the page
            let formData = new FormData(this);

            fetch('/api/login', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    return response.json().then(errorData => {
                        throw errorData;
                    });
                }
                return response.json();
            })
            .then(data => {
                localStorage.setItem('user', JSON.stringify(data.user));
                
                // Check user role and redirect accordingly
                const user = data.user;
                let redirectUrl = '/'; // Default redirect to home
                
                if (user && user.role === 'admin') {
                    redirectUrl = '/admin/dashboard'; // Redirect to admin dashboard
                }

                // Show success popup and redirect to the appropriate page
                Swal.fire({
                    icon: 'success',
                    title: 'Login successful!',
                    text: 'You will be redirected.',
                    confirmButtonText: 'OK'
                }).then(() => {
                    window.location.href = redirectUrl; // Redirect to the appropriate page
                });
            })
            .catch(errorData => {
                // Get detailed error message from API and display in popup
                let errorMessage = 'Login failed. Please check your credentials.';
                
                // Check if the error message is present in the "error" or "message" key
                if (errorData && errorData.error) {
                    errorMessage = errorData.error;  // Use the error message from API
                } else if (errorData && errorData.message) {
                    errorMessage = errorData.message;  // Use general error message
                }

                Swal.fire({
                    icon: 'error',
                    title: 'Login failed!',
                    text: errorMessage,
                    confirmButtonText: 'OK'
                });
            });
        });
    </script>    
</body>
</html>
