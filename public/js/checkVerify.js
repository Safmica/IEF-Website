// Check if the user is logged in
function checkVerify() {
    const user = JSON.parse(localStorage.getItem('user'));
    if (user.debate != 'Verification' || user.scrabble != 'Verification' || user.newscasting != 'Verification' || user.speech != 'Verification' ) {
        window.location.href = '/not-found'; // Change to your login page URL
    }
}

document.addEventListener('DOMContentLoaded', checkVerify);
