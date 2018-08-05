<template>
    <div class="inner">
        <form class="form-container">
            <div class="marginized-bottom-10">
                <span>Set Up Your <span class="bold-span">New Pets Alert</span></span>
            </div>
            <div class="col-1">
                <p class="no-top-margin">
                    We’ll e-mail you when new pets that match your search criteria are added to our site! <a href="#">What is This?</a>
                </p>
                <div class="col-1">
                    <input type="text" placeholder="Email" class="form-field" name="email" required="required" aria-required="true">
                </div>
                <div class="col-2">
                    <input type="text" placeholder="Retype Email" class="form-field" name="retype-email" required="required" aria-required="true">
                </div>
                <input type="submit" value="Save" class="submit-button">
            </div>
            <div class="col-2">
                <div class="marginized-bottom-10">
                    <span class="bold-span-small">Im-PAW-sibly Good Deals!</span>
                </div>
                <div class="sponsor-image sponsor-animation">
                    <div class="sponsor-circle"><div class="percent-symbol">%</div></div>
                    <img :src="image_src" alt="Sponsor Image">
                </div>
                <div class="checkbox-group">
                    <div class="checkbox checkbox-main">
                        <input name="news-options" value="offers" type="checkbox" class="size-24">
                        <label><b>Get offers and tips from our sponsors. <a href="#">Learn More</a></b></label>
                    </div>
                    <div class="checkbox text-14">
                        <input name="news-options" value="stories" type="checkbox">
                        <label>I would like to receive inspiring stories, great advice, and awesome videos via email and other marketing communications from Purina and its brands.*</label>
                    </div>
                    <div class="checkbox text-14">
                        <input name="news-options" value="communications" type="checkbox">
                        <label>Yes, I would like to receive communications from the Petco Foundation and Petco regarding their lifesaving work and access to discounts on pet products and services.</label>
                    </div>
                    <div class="checkbox text-14">
                        <input name="news-options" value="information" type="checkbox">
                        <label>Yes, I’d like to receive useful information about flea and tick prevention, pet care tips and coupons from Bayer via email.</label>
                    </div>
                </div>
                <div class="disclaimer">
                    I certify I am 18 years of age or older and agree that Purina may use my information as described in
the <a href="#">Privacy Policy</a> and <a href="#">About Our Ads</a>.
                </div>
            </div>
            <div class="clearfix"></div>
        </form>
    </div>
</template>

<script>
    /**
     *  Vue component for NewPetAlert
     */
    export default {
        data() {
            return {
                'image_src': '/img/NPA-SponsorsIllustration2.png'
            }
        },
        methods: {
            submitForm: function() {

            }
        }
    }

    /**
     *  Javascript controller for sponsor animation
     */
    jQuery(document).ready(function($) {

        "use strict";

        $('.sponsor-animation').each(function() {

            const $this = $(this);
            const $circle = $this.find('.sponsor-circle');
            const $percent = $this.find('.percent-symbol');;


            /**
             *  Initialize
             */
            (function init() {

                animate();

            })();


            /**
             * [render description]
             * @param speed 
             */
            function animate(speed) {

                $circle.animate({ 'opacity': 1, 'width': 54, 'height': 54, 'top': 0, 'left': 112 }, 700, function() {
                    $percent.fadeTo(250, 1);
                });

            }


        }); // EOF sponsor animation
    }); // EOF document.ready

</script>