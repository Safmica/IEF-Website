// Check if the user is logged in
function checkAdmin() {
    const user = JSON.parse(localStorage.getItem('user'));
    if (!user || user.role != 'admin') {
        window.location.href = '/not-found'; // Change to your login page URL
    }
}

document.addEventListener('DOMContentLoaded', checkAdmin);
