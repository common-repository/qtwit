=== qTwit (for Wordpress) ===
Contributors: kylehotchkiss
Donate link: http://kylehotchkiss.com/blog/contact/
Tags: twitter, jquery, tweet, client-side, widget, sidebar
Requires at least: 2.8
Tested up to: 2.9
Stable tag: trunk

qTwit is a Wordpress widget that loads Tweets (from Twitter) on the client-side, via jQuery, as opposed to on the server.

== Description ==

Tweet, tweet! What was that? You have a Twitter too? (Who *doesn't* tweet these days?) So yeah, if you're here, you probably have a Wordpress install as well! Guess what,
you've just found the collision! Sure, qTwit isn't the *only* Twitter widget it out there, but it's claim-to-fame is that it loads your Tweets on the *client-side*, meaning
that it uses the [jQuery plugin by Seaofclouds](http://tweet.seaofclouds.com) to load your tweets. What does this mean for you? Well, several things:

* Your tweets are always up-to-date, even with that super-cool caching plugin you just installed!
* Your server isn't coughing up blood from exhaustion loading the tweets by itself all the time!
* You can say your blog is **powered by jQuery**, because everybody knows how legit that is.

AND, we can't forget that Seaofclouds threw in some goodies that pass on to you:

> * Small size and fast download time.
> * Will not slow down or pause your page while Tweets are loading.
> * Automatic linking of @replies to users’ Twitter page.
> * Automatic linking of URLs.
> * Automatic linking of #hashtags, to a Twitter search of all your tags.
> * Converts <3 to a CSS styleable ♥.
> * Makes awesome text, AWESOME text with AWESOMEIZER.
>
> *- the Seaofclouds webpage*

So there you have it, go ahead and click "Install" now!

**If you appreciate this plugin, I ([@kylehotchkiss](http://twitter.com/kylehotchkiss/)) and Seaofclouds ([@seaofclouds](http://twitter.com/seaofclouds/)) would love a tweet saying so!*

== Installation ==

1. Upload the `qtwit` directory into `/wp-content/plugins/` (Or whereever you store plugins).
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. In the widgets dashboard, add `qTwit` to your sidebar.
4. Don't forget to add your username, unless you want to what's going on in *someone elses* life.
5. Prepare for your Guests to be amazed as each and every one peers into your Twitter life.

== Frequently Asked Questions ==

= What's with the name? =
'q' is from jQuery (duh), and 'Twit' is short for 'Twitter.' The lack of space is a total typo, dude.

= What does the end user see if their Javascript is off? =
Honestly, if people are too scared to see your website with Javascript on, then they are probably better off not seeing what you post to Twitter!
For real though, they get a little message saying they can't see your epic life story without Javascript. Sorry to my Lynx homeboys, I tried so hard for you!

= Does it support multiple instances? = 
I haven't tried it, but I don't see why it wouldn't work. (I only I have one Twitter account.)

= I CAN ONLY SHOW 5!?! =
Yeah, sorry buddy, you have a Twitter URL for a reason!

= Where are my Tweets? =
Well, there are a number of reasons they aren't showing up:
1. Your tweets are hidden! (Well, they're not just hidden from Twitter, they're hidden from all your Guests too!) Just unhide them, and bless the world with your
thoughts in 140 characters or less!

2. You haven't posted any updates lately! For some reason, Twitter only returns results within a certain time frame, so if you are tweeting at least once a week, 
your Guests will see at least one. If you aren't posting often, why do you need a Twitter widget after all? =P

4. If the above doesn't help, send me a tweet (([@kylehotchkiss](http://twitter.com/kylehotchkiss/))), and if time allows, I can take a look for you! 

== Changelog ==

= 0.5 = 
Removed the "See more Tweets" link. In the future, this could be added as an option.

= 0.4 =
These daily updates will stop soon, but there was another caps error.

= 0.3 =
Fixed a fatal bug caused by using an absolute path that ironically didn't work, should work & upgrade fine now.

= 0.2 = 
Added noscript-ness and multiple instance support. Basically features I should have put in the first release.

= 0.1 =
This is the inital release of qTwit (for Wordpress).

== Upgrade Notice ==

= 0.5 =
Just minor tweaks.

= 0.4 =
If your tweets aren't showing up, please try this update.

= 0.3 =
I believe the updates earlier were broken because of an absolute path error. It's now fixed and usable.

= 0.2 =
You can totally now use more then one qTwit widget. And it informs your Javascript-free visitors to turn it on.

= 0.1 = 
Upgrade now if you want faster tweets!
