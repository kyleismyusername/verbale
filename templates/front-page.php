<?php
/*
 * Template Name: Home - Original
 * Homepage template.
 */
get_header();
?>
<div id="hp-hero" class="h-screen bg-bottom bg-cover">
    <div class="bg-img mayfair">
        <img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/group-1.jpg" alt="">
    </div>
    <div class="relative w-full h-full bg-black bg-opacity-40">
        <!-- Hero -->
        <div class="animate__animated animate__fadeIn animate__slow container flex flex-col justify-end h-full pb-8 lg:pb-24">
            <div class="lg:max-w-3xl backdrop-filter backdrop-blur-sm backdrop-opacity-100">
                <h1 class="mb-4 text-3xl text-white lg:text-5xl leading-tighter lg:leading-tight">
                    Introducing <b>Verbale,</b><br />a network of behavioral scientists to address your specific needs anywhere in the world.
                </h1>
                <p class="font-sans text-2xl text-white leading-tighter lg:leading-relaxed">
                    Get personalized consultation, mentorship, and supervision from doctoral-level experts in Applied Behavior Analysis.
                </p>
            </div>
        </div>
    </div>
</div>
<div id="hp-section-1" class="h-screen bg-bottom bg-cover lg:h-auto" x-data="{visible: false}" @scroll.window="{ inViewport($el) ? visible = true : visible = false }">
    <div class="w-full h-full bg-white">
        <div class="container flex flex-col items-center justify-center h-full py-16 lg:py-36" :class="visible ? 'animate__animated animate__fadeIn animate__slow' : 'invisible'">
            <h2 class="mb-8 text-3xl text-center lg:text-5xl lg:leading-snug lg:w-3/4">Our approach</h2>
            <p class="mb-8 font-sans text-lg leading-relaxed text-center lg:leading-loose lg:text-2xl lg:mb-16 lg:w-3/4">
                We are doctoral-level scientists who provide behavior-based solutions to indivduals, families, and organizations. We focus on providing consultation on the most current behavior analytic practices through our global network of experts in the field.
            </p>
            <a href="#" class="px-10 py-6 mx-auto btn lg:mx-0 justify-self-end">Learn More</a>
        </div>
    </div>
</div>
<div id="hp-section-2" class="" x-data="{visible: false}" @scroll.window="{ inViewport($el) ? visible = true : visible = false }">
    <div class="w-full h-full bg-indigo-500">
        <div class="container flex flex-col items-center justify-center h-full py-16 lg:py-36" :class="visible ? 'animate__animated animate__fadeIn animate__slow' : 'invisible'">
            <h2 class="text-3xl text-center text-white lg:text-5xl lg:leading-snug mb-16 lg:w-3/4">Our services</h2>
            <div class="flex flex-col gap-x-4 gap-y-16 mb-16 lg:flex-row lg:mb-20">
                <div class="lg:w-1/4">
                    <img class="mx-auto mb-8" src="//placehold.it/120x120" alt="">
                    <p class="font-serif text-xl text-center text-white">Case Consultation</p>
                </div>
                <div class="lg:w-1/4">
                    <img class="mx-auto mb-8" src="//placehold.it/120x120" alt="">
                    <p class="font-serif text-xl text-center text-white">Mentorship and Supervision</p>
                </div>
                <div class="lg:w-1/4">
                    <img class="mx-auto mb-8" src="//placehold.it/120x120" alt="">
                    <p class="font-serif text-xl text-center text-white">Organizational Solutions</p>
                </div>
                <div class="lg:w-1/4">
                    <img class="mx-auto mb-8" src="//placehold.it/120x120" alt="">
                    <p class="font-serif text-xl text-center text-white">Research and Development</p>
                </div>
            </div>
            <a href="#" class="px-10 py-6 mx-auto btn lg:mx-0 justify-self-end">Learn More</a>
        </div>
    </div>
