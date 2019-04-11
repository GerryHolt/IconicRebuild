<?php
/*
   Template Name: designer page
*/

get_header('jewels'); the_post();?>

<section id="category-content">

    <div class="wrap">
        <h5 class="icon-slash">JEWELS</h5>
        <h3 style="padding-bottom:40px;">meet our designers</h3>

        <div class="full-column" style="padding: 0 0 30px 0;">

            <div class="slide-item" style="height:600px; background:url('https://iconiclife.com/wp-content/uploads/2019/02/Goshwara.jpg'); background-size:cover; position:relative;">
                <div class="slide-text"  style="height:200px; background-color:rgba(0,0,0,0.5); position:absolute; left:10%; top:0; bottom:0; margin:auto; text-align:center; padding:15px;">
                    <h2 style="line-height:1;">Jeweler Name</h2>
                    <p class="subtitle" style="padding:5px 0 20px 0;">
                        Sub Head
                    </p>
                    <p>
                        <a href="#" class="shop-btn" style="border:1px solid #000; padding:7px 20px; color:#000;">See our favs</a>
                    </p>
                </div>
            </div>

        </div>

        <p style="text-align:center; padding-bottom:40px;">
            Item Description. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac urna eu elit rhoncus maximus. Donec dictum ex purus, at egestas sem accumsan consectetur. In id felis arcu. Phasellus gravida odio vehicula pharetra varius. Nam molestie nibh nunc, vitae cursus est pretium id. Aliquam erat lorem, convallis non finibus et, volutpat nec libero. Fusce ultrices lacus eu eros vehicula dictum. Vivamus eget lorem eget felis gravida malesuada eu eu urna. In eget felis nisl. In hac habitasse platea dictumst. Vivamus mollis convallis viverra. Cras tempus rutrum posuere.
        </p>

        <h3 class="test-align:center; padding-bottom:40px;">SEE OUR FAVS THIS MONTH</h3>
        <div style="padding-bottom:40px;">
            <div style="display:inline-block; width:31%; margin-right:1%; text-align:center;">
                <img src="https://iconiclife.com/wp-content/uploads/2019/02/image003.jpg" />
                <p>
                    <span style="font-weight:500;">Jeweler Name</span><br />
                    Item Name
                </p>
            </div>
            <div style="display:inline-block; width:31%; margin-right:1%; margin-left:1%; text-align:center;">
                <img src="https://iconiclife.com/wp-content/uploads/2019/02/image002.jpg" />
                <p>
                    <span style="font-weight:500;">Jeweler Name</span><br />
                    Item Name
                </p>
            </div>
            <div style="display:inline-block; width:31%; margin-left:1%; text-align:center;">
                <img src="https://iconiclife.com/wp-content/uploads/2019/02/image001.jpg" />
                <p>
                    <span style="font-weight:500;">Jeweler Name</span><br />
                    Item Name
                </p>
            </div>
        </div>

        <h3 class="test-align:center; padding-bottom:40px;">WE LOVED IT LAST MONTH</h3>
        <div style="padding-bottom:40px;">
            <div style="display:inline-block; width:31%; margin-right:1%; text-align:center;">
                <img src="https://iconiclife.com/wp-content/uploads/2019/02/image002.jpg" />
                <p>
                    <span style="font-weight:500;">Jeweler Name</span><br />
                    Item Name
                </p>
            </div>
            <div style="display:inline-block; width:31%; margin-right:1%; margin-left:1%; text-align:center;">
                <img src="https://iconiclife.com/wp-content/uploads/2019/02/image001.jpg" />
                <p>
                    <span style="font-weight:500;">Jeweler Name</span><br />
                    Item Name
                </p>
            </div>
            <div style="display:inline-block; width:31%; margin-left:1%; text-align:center;">
                <img src="https://iconiclife.com/wp-content/uploads/2019/02/image003.jpg" />
                <p>
                    <span style="font-weight:500;">Jeweler Name</span><br />
                    Item Name
                </p>
            </div>
        </div>


        <h4 style="text-align:center; padding-bottom:20px;">Join Our VIP List</h4>
        <p style="text-align:center; padding-bottom:20px;">
            Subscribe now to stay in touch with our latest curated favorites, special events and opportunities.
        </p>
        <form style="text-align:center;">
            <input type="text" name="mail" placeholder="email"><input type="submit" value="Send">
        </form>
        <div class="instagram section" style="margin:20px auto;">

        </div>
    </div>

</section>

<?php get_footer(); ?>
