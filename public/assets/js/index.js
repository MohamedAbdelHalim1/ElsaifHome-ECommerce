document.addEventListener('DOMContentLoaded', function () {
    const slide = document.querySelector('.elementor-background-slideshow');
    const images = [
        'url("assets/images/main-bann1.jpg")',
        'url("assets/images/main-bann2.jpg")',
        'url("assets/images/main-bann3.jpg")'
    ];
    let currentIndex = 0;

    function changeBackgroundImage() {
        slide.style.backgroundImage = images[currentIndex];
        slide.classList.add('active');
        currentIndex = (currentIndex + 1) % images.length;
    }

    // Initially set the first background image
    changeBackgroundImage();

    // Automatically change the background image every 3 seconds

    setInterval(() => {
        slide.classList.remove('active');
        setTimeout(changeBackgroundImage, 1700); // Change image after fade out
    }, 6000);



    ////////////////////////////////////////////////////////////

    const sentenceElement = document.querySelector('.sentence');

    let originalSentence = "أفضل";
    let alternateSentence = "أحسن";
    let toggle = false;

    function changeSentence() {
        sentenceElement.classList.remove('visible');
        sentenceElement.classList.add('hidden');

        setTimeout(() => {
            sentenceElement.textContent = toggle ? originalSentence : alternateSentence;
            sentenceElement.classList.remove('hidden');
            sentenceElement.classList.add('visible');
            toggle = !toggle;
        }, 600); // Match the transition duration in CSS
    }

    // Automatically change the sentence every 3 seconds
    setInterval(changeSentence, 5000);

    // Initial state
    sentenceElement.classList.add('visible');


    //////////////////////////////////////////////////////////////////


    const multiImageSlider = document.querySelector('.multi-image-slider')
    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');
    let counter = 1; // Start at the second slide

    nextBtn.addEventListener('click', function () {
        if (counter < 2) {
            counter++;
        } else {
            counter = 0;
        }
        updatemultiImageSlider();
    });

    prevBtn.addEventListener('click', function () {
        if (counter > 1) {
            counter--;
        } else {
            counter = 2;
        }
        updatemultiImageSlider();
    });

    function updatemultiImageSlider() {
        const slideWidth = 100 / 3; // Number of slides
        multiImageSlider.style.transform = 'translateX(' + (-counter * slideWidth) + '%)';
    }

});


function showSection(sectionId) {
    // Hide all sections
    const sections = document.querySelectorAll('.section');
    sections.forEach(section => {
        section.style.display = 'none';
    });

    // Show the selected section
    const sectionToShow = document.getElementById(sectionId);
    if (sectionToShow) {
        sectionToShow.style.display = 'block';
    }
}

/////////////////////////////////////////////////


document.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('.counter');

    counters.forEach(counter => {
        const stopValue = parseInt(counter.getAttribute('data-stop'));
        let duration = 2000; // Duration in milliseconds for the counter animation
        let startTime = null;

        function animateCounter(timestamp) {
            if (!startTime) startTime = timestamp;
            const elapsed = timestamp - startTime;

            if (elapsed < duration) {
                const currentValue = Math.min(Math.floor((elapsed / duration) * stopValue), stopValue);
                counter.textContent = currentValue;
                requestAnimationFrame(animateCounter);
            } else {
                counter.textContent = stopValue;
            }
        }

        requestAnimationFrame(animateCounter);
    });

    ////////////////////////////////////////////////////////

    const inputField = document.getElementById('inputField');
    const plusButton = document.getElementById('plusButton');

    plusButton.addEventListener('click', () => {
        let currentValue = parseInt(inputField.value, 10);
        inputField.value = currentValue + 1;
    });

    ////////////////////////////////////////////////////////

    const showSectionBtn = document.getElementById('showSectionBtn');
    const hiddenSection = document.getElementById('hiddenSection');

    showSectionBtn.addEventListener('click', () => {
        hiddenSection.classList.toggle('hidden');
    });

    ////////////////////////////////////////////////////

});


////////////////////////////////////////////


// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("openModalBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function () {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

