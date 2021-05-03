// https://stackoverflow.com/questions/63382647/howto-add-class-when-section-is-in-viewport

var isInViewport = function (elem) {
    var distance = elem.getBoundingClientRect();
    return (
        distance.top >= 0 &&
        distance.left >= 0 &&
        distance.bottom <=
        (window.innerHeight || document.documentElement.clientHeight) &&
        distance.right <=
        (window.innerWidth || document.documentElement.clientWidth)
    );
};

const headingsAnimate = document.querySelectorAll(".heading-ani");
const leftHeading = document.querySelector('#about-me-text');
const rightHeading = document.querySelector('#my-photo');

window.addEventListener(
    "scroll",
    function (event) {
        // add event on scroll
        headingsAnimate.forEach((element) => {
            //for each .thisisatest
            if (isInViewport(element)) {
                //if in Viewport
                element.classList.add("animate__pulse");
            }
        });

        if (isInViewport(leftHeading)) {
            //if in Viewport
            leftHeading.style.visibility = 'visible';
            leftHeading.classList.add("animate__fadeInLeft");
        }

        if (isInViewport(rightHeading)) {
            //if in Viewport
            rightHeading.style.visibility = 'visible';
            rightHeading.classList.add("animate__fadeInRight");
        }

    },
    false
);
