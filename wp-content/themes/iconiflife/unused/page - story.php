<?php
/*
   Template Name: Story
*/

get_header(); the_post(); ?>



    <section id="story-featured">
        <div class="wrap">
            <h5 class="icon-slash">Food</h5>
            <p class="story-title" style="padding:0 270px;">
                <?php the_title(); ?>
            </p>
            <?php if(get_field('do_you_need_to_hide_the_author') == 'yes') {
            } else { ?>
                <p class="meta-featured">
                    <span>by</span> <?php the_author(); ?>
                </p>
            <?php } ?>
        </div>
    </section>

    <div id="section-divider"></div>

    <section id="story-content">
        <div class="wrap">
            <div class="content">
                <div class="hero-image">
                    <img src="https://morganfillman.space/870/512" />
                </div>
                <div class="full-column">
                    <p>
                        <span style="float: left; height: 0.7em; font-size: 800%; line-height: 76%;">I</span>t’s a rare occasion when two iconic entities collide, but that’s exactly what has happened in the Valley of the Sun. This February, Chef Christopher Gross—winner of a coveted James Beard Award and countless other accolades—took over the culinary helm of the landmark Wrigley Mansion, a Phoenix Point of Pride listed on the National Register of Historic Places in 1989.
                    </p>
                    <p>
                        That was also a notable year for Gross, who was named one of America’s 10 Best New Chefs by Food & Wine magazine. It was one of many honors to be bestowed over the years upon a man of humble beginnings.
                    </p>
                    <p>
                        Born in what he calls the “dwindling town” of Trenton, Missouri, Gross moved to Arizona with his mother at the age of 13 after his parents divorced. His first job was at Baskin-Robbins, which had little to do with any aspirations in the culinary world and more to do with earning enough money to purchase a motorcycle (a passion he still enjoys to this day).

                    </p>
                    <p>
                        Food was not a central focus of young Gross’s life. “I didn’t care for cooking; didn’t eat much of anything as a kid,” he recalls. “I walked home from school at lunchtime to eat fried bologna sandwiches or fish sticks. No sauces or condiments. No salads or salad dressings. Pretty much just meat and plain pasta.”
                    </p>
                </div>
                <div class="half-column">
                    <div class="half image-section">
                        <img src="https://morganfillman.space/380/260" />
                    </div>
                    <div class="half caption-section">
                        <p>
                            LEFT: Steamed mussels, chorizo, English peas, and herbs from the Wrigley Mansion Garden. BOTTOM: Seasonal grain bowl with black barley, watermelon, stone fruits, roasted almonds and honey vinaigrette.
                        </p>

                    </div>
                </div>
                <div class="half-column">
                    <div class="half quote-section icon-quotes">
                        <p>
                            I walked home from school at lunchtime to eat fried bologna sandwiches or fish sticks.”
                        </p>

                    </div>
                    <div class="half image-section">
                        <img src="https://morganfillman.space/380/260" />
                    </div>
                </div>
                <div class="full-column">
                    <p>
                        His attitude began to change around the age of 18, when he landed a line cook job at the Adams Hotel. It was there that a European kitchen crew introduced him to the art of French cooking.
                    </p>
                    <p>
                        Gross always had his heart set on going to Europe. By the time he was 23, he took the leap of a lifetime and sold everything he owned, landing at Thierry Restaurant in Chelsea, London. It was there that he began to refine his French cooking techniques.
                    </p>
                    <p>
                        The intrepid young chef didn’t stop there; he talked his way into the Michelin-starred Chez Albert in the Montparnasse area of Paris, working “under the table” because immigration laws wouldn’t allow him to work in the country legally. Gross was reluctant to return to the United States. “The learning process was so much better in Europe,” he says.
                    </p>
                    <p>
                        Returning to Phoenix in 1983, Gross continued to build his growing reputation at various Scottsdale restaurants before deciding it was time to put his own name on the door. In 1990, he opened Christopher’s and Christopher’s Bistro in the Biltmore area, which garnered him the James Beard Award as Best Chef-Southwest in 1995.
                    </p>
                </div>
                <div class="fifth-column">
                    <div class="two-third text-section">
                        <img src="https://morganfillman.space/490/407" />
                        <p>
                            As his Biltmore Fashion Park lease was ramping down, Gross’s longtime girlfriend, Jamie Hormel, owner of the Wrigley Mansion, suggested he move his operations there.
                        </p>
                        <p>
                            That’s just what he did, bringing his team from Christopher’s with him and putting his signature flair—what Gross calls “modern American with a French influence”—on the seasonal Geordie’s menu right from the start. He finds it hilarious that some say he’s “returning to his French roots,” pointing out that he’s never left.
                        </p>
                        <p>
                            Big plans are afoot. Hormel has redesigned Jamie’s Wine Bar, painted inside and out, added new carpet and chandeliers, and remodeled some of the rooms. Now, Gross’s domain will be the focus over the summer. “We’re gutting the kitchen,” he says excitedly. “Taking the roof off, new walls, moving walls. If you walk in it will look like you’re in a brand-new facility.” Like a proud parent showing off photos of a child, he pulls up an image on his phone of a huge, wow-worthy Hestan range, which will go all the way around the large kitchen—the same as those found at top restaurants in the country, including The French Laundry and Alinea.
                        </p>
                    </div>
                    <div class="one-third fast-facts">
                        <h4>RAPID-FIRE with chef gross</h4>
                        <p>
                            LAST BOOK READ: A Moveable Feast by Ernest Hemingway
                        </p>
                        <p>
                            IF YOU COULD BE ANY ANIMAL? Probably a bird; one big enough not to be eaten or shot!
                        </p>
                        <p>
                            FAVORITE ICE CREAM: Chocolate: deep, dark chocolate (actually, the one we make)
                        </p>
                        <p>
                            FAVORITE BRUNCH SPOT: The Wrigley Mansion—are you kidding me? Where else would I go?
                        </p>
                        <p>
                            WHO WOULD PLAY YOU IN A MOVIE? Gary Oldman
                        </p>
                        <p>
                            MORNING OR NIGHT? Oh, night.
                        </p>
                        <p>
                            WHAT ANNOYS YOU THE MOST? People who can’t give a straight answer to a question. Just answer the question.
                        </p>
                        <p>
                            DESCRIBE YOURSELF IN THREE WORDS: Nice. Kid-like. Adventurous.
                        </p>
                        <p>
                            IF YOU COULD TRADE LIVES WITH ANYONE FOR A DAY? Richard Branson—he seems to have a lot of fun.
                        </p>
                        <p>
                            WHAT FOOD TREND DO YOU JUST NOT GET? Food decoration and flavor not counting first. I do believe in decorating stuff to make it look nice, but it needs to be hot and tasty. Beauty with no substance.
                        </p>
                        <p>
                            LAST MOVIE YOU SAW? Angel-A – a French film.
                        </p>
                        <p>
                            COFFEE OR TEA? Coffee.
                        </p>
                        <p>
                            SUNSET OR SUNRISE? Sunset.
                        </p>
                        <p>
                            SOMETHING YOU CONSIDER ICONIC? Classic cuisine—that’s coming back!
                        </p>
                    </div>
                </div>
                <div id="section-divider"></div>
                <div class="photo-credit">
                    <p>
                        Photos: Debby Wolvos, DW Photography
                    </p>
                </div>
            </div>
            <?php include 'sidebar.php'; ?>
        </div>
    </section>




<?php get_footer(); ?>