</div>
<div id="hp-section-3" class="" x-data="{visible: false}" @scroll.window="{ inViewport($el) ? visible = true : visible = false }">
    <div class="w-full h-full bg-white">
        <div class="container flex flex-col items-center justify-center h-full py-16 lg:py-36" :class="visible ? 'animate__animated animate__fadeIn animate__slow' : 'invisible'">
            <h2 class="text-3xl text-center mb-16 lg:text-5xl lg:leading-snug lg:w-2/3">Our team</h2>
            <div class="flex flex-col mb-16 gap-x-16 gap-y-8 lg:flex-row lg:w-2/3">
                <img src="//placehold.it/324x432" alt="">
                <div class="flex flex-col justify-center flex-grow">
                    <div class="mb-6 font-serif text-2xl lg:text-3xl leading-relaxed">Danielle LaFrance,<br />Ph.D., BCBA-D</div>
                    <p class="leading-relaxed mb-8">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium vitae ipsum doloribus enim minus eligendi quasi laborum quos aperiam a, commodi quia qui dicta aspernatur nam impedit voluptatibus temporibus nisi.
                    </p>
                    <div class="flex flex-row gap-x-2">
                        <a href="" class="flex flex-row gap-x-2 items-center"><i class="far fa-envelope fa-sm text-white bg-indigo-700 p-2 w-8 text-center hover:bg-salmon-500"></i></a>
                        <a href="" class="flex flex-row gap-x-2 items-center"><i class="fab fa-linkedin-in fa-sm text-white bg-indigo-700 p-2 w-8 text-center hover:bg-salmon-500"></i></a>
                        <a href="" class="flex flex-row gap-x-2 items-center"><i class="fab fa-facebook-f fa-sm text-white bg-indigo-700 p-2 w-8 text-center hover:bg-salmon-500"></i></a>
                    </div>
                </div>
            </div>
            <div class="flex flex-col mb-16 gap-x-16 gap-y-8 lg:flex-row lg:w-2/3">
                <div class="flex flex-col justify-center flex-grow order-2 lg:order-1">
                    <div class="mb-6 font-serif text-2xl lg:text-3xl leading-relaxed">Danielle LaFrance,<br />Ph.D., BCBA-D</div>
                    <p class="leading-relaxed mb-8">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium vitae ipsum doloribus enim minus eligendi quasi laborum quos aperiam a, commodi quia qui dicta aspernatur nam impedit voluptatibus temporibus nisi.
                    </p>
                    <div class="flex flex-row gap-x-2">
                        <a href="" class="flex flex-row gap-x-2 items-center"><i class="far fa-envelope fa-sm text-white bg-indigo-700 p-2 w-8 text-center hover:bg-salmon-500"></i></a>
                        <a href="" class="flex flex-row gap-x-2 items-center"><i class="fab fa-linkedin-in fa-sm text-white bg-indigo-700 p-2 w-8 text-center hover:bg-salmon-500"></i></a>
                        <a href="" class="flex flex-row gap-x-2 items-center"><i class="fab fa-facebook-f fa-sm text-white bg-indigo-700 p-2 w-8 text-center hover:bg-salmon-500"></i></a>
                    </div>
                </div>
                <img src="//placehold.it/324x432" alt="" class="order-1 lg:order-2">
            </div>
            <a href="#" class="my-8 px-10 py-6 mx-auto btn lg:mx-0 justify-self-end">Learn More</a>
        </div>
    </div>
</div>
<script>
function inViewport(element, options = {
    offset: {
        top: 0,
        right: 0,
        bottom: 200,
        left: 0
    },
    threshold: 0
}) {
    const {
        top,
        right,
        bottom,
        left,
        width,
        height
    } = element.getBoundingClientRect();
    const intersection = {
        t: bottom,
        r: window.innerWidth - left,
        b: window.innerHeight - top,
        l: right
    };

    const threshold = {
        x: options.threshold * width,
        y: options.threshold * height
    };

    return intersection.t > (options.offset.top + threshold.y) &&
        intersection.r > (options.offset.right + threshold.x) &&
        intersection.b > (options.offset.bottom + threshold.y) &&
        intersection.l > (options.offset.left + threshold.x);
}
</script>
<?php
get_footer();