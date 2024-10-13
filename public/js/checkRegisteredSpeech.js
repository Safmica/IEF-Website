// Check if the user is logged in
function checkRegistered() {
    const user = JSON.parse(localStorage.getItem('user'));
    if (user.speech != 'Registered') {
        window.location.href = '/not-found'; // Change to your login page URL
    }
}

document.addEventListener('DOMContentLoaded', checkRegistered);
