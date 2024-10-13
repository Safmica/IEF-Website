// Check if the user is logged in
function checkLogin() {
    const user = localStorage.getItem('user');
    if (!user) {
        // If not logged in, show a pop-up and redirect to the login page
        Swal.fire({
            icon: 'warning',
            title: 'Attention!',
            text: 'You need to log in to access the registration page.',
            confirmButtonText: 'OK'
        }).then(() => {
            window.location.href = '/login'; // Change to your login page URL
        });
    }
}

// Call the function to check login status when the page loads
document.addEventListener('DOMContentLoaded', checkLogin);
