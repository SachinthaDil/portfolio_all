 <!-- Script -->
 <script>
        $(document).ready(function () {
            $('.slider').slick({
                arrows: false,
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                slidesToScroll: 1
            });
        });
    </script>

    
 <script src="script.js"></script>
    <script>



        const intersectionCallback = (entries) => {
            for (const entry of entries) { // Loop over all elements that either enter or exit the view.
                if (entry.isIntersecting) { // This is true when the element is in view.
                    entry.target.classList.add('animatedcard'); // Add a class.
                }
            }
        }

        /**
         * Create a observer and use the instersectionCallback as 
         * the instructions for what to do when an element enters
         * or leaves the view
         */
        const observer = new IntersectionObserver(intersectionCallback);

        /**
         * Get all .item elements and loop over them.
         * Observe each individual item.
         */
        const items = document.querySelectorAll('.anime');
        for (const item of items) {
            observer.observe(item);
            console.log("observ");
        }

    </script>

    <script>
        $(window).on('scroll', function () {
            var st = $(this).scrollTop(),
                vh = $(this).height(),
                $counter = $('.wrapperx'),
                ct = $counter.offset().top;
            if ((st + vh) > ct) {
                // #counter is in the viewport

                let valueDisplays = document.querySelectorAll(".num");
                let interval = 100;

                valueDisplays.forEach((valueDisplay) => {
                    let startValue = 0;
                    let endValue = parseInt(valueDisplay.getAttribute("data-val"));
                    let duration = Math.floor(interval / endValue);
                    let counter = setInterval(function () {
                        startValue += 1;
                        valueDisplay.textContent = startValue;
                        if (startValue == endValue) {
                            clearInterval(counter);
                        }
                    }, duration);
                });
            }
        })</script>