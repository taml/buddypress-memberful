# BuddyPress for Memberful
A Wordpress plugin to add membership restrictions to BuddyPress content. Specifically for the Memberful Wordpress plugin. 

## Before Installation
Make sure you have the official Memberful plugin installed on your Wordpress project. 
Before installation of the BuddyPress for Memberful plugin, some information needs to be added to the buddypress-memberful-redirect.php file.  

**Open the buddypress-memberful-redirect.php file in your favourite text editor then follow the two steps below. **
Firstly Memberful subscription slugs need to be added, these can be inserted in place of 'membership-option-1', '2' and '3' on the following line of code.
`if ( ! has_memberful_subscription( array('membership-option-1', 'membership-option-2', 'membership-option-3') ) ) {`
If three subscriptions aren't required just remove `, 'membership-option-3'` from the code.

*To find your Memberful subscription slugs, login to your Memberful account, navigate to the Subscription Plans tab then choose a subscription plan. Click on the your chosen subscription plan, then scroll to the bottom of the page. You will find a section containing the subscription slug. Repeat this for all subscription plans.*

Secondly you will need to add the website URL you wish Memberful to redirect a non-subscribed user too when they try to browse BuddyPress pages. This can be inserted between the brackets on this line of code `wp_redirect( 'website url for redirecting users to' );`.

Now save the file. 

After following the above two steps, the BuddyPress for Memberful plugin will be ready to install. Upload it to Wordpress, activate the plugin and you should be good to go!
**Just remember if you update your membership plans on Memberful, you may need to update your slugs in the buddypress-memberful-redirect.php to match them.**



I hope the plugin is helpful! 
