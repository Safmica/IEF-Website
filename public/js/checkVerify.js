// Check if the user is logged in
function checkVerify() {
    const user = JSON.parse(localStorage.getItem('user'));
    if (user.speech == 'Verification' || user.scrabble == 'Verification' || user.debate == 'Verification' || user.newscasting == 'Verification') {
        
    } else {
        window.location.href = '/not-found';
    }
}

document.addEventListener('DOMContentLoaded', checkVerify);
