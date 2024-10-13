// Check if the user is logged in
function checkNotRegistered() {
    const user = JSON.parse(localStorage.getItem('user'));
    if (user.debate != 'Not Registered' || user.scrabble != 'Not Registered' || user.newscasting != 'Not Registered' || user.speech != 'Not Registered' ) {
        window.location.href = '/not-found'; // Change to your login page URL
    }
}

document.addEventListener('DOMContentLoaded', checkNotRegistered);
