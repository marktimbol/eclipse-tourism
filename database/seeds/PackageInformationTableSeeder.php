<?php

use App\PackageInformation;
use Illuminate\Database\Seeder;

class PackageInformationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $packageInformation = [
        	[
        		'package_id'	=> 1,
        		'title'			=> 'Departs Daily at',
        		'description'	=> '08:30 – 10:00 am'
        	],

        	[
        		'package_id'	=> 1,
        		'title'			=> 'Arrive',
        		'description'	=> '12:00 – 13:00pm'
        	],

        	[
        		'package_id'	=> 1,
        		'title'			=> 'Duration',
        		'description'	=> '3 Hours (Including pick up and drop)'
        	],

        	[
        		'package_id'	=> 1,
        		'title'			=> 'Exclusive car',
        		'description'	=> '600 AED  (This price includes for up to 6 people)'
        	],

        	[
        		'package_id'	=> 1,
        		'title'			=> '0-3 Year olds are free of charge.  Child to be seated on parents or guardians laps.',
        		'description'	=> ''
        	],

        	[
        		'package_id'	=> 1,
        		'title'			=> 'Please note that prices are indicated for a minimum of 3 persons.',
        		'description'	=> ''
        	],

        	[
        		'package_id'	=> 2,
        		'title'			=> 'Departs daily at',
        		'description'	=> '14:30 – 15:30 pm'
        	],

        	[
        		'package_id'	=> 2,
        		'title'			=> 'Arrive',
        		'description'	=> '21:00 – 22:00'
        	],

        	[
        		'package_id'	=> 2,
        		'title'			=> 'Duration',
        		'description'	=> '7 Hours (including pick up and drop)'
        	],

        	[
        		'package_id'	=> 2,
        		'title'			=> 'Child should be',
        		'description'	=> '4-11 years old'
        	],

        	[
        		'package_id'	=> 2,
        		'title'			=> '0-3 Year olds are free of charge.  Child to be seated on parents or guardians laps.',
        		'description'	=> ''
        	],

        	[
        		'package_id'	=> 3,
        		'title'			=> 'Departs daily at',
        		'description'	=> '14:30 – 15:30 pm '
        	],

        	[
        		'package_id'	=> 3,
        		'title'			=> 'Arrive',
        		'description'	=> '21:00 – 22:00'
        	],

        	[
        		'package_id'	=> 3,
        		'title'			=> 'Duration',
        		'description'	=> '7 Hours (including pick up and drop) '
        	],

        	[
        		'package_id'	=> 3,
        		'title'			=> 'Child should be',
        		'description'	=> '4-11 years old'
        	],

        	[
        		'package_id'	=> 3,
        		'title'			=> '0-3 Year olds are free of charge.  Child to be seated on parents or guardians laps.',
        		'description'	=> ''
        	],

        	[
        		'package_id'	=> 4,
        		'title'			=> 'Departs daily at',
        		'description'	=> '14:30 – 15:30 pm'
        	],

        	[
        		'package_id'	=> 4,
        		'title'			=> 'Arrive',
        		'description'	=> '21:00 – 22:00'
        	],

        	[
        		'package_id'	=> 4,
        		'title'			=> 'Duration',
        		'description'	=> '7 Hours (including pick up and drop)'
        	],

        	[
        		'package_id'	=> 4,
        		'title'			=> 'Child should be',
        		'description'	=> '4-11 years old'
        	],

        	[
        		'package_id'	=> 4,
        		'title'			=> '0-3 Year olds are free of charge.  Child to be seated on parents or guardians laps.',
        		'description'	=> ''
        	],

        	[
        		'package_id'	=> 5,
        		'title'			=> 'Departs daily at',
        		'description'	=> '14:30 – 15:30 pm'
        	],

        	[
        		'package_id'	=> 5,
        		'title'			=> 'Arrive',
        		'description'	=> '8:30 – 9:30 am next day'
        	],

        	[
        		'package_id'	=> 5,
        		'title'			=> 'Duration',
        		'description'	=> '18 Hours (Including pick up and drop)'
        	],

        	[
        		'package_id'	=> 5,
        		'title'			=> 'Child should be',
        		'description'	=> '4-11 years old'
        	],

        	[
        		'package_id'	=> 5,
        		'title'			=> '0-3 Year olds are free of charge.  Child to be seated on parents or guardians laps.',
        		'description'	=> ''
        	],

        	[
        		'package_id'	=> 6,
        		'title'			=> 'Departs daily at',
        		'description'	=> '17:00 – 17:30 pm'
        	],

        	[
        		'package_id'	=> 6,
        		'title'			=> 'Arrive',
        		'description'	=> '21:00 – 22:00 pm'
        	],

        	[
        		'package_id'	=> 6,
        		'title'			=> 'Duration',
        		'description'	=> '4 Hours  (Including pick up and drop)'
        	],

        	[
        		'package_id'	=> 6,
        		'title'			=> 'Child should be',
        		'description'	=> '4-11 years old'
        	],

        	[
        		'package_id'	=> 6,
        		'title'			=> '0-3 Year olds are free of charge.  Child to be seated on parents or guardians laps.',
        		'description'	=> ''
        	],

        	[
        		'package_id'	=> 7,
        		'title'			=> 'Departs daily',
        		'description'	=> 'upon request.'
        	],

        	[
        		'package_id'	=> 7,
        		'title'			=> 'Duration of Excursion',
        		'description'	=> '1 Hour'
        	],

        	[
        		'package_id'	=> 7,
        		'title'			=> 'Total Duration',
        		'description'	=> '3 Hours (Including pick up and drop)'
        	],

        	[
        		'package_id'	=> 7,
        		'title'			=> 'Please note that prices are indicated for a minimum of 2 persons',
        		'description'	=> ''
        	],

        	[
        		'package_id'	=> 7,
        		'title'			=> 'The Minimum age for driving is 16 years old.',
        		'description'	=> ''
        	],

        	[
        		'package_id'	=> 7,
        		'title'			=> 'A helmet is provided.',
        		'description'	=> ''
        	],

        	[
        		'package_id'	=> 7,
        		'title'			=> 'Disclaimer form against damage and personal injury required to be signed.',
        		'description'	=> ''
        	],

        	[
        		'package_id'	=> 8,
        		'title'			=> 'Departs daily',
        		'description'	=> 'upon request.'
        	],

        	[
        		'package_id'	=> 8,
        		'title'			=> 'Duration of Excursion',
        		'description'	=> '1 Hour'
        	],


        	[
        		'package_id'	=> 8,
        		'title'			=> 'Total Duration',
        		'description'	=> '3 Hours (Including pick up and drop)'
        	],


        	[
        		'package_id'	=> 8,
        		'title'			=> 'Please note that prices are indicated for a minimum of 2 persons',
        		'description'	=> ''
        	],


        	[
        		'package_id'	=> 8,
        		'title'			=> 'The Minimum age for driving is 16 years old.',
        		'description'	=> ''
        	],


        	[
        		'package_id'	=> 8,
        		'title'			=> 'Helmet and goggles provided.',
        		'description'	=> ''
        	],


        	[
        		'package_id'	=> 8,
        		'title'			=> 'Disclaimer form against damage and personal injury required to be signed.',
        		'description'	=> ''
        	],

        	[
        		'package_id'	=> 9,
        		'title'			=> 'Departs daily at',
        		'description'	=> '08:30 – 09:00 am'
        	],

        	[
        		'package_id'	=> 9,
        		'title'			=> 'Arrive',
        		'description'	=> '12:00 – 12:30 pm'
        	],

        	[
        		'package_id'	=> 9,
        		'title'			=> 'Duration of Excursion',
        		'description'	=> '1 hour'
        	],

        	[
        		'package_id'	=> 9,
        		'title'			=> 'Total Duration',
        		'description'	=> '3 Hours (Including pick up and drop)'
        	],

        	[
        		'package_id'	=> 9,
        		'title'			=> 'Duration',
        		'description'	=> '2 - 3 Hours'
        	],

        	[
        		'package_id'	=> 10,
        		'title'			=> 'Departs daily at',
        		'description'	=> '08:30 – 09:00 am'
        	],

        	[
        		'package_id'	=> 10,
        		'title'			=> 'Arrive',
        		'description'	=> '12:00 – 12:30'
        	],

        	[
        		'package_id'	=> 10,
        		'title'			=> 'Duration',
        		'description'	=> '3 Hours'
        	],

        	[
        		'package_id'	=> 11,
        		'title'			=> 'Departs daily at',
        		'description'	=> '08:30 – 09:00 am'
        	],

        	[
        		'package_id'	=> 11,
        		'title'			=> 'Arrive',
        		'description'	=> '12:00 – 12:30'
        	],

        	[
        		'package_id'	=> 11,
        		'title'			=> 'Departs daily at',
        		'description'	=> '14:30 – 15:30 am'
        	],

        	[
        		'package_id'	=> 11,
        		'title'			=> 'Arrive',
        		'description'	=> '18:30 – 19:00 '
        	],

        	[
        		'package_id'	=> 11,
        		'title'			=> 'Duration',
        		'description'	=> '3 Hours'
        	],

        	[
        		'package_id'	=> 12,
        		'title'			=> 'Departs daily at',
        		'description'	=> '10:30 am -  11:30 am, 01:30 pm -  02:30 pm, 04:00 pm -  05:00 pm, 06:30 pm -  07:30 pm'
        	],

        	[
        		'package_id'	=> 12,
        		'title'			=> 'Duration',
        		'description'	=> '1 Hour Cruise'
        	],

        	[
        		'package_id'	=> 13,
        		'title'			=> 'Departs daily at',
        		'description'	=> '09:0 am -  11:00 am. On Private or Sharing and On Request Basis.'
        	],

        	[
        		'package_id'	=> 13,
        		'title'			=> 'Duration',
        		'description'	=> '2 Hour Cruise'
        	],

        	[
        		'package_id'	=> 14,
        		'title'			=> 'Departs at',
        		'description'	=> '20:30 - 22:30'
        	],

        	[
        		'package_id'	=> 14,
        		'title'			=> 'Boarding Time',
        		'description'	=> '20:00'
        	],

        	[
        		'package_id'	=> 14,
        		'title'			=> 'Duration',
        		'description'	=> '2 Hour Cruise'
        	],

        	[
        		'package_id'	=> 15,
        		'title'			=> 'Departs at',
        		'description'	=> '21:00 - 23:00'
        	],

        	[
        		'package_id'	=> 15,
        		'title'			=> 'Boarding Time',
        		'description'	=> '20:00'
        	],

        	[
        		'package_id'	=> 15,
        		'title'			=> 'Duration of Excursion',
        		'description'	=> '2 hours'
        	],

        	[
        		'package_id'	=> 15,
        		'title'			=> 'Total Duration',
        		'description'	=> '3 – 4 Hours (including pick up and drop off)'
        	],

        	[
        		'package_id'	=> 16,
        		'title'			=> 'Departs daily at',
        		'description'	=> '9:00am – 13:00pm'
        	],

        	[
        		'package_id'	=> 16,
        		'title'			=> 'Duration',
        		'description'	=> '4 Hours'
        	],

        	[
        		'package_id'	=> 17,
        		'title'			=> 'Departs daily at',
        		'description'	=> '8:00am – 08:30pm – Arrive 14:30 – 15:00pm'
        	],

        	[
        		'package_id'	=> 17,
        		'title'			=> 'Duration',
        		'description'	=> '6- 7 Hours'
        	],

        	[
        		'package_id'	=> 18,
        		'title'			=> 'Departs daily at',
        		'description'	=> '8:00am'
        	],

        	[
        		'package_id'	=> 18,
        		'title'			=> 'Arrive',
        		'description'	=> '14:30pm – 15:00pm'
        	],

        	[
        		'package_id'	=> 18,
        		'title'			=> 'Duration',
        		'description'	=> '6- 7 Hours'
        	],

        	[
        		'package_id'	=> 19,
        		'title'			=> 'Departs daily at',
        		'description'	=> '9:00am'
        	],

        	[
        		'package_id'	=> 19,
        		'title'			=> 'Arrive',
        		'description'	=> '13:00pm'
        	],

        	[
        		'package_id'	=> 19,
        		'title'			=> 'Duration',
        		'description'	=> '6- 7 Hours'
        	],

        	[
        		'package_id'	=> 20,
        		'title'			=> 'Departs daily at',
        		'description'	=> '8:00am'
        	],

        	[
        		'package_id'	=> 20,
        		'title'			=> 'Arrive',
        		'description'	=> '14:30pm – 15:00pm'
        	],

        	[
        		'package_id'	=> 20,
        		'title'			=> 'Duration',
        		'description'	=> '6- 7 Hours'
        	],

        	[
        		'package_id'	=> 21,
        		'title'			=> 'Departs daily at',
        		'description'	=> '6:00am – 6:30 am'
        	],

        	[
        		'package_id'	=> 21,
        		'title'			=> 'Arrive',
        		'description'	=> '19:00pm – 20:00pm'
        	],

        	[
        		'package_id'	=> 21,
        		'title'			=> 'Duration',
        		'description'	=> '12 Hours'
        	],

        	[
        		'package_id'	=> 21,
        		'title'			=> 'Visa Charges (Oman visa fee & UAE exit fee) are not included in our price & should be paid by the guest at the border:',
        		'description'	=> ''
        	],

        	[
        		'package_id'	=> 21,
        		'title'			=> 'UAE Residence Visa Holders',
        		'description'	=> '85 AED'
        	],

        	[
        		'package_id'	=> 21,
        		'title'			=> 'UAE Tourist Visa Holders',
        		'description'	=> '235 AED'
        	],

        	[
        		'package_id'	=> 22,
        		'title'			=> 'Departs daily at',
        		'description'	=> '8:00am'
        	],

        	[
        		'package_id'	=> 22,
        		'title'			=> 'Arrive',
        		'description'	=> '14:30pm'
        	],

        	[
        		'package_id'	=> 22,
        		'title'			=> 'Duration',
        		'description'	=> '7 Hours'
        	],

        	[
        		'package_id'	=> 23,
        		'title'			=> 'Departs daily:',
        		'description'	=> 'The trip timings are based according to the Tide schedule.  Please enquire'
        	],

        	[
        		'package_id'	=> 23,
        		'title'			=> 'Duration',
        		'description'	=> '1 Hour 15 Minutes'
        	],

        	[
        		'package_id'	=> 23,
        		'title'			=> 'Meeting Point',
        		'description'	=> 'Burjuman Shopping mall in Bur Dubai'
        	],

        	[
        		'package_id'	=> 23,
        		'title'			=> 'Transfers',
        		'description'	=> 'Available on request – with additional charge'
        	],

        	[
        		'package_id'	=> 25,
        		'title'			=> 'Departs daily at',
        		'description'	=> 'Timing According to availability'
        	],

        	[
        		'package_id'	=> 25,
        		'title'			=> 'Duration',
        		'description'	=> '1 -2 Hours'
        	],

        	[
        		'package_id'	=> 26,
        		'title'			=> 'Departs daily at',
        		'description'	=> 'Timing According to availability'
        	],

        	[
        		'package_id'	=> 26,
        		'title'			=> 'Duration',
        		'description'	=> '1 -2 Hours'
        	],

        	[
        		'package_id'	=> 27,
        		'title'			=> 'Departs daily at',
        		'description'	=> 'Timing According to availability'
        	],

        	[
        		'package_id'	=> 27,
        		'title'			=> 'Duration',
        		'description'	=> '1 -2 Hours'
        	],

        	[
        		'package_id'	=> 28,
        		'title'			=> 'Departs daily at',
        		'description'	=> 'Timing According to availability'
        	],

        	[
        		'package_id'	=> 28,
        		'title'			=> 'Duration',
        		'description'	=> '1 -2 Hours'
        	],

        	[
        		'package_id'	=> 28,
        		'title'			=> 'Meeting Point',
        		'description'	=> 'Atlantis Palm'
        	],

        	[
        		'package_id'	=> 29,
        		'title'			=> 'Departs daily at',
        		'description'	=> 'Timing According to availability'
        	],

        	[
        		'package_id'	=> 29,
        		'title'			=> 'Duration',
        		'description'	=> '1 -2 Hours'
        	],

        	[
        		'package_id'	=> 29,
        		'title'			=> 'Meeting Point',
        		'description'	=> 'Atlantis Palm'
        	],

        	[
        		'package_id'	=> 30,
        		'title'			=> 'Departs daily at',
        		'description'	=> 'Timing According to availability'
        	],

        	[
        		'package_id'	=> 30,
        		'title'			=> 'Duration',
        		'description'	=> '1 -2 Hours'
        	],

        	[
        		'package_id'	=> 30,
        		'title'			=> 'Meeting Point',
        		'description'	=> 'Atlantis Palm'
        	],

        	[
        		'package_id'	=> 31,
        		'title'			=> 'Departs daily at',
        		'description'	=> 'Timing According to availability'
        	],

        	[
        		'package_id'	=> 31,
        		'title'			=> 'Duration',
        		'description'	=> '1 -2 Hours'
        	],

        	[
        		'package_id'	=> 31,
        		'title'			=> 'Meeting Point',
        		'description'	=> 'Atlantis Palm'
        	],

        	[
        		'package_id'	=> 32,
        		'title'			=> 'Availability',
        		'description'	=> 'October – May Only'
        	],

        	[
        		'package_id'	=> 32,
        		'title'			=> 'Departs daily at',
        		'description'	=> '04:30am  - 05:00 am – Arrive 8:30 – 9:30 am'
        	],

        	[
        		'package_id'	=> 32,
        		'title'			=> 'Duration',
        		'description'	=> '4-5 Hours'
        	],

        	[
        		'package_id'	=> 32,
        		'title'			=> 'Child should be',
        		'description'	=> '5-12 years old'
        	],

        	[
        		'package_id'	=> 33,
        		'title'			=> 'Age',
        		'description'	=> '18 & above'
        	],

        	[
        		'package_id'	=> 33,
        		'title'			=> 'Dress Code',
        		'description'	=> 'Warm Clothes and closed shoes.'
        	],

        	[
        		'package_id'	=> 33,
        		'title'			=> 'Restrictions',
        		'description'	=> 'Weight Restrictions apply (not more than 100kg)'
        	],

        	[
        		'package_id'	=> 33,
        		'title'			=> 'Availability',
        		'description'	=> 'Daily except Sundays'
        	],

        	[
        		'package_id'	=> 33,
        		'title'			=> 'Duration',
        		'description'	=> '2 Hours'
        	],

        	[
        		'package_id'	=> 33,
        		'title'			=> 'Sky Diving Duration',
        		'description'	=> '20 mins'
        	],

        	[
        		'package_id'	=> 34,
        		'title'			=> 'Availability',
        		'description'	=> 'Daily'
        	],

        	[
        		'package_id'	=> 35,
        		'title'			=> 'Time',
        		'description'	=> '18:00 pm – 23:00 pm'
        	],

        	[
        		'package_id'	=> 35,
        		'title'			=> 'Availability',
        		'description'	=> 'Daily'
        	],

        	[
        		'package_id'	=> 35,
        		'title'			=> 'Duration',
        		'description'	=> '5 Hours'
        	],

        	[
        		'package_id'	=> 35,
        		'title'			=> 'Child should be',
        		'description'	=> '5-11 years old'
        	],

        	[
        		'package_id'	=> 35,
        		'title'			=> 'Meeting Point',
        		'description'	=> 'Flamingo Beach Resort in Umm Al Quwain'
        	],

        	[
        		'package_id'	=> 36,
        		'title'			=> 'Timings',
        		'description'	=> '11am - Different closing hours throughout the year. In Jan, Feb, Nov and Dec it closes at 6pm. In March, April, May, Sept and Oct it closes at 7pm. During the summer months (June, July and Aug), it closes at 9pm '
        	],

        	[
        		'package_id'	=> 36,
        		'title'			=> 'To Note',
        		'description'	=> 'Thursdays is an women’s only day'
        	],

        	[
        		'package_id'	=> 36,
        		'title'			=> 'Please note',
        		'description'	=> '1 way transfer to the park is included in price.  Pick up is available at extra charge.'
        	],

        	[
        		'package_id'	=> 37,
        		'title'			=> 'Timings',
        		'description'	=> '11am – 18:30'
        	],

        	[
        		'package_id'	=> 37,
        		'title'			=> 'Please note',
        		'description'	=> '1 way transfer to the park is included in price.  Pick up is available at extra charge.'
        	],

        	[
        		'package_id'	=> 38,
        		'title'			=> 'Park Timings:',
        		'description'	=> ''
        	],

        	[
        		'package_id'	=> 38,
        		'title'			=> 'January to March',
        		'description'	=> '10 am - 6 pm'
        	],

        	[
        		'package_id'	=> 38,
        		'title'			=> 'April to May',
        		'description'	=> '10 am - 7 pm'
        	],

        	[
        		'package_id'	=> 38,
        		'title'			=> 'June to August',
        		'description'	=> '11 am - 9 pm'
        	],

        	[
        		'package_id'	=> 38,
        		'title'			=> 'Sept to Dec',
        		'description'	=> '10 am - 6 pm'
        	],

        	[
        		'package_id'	=> 38,
        		'title'			=> 'Holy Month of Ramadan',
        		'description'	=> '10 am - 4 pm'
        	],

        	[
        		'package_id'	=> 38,
        		'title'			=> 'Note',
        		'description'	=> 'Fridays and public holidays are STRICTLY for families'
        	],

        	[
        		'package_id'	=> 38,
        		'title'			=> 'Please note',
        		'description'	=> '1 way transfer to the park is included in price.  Pick up is available at extra charge.'
        	],

        	[
        		'package_id'	=> 39,
        		'title'			=> 'Timings Water Park',
        		'description'	=> '10:00 am – 19:00 pm'
        	],

        	[
        		'package_id'	=> 39,
        		'title'			=> 'Timings Theme Park',
        		'description'	=> '16:00 pm – 22:00 pm'
        	],

        	[
        		'package_id'	=> 39,
        		'title'			=> 'To Note',
        		'description'	=> 'Wednesday is an only woman’s day'
        	],

        	[
        		'package_id'	=> 39,
        		'title'			=> 'Please note',
        		'description'	=> '1 way transfer to the park is included in price.  Pick up is available at extra charge.'
        	],

        	[
        		'package_id'	=> 40,
        		'title'			=> 'Timings',
        		'description'	=> 'Pick up: 10:00 am –10:30 am'
        	],

        	[
        		'package_id'	=> 40,
        		'title'			=> 'Arrive',
        		'description'	=> '12:00 – 12:30'
        	],

        	[
        		'package_id'	=> 40,
        		'title'			=> 'Duration',
        		'description'	=> '2 – 3 Hours'
        	],

        	[
        		'package_id'	=> 40,
        		'title'			=> 'Available',
        		'description'	=> 'Daily, Apart from Sundays.'
        	],

        	[
        		'package_id'	=> 41,
        		'title'			=> 'Timings',
        		'description'	=> 'Available on your request '
        	],

        	[
        		'package_id'	=> 41,
        		'title'			=> 'Duration',
        		'description'	=> '2 – 3 Hours'
        	],


        	[
        		'package_id'	=> 41,
        		'title'			=> 'Available',
        		'description'	=> 'Daily'
        	],


        	[
        		'package_id'	=> 41,
        		'title'			=> 'Age',
        		'description'	=> 'Over 19 only'
        	],

        	[
        		'package_id'	=> 42,
        		'title'			=> 'Please note',
        		'description'	=> '1 way transfer to the park is included in price.  Pick up is available at extra charge.'
        	],

        	[
        		'package_id'	=> 43,
        		'title'			=> 'Duration',
        		'description'	=> '1-2 Hours '
        	],

        	[
        		'package_id'	=> 43,
        		'title'			=> 'Child should be',
        		'description'	=> '3 -10 Years old'
        	],

        	[
        		'package_id'	=> 43,
        		'title'			=> 'Infants',
        		'description'	=> 'Free'
        	],

        	[
        		'package_id'	=> 44,
        		'title'			=> 'Duration',
        		'description'	=> '2-3 Hours '
        	],

        	[
        		'package_id'	=> 44,
        		'title'			=> 'Child should be',
        		'description'	=> '3-10 years old'
        	],

        	[
        		'package_id'	=> 44,
        		'title'			=> 'Infants',
        		'description'	=> 'Free'
        	],

        	[
        		'package_id'	=> 45,
        		'title'			=> 'Duration',
        		'description'	=> '2-3 Hours '
        	],

        	[
        		'package_id'	=> 45,
        		'title'			=> 'Child should be',
        		'description'	=> '3-10 years old'
        	],

        	[
        		'package_id'	=> 45,
        		'title'			=> 'Infants',
        		'description'	=> 'Free'
        	],

        	[
        		'package_id'	=> 46,
        		'title'			=> 'Timings',
        		'description'	=> 'Pick Up 09:30 – 10:00 am – Drop off 19:00 – 19:30'
        	],

        	[
        		'package_id'	=> 46,
        		'title'			=> 'Tuesday - Sunday',
        		'description'	=> ''
        	],

        	[
        		'package_id'	=> 47,
        		'title'			=> 'Opening Hours',
        		'description'	=> 'Sun - Wed: 10:00 am – 22:00 pm'
        	],

        	[
        		'package_id'	=> 47,
        		'title'			=> 'Opening Hours',
        		'description'	=> 'Thurs – Sun: 10:00 am – 24:00 pm'
        	],

        	[
        		'package_id'	=> 48,
        		'title'			=> 'Opening Hours',
        		'description'	=> 'Sun - Wed: 10:00 am – 24:00 pm'
        	],

        	[
        		'package_id'	=> 48,
        		'title'			=> 'Opening Hours',
        		'description'	=> 'Thurs – Sun: 10:00 am – 22:00 pm'
        	],

        	[
        		'package_id'	=> 49,
        		'title'			=> 'Opening Hours',
        		'description'	=> 'Sat - Wed: 10:00 am – 23:00 pm'
        	],

        	[
        		'package_id'	=> 49,
        		'title'			=> 'Opening Hours',
        		'description'	=> 'Thurs – Fri: 10:00 am – 24:00 pm'
        	],

        	[
        		'package_id'	=> 50,
        		'title'			=> 'Opening Hours',
        		'description'	=> 'Sun - Wed: 10:00 am – 24:00 pm '
        	],

        	[
        		'package_id'	=> 50,
        		'title'			=> 'Opening Hours',
        		'description'	=> 'Thurs – Sun: 10:00 am – 22:00 '
        	],

        	[
        		'package_id'	=> 53,
        		'title'			=> 'Opening Hours',
        		'description'	=> 'Sun - Wed: 10:00 am – 22:00 pm'
        	],

        	[
        		'package_id'	=> 53,
        		'title'			=> 'Opening Hours',
        		'description'	=> 'Thurs – Sun: 10:00 am – 24:00 pm'
        	],

            [
                'package_id'    => 59,
                'title'         => 'Boarding Time',
                'description'   => '8pm'
            ],

            [
                'package_id'    => 59,
                'title'         => 'Cruise Time',
                'description'   => '8:30pm to 10:30pm'
            ]
        ];


        foreach( $packageInformation as $information )
        {
        	$newInformation = new PackageInformation;

        	$newInformation->package_id = $information['package_id'];
        	$newInformation->title = $information['title'];
        	$newInformation->description = $information['description'];

        	$newInformation->save();
        }
    }
}
