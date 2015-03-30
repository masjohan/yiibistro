Yii 2 Advanced Application Template
===================================

The Yii Bistro is my take on a restaurant loyalty program built on the PHP framework Yii with a SQLite backend database. The restaurant's fake grand opening is coming soon, and they want me to generate some buzz in the local community. Each of the first 100 users to register receive a mystery prize in the form of discount coupons, and an additional referral system is in place to encourage users to spread the news of the restaurant's opening.
    
Users are asked to sign up by entering their first and last name, as well as a valid email address and phone number. Alternatively users can sign up through Facebook (using the authclient Yii extension), but at the moment the Facebook link is not live. Users can log in by entering either their email address or phone number.

A welcome landing page is shown to newly-registered users, with the first 100 receiving a mystery prize. This landing page additionally hosts a countdown timer to the grand opening of the restaurant.
    
Users, once logged in, can update their credentials by navigating to the profile page. Entering an updated name, email, or phone number makes the appropriate change to their data in the database. A separate password validation dialog is available to offer an extra layer of protection when changing passwords.
    
The referral page enables users to invite friends to join and earn rewards in the process. A reward is currently given for any valid email address invited, but I'm hoping to expand upon this feature in a couple ways. First, I want to be able to track which emails have been sent out, and which have been responded to. Once I'm able to track this, I would be able to easily implement a tiered reward system for inviting x amount of people (better rewards every 2 successful referrals, etc).
