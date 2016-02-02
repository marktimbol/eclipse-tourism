<?php

use App\Package;
use Illuminate\Database\Seeder;


class PackageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$packages = [
            [
                'category_id'   => 1,
                'name'          => 'Morning Desert Safari',
                'subtitle'      => 'The Exhilarating Early Bird Adventure',
                'description'   =>  '<p>You will travel across the desert in a 4-Wheel vehicle taking drive into the heart of Arabia’s desert where you will experience a rollercoaster of a ride whilst dune bashing.</p>

                                    <p>Experience the exhilarating rush down the steep slopes into the valley below you of the one of the most popular sports in the desert ‘sand boarding’ (optional). Take a camel ride across the dunes (optional), or maybe an adventurous ride on a dune buggy and Quad Biking (Optional)</p>

                                    <p>When you\'ve had your fill of fun, the tour returns you to your hotel in Dubai for around noon just in time for a relaxing afternoon sunbathing by the pool.</p>

                                    <h3>Our Morning Desert Safari Price Includes</h3>

                                    <ul>
                                        <li>Pickup from your hotel or residence in Dubai or Sharjah *</li>
                                        <li>Dune Bashing (Adventurous Desert Drive)</li>
                                        <li>Sand Boarding </li>
                                        <li>Camel Ride (Optional - upon availability with extra charge)</li>
                                        <li>Quad Biking (Optional - upon availability with extra charge)</li>
                                        <li>Dune Buggy (Optional - upon availability with extra charge)</li>
                                        <li>Drop back to your hotel or residence</li>
                                    </ul>

                                    <p>*Pick up from other emirates is available at extra charge</p>',
                'adult_price'   =>  '150',
                'child_price'   =>  '125',
                'has_time_options'  => 0,
                'confirm_availability'  => 0,
                'minimum_quantity'  => 1
            ],

            [
                'category_id'   => 1,
                'name'          => 'Evening Desert Safari',
                'subtitle'      => 'A Thrilling Adventure in the Magnificent Sands of Arabia',
                'description'   =>  '<p>Your journey begins being in a 4x4 wheel drive pick up taking you into the heart of Arabia’s desert where you will experience a thrilling desert roller-coaster drive through the high golden sand dunes, stopping for a breath taking view of the endless desert.</p>

                                    <p>Arrive at the Arabian ambiance a traditional Bedouin campsite, where a traditional Arabian welcome awaits you.  Enjoy an exciting camel ride, Dress yourself in the traditional Arabic dress, Henna painting (exclusive Arabic designs) on hands or feet.  Enjoy the freshly made Arabic sweets, savouring sips of the delicious Arabian brew – Coffee or simply enjoy the aromatic shisha (the famous Arabic water pipe). </p>

                                    <p>A delicious live BBQ dinner cooked on site is waiting for you then and you have the choice between a variety of appetisers, grilled specialties, salads, Selection of fresh vegetables, speciality dishes for the vegetarians and not forgetting traditional Arabic deserts and exotic fresh fruits to sweeten your mouth. There will also be a live Traditional Arabic Tanoura dance, the climax of the evening under the star-lit sky by graceful belly dance performance set to the rhythm of traditional Arabian music is the added Eastern entertainment.</p>

                                    <h3>Our Evening Desert Safari Price Includes</h3>

                                    <ul>
                                        <li>Pickup from your hotel or residence in Dubai or Sharjah *</li>
                                        <li>Dune Bashing (Adventurous Desert Drive)</li>
                                        <li>Henna Painting</li>
                                        <li>Arabic Dress Photograph opportunity</li>
                                        <li>Camel Ride</li>
                                        <li>Sand Boarding (Optional & upon availability)</li>
                                        <li>Quad Biking (Optional - upon availability with extra charge)</li>
                                        <li>BBQ Dinner (Vegetarian option available)</li>
                                        <li>Soft drinks, Mineral Water, Tea & Coffee (Unlimited) </li>
                                        <li>Sheesha / Hubbllee Bubblee smoking facility</li>
                                        <li>Belly Dance Show</li>
                                        <li>Tanoura Dance Show </li>
                                        <li>Availability of Alcohol beverages in Camp at extra cost</li>
                                        <li>Drop back to your hotel or residence</li>
                                    </ul>
                                    <p>*Pick up from other emirates is available at extra charge</p>',
                'adult_price'   =>  '0',
                'child_price'   =>  '0',
                'has_time_options'  => 0,
                'confirm_availability'  => 1,
                'minimum_quantity'  => 1
            ],

            [
                'category_id'   => 1,
                'name'          => 'VIP Evening Desert Safari',
                'subtitle'      => 'A Luxury Thrilling Adventure in the Magnificent Sands of Arabia',
                'description'   =>  '<p>Your journey begins being in a 4x4 wheel drive pick up taking you into the heart of Arabia’s desert where you will experience a thrilling desert roller-coaster drive through the high golden sand dunes, stopping for a breath taking view of the endless desert.</p>
                                    <p>Arrive at the Arabian ambiance a traditional Bedouin campsite, where a traditional Arabian welcome awaits you.  Enjoy an exciting camel ride, Dress yourself in the traditional Arabic dress, Henna painting (exclusive Arabic designs) on hands or feet.  Enjoy the freshly made Arabic sweets, savouring sips of the delicious Arabian brew – Coffee or simply enjoy the aromatic shisha (the famous Arabic water pipe). </p>
                                    <p>A delicious live BBQ dinner cooked on site is waiting for you then and you have the choice between a variety of appetisers, grilled specialties, salads, Selection of fresh vegetables, speciality dishes for the vegetarians and not forgetting traditional Arabic deserts and exotic fresh fruits to sweeten your mouth. There will also be a live Traditional Arabic Tanoura dance, the climax of the evening under the star-lit sky by graceful belly dance performance set to the rhythm of traditional Arabian music is the added Eastern entertainment.</p>
                                    <h3>Our VIP Evening Desert Safari Price Includes</h3>

                                    <ul>
                                        <li>Pickup from your hotel or residence in Dubai or Sharjah*</li>
                                        <li>Dune Bashing (Adventurous Desert Drive)</li>
                                        <li>Henna Painting</li>
                                        <li>Arabic Dress Photograph opportunity</li>
                                        <li>Camel Ride</li>
                                        <li>Sand Boarding (Optional - upon availability)</li>
                                        <li>Quad Biking (Optional - upon availability with extra charge)</li>
                                        <li>VIP seating in camp with your own table</li>
                                        <li>BBQ Dinner (Vegetarian option available) served directly to your table,</li>
                                        <li>Soft drinks, Mineral Water, Tea & Coffee (Unlimited) served directly to your table,</li>
                                        <li>Sheesha / Hubbllee Bubblee smoking facility served directly to your table,</li>
                                        <li>Belly Dance Show</li>
                                        <li>Tanoura Dance Show</li>
                                        <li>Availability of Alcohol beverages in Camp at extra cost</li>
                                        <li>Return back to your hotel or residence</li>
                                    </ul>

                                    <p>*Pick up from other emirates is available at extra charge</p>',
                'adult_price'   =>  '375',
                'child_price'   =>  '275',
                'has_time_options'  => 0,
                'confirm_availability'  => 0,
                'minimum_quantity'  => 1
            ],

            [
                'category_id'   => 1,
                'name'          => 'Royal Evening Desert Safari with Dinner at Bab Al Shams 5* Resort AL Hadheerah Restaurant',
                'subtitle'      => 'A Thrilling Adventure in the Magnificent Sands of Arabia Ending with a Perfect Place to Experience Traditional Far Amid Rolling Sand Dunes',
                'description'   =>  '<p>Your journey begins being in a 4x4 wheel drive pick up taking you into the heart of Arabia’s desert where you will experience a thrilling desert roller-coaster drive through the high golden sand dunes, stopping for a breath taking view of the endless desert.</p>
                                    <p>Arrive at the Arabian ambiance a traditional Bedouin desert campsite, where a traditional Arabian welcome awaits you.  Al Hadheerah restaurant offers lavish buffet menu, featuring ethnic cuisine from the Middle East, as well as live cooking stations with wood fired ovens, spit roast and Arabic bread ovens. </p>
                                    
                                    <h3>Our Evening Desert Safari Price Includes</h3>

                                    <ul>
                                        <li>Pickup from your hotel or residence in Dubai or Sharjah*</li>
                                        <li>Dune Bashing (Adventurous Desert Drive)</li>
                                        <li>Quad Biking (Optional - upon availability with extra charge)</li>
                                        <li>Tanoura Show</li>
                                        <li>Camel caravan on the dunes</li>
                                        <li>Horse show on the dunes</li>
                                        <li>Falcon Display</li>
                                        <li>Arabic Live Band</li>
                                        <li>Arabic female singer</li>
                                        <li>Belly Dancer</li>
                                        <li>Camel Ride</li>
                                        <li>Horse ride</li>
                                        <li>Visit to Heritage Museum</li>
                                        <li>Soft drinks, Mineral Water, Tea & Coffee</li>
                                        <li>Sheesha / Hubbllee Bubblee available at extra cost</li>
                                        <li>Alcohol beverages, Fresh juices, Cocktails, and Mocktails available at extra cost</li>
                                        <li>Drop back to your hotel or residence</li>
                                    </ul>

                                    <p>*Pick up from other emirates is available at extra charge</p>',
                'adult_price'   =>  '550',
                'child_price'   =>  '550',
                'has_time_options'  => 0,
                'confirm_availability'  => 0,
                'minimum_quantity'  => 1
            ],

            [
                'category_id'   => 1,
                'name'          => 'Overnight Desert Safari',
                'subtitle'      => 'A night under the stars',
                'description'   =>  '<p>As the night dawns itself, the mystical beauty of the deserts can be celebrated Arabic style discovering the true essence of the desert on this overnight safari. </p>

                                    <p>The first part of this tour is equal to our evening desert safari with added extras after the Belly dance show you will settle down for the night either in one of our traditional Bedouin houses or igloo tents under the stars. Taking the opportunity to enjoy the tranquillity of the desert at night the silence and the breath taking brightness of the stars is a big contrast to the crowded city. You can enjoy the early morning lustre of the desert sunrise as the soft light provides a peaceful feeling waking up to a warm morning breakfast. </p>

                                    <h3>Our Overnight Desert Safari Price Includes</h3>

                                    <ul>
                                        <li>Pickup from your hotel or residence in Dubai or Sharjah*</li>
                                        <li>Dune Bashing (Adventurous Desert Drive)</li>
                                        <li>Henna Painting</li>
                                        <li>Arabic Dress Photograph opportunity</li>
                                        <li>Camel Ride</li>
                                        <li>Sand Boarding (Optional - upon availability)</li>
                                        <li>Quad Biking (Optional - upon availability with extra charge)</li>
                                        <li>BBQ Dinner (Vegetarian option available)</li>
                                        <li>Soft drinks, Mineral Water, Tea &amp; Coffee (Unlimited)</li>
                                        <li>Sheesha / Hubbllee Bubblee smoking facility</li>
                                        <li>Belly Dance Show</li>
                                        <li>Tanoura Dance Show</li>
                                        <li>Availability of Alcohol beverages in Camp at extra cost</li>
                                        <li>Sleeping bags and blankets will be provided</li>
                                        <li>Warm Breakfast, Tea, Coffee and Juice</li>
                                        <li>Return back to your hotel or residence</li>
                                    </ul>

                                    <p>*Pick up from other emirates is available at extra charge</p>',
                'adult_price'   =>  '400',
                'child_price'   =>  '250',
                'has_time_options'  => 0,
                'confirm_availability'  => 0,
                'minimum_quantity'  => 1
            ],

    		[
    			'category_id'	=> 1,
    			'name'			=> 'Evening Dinner in the Desert',
    			'subtitle'		=> 'Traditional Arabic Dining in a Bedouin',
    			'description'	=>	'<p>This is perfect for people who don\'t want to do the dune bashing and safari activities and would like to enjoy a peaceful yet exciting evening in the desert dining under the stars.</p>

                                    <p>Arrive at the Arabian ambiance a traditional Bedouin campsite, where a traditional Arabian welcome awaits you.  Enjoy an exciting camel ride, Dress yourself in the traditional Arabic dress, Henna painting (exclusive Arabic designs) on hands or feet.  Enjoy the freshly made Arabic sweets, savouring sips of the delicious Arabian brew – Coffee or simply enjoy the aromatic shisha (the famous Arabic water pipe), watching a Traditional Arabic Tanoura dance show.</p>

                                    <p>A delicious live BBQ dinner cooked on site is waiting for you then and you have the choice between a variety of appetisers, grilled specialties, Salads, Selection of fresh vegetables, speciality dishes for the vegetarians and not forgetting Traditional Arabic Deserts and Exotic Fresh Fruits to sweeten your mouth. The climax of the evening under the star-lit sky by graceful belly dance performance set to the rhythm of traditional Arabian music is the added Eastern entertainment.</p>

                                    <h3>Our Dinner in the Desert Safari price includes</h3>

                                    <ul>
                                        <li>Pickup from your hotel or residence in Dubai or Sharjah*</li>
                                        <li>Henna Painting</li>
                                        <li>Arabic Dress Photograph opportunity</li>
                                        <li>Camel Ride</li>
                                        <li>BBQ Dinner (Vegetarian option available)</li>
                                        <li>Soft drinks, Mineral Water, Tea &amp; Coffee (Unlimited)</li>
                                        <li>Sheesha / Hubbllee Bubblee smoking facility</li>
                                        <li>Belly Dance Show</li>
                                        <li>Tanoura Dance Show</li>
                                        <li>Availability of Alcohol beverages in Camp at extra cost</li>
                                        <li>Return back to your hotel or residence</li>
                                    </ul>

                                    <p>*Pick up from other emirates is available at extra charge</p>
                                    ',
    			'adult_price'	=>	'150',
    			'child_price'	=>	'100',
    			'has_time_options'	=> 0,
    			'confirm_availability'	=> 0,
                'minimum_quantity'  => 1
    		],    		

    		[
    			'category_id'	=> 2,
    			'name'			=> 'Dune Buggy Drive',
    			'subtitle'		=> 'Action Packed Off Road Exploring',
    			'description'	=>	'<p>Dune Buggy Safari offers a new dimension to off road exploring. Ride one of our twin seater, 700cc buggies and set off on an adventure like no other. Your instructor will guide you around a natural trail of the dunes, picking up speed as your confidence increases. We ride at your pace Stopping for breaks and soft refreshments before you set off again.  For your comfort and safety each dune buggy comes equipped with a full roll cage, bucket seats and a full safety harness.</p>

                                    <h3>Our Dune Buggy Drive Price Includes</h3>

                                    <ul>
                                        <li>Pickup from your hotel or residence in Dubai or Sharjah*</li>
                                        <li>Dune Buggy per person/sharing</li>
                                        <li>Drop back to your hotel or residence</li>
                                    </ul>

                                    <p>* Pick up for other emirates is available at extra charge</p>',
    			'adult_price'	=>	'550',
    			'child_price'	=>	'0',
    			'has_time_options'	=> 0,
    			'confirm_availability'	=> 0,
                'minimum_quantity'  => 1
    		],   

    		[
    			'category_id'	=> 2,
    			'name'			=> 'Quad Biking',
    			'subtitle'		=> 'Quad the experience of a lifetime',
    			'description'	=>	'<p>Join us for the quad experience of a lifetime. After being briefed on the rules of off-road driving and issued with your safety gear, take control of your fully automatic quad bike. Feel the adrenaline rush as the guide leads you through the challenging, sand dunes.  Drive through the golden sand dunes, weaving through the trackless desert, tackling both low and high dunes. Stopping for breaks and soft refreshments before you set off again</p>

                                    <h3>Our Quad Biking Price Includes</h3>
                                    <ul>
                                        <li>Pickup from your hotel or residence in Dubai or Sharjah*</li>
                                        <li>Quad Biking per person</li>
                                        <li>Drop back to your hotel or residence</li>
                                    </ul>

                                    <p>* Pick up for other emirates is available at extra charge</p>',
    			'adult_price'	=>	'380',
    			'child_price'	=>	'0',
    			'has_time_options'	=> 0,
    			'confirm_availability'	=> 0,
                'minimum_quantity'  => 1
    		],      

    		[
    			'category_id'	=> 2,
    			'name'			=> 'Dune Bashing',
    			'subtitle'		=> 'Thrilling Roller Coaster Drive',
    			'description'	=>	'<p>Your journey begins being in a 4x4 wheel drive pick up taking you into the heart of Arabia’s desert where you will experience a thrilling desert roller-coaster drive through the high golden sand dunes,  </p>
                                    <p>Dune bashing in Dubai is a challenging activity through the heavy and solid sand dunes.  Dune bashing is a heartbeat seizing desert safari sport where you ride in a 4x4 land cruiser and runs extremely speedily though the golden desert landscapes of the desert.   </p>

                                    <h3>Our Dune Bashing Price Includes</h3>
                                    <ul>
                                        <li>Pickup from your hotel or residence in Dubai or Sharjah*</li>
                                        <li>Dune Bashing for 1 hour</li>
                                        <li>Drop back to your hotel or residence</li>
                                    </ul>

                                    <p>* Pick up for other emirates is available at extra charge</p>
                                    ',
    			'adult_price'	=>	'250',
    			'child_price'	=>	'120',
    			'has_time_options'	=> 0,
    			'confirm_availability'	=> 0,
                'minimum_quantity'  => 2
    		], 

    		[
    			'category_id'	=> 2,
    			'name'			=> 'Sand Boarding',
    			'subtitle'		=> 'Experience the Exhilarating Rush',
    			'description'	=>	'<p>Experience the exhilarating rush down the steep slopes into the valley below you of the one of the most popular sports in the desert ‘sand boarding’.  Your journey shall commence by travelling in a 4x4 vehicle and go sand boarding on Dubai\'s golden sand dunes. No trip to Dubai is complete without at least one exciting slide down a sand dune!</p>
                                    <h3>Our Sand Boarding Price Includes</h3>

                                    <ul>
                                        <li>Pickup from your hotel or residence in Dubai or Sharjah*</li>
                                        <li>Unlimited Sand Boarding for 1 hour</li>
                                        <li>Drop back to your hotel or residence</li>
                                    </ul>

                                    <p>* Pick up for other emirates is available at extra charge</p>',
    			'adult_price'	=>	'150',
    			'child_price'	=>	'100',
    			'has_time_options'	=> 0,
    			'confirm_availability'	=> 0,
                'minimum_quantity'  => 3
    		],     		         		 		 	

    		[
    			'category_id'	=> 2,
    			'name'			=> 'Camel Ride',
    			'subtitle'		=> 'An adventure whilst experiencing nature',
    			'description'	=>	'<p>The camel is the symbol of any Middle Eastern countries. See how the camels symbolise the values of temperance and patience of Dubai.  Camel riding is not just an attraction but it also symbolises adventure whilst experiencing nature.  Camel riding or camel trek is one of the most popular and exciting activities in the deserts of Dubai. Experience the thrill as the camels walk up and down the desert sand. Camel riding is also fun and exciting as you can also have a race with your friends whilst enjoying the bumpy ride.   This camel riding experience will be the best excursion of your life and this will really make your vacation an unforgettable one. </p>

                                    <h3>Our Camel Riding Price Includes</h3>

                                    <ul>
                                        <li>Pickup from your hotel or residence in Dubai or Sharjah*</li>
                                        <li>Camel Riding</li>
                                        <li>Drop back to your hotel or residence</li>
                                    </ul>

                                    <p>* Pick up for other emirates is available at extra charge</p>',
    			'adult_price'	=>	'370',
    			'child_price'	=>	'370',
    			'has_time_options'	=> 0,
    			'confirm_availability'	=> 0,
                'minimum_quantity'  => 2
    		],  

    		[
    			'category_id'	=> 3,
    			'name'			=> 'Dubai Marina Tour',
    			'subtitle'		=> 'Panoramic Skyline of New Dubai',
    			'description'	=>	'<p>You will be picked up from your hotel and will drive down to Dubai Marina where you will aboard a traditional Arabian Dhow. Viewing the panoramic skyline of New Dubai Cluster observing the high rise buildings around the water from the Arabian sea. </p>

                                    <p>A perfect leisurely way to enjoy the magnificent skyline of the Dubai Marina, Jumeirah Beach  Residence, the stunning architectural design of the International 5 star hotels with their private beaches, the famous 7 Star Burj Al Arab, and world renowned Palm Jumeirah with the mystical Atlantis Hotel.</p>

                                    <h3>Our Dubai Marina Tour Price Includes</h3>

                                    <ul>
                                        <li>View Panormaic skyline of New Dubai Cluster</li>
                                        <li>Cruise Along Dubai Marina, Jumeirah beach residence</li>
                                        <li>View Stunning Architectural designs of International 5* Hotels &amp; their private beaches</li>
                                        <li>View the famous 7* Burj Al Arab, Palm Jumeirah, Atlantis Hotel</li>
                                        <li>Snacks, lunch and soft drinks is extra this is payable upon consumption on the boat</li>
                                        <li>Drop back to your hotel or residence</li>
                                    </ul>

                                    <p>* Transfers are available upon request and at additional charge</p>
                                    ',
    			'adult_price'	=>	'200',
    			'child_price'	=>	'150',
    			'has_time_options'	=> 0,
    			'confirm_availability'	=> 0,
                'minimum_quantity'  => 1
    		],    

    		[
    			'category_id'	=> 3,
    			'name'			=> 'Sightseeing Palm Cruise',
    			'subtitle'		=> 'Panoramic views of Glittering sky scrappers',
    			'description'	=>	'<p>You will be picked up for your cruise experience and will take you to Dubai International Marine Club. A guided Creek cruise to manmade Palm Island, a breath taking palm tree-shaped island set in the sparkling waters of the Persian Gulf. You will View the World Islands (under construction), a man made archipelago of small islands in the shape of a world map.  Panoramic views of the glittering skyscrapers that tower above Dubai Marin also stopping to for a fantastic photo opportunity of the famous 7 star Bur Al Arab.  </p>

                                    <h3>Our Sigh Seeing Palm Cruise Tour Price Includes</h3>

                                    <ul>
                                        <li>View World Islands (under construction)</li>
                                        <li>View Palm Island</li>
                                        <li>Panoramic View of Dubai Marina</li>
                                        <li>Photo Stop - of 7 * Bur Al Arab</li>
                                        <li>Refreshments Included</li>
                                        <li>Drop back to your hotel or residence</li>
                                    </ul>

                                    <p>* Transfers are available upon request and at additional charge</p>
                                    ',
    			'adult_price'	=>	'200',
    			'child_price'	=>	'175',
    			'has_time_options'	=> 0,
    			'confirm_availability'	=> 0,
                'minimum_quantity'  => 1
    		],       

    		[
    			'category_id'	=> 3,
    			'name'			=> 'Dhow Dinner Cruise',
    			'subtitle'		=> 'A moonlight dinner onboard a dhow – Simply Divine',
    			'description'	=>	'<p>Discover the true beauty of Dubai while aboard a traditionally decorated wooden dhow, Viewing Dubai in a panoramic view across the Creek.  The major landmarks in Dubai can be seen.  The past and present architecture of the area is brought to its full beauty during this time, including the National Bank of Dubai, Dubai Chamber of Commerce, Sheikh Saeed\'s house, and the Heritage Village.   </p>
                                    <p>Relax and look at the full moonlight reflecting on you in the open sea, feel the cool sea breeze and dramatic sounds of the sea waves. savour the delicious International buffet dinner with your loved ones and have a memorable evening in Dubai.   Various sorts of entertainment is provided and traditional Arabic background music is played. </p>
                                    
                                    <h3>Our Dhow Dinner Cruise Tour Price Includes</h3>

                                    <ul>
                                        <li>Welcome drinks</li>
                                        <li>Two hours Dhow cruising on Dubai Creek</li>
                                        <li>Soft music entertainment - piped Arabic</li>
                                        <li>Tanoura Dance Show</li>
                                        <li>Horse Show</li>
                                        <li>Magic Show</li>
                                        <li>Folklore Show</li>
                                        <li>Various Live Entertainment</li>
                                        <li>International Buffet - Vegetarian & Non Vegetarian Options</li>
                                        <li>Unlimited soft drinks, mineral water, tea and coffee</li>
                                        <li>Drop back to your hotel or residence</li>
                                    </ul>

                                    <p>* Transfers are available upon request and at additional charge</p>
                                    ',
    			'adult_price'	=>	'200',
    			'child_price'	=>	'180',
    			'has_time_options'	=> 0,
    			'confirm_availability'	=> 0,
                'minimum_quantity'  => 1
    		], 

    		[
    			'category_id'	=> 3,
    			'name'			=> 'Rustar Dhow Dinner Cruise',
    			'subtitle'		=> 'The World’s Biggest Wooden Floating Restaurant',
    			'description'	=>	'<p>Rustar, one of the world\'s largest floating restaurants, is designed to give you all the elements that constitute a memorable evening. </p>

                                    <p>As you drift along the creek and watch the breath taking skyline pass you by in our spacious, air-conditioned luxury, our friendly staff will ensure your night is cheerful and cozy. Our full service bar and delicious 5 star hotel food (catered by the MOVEN PICK Hotel) accompany live entertainment and Henna painting as you relax amongst expertly handcrafted teak decorations. </li>
                                    <p>The Rustar has three separate decks that accommodate different occasions, so you will always be placed in the right atmosphere that suits your desired evening.  </p>
                                    <p>The luxurious dhow has recently been renovated with teak wood to give a unique Arabian flare so that you really can see Dubai how we feel it should be seem. Finishing touches such as the rock waterfall compliment the elegant furnishing and luxurious onboard comfort and style. Furthermore, you can cruise in confidence knowing that our state of the art navigation and safety systems will keep you safe and steady as you drift on by.</p>
                                    <p>Why not celebrate a romantic evening on open seated, air conditioned decks with your loved one, or let your hair down at a party, be it a wedding, birthday or corporate occasion; We can offer of you a full package for events and special occasions.  Seating capacity is 397. </p>

                                    <h3>Our Rustar Dhow Dinner Cruise Tour Price Includes</h3>
                                    <ul>
                                        <li>Pickup from your hotel or residence in Dubai or Sharjah *</li>
                                        <li>Welcome drinks</li>
                                        <li>5 * International Buffet – Veg & Non Veg Options</li>
                                        <li>Unlimited soft drinks, mineral water, tea and coffee</li>
                                        <li>Two hours Dhow cruising on Dubai Creek</li>
                                        <li>Live Singer</li>
                                        <li>Tanoura Dance Show</li>
                                        <li>Horse Dance Show</li>
                                        <li>Henna Painting</li>
                                        <li>Alcohol beverages available at extra cost</li>
                                        <li>Drop back to your hotel or residence</li>
                                    </ul>

                                    <p>* Pick up for other emirates is available at extra charge</p>
                                    ',
    			'adult_price'	=>	'250',
    			'child_price'	=>	'150',
    			'has_time_options'	=> 0,
    			'confirm_availability'	=> 0,
                'minimum_quantity'  => 1
    		], 

    		[
    			'category_id'	=> 4,
    			'name'			=> 'Dubai City Tour',
    			'subtitle'		=> 'Touring the City of Gold',
    			'description'	=>	'<p>Touring through the modern and progressive city of Dubai, Dubai still retains much of its original character with the ancient dhows and creek side not forgetting the wind- towers of the old houses in the Bastakiya District.</p>

                                    <p>The tour starts from the Jumeirah Mosque, which is a landmark of Dubai followed by the Jumeirah Beach, Jumeirah Hotel - the jewel in the crown of Dubai - to Nad Al Sahiba race course where you will see herds of camels. We then make our way to The Zabeel Palace, the family residence of the ruling Al Maktoum family after passing through the little Manhattan (posh area of Dubai with innumerable sky scrapers) and the towering World Trade Centre.</p>

                                    <p>We proceed further to the creek side to see the Skyline of Dubai where you can see the fascinating views of skyscrapers and to Bastakiya, which is the old part of Dubai. Next to visit is the 150 year old Al Fahidi Fort Museum, which shows some interesting artefacts which throw light on Dubai\'s historical links with trading and pearl diving. After the visit to beautifully restored Palace of Sheikh Saeed, the grandfather of present ruler of Dubai you will be dropped at Abra (the ancient water taxi ferry) crossing point from where you cruise along the creek enjoying its beauty.  Finally completing the tour with a visit to thefamous spice souq and gold souq.</p>

                                    <h3>Our Dubai City Tour Price Includes</h3>

                                    <ul>
                                        <li>Pickup from your hotel or residence in Dubai or Sharjah*</li>
                                        <li>Visiting/ drive past - through the following:
                                        <ul>
                                            <li>Dubai Creek</li>
                                            <li>Heritage and Diving Village</li>
                                            <li>Jumeirah Islamic Mosque</li>
                                            <li>Bastakiya</li>
                                            <li>Textile Market</li>
                                            <li>Down Town Dubai</li>
                                            <li>Jumeirah Beach</li>
                                            <li>Burj Khalifa</li>
                                            <li>Rulers Palace</li>
                                            <li>World Islands, Palm Island, Dubai Marina</li>
                                            <li>Burj Al Arab, Madinat Jumeirah(&quot;Venice of Dubai&quot;)</li>
                                            <li>Atlantis Dubai Hotel</li>
                                            <li>Gold Souk &amp; Spice Souk</li>
                                        </ul>
                                        </li>
                                    </ul>

                                    <p>* Pick up for other emirates is available at extra charge</p>
                                    ',
    			'adult_price'	=>	'150',
    			'child_price'	=>	'100',
    			'has_time_options'	=> 0,
    			'confirm_availability'	=> 0,
                'minimum_quantity'  => 1
    		],  

    		[
    			'category_id'	=> 4,
    			'name'			=> 'Abu Dhabi Tour',
    			'subtitle'		=> 'Discover the beautiful capital city of Abu Dhabi',
    			'description'	=>	'<p>Abu Dhabi is the capital and largest of the seven Emirates. Known as the third most beautiful city. Abu Dhabi, or the father of the gazelle as it is known, is situated about 170Kms South West of Dubai. 
On this tour you will learn everything about the oil- the so called "black gold" - and how it has transformed Abu Dhabi into the wealthy city of today.</p>

                                    <p>The first landmark you will visit before reaching the city of Abu Dhabi is the Jebel Ali Port, the biggest man-made port in the world.  The tour continues to the old souk where you can experience the bustle of everyday life and the magnificent Abu Dhabi Corniche up to the end of the breakwater that stretches out into the sea, giving you a splendid view of the city skyline.</p>

                                    <p>You will then visit the Emirates Palace Hotel with 115 towering domes, all encrusted in gold and aquamarine, the ceilings in gold leaf, pillars felted in silver leafs, acres of Italian marble and around 1,000 Swarovski crystal chandeliers</p>

                                    <p>We will then visit the Grand Mosque, Abu Dhabi heritage village.  Our tour ends with a short round at the Dhow Yard where traditional boats are built the same way they have been for hundreds of years.</p>

                                    <h3>Our Abu Dhabi Tour Price Includes</h3>

                                    <ul>
                                        <li>Pickup from your hotel or residence in Dubai or Sharjah *</li>
                                        <li>Visiting/ drive past - through the following:
                                            <ul>
                                                <li>Jebel Ali Port</li>
                                                <li>Abu Dhabi Heritage village</li>
                                                <li>Grand Mosque</li>
                                                <li>Emirates Palace Hotel</li>
                                                <li>Dhow Yard</li>
                                                <li>Abu Dhabi Cornice</li>
                                                <li>Presidential Palace</li>
                                                <li>Old Souk</li>
                                            </ul>
                                        </li>
                                        <li>Refreshments &amp; Soft Drinks</li>
                                    </ul>

                                    <p>* Pick up for other emirates is available at extra charge</p>
                                    ',
    			'adult_price'	=>	'300',
    			'child_price'	=>	'150',
    			'has_time_options'	=> 0,
    			'confirm_availability'	=> 0,
                'minimum_quantity'  => 1
    		], 

    		[
    			'category_id'	=> 4,
    			'name'			=> 'Al Ain City Tour',
    			'subtitle'		=> 'The Garden City of The Gulf',
    			'description'	=>	'<p>Al Ain the largest city in the Eastern Region of the Emirate of Abu Dhabi in the country United Arab Emirates. Home of the UAE University and Known as " The Garden City Of The Gulf ". It is surrounded by magnificent red sand dunes and overlooked by an impressive mountain range. Al Ain is located inland on the United Arab Emirates eastern border.</p>

                                    <p>The tour starts in the morning and we Head towards Al Ain, Boasting the region’s largest oasis. An irrigation coming from the palm tree that supplies the water of each household in Al Ain. We then go to visit  the local Camel Market.  We then head towards Ain Al Faydah, this is located at the bottom of Jebel Hafeet Mountain, many small water falls surround the area.  We then take a drive to Jebel Hafeet which is the home of the UAE’s highest mountain with a 13-kilometre highway. The view from the top provides panoramic perspective of the city and the surrounding areas. We then break for  Lunch at the Grand Mercury Hotel.  This hotel is found in the middle of Jebel Hafeet Mountain. After the relaxing lunch we go to the Al Ain Zoo and then drive to Buraimi which is the border between Al Ain and Oman, finally our last stop before heading back is Al Ain National Museum.</p>

                                    <h3>Our Al Ain City Tour Price Includes</h3>
                                    <ul>
                                        <li>Pickup from your hotel or residence in Dubai or Sharjah*</li>
                                        <li>Lunch and soft drinks</li>
                                        <li>Visiting/ drive past - through the following:
                                            <ul>
                                                <li>Driving through Deserts</li>
                                                <li>Camel Market</li>
                                                <li>Al Ain Museum</li>
                                                <li>Palace of Sheikh Zayed</li>
                                                <li>Al Ain Oasis</li>
                                                <li>Ain Al Faydah</li>
                                                <li>Jebel Hafeet</li>
                                                <li>Green City &ndash; Mubazara</li>
                                                <li>Al Ain Zoo</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <p>* Pick up for other emirates is available at extra charge</p>
                                    ',
    			'adult_price'	=>	'300',
    			'child_price'	=>	'150',
    			'has_time_options'	=> 0,
    			'confirm_availability'	=> 0,
                'minimum_quantity'  => 1
    		],    

    		[
    			'category_id'	=> 4,
    			'name'			=> 'Sharjah & Ajman',
    			'subtitle'		=> 'Magnificent show piece of local heritage',
    			'description'	=>	'<p>Sharjah, the city of Culture is located only a short distance from Dubai. UNESCO has elected Sharjah as the Cultural City of the Arab world for 1998.  Upon arrival, your first stop will be Cultural Palace Square in Al Wahda Road. Having a brief visit to Ajman museum, which is artistically done then passing by Ajman and Sharjah Corniche, known for their white beaches and beachfront merger.  </p>

                                    <p>We then come to the Palace of Sheikh of Sharjah. then drive further to Souq Al Arsah on Corniche Road. It is presumed to be the oldest market place in UAE and was once regarded as heart of the city. After the visit to Souq Al Arsah, you will make your next halt at Blue Souq. Over here you will find as many as 600 colorful shops with latest bargains retailing and wholesaling anything from gold, silver, precious stones to modern jewellery or beautiful carpets and rugs. This is a most famous market in Sharjah and was built in 1979. </p>

                                    <p>We then Drive on to Al Hisn Fort, former home of the Sharjah’s ruling family. Thereafter drive back to Dubai, passing by Buheira Corniche to admire the famous fountain, the third highest water jet in the world.</p>

                                    <h3>Our Sharjah & Ajman Tour Price Includes</h3>

                                    <ul>
                                        <li>Pickup from your hotel or residence in Dubai or Sharjah *</li>
                                        <li>Soft drinks and mineral water</li>
                                        <li>Visiting / drive past - through the following:
                                            <ul>
                                                <li>King Faisal Mosque</li>
                                                <li>Al Ithad Monument</li>
                                                <li>Naboodah House</li>
                                                <li>The Rulers Old Palace</li>
                                                <li>The Natural History Museum and Archaeological museum</li>
                                                <li>Majarrah Souk &amp; Blue Souk</li>
                                                <li>Ajman</li>
                                            </ul>
                                        </li>
                                    </ul>

                                    <p>* Pick up for other emirates is available at extra charge</p>
                                    ',
    			'adult_price'	=>	'200',
    			'child_price'	=>	'100',
    			'has_time_options'	=> 0,
    			'confirm_availability'	=> 0,
                'minimum_quantity'  => 1
    		],        		 		     		   		    		          		 		  		   		         		 		 	

    		[
    			'category_id'	=> 4,
    			'name'			=> 'East Coast (Fujairah) Tour',
    			'subtitle'		=> 'A Cultural Experience',
    			'description'	=>	'<p>This full day tour takes you away from the hustle and bustle of the city. The journey begins through the Lush-green from Lands in the valleys of the Hajjar Mountains which consists of contrasting colors.  We pass through the neighbouring Emirate of Sharjah and the EASTERN SIGHTS of the oasis of AL Dhaid, weekend market of Masafi, mountains of Dibba, the fishing village of Fujairah and the ocean at Khorfakkan.</p>

                                    <p>We first  stop at the oasis of AL Dhaid to photograph the palm Lands and strawberry gardens. We proceed with the journey to the weekend at Masafi. We pass through the multi-colored mountain scapes and riverbeds and reach the village of Dibba after which we reach Bidayah. We then make our way to the oldest mosque in the U.A.E, proceeding our journey to Khorfakkan, situated at the foothills of the Khorfakkan Mountains. </p>

                                    <p>In Khorfakkan we relax in a coastal Restaurant, Optional facilities of fishing and water sports of snorkeling, wind surfing and water skiing, rowing, cycling and even camel riding at the beach can be arranged on prior request. </p>

                                    <p>After the lunch we relax at the poolside and proceed to Fujairah. We pass through the remnants of the ancient Fujairah Fort. On our way back we stop at a small Local Souq from where we can buy locally harvested fresh fruits and vegetables. Persian rugs, carpets and Local made potteries are also available there. </p>

                                    <h3>Our East Coast (Fujaira) Tour Price Includes</h3>
                                    <ul>
                                        <li>Pickup from your hotel or residence in Dubai or Sharjah *</li>
                                        <li>Soft Drinks &amp; Mineral Water</li>
                                        <li>Visiting/ drive past - through the following:
                                            <ul>
                                                <li>Oasis of AL Dhaid Al Ithad Monument</li>
                                                <li>Market of Masafi</li>
                                                <li>Mountains of Dibba</li>
                                                <li>Fishing village of Fujairah</li>
                                                <li>Ocean at Khorfakkan</li>
                                            </ul>
                                        </li>
                                    </ul>

                                    <p>*Pick up from other emirates is available at extra charge</p>
                                    ',
    			'adult_price'	=>	'300',
    			'child_price'	=>	'150',
    			'has_time_options'	=> 0,
    			'confirm_availability'	=> 0,
                'minimum_quantity'  => 1
    		],

    		[
    			'category_id'	=> 4,
    			'name'			=> 'Khasab Tour - Musandam (Oman)',
    			'subtitle'		=> 'A Calm Oasis & Village',
    			'description'	=>	'<p>Enjoy an unforgettable day cruising along the “Fjords of Musandam”  & “Coastline of Musandam” on board our traditionally decorated Omani Dhow  feasting your eyes on the striking scenery.  A Dhow trip to the fjords offers an insight into its fantastic landscape. During the Dhow cruise, you will cruise into the Straits of Hormuz and discover different villages through the majestic 16 km fjord (Khor). The Dhow will anchor at various places including the famous Telegraph Island, where you can swim and snorkel in the clear waters, there is also the possibility to see dolphins during on the way. A buffet Lunch and  refreshments are provided.</p>

                                    <h3>Our Khasab Musandam (Oman) Tour Price Includes</h3>

                                    <ul>
                                        <li>Pickup from your hotel or residence in Dubai or Sharjah *</li>
                                        <li>Buffet Lunch, Soft Drinks &amp; Mineral Water</li>
                                        <li>Dhow Cruise</li>
                                        <li>Snorkeling</li>
                                        <li>See Dolphins</li>
                                        <li>Cruising to the Fjords</li>
                                        <li>Fishing village</li>
                                        <li>Tour of Khasab Town</li>
                                        <li>See the Telegraph Island</li>
                                    </ul>

                                    <p>*Pick up from other emirates is available at extra charge</p>
                                    ',
    			'adult_price'	=>	'495',
    			'child_price'	=>	'350',
    			'has_time_options'	=> 0,
    			'confirm_availability'	=> 0,
                'minimum_quantity'  => 1
    		],    

    		[
    			'category_id'	=> 4,
    			'name'			=> 'Hatta Mountain Trek Tour',
    			'subtitle'		=> 'Ultimate Location for Endurance Driving',
    			'description'	=>	'<p>An early departure in a 4X4 vehicle we will proceed along the road until we reach the mountains. Here you will have an adventurous drive through the rocky landscape.   After an hour  of  driving it will  be rewarded by scenes of great and unexpected beauty as we pass big and small Wadis and we cross lush landscape, which is surrounding the small settlements and villages deep in the mountains. </p>

                                    <p> At Hatta we take this opportunity to explore the local heritage village and the Portuguese Fort, which was built in the 16th century. After which we embark on a thrilling drive through wadis-ancient dried up rivers to reach the cool mountain pools. A swim in one of those Wadis will give you a nice refreshment in the winter month  - Don’t forget to brink you swimming suits and towels should you fancy a dip. On the way back to Dubai we stop at one of those popular street markets, where you can find local carpets and potteries. </p>

                                    <h3>Our Hatta Mountain Trek Tour Price Includes</h3>

                                    <ul>
                                        <li>Pickup from your hotel or residence in Dubai or Sharjah *</li>
                                        <li>Hatta tracking</li>
                                        <li>Mountain Safari</li>
                                        <li>Hatta Heritage Village</li>
                                        <li>Hatta Fort Hotel</li>
                                        <li>Lunch (optional) - not included in price</li>
                                        <li>Visit of carpet market</li>
                                    </ul>

                                    <p>*Pick up from other emirates is available at extra charge</p>
                                    ',
    			'adult_price'	=>	'350',
    			'child_price'	=>	'250',
    			'has_time_options'	=> 0,
    			'confirm_availability'	=> 0,
                'minimum_quantity'  => 1
    		],        				        		 		     		   		    		          		 		  		   		         		 		 	

    		[
    			'category_id'	=> 5,
    			'name'			=> 'Wonder Bus Tours',
    			'subtitle'		=> 'A sea & Land Adventure',
    			'description'	=>	'<p>Wonder Bus is the most recently introduced Dubai Tour Program.</p>

                                    <p>The Wonder Bus is manufactured in New York State. This amphibious bus is brand new state of the art and is approved by US coast guard and Emirates Marine Services Dubai. The total number of passenger capacity is 44. The bus is having comfortable & spacious seats, for passenger comfort and a large TV screen inside the bus with a tour guide fluent in English and Arabic.</p>

                                    <p>With unparalleled excitement, you are transported from land to sea, while seating on same seat. The wonder Bus cruises Dubai Creek in the most beautiful trip you ever dreamed of. In this trip you\'ll see the beautiful architectures and the historic buildings on the both shores of the creek. The Amphibious Wonder Bus design and build makes your dream come true in magical scenes, with internal air-conditioning and decor that shows our assurance in providing a comfortable surrounding that meets your expectations.</p>

                                    <h3>Tour Policy</h3>
                                    <p>You must arrive 30 minutes prior to the scheduled departure.  Seating will not be guaranteed if you arrive later than your scheduled time.  (30 minutes before tour)</p>

                                    <h3>Our Wonder Bus Tour Price Includes</h3>
                                    <ul>
                                        <li>Amphibious bus tour of Dubai Mountain Safari</li>
                                        <li>Transported from Land to Sea</li>
                                        <li>View sights of city</li>
                                    </ul>
                                    ',
    			'adult_price'	=>	'145',
    			'child_price'	=>	'95',
    			'has_time_options'	=> 0,
    			'confirm_availability'	=> 0,
                'minimum_quantity'  => 1
    		],     

            [
                'category_id'   => 5,
                'name'          => 'Big Bus Tours',
                'subtitle'      => 'Hop on & Hop Off',
                'description'   =>  '<p>The Big Bus Tour is a hop-on, hop-off sightseeing tour of Dubai, with a personal recorded commentary available in 8 languages.</p>

                                    <p>The Tour’s two routes, the Beach Tour and the City Tour, provide the perfect orientation of Dubai. You can hop on and off as many times as you wish and explore more than twenty places of interest, discovering everything from the world famous Burj Al Arab to traditional gold and spice souks.</p>

                                    <p>To suit your itinerary, you can choose either a 24-hour or a 48-hour ticket, affording you plenty of time to visit all the attractions that interest you. Our fleet of purpose built vehicles enables you to interchange between the air-conditioned fore-cabin or open-air seating at the rear.</p>

                                    <p>We are also pleased to provide several free inclusions with your ticket: a Dhow Cruise on Dubai Creek, entry to Dubai Museum and entry to Sheikh Saeed Al Maktoum’s House, making the Big Bus Tour your perfect introduction to Dubai</p>

                                    <h3>Our Big Bus Tour Price Includes</h3>

                                    <ul>
                                        <li>All the Famous Landmark</li>
                                        <li>Hop-on, Hop-off Facility</li>
                                        <li>Recorded commentary in a choice of languages</li>
                                        <li>Air-conditioned vehicles</li>
                                        <li>Free Arabian Dhow Cruise</li>
                                        <li>Free entry to Sheikh Saeed Al Maktoum&#39;s House</li>
                                        <li>Free wafi welcome cards offering various discounts at over 150 shops</li>
                                        <li>Free single ticket for the RTA water bus, the only airconditioned way to cross the creek by boat</li>
                                        <li>Free Mercato Advantage Booklet offering from 10% to 50 % discount at various shops &amp; restaurants</li>
                                    </ul>
                                    ',
                'adult_price'   =>  '220',
                'child_price'   =>  '100',
                'has_time_options'  => 0,
                'confirm_availability'  => 0,
                'minimum_quantity'  => 1
            ],  

            [
                'category_id'   => 6,
                'name'          => 'Sea Wings Pearl Tour',
                'subtitle'      => 'See Dubai as you’ve never seen it before',
                'description'   =>  '<p>A Seaplane Spectacular - There is no substitute for the experience of a trip in a seaplane. When this unusual and exciting experience is combined with the spectacle of one of the world\'s most dynamic and exciting cities, it results in the memory of a lifetime, the most fantastic photographic opportunities, and truly spectacular seaplane ride. This tour offers you one of the most spectacular seaplane tours available in the world today, a magical journey across Dubai\'s dramatic and ever-changing coastal skyline.</p>

                                    <h3>Coastal Pearl Tour – (30 Minutes)</h3>
                                    <p>Named to commemorate Dubai’s historic pearling heritage, this tour starts as you gently exit the harbor where you marvel at Dubai’s breath-taking collection of sights. After passing the outstanding Dubai Marina you are treated to a birds eye view of the world-famous ‘The Palm Jumeirah’, then onto the ‘seven star’ Burj Al Arab hotel, before moving inland to Downtown Dubai and past the Burj Dubai the world’s tallest building, followed by views of ‘The World’ islands, before heading back along the coastline for a second pass and a gentle splash back down to earth.</p>

                                    <h3>Our Sea Wing Pearl Tour Price Includes</h3>
                                    <ul>
                                        <li>Take off at Jebel Ali Golf Resort</li>
                                        <li>Jebel Ali Palm</li>
                                        <li>The World Islands</li>
                                        <li>Burj Al Arab</li>
                                        <li>The Palm Atlantis</li>
                                        <li>Burj Dubai &amp;&nbsp;back to Jebel Ali Golf Resort</li>
                                    </ul>

                                    <h3>Other Information</h3>
                                    <ul>
                                        <li>All tours are subject to weather conditions</li>
                                        <li>Routing is subject to change</li>
                                        <li>All passengers are requested to have their original passport with them.</li>
                                        <li>Infants will be free of charge for all flights</li>
                                        <li>This tour does not have pick up and drop off (except Gold Tour)</li>
                                        <li>Check in 30 min prior to departure </li>
                                        <li>No baggage allowed to be carried on board</li>
                                        <li>Original passports required on the day of flight for all passengers</li>
                                        <li>Flight Certificates will be awarded at the end of the flight</li>
                                        <li>Take-off & landing from Cruise Terminal is available upon request</li>
                                    </ul>
                                    ',
                'adult_price'   =>  '0',
                'child_price'   =>  '0',
                'has_time_options'  => 0,
                'confirm_availability'  => 1,
                'minimum_quantity'  => 1
            ],    

            [
                'category_id'   => 6,
                'name'          => 'Sea Wings Silver Tour',
                'subtitle'      => 'See Dubai as you’ve never seen it before',
                'description'   =>  '<p>A Seaplane Spectacular - There is no substitute for the experience of a trip in a seaplane. When this unusual and exciting experience is combined with the spectacle of one of the world&#39;s most dynamic and exciting cities, it results in the memory of a lifetime, the most fantastic photographic opportunities, and truly spectacular seaplane ride. This tour offers you one of the most spectacular seaplane tours available in the world today, a magical journey across Dubai&#39;s dramatic and ever-changing coastal skyline.</p>

                                    <h3>Coastal Silver Tour - (40 Minutes)</h3>

                                    <p>This tour is designed to give you exceptional views of Dubai’s coastal sights and heritage creek. We will take you on an extended 40 minutes seaplane experience, passing the outstanding Dubai Marina followed by ‘The Palm Jumeirah’, and the ‘seven star’ Burj Al Arab hotel, before moving inland to Downtown Dubai and past the Burj Dubai, the world’s tallest building. We then fly you along Dubai Creek, before taking you back over ‘The World’ islands, and back along the coastline for a second pass and a water landing and so back to earth.</p>

                                    <h3>Our Sea Wing Silver Tour Price Includes</h3>
                                    <ul>
                                        <li>Take off at Jebel Ali Golf Resort</li>
                                        <li>Dubai Creek</li>
                                        <li>Port Rashid</li>
                                        <li>Jebel Ali Palm</li>
                                        <li>The World Islands</li>
                                        <li>Burj Al Arab</li>
                                        <li>The Palm Atlantis</li>
                                        <li>Emirates Golf Club</li>
                                        <li>Mall of Emirates</li>
                                        <li>Burj Dubai &amp; Business Bay</li>
                                        <li>Camel Race Track</li>
                                        <li>Nadd Al Sheeba Race Track</li>
                                        <li>Dubai Industrial Area &amp;&nbsp;back to Jebel Ali Golf Resort</li>
                                    </ul>

                                    <h3>Additional Information</h3>
                                    <ul>
                                        <li>All tours are subject to weather conditions</li>
                                        <li>Routing is subject to change</li>
                                        <li>All passengers are requested to have their original passport with them</li>
                                        <li>Infants will be free of charge for all flights</li>
                                        <li>This tour does not have pick up and drop off (except Gold Tour)</li>
                                        <li>Check in 30 min prior to departure</li>
                                        <li>No baggage allowed to be carried on board</li>
                                        <li>Original passports required on the day of flight for all passengers</li>
                                        <li>Flight Certificates will be awarded at the end of the flight</li>
                                        <li>Take-off &amp; landing from Cruise Terminal is available upon request</li>
                                    </ul>
                                    ',
                'adult_price'   =>  '0',
                'child_price'   =>  '0',
                'has_time_options'  => 0,
                'confirm_availability'  => 1,
                'minimum_quantity'  => 1
            ], 

            [
                'category_id'   => 6,
                'name'          => 'Sea Wings Gold Tour',
                'subtitle'      => 'See Dubai as you’ve never seen it before',
                'description'   =>  '<p>A Seaplane Spectacular - There is no substitute for the experience of a trip in a seaplane. When this unusual and exciting experience is combined with the spectacle of one of the world&#39;s most dynamic and exciting cities, it results in the memory of a lifetime, the most fantastic photographic opportunities, and truly spectacular seaplane ride. This tour offers you one of the most spectacular seaplane tours available in the world today, a magical journey across Dubai&#39;s dramatic and ever-changing coastal skyline.</p>

                                    <h3>Coastal Gold Tour - (50-60 Minutes)</h3>
                                    <p>This tour is designed, like Dubai’s thriving Gold trade, for those looking for that special treat. This private flight (for up to nine people) provides you with some exceptional extras: an extended 40 minute tour, a door-to-door limousine pick-up and drop-off service and in-transit refreshments. You’ll enjoy all of the sights and thrills of the Coastal Pearl tour plus an additional 10 minutes of flight to take in the historic sights of the Dubai Creek.</p>

                                    <h3>Our Sea Wing Gold Tour Price Includes</h3>
                                    <ul>
                                        <li>Door to door limousine pick up</li>
                                        <li>In Transit Refreshments</li>
                                        <li>Take off at Jebel Ali Golf Resort</li>
                                        <li>Dubai Creek</li>
                                        <li>Port Rashid</li>
                                        <li>Union Square</li>
                                        <li>Jebel Ali Palm</li>
                                        <li>The World Islands</li>
                                        <li>Burj Al Arab</li>
                                        <li>The Palm Atlantis</li>
                                        <li>Emirates Golf Club</li>
                                        <li>Mall of Emirates</li>
                                        <li>Burj Dubai &amp; Business Bay</li>
                                        <li>Camel Race Track</li>
                                        <li>Nadd Al Sheeba Race Track</li>
                                        <li>Historic sights of the Dubai Creek</li>
                                        <li>Dubai Industrial Area &amp;&nbsp;back to Jebel Ali Golf Resort</li>
                                    </ul>

                                    <h3>Additional Information</h3>
                                    <ul>
                                        <li>All tours are subject to weather conditions</li>
                                        <li>Routing is subject to change</li>
                                        <li>All passengers are requested to have their original passport with them</li>
                                        <li>Infants will be free of charge for all flights</li>
                                        <li>This tour does not have pick up and drop off (except Gold Tour)</li>
                                        <li>Check in 30 min prior to departure</li>
                                        <li>No baggage allowed to be carried on board</li>
                                        <li>Original passports required on the day of flight for all passengers</li>
                                        <li>Flight Certificates will be awarded at the end of the flight</li>
                                        <li>Take-off &amp; landing from Cruise Terminal is available upon request</li>
                                    </ul>
                                    ',
                'adult_price'   =>  '0',
                'child_price'   =>  '0',
                'has_time_options'  => 0,
                'confirm_availability'  => 1,
                'minimum_quantity'  => 1
            ], 

            [
                'category_id'   => 6,
                'name'          => 'Helicopter Tour - 15 Minutes',
                'subtitle'      => 'An Enchanting Birds eye view',
                'description'   =>  '<p>Helicopter flights offer a unique way to see Dubai city. Dubai with its beautiful desert landscape and high rise buildings is a very enchanting sight when viewed from above. Its 21st century high rise buildings leave you spellbound.  The difference between the desert and the city will bring home the point how much the city has developed in the recent years.  The unique shapes of many of the buildings will leave you enchantedThere are helicopter flights of different durations 15, 25, 45 & 60 minute Tours.  The highlights being The Atlantis The Palm, Burj Al-Arab, The World Islands, Union Square, Sheik Zayed  Road,  Burj Khalifa, Mall or the Emirates   (Ski Dubai), Dubai Marina, Jumeirah Islands, Emirates Golf Club, Palm Jumeirah and back to Atlantis.</p>

                                    <h3>Our 15 Minute Helicopter Tour Price Includes</h3>

                                    <ul>
                                        <li>Take off at Atlantis The Palm</li>
                                        <li>The Palm</li>
                                        <li>Sheikh Zayed Road</li>
                                        <li>Union Square</li>
                                        <li>Burj Khalia</li>
                                        <li>The World Islands</li>
                                        <li>Burj Al Arab</li>
                                        <li>The Palm Atlantis</li>
                                        <li>Dubai Marina</li>
                                        <li>Mall of Emirates</li>
                                        <li>Jumeirah Islands</li>
                                        <li>Emirates Golf Club</li>
                                        <li>Back to Atlantis</li>
                                    </ul>

                                    <h3>Additional Information</h3>
                                    <ul>
                                        <li>This tour does not have pick up and drop off</li>
                                        <li>Check in 45 min prior to departure</li>
                                        <li>No baggage allowed to be carried on board</li>
                                        <li>Clear copy of passport or ID is required on the day of flight</li>
                                        <li>Children under 3 years old not allowed</li>
                                    </ul>

                                    <p>* Transfers is not included – Transfers are available on request</p>
                                    ',
                'adult_price'   =>  '0',
                'child_price'   =>  '0',
                'has_time_options'  => 0,
                'confirm_availability'  => 1,
                'minimum_quantity'  => 1
            ],  

            [
                'category_id'   => 6,
                'name'          => 'Helicopter Tour - 25 Minutes',
                'subtitle'      => 'An Enchanting Birds eye view',
                'description'   =>  '<p>Helicopter flights offer a unique way to see Dubai city. Dubai with its beautiful desert landscape and high rise buildings is a very enchanting sight when viewed from above. Its 21st century high rise buildings leave you spellbound.  The difference between the desert and the city will bring home the point how much the city has developed in the recent years.  The unique shapes of many of the buildings will leave you enchantedThere are helicopter flights of different durations 15, 25, 45 & 60 minute Tours.  The highlights being The Atlantis The Palm, Burj Al-Arab, The World Islands, Union Square, Sheik Zayed  Road,  Burj Khalifa, Mall or the Emirates   (Ski Dubai), Dubai Marina, Jumeirah Islands, Emirates Golf Club, Palm Jumeirah and back to Atlantis.</p>

                                    <h3>Our 25 Minute Helicopter Tour Price Includes</h3>

                                    <ul>
                                        <li>Take off at Atlantis The Palm</li>
                                        <li>The Palm</li>
                                        <li>Sheikh Zayed Road</li>
                                        <li>Port Rashid</li>
                                        <li>Camel Race Track</li>
                                        <li>Naad Al Sheeba Race Track</li>
                                        <li>Emirates Golf Club</li>
                                        <li>Union Square</li>
                                        <li>Burj Khalia</li>
                                        <li>The World Islands</li>
                                        <li>Burj Al Arab</li>
                                        <li>The Palm Atlantis</li>
                                        <li>Dubai Marina</li>
                                        <li>Mall of Emirates</li>
                                        <li>Jumeirah Islands</li>
                                        <li>Emirates Golf Club</li>
                                        <li>Back to Atlantis</li>
                                    </ul>

                                    <h3>Additional Information</h3>
                                    <ul>
                                        <li>This tour does not have pick up and drop off</li>
                                        <li>Check in 45 min prior to departure</li>
                                        <li>No baggage allowed to be carried on board</li>
                                        <li>Clear copy of passport or ID is required on the day of flight</li>
                                        <li>Children under 3 years old not allowed</li>
                                    </ul>

                                    <p>* Transfers is not included – Transfers are available on request</p>
                                    ',
                'adult_price'   =>  '0',
                'child_price'   =>  '0',
                'has_time_options'  => 0,
                'confirm_availability'  => 1,
                'minimum_quantity'  => 1
            ],  

            [
                'category_id'   => 6,
                'name'          => 'Helicopter Tour - 45 Minutes',
                'subtitle'      => 'An Enchanting Birds eye view',
                'description'   =>  '<p>Helicopter flights offer a unique way to see Dubai city. Dubai with its beautiful desert landscape and high rise buildings is a very enchanting sight when viewed from above. Its 21st century high rise buildings leave you spellbound.  The difference between the desert and the city will bring home the point how much the city has developed in the recent years.  The unique shapes of many of the buildings will leave you enchantedThere are helicopter flights of different durations 15, 25, 45 & 60 minute Tours.  The highlights being The Atlantis The Palm, Burj Al-Arab, The World Islands, Union Square, Sheik Zayed  Road,  Burj Khalifa, Mall or the Emirates   (Ski Dubai), Dubai Marina, Jumeirah Islands, Emirates Golf Club, Palm Jumeirah and back to Atlantis.</p>

                                    <h3>Our 45 Minute Helicopter Tour Price Includes</h3>

                                    <ul>
                                        <li>Take off at Atlantis The Palm</li>
                                        <li>The Palm</li>
                                        <li>Sheikh Zayed Road</li>
                                        <li>Port Rashid</li>
                                        <li>Camel Race Track</li>
                                        <li>Naad Al Sheeba Race Track</li>
                                        <li>Emirates Golf Club</li>
                                        <li>Union Square</li>
                                        <li>Burj Khalia</li>
                                        <li>The World Islands</li>
                                        <li>Burj Al Arab</li>
                                        <li>The Palm Atlantis</li>
                                        <li>Dubai Marina</li>
                                        <li>Mall of Emirates</li>
                                        <li>Jumeirah Islands</li>
                                        <li>Emirates Golf Club</li>
                                        <li>Palm Jebel Ali</li>
                                        <li>Jebel Ali New Airport</li>
                                        <li>Jebel Ali Port</li>
                                        <li>Back to Atlantis</li>
                                    </ul>

                                    <h3>Additional Information</h3>
                                    <ul>
                                        <li>This tour does not have pick up and drop off</li>
                                        <li>Check in 45 min prior to departure</li>
                                        <li>No baggage allowed to be carried on board</li>
                                        <li>Clear copy of passport or ID is required on the day of flight</li>
                                        <li>Children under 3 years old not allowed</li>
                                    </ul>

                                    <p>* Transfers is not included – Transfers are available on request</p>
                                    ',
                'adult_price'   =>  '0',
                'child_price'   =>  '0',
                'has_time_options'  => 0,
                'confirm_availability'  => 1,
                'minimum_quantity'  => 1
            ],  

            [
                'category_id'   => 6,
                'name'          => 'Helicopter Tour - 60 Minutes',
                'subtitle'      => 'An Enchanting Birds eye view',
                'description'   =>  '<p>Helicopter flights offer a unique way to see Dubai city. Dubai with its beautiful desert landscape and high rise buildings is a very enchanting sight when viewed from above. Its 21st century high rise buildings leave you spellbound.  The difference between the desert and the city will bring home the point how much the city has developed in the recent years.  The unique shapes of many of the buildings will leave you enchantedThere are helicopter flights of different durations 15, 25, 45 & 60 minute Tours.  The highlights being The Atlantis The Palm, Burj Al-Arab, The World Islands, Union Square, Sheik Zayed  Road,  Burj Khalifa, Mall or the Emirates   (Ski Dubai), Dubai Marina, Jumeirah Islands, Emirates Golf Club, Palm Jumeirah and back to Atlantis.</p>

                                    <h3>Our 60 Minutes Helicopter Tour Price Includes</h3>

                                    <ul>
                                        <li>Take off at Atlantis The Palm</li>
                                        <li>The Palm</li>
                                        <li>Sheikh Zayed Road</li>
                                        <li>Port Rashid</li>
                                        <li>Camel Race Track</li>
                                        <li>Naad Al Sheeba Race Track</li>
                                        <li>Emirates Golf Club</li>
                                        <li>Union Square</li>
                                        <li>Burj Khalia</li>
                                        <li>The World Islands</li>
                                        <li>Burj Al Arab</li>
                                        <li>The Palm Atlantis</li>
                                        <li>Dubai Marina</li>
                                        <li>Mall of Emirates</li>
                                        <li>Jumeirah Islands</li>
                                        <li>Emirates Golf Club</li>
                                        <li>Palm Jebel Ali</li>
                                        <li>Jebel Ali New Airport</li>
                                        <li>Jebel Ali Port</li>
                                        <li>Dubai Sports City</li>
                                        <li>Dubai Land</li>
                                        <li>Back to Atlantis</li>
                                    </ul>

                                    <h3>Additional Information</h3>
                                    <ul>
                                        <li>This tour does not have pick up and drop off</li>
                                        <li>Check in 45 min prior to departure</li>
                                        <li>No baggage allowed to be carried on board</li>
                                        <li>Clear copy of passport or ID is required on the day of flight</li>
                                        <li>Children under 3 years old not allowed</li>
                                    </ul>

                                    <p>* Transfers is not included – Transfers are available on request</p>
                                    ',
                'adult_price'   =>  '0',
                'child_price'   =>  '0',
                'has_time_options'  => 0,
                'confirm_availability'  => 1,
                'minimum_quantity'  => 1
            ],  

            [
                'category_id'   => 6,
                'name'          => 'Hot Air Balloon Ride',
                'subtitle'      => 'Out of this World Experience',
                'description'   =>  '<p>There is no better way to view the amazing desert landscape and the awesome desert dawn than from the vantage point of a gently floating hot air balloon.  Experience a wonderful, tranquil balloon ride with only the occasional blast of the gas burner to disturb the peace. The balloon rides take place over the beautiful red desert sands near Fossil Rock between Dubai and Hatta. </p>
                                    <p>The Best time for the flights is at sunrise, feel the cool dawn air as you float only a few meters above the red dunes, then be awestruck as the mesmerizing landscape unfolds below you. View the giant dunes, the moon-like landscape of the rugged Hajj mountains to the east, and the "21st century" skyline of Dubai to the west as you rise high into the immense blue of the desert sky.<p>
                                    <p>Whether you are on holiday in Dubai or a local, the views on offer from our hot air balloon rides will take you to new levels of appreciation and awe of the desert and it\'s unique landscape</p>
                                    
                                    <h3>Our Hot Air Balloon Ride Price Includes</h3>
                                    <ul>
                                        <li>Pickup from your hotel or residence in Dubai or Sharjah *</li>
                                        <li>Approximately 1 hour ride</li>
                                        <li>Flight Certificate Signed by pilot</li>
                                        <li>Light Refreshments after the ride</li>
                                    </ul>

                                    <p>*Pick up from other emirates is available at extra charge</p>
                                    ',
                'adult_price'   =>  '0',
                'child_price'   =>  '0',
                'has_time_options'  => 0,
                'confirm_availability'  => 1,
                'minimum_quantity'  => 1
            ],     

            [
                'category_id'   => 6,
                'name'          => 'Sky Diving Tour',
                'subtitle'      => 'Experience the world beneath you',
                'description'   =>  '<p>Tandem Skydiving is the safest way to experience skydiving for the first time. Give your self an ultimate experience of your life, step outside the box and do something astonishing and amusing. Allow yourself to experience the world beneath you while you\'re flying up high in the blue sky like a bird. </p>

                                    <p>Start your daring experience by a full safety briefing, about the free fall and the landing. Then climb up to a height of 13,000 feet up, enjoy the beautiful view of the surrounding around you. You and your instructor will be using one large parachute; it is an ideal way where you can enjoy the thrill of skydiving. After you jump, your instructor will control the descent, open the parachute and control the landing, while you enjoy thrilling jump at the same time all the way long you will be filmed by a cameraman so you can cherish your experience for years to come.<,/p>

                                    <h3>Our Sky Diving Price Includes</h3>
                                    <ul>
                                        <li>Sky Diving Jump with a fully trained instructor</li>
                                        <li>Receive a record of your thrilling experience on a DVD</li>
                                        <li>Amazing view from a height up to 13,000 feet</li>
                                    </ul>
                                    ',
                'adult_price'   =>  '0',
                'child_price'   =>  '0',
                'has_time_options'  => 0,
                'confirm_availability'  => 1,
                'minimum_quantity'  => 1
            ],  

            [
                'category_id'   => 7,
                'name'          => 'Deep Sea Fishing',
                'subtitle'      => 'The catch of the day',
                'description'   =>  '<p>Experience the joy of fishing on board our well-equipped fishing boat. Our expert skipper will steer you through the best fishing grounds of the Arabian Gulf. You will travel further offshore to deeper water and produce where there is a wider variety of fish.  You will be treated to some of the best natural scenery just minutes after stepping into our boat.  You will also gain a wonderful opportunity to catch the prized King fish, Tuna, Barracuda, Red Snapper or even a Shark. And if luck is on your side you will even be able to catch the elusive Gulf Sail Fish.</p>

                                    <p>Most of our fishing trips are designed with light tackle sport fishing in mind and we generally encourage "catch and release".  However we do not object to you taking home the fresh catch of fish to enjoy.</p>

                                    <h3>Our Deep Sea Fishin Price Includes</h3>
                                    <ul>
                                        <li>Pickup from your hotel or residence in Dubai or Sharjah *</li>
                                        <li>Experience Deep Sea Fishing</li>
                                        <li>Professional skipper and crew on board</li>
                                        <li>Fishing equipment provided</li>
                                        <li>Light Refreshments</li>
                                        <li>Take home your very own fresh catch of the day</li>
                                    </ul>

                                    <p>*Pick up from other emirates is available at extra charge</p>
                                    ',
                'adult_price'   =>  '0',
                'child_price'   =>  '0',
                'has_time_options'  => 0,
                'confirm_availability'  => 1,
                'minimum_quantity'  => 1
            ],   

            [
                'category_id'   => 7,
                'name'          => 'Crab Hunting',
                'subtitle'      => 'A Rare Crab hunting Programme',
                'description'   =>  '<p>Enjoy this extraordinary tour in Umm Al Quwain.   Our skilled tour guides on glass boats will ferry you to natural mangroves abundant with crab with special underwater lights, you will experience a rare crab-hunting program. The adventure climaxes when your catch is cooked in front of you on the shore as a reward in the barbeque night buffet. The entire program is ferried in the night at low tides so even children can try their skills.</p>
                                    <h3>Clothing & Footwear</h3>
                                    <ul>
                                        <li>Swimwear/Beachwear (to be brought along with Guest)  </li>
                                        <li>Water-resistant slip-ons (can be rented at the resort)</li>
                                    </ul>

                                    <h3>Our Crab Hunting Price Includes</h3>
                                    <ul>
                                        <li>Light Refreshments upon arrival</li>
                                        <li>Crab Hunting</li>
                                        <li>Dinner Buffet Service consisting of Continental Menu Items and Catch of the Day Crab Dish</li>
                                        <li>Unlimited soft drinks</li>
                                    </ul>
                                    ',
                'adult_price'   =>  '0',
                'child_price'   =>  '0',
                'has_time_options'  => 0,
                'confirm_availability'  => 1,
                'minimum_quantity'  => 1
            ], 

            [
                'category_id'   => 8,
                'name'          => 'Wild Wadi',
                'subtitle'      => 'Wild Water Adventures',
                'description'   =>  '<p>Wild Wadi Waterpark is designed to offer hours of fun and pleasure to thrill-seekers and families. There are many attractions and rides, bech rest areas, minin water park fun for toddlers.  The unforgettable adventure awaits you in the world\'s most advanced water theme park. Wild Wadi is situated between Burj Al Arab and the Jumeirah Beach Hotel. With state-of-the-art rides, including 8 Master Blaster and 2 Flow Riders, the Wild Wadi is packed with thrills and spills for children of all ages</p>

                                    <h3>The Rides at Wild Wadi</h3>

                                    <p><strong>Jumeirah Sceirah</strong> - This ride is the tallest and fastest free-fall water slide outside of North America. Rising to 33 meters (108 feet) and thrusting riders up to 80 KMs per hour, make it a great experience for thrill-seekers.</p>

                                    <p><strong>Master Blaster</strong> - With 8 Master Blaster slides in Wild Wadi that are described as uphill water roller coasters, where riders can sit on either a single or double ring, which are propelled uphill by high-powered water jets.</p>

                                    <p><strong>Ring Rides</strong> - Wild Wadi Dubai contains 7 Ring Rides that are described as downhill gravity slides, where riders sit in either a single or double ring sliding down fast to the bottom of the slide.</p>

                                    <h3>Our Wild Wadi Price Includes</h3>

                                    <ul>
                                        <li>Pickup from your hotel or residence in Dubai or Sharjah *</li>
                                        <li>Wild Wadi Entrance Ticket</li>
                                        <li>Rides &amp; Attractions</li>
                                    </ul>
                                    ',
                'adult_price'   =>  '275',
                'child_price'   =>  '215',
                'has_time_options'  => 0,
                'confirm_availability'  => 0,
                'minimum_quantity'  => 1
            ],  

            [
                'category_id'   => 8,
                'name'          => 'Atlantis Aqua Adventure',
                'subtitle'      => 'An Aqua venture',
                'description'   =>  '<p>Enjoy the thrill of to the largest and most exciting waterpark in the Middle East. Aquaventure is overflowing with 42 fun-filled acres, Master Blasters, speedslide, rivers, rapids, Splashers children’s play area, lush tropical landscapes and a private beach area.</p>

                                    <h3>Our Atlantis Aqua venture Water Park Price Includes</h3>
                                    <ul>
                                        <li>Pickup from your hotel or residence in Dubai or Sharjah*</li>
                                        <li>Atlantis Aquaventure Water Park Entrance Ticket</li>
                                        <li>Rides &amp; Attractions</li>
                                        <li>Private Beach</li>
                                    </ul>
                                    ',
                'adult_price'   =>  '250',
                'child_price'   =>  '205',
                'has_time_options'  => 0,
                'confirm_availability'  => 0,
                'minimum_quantity'  => 1
            ],  

            [
                'category_id'   => 8,
                'name'          => 'Dreamland Aqua Park',
                'subtitle'      => 'Sun & Fun at the water park',
                'description'   =>  '<p>Dreamland Aqua Park is one of the largest water parks in the region; an oasis of palm trees and green turf in the desert of the Arabian Peninsula.  Enjoy many ventures such as aqua play, offering over 19 games, family raft rides, Go Kart Circuits, Bumper boats, Water sports, water attractions, slides & Rides.  For those of you who enjoy a drink or two in an enormous Jacuzzi or a cool Pool Bar, we offer a variety of beverages and snacks in our fully licensed bar.   We have several restaurants to choose from Russian, Chinese, Indian, Pakistani, Continental, Lebanese and Fast food outlets.</p>

                                    <h3>Our Dream Land Aqua Park Price Includes</h3>
                                    <ul>
                                        <li>Pickup from your hotel or residence in Dubai or Sharjah *</li>
                                        <li>Dream Land Aqua Park Entrance Ticket</li>
                                        <li>Free Locker</li>
                                        <li>Sun Bed &amp; Mattress (Subject to availability)</li>
                                        <li>Rides &amp; Attractions**</li>
                                        <li>All rides are free except for the sports games, tennis court, bumper boat, go-karts, food and beverages</li>
                                    </ul>

                                    <h3>Park Regulations</h3>
                                    <ul>
                                        <li>Proper swimwear aremandatory to use water rides and attractions.</li>
                                        <li>No pants, shorts or cotton wears to be allowed in the water.</li>
                                        <li>Follow Lifeguard instructions at all times.</li>
                                        <li>Violation of safety rules may lead to expulsion from the park.</li>
                                        <li>Bringing your own food or drinks is not allowed.</li>
                                    </ul>
                                    ',
                'adult_price'   =>  '160',
                'child_price'   =>  '100',
                'has_time_options'  => 0,
                'confirm_availability'  => 0,
                'minimum_quantity'  => 1
            ],

            [
                'category_id'   => 8,
                'name'          => 'Wonder Land Water and Theme Park',
                'subtitle'      => '2 Parks for the price of 1',
                'description'   =>  '<p>Welcome to our 2 parks, Wonderland theme park, and Splashland.</p>
                                    <p>Wonderland is the largest Amusement park in the U.A.E. We offer to dear guests, the possibility to enjoy more than 30 rides and attractions, internationally famous along a world-class water-park over 22 acres.
You will enjoy a warm welcome, an impressive free-parking, and 6 catering outlets where you can have delightful meals, fresh drinks and sweets or ice-creams. And of course, you will get a souvenir that lasts forever!</p>
                                    <p>Wonderland is located alongside the Dubai Creek Park, near Al Garhoud Bridge in Duba</p>

                                    <h3>Our Wonderland Water & Theme Park Price Includes</h3>
                                    <ul>
                                        <li>Pickup from your hotel or residence in Dubai or Sharjah *</li>
                                        <li>A Wonderland Water &amp; Theme Park Ticket</li>
                                        <li>Rides &amp; Attractions</li>
                                        <li>Theme Park Access</li>
                                        <li>Water Park Access</li>
                                    </ul>
                                    ',
                'adult_price'   =>  '150',
                'child_price'   =>  '75',
                'has_time_options'  => 0,
                'confirm_availability'  => 0,
                'minimum_quantity'  => 1
            ], 

            [
                'category_id'   => 8,
                'name'          => 'Dubai Dolphinarium',
                'subtitle'      => 'Be enthralled by the world’s most loved animal',
                'description'   =>  '<p>The Dubai Dolphinarium is the first fully air conditioned indoor (temp 21-25c) Dolphinarium in the Middle East.. To give you total entertainment experience, be spellbound by the live acrobatic performers with their gravity-defying stunts synchronized with the Dolphin and Seal Shows.It is a perfect show like no other.  Be amazed, have fun See some of their amazing tricks and dexterous showmanship.  Come and bring your family to have a day out with us at Dubai Dolphinarium to see a memorable Dolphin and Seal.  </p>

                                    <h3>Our Dubai Dolphinarium Price Includes</h3>
                                    <ul>
                                        <li>Pickup from your hotel or residence in Dubai or Sharjah *</li>
                                        <li>A Dubai Dolphiarium Ticket</li>
                                        <li>See Live Dolphin and Seals</li>
                                        <li>Drop back to your hotel or residence</li>
                                    </ul>

                                    <p>*Pick up from other emirates is available at extra charge</p>
                                    ',
                'adult_price'   =>  '120',
                'child_price'   =>  '100',
                'has_time_options'  => 0,
                'confirm_availability'  => 0,
                'minimum_quantity'  => 1
            ],

            [
                'category_id'   => 8,
                'name'          => 'Jet Ski Tour',
                'subtitle'      => 'Enjoy the Ultimate Thrill',
                'description'   =>  '<p>The warm waters of the Gulf and year-round sunshine make Dubai an ideal location for water- skiing. Facilities and locations are perfect for both beginners and advanced skiers. Dubai’s reputation as a water-skier’s paradise is well established. </p>

                                    <h3>Our Jet Ski Tour Price Includes</h3>
                                    <ul>
                                        <li>Pickup from your hotel or residence in Dubai or Sharjah *</li>
                                        <li>Provided jet ski for water sports</li>
                                        <li>Life Jackets</li>
                                        <li>Drop back to your hotel or residence</li>
                                    </ul>

                                    <p>*Pick up from other emirates is available at extra charge</p>
                                    ',
                'adult_price'   =>  '200',
                'child_price'   =>  '200',
                'has_time_options'  => 0,
                'confirm_availability'  => 0,
                'minimum_quantity'  => 1
            ], 

            [
                'category_id'   => 9,
                'name'          => 'Burj Khalifa',
                'subtitle'      => 'Worlds Tallest Building',
                'description'   =>  '<p>No building in modern history has aroused so much curiosity and intrigue as has Burj Khalifa. Your Burj Khalifa visit will answer all your questions.  From level 124 of the world’s tallest building, you will experience first-hand this modern architectural and engineering marvel and know at last what it is like to see the world from such a lofty height.</p>

                                    <p>At The Top, Burj Khalifa your visit begins in the reception area on the lower ground level of The Dubai Mall. </p>

                                    <p>Here and throughout your journey, you will be entertained and informed by a multi-media presentation that chronicles Dubai’s exotic history and the fascinating story of Burj Khalifa.  At the viewing point take a close-up view of the soaring Burj Khalifa, seen through a skylight framing its awe-inspiring height.</p>

                                    <p>Begin your vertical ascent to the observation deck in a high-speed elevator, travelling at 10 metres per second. As the doors open, floor-to-ceiling glass walls provide a breath-taking unobstructed 360-degree view of the city, desert and ocean. By night, sparkling lights and stars compete for your attention.</p>

                                    <p>Special telescopes provide virtual time-travel visions of the scenes beyond and below. You’ll see close-up real-time views as well as the past and the future, by day and by night. You can also walk the entire perimeter for the most comprehensive views. If you wish, adventure outside onto the open-air terrace to enjoy another perspective of the sweeping views below.  You can even shop At The Top, Burj Khalifa and take home a truly unique souvenir of your visit.</p>

                                    <h3>Our Burj Khalifa Tour Price Includes</h3>
                                    <ul>
                                        <li>Pickup from your hotel or residence in Dubai or Sharjah *</li>
                                        <li>Burj Khalifa Entrance Ticket</li>
                                        <li>Go up to 124 levels</li>
                                        <li>Panoramic views</li>
                                    </ul>

                                    <p>*Pick up from other emirates is available at extra charge. Drop off available upon request at additional charge.</p>
                                    ',
                'adult_price'   =>  '150',
                'child_price'   =>  '125',
                'has_time_options'  => 1,
                'confirm_availability'  => 0,
                'minimum_quantity'  => 1
            ],   

            [
                'category_id'   => 9,
                'name'          => 'Afternoon Tea at Burj Al Arab',
                'subtitle'      => 'Dining Among the Stars and Below the Sea',
                'description'   =>  '<p>Burj Al Arab, is designed to resemble the graceful sails of an Arabian dhow, soars to a height of 321 meters, dominating the Dubai coastline. The all-suite hotel is situated on a manmade island some 280 meters, offshore and is linked to the mainland by a slender, gently curving causeway. </p>

                                    <p>Each of the 202 suites is arranged over two floors and all with floor to ceiling, wall to wall windows and tranquil views of the sea. The highest standards of personal service are enhanced by private reception desks on every floor. In-suite check-in, a brigade of exclusive butlers that provide around the clock assistance and unrivalled attention never ceases to amaze our guests.</p>

                                    <h3>Afternoon Tea at Burj Al Arab</h3>
                                    <p>Indulgent Afternoon Tea at Dubai’s Burj Al Arab hotel. The best session for the afternoon tea is around 4.00pm where you get a chance to see the sunset over the Arabian Gulf. Don’t eat a big lunch on the day or book a lavish dinner for the evening as the afternoon tea provides ample food.</p>

                                    <h3>Our Afternoon Tea at Burj Al Arab Price Includes</h3>
                                    <ul>
                                        <li>Pickup from your hotel or residence in Dubai or Sharjah*</li>
                                        <li>7 different types of sandwiches</li>
                                        <li>A fine selection of pastries and petit fours</li>
                                        <li>Home made scones and preserves</li>
                                        <li>Choice of 50 different type of Teas</li>
                                        <li>Premium selection of coffees</li>
                                        <li>Glass of Champagne</li>
                                        <li>Drop back to your hotel or residence</li>
                                    </ul>

                                    <p>*Pick up from other emirates is available at extra charge</p>
                                    ',
                'adult_price'   =>  '0',
                'child_price'   =>  '0',
                'has_time_options'  => 0,
                'confirm_availability'  => 1,
                'minimum_quantity'  => 1
            ],  

            [
                'category_id'   => 9,
                'name'          => 'Lunch at Burj Al Arab',
                'subtitle'      => 'Dining Among the Stars and Below the Sea',
                'description'   =>  '<p>Burj Al Arab, is designed to resemble the graceful sails of an Arabian dhow, soars to a height of 321 meters, dominating the Dubai coastline. The all-suite hotel is situated on a manmade island some 280 meters, offshore and is linked to the mainland by a slender, gently curving causeway. </p>

                                    <p>Each of the 202 suites is arranged over two floors and all with floor to ceiling, wall to wall windows and tranquil views of the sea. The highest standards of personal service are enhanced by private reception desks on every floor. In-suite check-in, a brigade of exclusive butlers that provide around the clock assistance and unrivalled attention never ceases to amaze our guests.</p>

                                    <h3>Lunch at Burj Al Arab</h3>
                                    <p>Enjoy a scrumptious lunch at some of the world’s finest restaurants in the Hotel Burj Al Arab in Dubai which is the world’s only 7-star hotel. Take your pick of the Burj Al Arab’s restaurants, the Ai-Iwan - Seaview, or Jinsui restaurants. One of the things that you must do while you are in Dubai is to have lunch at any of the restaurants in Hotel Burj Al Arab. </p>
                                    <p>You can choose between either of the two restaurants for your lunch – the Al-Iwan Restaurant serves International cuisine and has an Oriental Buffet, while the Junsai Restaurant serves lunch from an Asian Buffet. You can enjoy a splendid lunch while you take in the breathtaking view of the Persian Gulf. The hotel spares no efforts to pamper you with their delicious gourmet cuisine. Enjoy a traditional lunch in style at the world’s most luxurious hotel, the Burj Al Arab. </p>

                                    <h3>Our Lunch at Burj Al Arab Price Includes</h3>
                                    <ul>
                                        <li>Pickup from your hotel or residence in Dubai or Sharjah*</li>
                                        <li>Choice of 2 Restaurants Oriental/Asian</li>
                                        <li>Breathtaking views of Persian Gulf</li>
                                        <li>Drop back to your hotel or residence</li>
                                    </ul>

                                    <p>*Pick up from other emirates is available at extra charge</p>
                                    ',
                'adult_price'   =>  '0',
                'child_price'   =>  '0',
                'has_time_options'  => 0,
                'confirm_availability'  => 1,
                'minimum_quantity'  => 1
            ],  

            [
                'category_id'   => 9,
                'name'          => 'Dinner at Burj Al Arab',
                'subtitle'      => 'Dining Among the Stars and Below the Sea',
                'description'   =>  '<p>Burj Al Arab, is designed to resemble the graceful sails of an Arabian dhow, soars to a height of 321 meters, dominating the Dubai coastline. The all-suite hotel is situated on a manmade island some 280 meters, offshore and is linked to the mainland by a slender, gently curving causeway. </p>

                                    <p>Each of the 202 suites is arranged over two floors and all with floor to ceiling, wall to wall windows and tranquil views of the sea. The highest standards of personal service are enhanced by private reception desks on every floor. In-suite check-in, a brigade of exclusive butlers that provide around the clock assistance and unrivalled attention never ceases to amaze our guests.</p>

                                    <h3>Dinner at Burj Al Arab</h3>
                                    <p>Dining and Entertainment at Burj Al Arab Hotel - Six restaurants and lounges provide a variety of dining options, from one end of the spectrum take a 3 minute submarine ride to the underwater seafood restaurant, Al Mahara voted one of the top hotel restaurants in the world. At the opposite end of the hotel the Al Muntaha is located on the top floor of the hotel with stunning views across Dubai’s skyline.Other fine restaurants include Al Iwan, Bab Al Yam, and Sahn Eddar. </p>
                                    <p>A feast for both the eyes and the palate awaits diners at Burj Al Arab. From the highest point of the hotel right down to sea level, the Restaurants locations are as impressive as their creative menus.  Wine sommeliers are available at every restaurant to advise on wine choice for an even more sophisticated ambience. </p>

                                    <h3>Restaurants & Bars</h3>
                                    <ul>
                                        <li>Al Muntaha, a skyview restaurant offering Mediterranean cuisine</li>
                                        <li>Al Mahara, seafood restaurant</li>
                                        <li>Al Iwan Arabic cuisine and coffee shop</li>
                                        <li>Junsui is pure delight, an authentic Far East Asian restaurant</li>
                                        <li>Bab Al Yam, cafe restaurant for informal dining</li>
                                        <li>Sahn Eddar, tea and coffee lounge</li>
                                    </ul>

                                    <p>There is a strict "no photography" policy in all restaurants and bars.</p>
                                    <p>Visitors from outside the hotel are only allowed entry to the hotel with a confirmed reservation.</p>

                                    <h3>Our Dinner at Burj Al Arab Price Includes</h3>
                                    <ul>
                                        <li>Pickup from your hotel or residence in Dubai or Sharjah*</li>
                                        <li>Choice of 6 Restaurants</li>
                                        <li>Breathtaking views</li>
                                        <li>Drop back to your hotel or residence</li>
                                    </ul>

                                    <p>*Pick up from other emirates is available at extra charge</p>
                                    ',
                'adult_price'   =>  '0',
                'child_price'   =>  '0',
                'has_time_options'  => 0,
                'confirm_availability'  => 1,
                'minimum_quantity'  => 1
            ],  

            [
                'category_id'   => 9,
                'name'          => 'Ferrari World Theme Park',
                'subtitle'      => 'Ferrari Experience',
                'description'   =>  '<p>Ferrari World Abu Dhabi, is the world\'s first Ferrari theme park and largest attraction of its kind. It will be an intense multi-sensory experience and a must-visit for enthusiasts, fans and families. The Park pays tribute to the passion, excellence, performance, technical innovation that Ferrari has established over the years and represents today. Its iconic sleek red roof is directly inspired by the classic double curve side profile of the Ferrari GT body, spanning 200,000 m2 and carrying the largest Ferrari logo ever created. </p>

                                    <p>Ferrari World Abu Dhabi hosts a number of attractions, including rides for children of all ages, providing the complete Ferrari experience: over 20 state-of-the-art attractions, each designed to bring to life a different part of the Ferrari story, including the world\'s fastest rollercoaster, travelling at speeds exceeding 200 km/h and emulating the thrilling sensation of being in a Ferrari F1 car, or the G-force experience taking passengers on an adrenaline-pumping ride up over 62 m, through the roof and back down again. </p>

                                    <p>All tickets provide unlimited use of rides and attractions inside Ferrari World Abu Dhabi. </p>

                                    <h3>Our Ferrari World Theme Park Tour Price Includes</h3>
                                    <ul>
                                        <li>Pickup from your hotel or residence in Dubai or Sharjah*</li>
                                        <li>Ferrari World Theme Park Ticket</li>
                                        <li>Go unlimited use of rides and attractions inside Ferrari World Abu Dhabi</li>
                                        <li>Drop back to your hotel or residence</li>
                                    </ul>

                                    <p>*Pick up from other emirates is available at extra charge</p>
                                    ',
                'adult_price'   =>  '250',
                'child_price'   =>  '205',
                'has_time_options'  => 0,
                'confirm_availability'  => 0,
                'minimum_quantity'  => 1
            ],

            [
                'category_id'   => 10,
                'name'          => 'Dubai Mall',
                'subtitle'      => 'Everything you Desire',
                'description'   =>  '<p>The Dubai Mall is the region\'s premier shopping, lifestyle and entertainment destination. With more than 1,200 stores and a host of world-class attractions, The Dubai Mall is revolutionizing the modern shopping experience.</p>

                                    <p>With an impressive array of leisure pursuits, this is the ultimate, cutting-edge shopping experience. A range of adventure sports vies for attention alongside the romance of ice-skating. The Dubai Mall is a place where outdoor brunch can be followed by the delights of the big screen and where a 21st century gold souk is set off against a world class aquarium. When was the last time your sortie to the designer stores took place under the watchful eye of a sand tiger shark? Step inside The Dubai Mall and experience a place like no other.</p>
                                    ',
                'adult_price'   =>  0,
                'child_price'   =>  0,
                'has_time_options'  => 0,
                'confirm_availability'  => 1,
                'minimum_quantity'  => 1
            ],  

            [
                'category_id'   => 10,
                'name'          => 'Mall of Emirates',
                'subtitle'      => 'Shopping is just the beginning',
                'description'   =>  '<p>Mall of the Emirates, the ultimate leisure, entertainment and shopping resort opened in September 2005. Strategically located in the heart of what is now deemed ‘New Dubai’, this 223,000 square metre centre offers a full range of shopping, leisure, and entertainment.</p>
                                    <p>Mall of the Emirates features 520 international brands, including department, fashion, lifestyle, sports, electronics and home furnishing stores and the largest Carrefour in the city. The compelling family leisure offerings include a Magic Planet family entertainment area, a 14-screen multiplex cinema, the world-renowned Ski Dubai, a five star Kempinski Hotel, The Pullman Dubai Hotel, the Mall\'s 500-seat DUCTAC community theatre and accompanying arts centre, and over 85 coffee shops and restaurants. </p>
                                    ',
                'adult_price'   =>  0,
                'child_price'   =>  0,
                'has_time_options'  => 0,
                'confirm_availability'  => 1,
                'minimum_quantity'  => 1
            ],       

            [
                'category_id'   => 10,
                'name'          => 'Burjuman Centre',
                'subtitle'      => 'The Haven of Luxury Shopping',
                'description'   =>  '<p>Known as the residence high fashion, BurJuman is all about fabulous style and fantastic shopping. Home to one of the biggest selections of high end brands in the world , it articulates the true meaning of luxury. Here’s where you can step away from the maddening crowds and truly indulge your wish list at over 300 elite stores. Whether its high end or popular high street names, you will enjoy being spoilt for choice</p>',
                'adult_price'   =>  0,
                'child_price'   =>  0,
                'has_time_options'  => 0,
                'confirm_availability'  => 1,
                'minimum_quantity'  => 1
            ],

            [
                'category_id'   => 10,
                'name'          => 'IBN Battuta Mall',
                'subtitle'      => 'Great Stuff, Fantastic Place',
                'description'   =>  '<p>Ibn battuta Mall, the world’s largest themed shopping mall is revolutionizing the retail and entertainment experience in Dubai. Uniquely designed to celebrate the travels of the famous Arabic explorer Ibn Battuta, the exciting mix of over 275 retailers, 50 restaurants and food outlets, 21 cinema screens including the UAE’s only IMAX theatre and a continual array of events and promotions have helped evolve and develop one of the city’s fastest growing areas.</p>',
                'adult_price'   =>  0,
                'child_price'   =>  0,
                'has_time_options'  => 0,
                'confirm_availability'  => 1,
                'minimum_quantity'  => 1
            ],

            [
                'category_id'   => 10,
                'name'          => 'Dubai Festival Centre',
                'subtitle'      => 'Live a More Colourful Life',
                'description'   =>  '<p>Rising along the banks of the historic Dubai Creek, Festival Centre is Dubai’s unrivalled waterfront destination for style and sophistication, showcasing an exciting selection of prestigious retailers, international food and beverage outlets and a world-class entertainment retreat. Located at the heart of Dubai Festival City, Festival Centre features:   Guests can browse world-leading brands offering a rich diversity of fashion, jewellery, home accessories, toys and gifts for every occasion. Indulge yourself in your favourite shops and enjoy the best retail and entertainment experience the region has to offer and live a more colourful life!</p>',
                'adult_price'   =>  0,
                'child_price'   =>  0,
                'has_time_options'  => 0,
                'confirm_availability'  => 1,
                'minimum_quantity'  => 1
            ],

            [
                'category_id'   => 10,
                'name'          => 'Dubai Mall Marina',
                'subtitle'      => 'Shopping & Lifestyle Destination',
                'description'   =>  '<p>Dubai Marina Mall is the shopping and lifestyle destination in the heart of one of Dubai’s most dynamic lifestyle communities, and of the world’s most ambitious waterfront developments - the Dubai Marina. With an eclectic mix of 160 stores, the Dubai Marina Mall is well-catered to the vibrant lifestyle of the marina community. </p>

                                    <p>The mall makes utmost use of its waterfront location with an expansive promenade and its unique circular atrium offering panoramic view of the Dubai Marina. Shopping options range from everyday goods and services, to fashion wear, accessories, entertainment and home furnishings. For movie goers, a six screen cinema will feature the latest hits. </p>

                                    <p>A key attraction of The Dubai Marina Mall is the 7-storey Gourmet Tower, a revolutionary concept dedicated to world-class cuisine. Accessible only by a direct bridge via the mall, the Gourmet Tower will be an exquisite waterfront dining experience. For a more casual atmosphere, the mall’s expansive waterfront promenade invites shoppers and visitors to sit, eat and enjoy the marina views from a wide range of the Dubai Marina Mall’s al fresco restaurants and cafés. </p>
                                    ',
                'adult_price'   =>  0,
                'child_price'   =>  0,
                'has_time_options'  => 0,
                'confirm_availability'  => 1,
                'minimum_quantity'  => 1
            ],

            [
                'category_id'   => 10,
                'name'          => 'Deira City Centre',
                'subtitle'      => 'Where you love to shop',
                'description'   =>  '<p>Deira City Centre, Dubai , UAE, first opened its doors in November 1995. At the time, it virtually redefined the concept of "malls" for the region. As the first large-scale, mixed-use shopping destination, complete with retail outlets, restaurants, entertainment facilities and a hotel, Deira City Centre created an international dimension for one-stop shopping and entertainment for the Middle East, bringing it to an entirely new level.</p>

                                    <p>Deira City Centre encompasses over 115,000 square metres of retail space and features over 370 retail stores and services. Its entertainment facilities include Magic Planet, one of the region\'s most popular indoor family entertainment centres; Bowling City, CineStar Cinemas, an 11-screen cinema multiplex with 3,000 seats , as well as Bowling City  (opening soon).   The Centre also provides direct access to the 5-star City Centre Hotel & Residence, managed by Pullman; an 11-storey hotel offering 318 rooms and 112 apartments. The Centre also features the MAF Tower, an 11-storey office building. </p>

                                    <p>Deira City Centre is one of the flagship malls within the Majid Al Futtaim Properties portfolio and ranks as one of the most successful shopping malls in the world. With average annual footfall traffic in excess of 20 million, Deira City Centre remains one of the region\'s most visited destination for both residents and tourists</p>
                                    ',
                'adult_price'   =>  0,
                'child_price'   =>  0,
                'has_time_options'  => 0,
                'confirm_availability'  => 1,
                'minimum_quantity'  => 1
            ],

            [
                'category_id'   => 11,
                'name'          => 'Gold Souk',
                'subtitle'      => 'Shimmering Gold',
                'description'   =>  '<p>Visit the Gold Souk to see the large variety of gold sold at really reasonable prices.  Prices are generally determined by weight rather than design and craftsmanship. Watch out for different designs in earrings, rings, necklaces, chains, bracelets, bangles and pendants. Designs can be traditional or modern, bold or conservative, loud or sober, sturdy or delicate. Along with designs, you will find many different shades of gold like pink, white, yellow or green hues in one piece. Dubai Gold Souk is worth a visit even if you have no intention of buying. It would be hard to resist the temptation to buy them. </p>

                                    <p>Prices are very competitive. Remember, Dubai is a tax-free country, making gold much cheaper. Dealers come here from around the globe and strict regulations are followed. Gold prices are based on a standard rate per gram that changes very frequently. Of course, it also depends on the carat.....the amount of gold in the mixture. </p>

                                    <h3>Carat quantities in gold fall into four categories</h3>
                                    <ul>
                                        <li>24 carat</li>
                                        <li>22 carat</li>
                                        <li>18 carat</li>
                                        <li>14 carat</li>
                                        <li>9 carat</li>
                                    </ul>

                                    <h3>Dubai has stringent laws on gold markings</h3>

                                    <p>All gold must be labelled accurately and Government officials regularly check the markings. On top of this, price also depends, quite naturally, on the workmanship that has gone into a particular item. </p>

                                    <p>The Gold Souq is the biggest gold market in the U.A.E. There are said to be more than 125 shops here, selling silver, pearls, diamonds and rubies, as well as gold items fashioned in the differing styles of many countries. </p>

                                    <p>Different shops specialise in specific kinds of gold items, such as Indian gold, Italian gold and Arabic gold. The best Arabic designs come from Bahrain and Saudi Arabia, but designs of all tastes and fashions can be found here in the gold souk. </p>

                                    <p>The souks carry everything that can be made from gold, but if there is some personal design you cannot find, they will make it for you. These are very highly skilled craftsmen and always keen to make a sale and to please the customer.  Most of the gold salesmen are either Indian or Lebanese. They are very experienced at persuading tourists to part with their money. Remember, it is essential and expected to haggle over a price. </p>

                                    <p>It is best to start at around half the asking price and to haggle or bargain with a smile!!</p>
                                    ',
                'adult_price'   =>  0,
                'child_price'   =>  0,
                'has_time_options'  => 0,
                'confirm_availability'  => 1,
                'minimum_quantity'  => 1
            ],

            [
                'category_id'   => 11,
                'name'          => 'Spice Souk',
                'subtitle'      => 'Smoky & Spicy Aroma',
                'description'   =>  '<p>The slightly smoky and spicy aroma that hangs about this place entices food lovers and tourists to the Dubai spice souk from all around the world. The souk is located in Eastern Dubai or Deira on Sikkat Al Khail Road, in the Al Ras locality. </p>

                                    <p>Also known as the Old Souk, as the name suggests it is the largest and the oldest souk in Dubai city. The spice souk has a number of narrow lanes dotted with open and closed roof spice shops. As you walk along the winding streets, you can see traders as well as shoppers haggling with the shop keepers. Bargaining is an entirely new experience and to watch the “professional hagglers” carrying on is a sight to behold. Since the Dubai spice souk is the oldest one around, it looks more traditional than the others. Once you step into the market, you feel as if you have been transported back in time. </p>

                                    <p>The colorful array of spices and their heady aroma is tantalizing. You cannot get over the incredible number of spices that are available. The shops at the Dubai spice souk sell spices like cardamom, cinnamon, saffron, nuts, cloves, henna and lots more. And that’s not all; you will also find basmati rice, incense or joss sticks, shisha and tobacco, seductive perfumes, pottery as well as baskets. As you move on from one shop to another, you will be enveloped by these sensory delights. The spices are brought from the Middle Eastern region as well as from around other parts of the world. You can buy them on wholesale rates and end up saving a lot of money. </p>

                                    <p>Another fascinating sight is watching the wholesaler packing your purchases which were packed and shipped in Hessian pouches. This keeps the spices fresh and aromatic for a long time. Without any doubts, they are spices of the highest quality and reasonably priced at the same time. The world famous Arab dried fruits are also available. Spices and dried fruits make excellent gifts for special occasions. Food lovers can go wild and buy them to experiment authentic Arab cuisines. </p>',
                'adult_price'   =>  0,
                'child_price'   =>  0,
                'has_time_options'  => 0,
                'confirm_availability'  => 1,
                'minimum_quantity'  => 1
            ],

            [
                'category_id'   => 11,
                'name'          => 'Perfume Souk',
                'subtitle'      => 'Exotic Scents',
                'description'   =>  '<p>The perfumes in this region are spicy and strong. It is a part of their lifestyle and culture. You will find a sharp fragrance in every room or tent in the Middle East. This touch of piquant aromas makes their perfumes seductive and alluring. The best place to buy Arab perfumes is at the Dubai perfume souk. You can walk from shop to shop savoring the stimulating scents and at the same watch people bargain over their purchases. </p>

                                    <p>The Dubai perfume souk is located on the Sikkat Al Khail Street on Deira side of Dubai. Most people perceive that perfumes are light and flowery. Such perfumes are Western creations and they leave subtle overtones about a person. Since Arab perfumes are strong, the scent still lingers for a long time even after a person is not sitting or standing next to you. This lingering trail leaves a mark in your life and remains fresh in your memory. Such is the specialty of the fragrances at the Dubai perfume souk. At the souk, you will not just find traditional Arabian ittar, but also branded and designer perfumes from around the world. The perfume jars filled with a multitude of fragrances look extremely attractive and inviting. </p>

                                    <p>At the perfume souk you will find thousands of scents. You can take your pick depending on your taste or well, on your “olfactory senses”. If you think that none of the fragrances suit you, then you can ask the shop owner to create an all new scent that will suit you beautifully. The custom made aromas are mixed taking into to account your skin as well as personality type. This was once considered a luxury and now you can proudly walk out of the store with a signature scent. This is an entirely new experience by far; not the same as buying perfumes in shopping malls. </p>

                                    <p>Unlike regular perfume stores in malls, shopkeepers give you a whiff of the fragrances you want to look at through incenses. You will not see any local sampling fragrances in a ‘spray by’ manner. In addition to perfumes, you can also buy incense at the Dubai perfume souk. They are sold in the form of sticks, </p>
                                    ',         
                'adult_price'   =>  0,
                'child_price'   =>  0,
                'has_time_options'  => 0,
                'confirm_availability'  => 1,
                'minimum_quantity'  => 1
            ],

            [
                'category_id'   => 11,
                'name'          => 'Textile Souk',
                'subtitle'      => 'Colourful Fabrics & Ethnic Designs',
                'description'   =>  '<p>Fabrics of different textures, colors and designs grace the narrow streets of the souk. The souk is so large you can find dress materials of every description displayed in the shop windows. This textile souk is the hub for the Middle Eastern fabrics and people from all around the world make it a point to visit this place when they come to Dubai. The Dubai textile souk is located in Bur Dubai which is the more happening and buzzing quarters of the city. The quaint architecture coupled with the ensuing haggling between the traders and buyers takes you back in time.</p>

                                    <p>The textile souk has been renovated but it has retained its old fashioned buildings with wooden shutters and small shops. The wooden gates give you a glimpse of the delights that await die hard shopaholics. Luscious silks as well as georgettes, silks and lots more hang enticingly in every shop window. You can find fabrics which can be made into any type of outfit. From Indian saris to the glamorous cocktail dresses you can take your pick from the numerous stores. The more you see, the more you feel like buying. If you live in great cities and believe that you&rsquo;ve seen them all; think again. The immense variety of styles and designs is overwhelming and enough to drive a trend conscious person into a tizzy.</p>

                                    <p>Traditional Arab fabrics as well as other ethnic dress materials are available here. If you want to sample the dress styles of the world this is the place to be. Be it for a formal occasion to a simple affair, you can find materials to suit every need. Grand dress materials with intricate work as well as simple cotton designs catch your attention. The stores also sell local specialties which cannot be found anywhere else in the world. A few shops also sell traditional Arab slippers which go splendidly with the jazzy outfits. If you are a photographer, this is just the place to be. The bright colored fabrics attractively arranged pose as quirky yet wonderful photo-ops.</p>

                                    <p>There are a few stores which sell ready-made outfits of any style. If you feel that the styles don&rsquo;t suit you, just buy the material of your choice. If you don&rsquo;t want to wait to go back home and want to have your outfit made right away, this is the place. The souk has dress makers who can recreate trend setting designs as well as copy from dress patterns. The tailoring here is a work of art and you will not be disappointed with the results. Even better, you can get your clothes within a couple of days.</p>',
                'adult_price'   =>  0,
                'child_price'   =>  0,
                'has_time_options'  => 0,
                'confirm_availability'  => 0,
                'minimum_quantity'  => 1
            ],

            [
                'category_id'   => 11,
                'name'          => 'Fish Souk',
                'subtitle'      => 'Fresh Fish',
                'description'   =>  '<p>The Dubai fish souk is located at Deira and you can find barrels and giant tubs laden with king fish, red snapper, rock cod, barracuda, tune, lobster, crab, king prawn, sea bream, squid, pomfrets, shark, mackerel, sardine as well as the local hammour fish. All around the year you find the regulars as well as specialties of the season at the souk. One of the most famous sights at the souk is the blue lobster from Fujairah. Baby sharks are also known to draw a lot of attention. The fish and sea food is fresh and it is extremely intriguing to watch traders unload the crates of fish into the souk, the shopkeepers cleaning and the gutting and the customers haggling.</p>

                                    <p>The best time to visit the Dubai fish souk is early in the morning and at late nights. As it is with all fish markets, this souk is also very smelly and dirty. The souk is not meant for people with weak stomachs. People who cannot stand the rancid smells and the butchers at their work should not come to the fish souk. Those who can, it would be indeed smart on their part if they wore old clothes and shoes; in case they get spoiled you can always throw them away. Else, better it&rsquo;s better to go waterproof. For the most part, the Dubai fish souk attracts a lot of photographers. You can find them trying to capture the abundant and bizarre varieties of fish displayed in the stores.</p>

                                    <p>A fishing museum also lies nearby, which showcases the fishing culture of Dubai and the neighboring areas. Fishing has been a part of the rich heritage of the region and with the Dubai fish souk; it relives the habits and practices followed by traders back in the day. If you find fish markets exciting, then a visit to this old-fashioned souk is definitely worthwhile.</p>',

                'adult_price'   =>  0,
                'child_price'   =>  0,
                'has_time_options'  => 0,
                'confirm_availability'  => 0,
                'minimum_quantity'  => 1
            ]
    	];

         foreach( $packages as $package )
         {
            $newPackage = new Package;

            $newPackage->category_id = $package['category_id'];
            $newPackage->name = $package['name'];
            $newPackage->subtitle = $package['subtitle'];
            $newPackage->description = $package['description'];
            $newPackage->adult_price = $package['adult_price'];
            $newPackage->child_price  = $package['child_price'];
            $newPackage->has_time_options = $package['has_time_options'];
            $newPackage->confirm_availability = $package['confirm_availability'];
            $newPackage->minimum_quantity = $package['minimum_quantity'];

            $newPackage->save();
         }
        
    }
}
