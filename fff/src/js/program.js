document.addEventListener('DOMContentLoaded', function () {
    const programButtons = document.querySelectorAll('.view-btn');
    const programPopup = document.querySelector('.program-popup');
    const signupPopup = document.querySelector('.signup-popup');
    const closeBtns = document.querySelectorAll('.close-btn');
    const programTypeInput = document.getElementById('program-type');

    programButtons.forEach(button => {
        button.addEventListener('click', function () {
            const programType = this.dataset.program;
            programTypeInput.value = programType;
            programPopup.classList.add('active');
        });
    });

    closeBtns.forEach(button => {
        button.addEventListener('click', function () {
            programPopup.classList.remove('active');
            signupPopup.classList.remove('active');
        });
    });

    window.addEventListener('click', function (event) {
        if (event.target === programPopup) {
            programPopup.classList.remove('active');
        }
        if (event.target === signupPopup) {
            signupPopup.classList.remove('active');
        }
    });

    // Show signup popup when the signup button is clicked
    document.getElementById('show-signup').addEventListener('click', function () {
        signupPopup.classList.add('active');
    });
});