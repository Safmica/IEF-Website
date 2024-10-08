let nextBtn = document.querySelector('.next')
let prevBtn = document.querySelector('.prev')

let slider = document.querySelector('.slider')
let sliderList = slider.querySelector('.slider .list')
let thumbnail = document.querySelector('.slider .thumbnail')
let thumbnailItems = thumbnail.querySelectorAll('.item')


thumbnail.appendChild(thumbnailItems[0])

// Function for next button 
nextBtn.onclick = function() {
    moveSlider('next')
}


// Function for prev button 
prevBtn.onclick = function() {
    moveSlider('prev')
}


function moveSlider(direction) {
    let sliderItems = sliderList.querySelectorAll('.item')
    let thumbnailItems = document.querySelectorAll('.thumbnail .item')
    
    if(direction === 'next'){
        sliderList.appendChild(sliderItems[0])
        thumbnail.appendChild(thumbnailItems[0])
        slider.classList.add('next')
    } else {
        sliderList.prepend(sliderItems[sliderItems.length - 1])
        thumbnail.prepend(thumbnailItems[thumbnailItems.length - 1])
        slider.classList.add('prev')
    }


    slider.addEventListener('animationend', function() {
        if(direction === 'next'){
            slider.classList.remove('next')
        } else {
            slider.classList.remove('prev')
        }
    }, {once: true}) // Remove the event listener after it's triggered once
}
document.addEventListener("DOMContentLoaded", function() {
    const boxes = document.querySelectorAll('.custom-box');
    let currentIndex = 0;

    function showBox(index) {
        // Hide all boxes first
        boxes.forEach((box, i) => {
            box.classList.remove('show'); 
            box.style.opacity = '0'; // Start hidden
        });

        // Allow a brief delay before showing the next box
        setTimeout(() => {
            boxes[index].classList.add('show');
            setTimeout(() => {
                boxes[index].style.opacity = '1'; // Fade in
            },100); // Slight delay to trigger opacity transition
        }, 300); // Delay to create separation between hide and show
    }

    document.querySelector('.next').addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % boxes.length; // Next box
        showBox(currentIndex);
    });

    document.querySelector('.prev').addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + boxes.length) % boxes.length; // Previous box
        showBox(currentIndex);
    });

    showBox(currentIndex); // Show the first box initially
});

let tween = gsap.to(".marquee_part", {
    x: "-100%",  
    repeat: -1,
    duration: 5,
    ease: "none", 
    onComplete: () => tween.restart() 
});



document.addEventListener('DOMContentLoaded', function () {
    const events = document.querySelectorAll('.timeline-event');
    let delay = 0;

    events.forEach(event => {
        setTimeout(() => {
            event.classList.add('active');
        }, delay);
        delay += 500;
    });
});
// VARIABLES
const elH = document.querySelectorAll(".timeline li > div");

// START
window.addEventListener("load", init);

function init() {
  setEqualHeights(elH);
}

// SET EQUAL HEIGHTS
function setEqualHeights(el) {
  let counter = 0;
  for (let i = 0; i < el.length; i++) {
    const singleHeight = el[i].offsetHeight;

    if (counter < singleHeight) {
      counter = singleHeight;
    }
  }

  for (let i = 0; i < el.length; i++) {
    el[i].style.height = `${counter}px`;
  }
}


