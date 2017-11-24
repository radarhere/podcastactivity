# podcastactivity

Podcast Activity Logger

## What is it?

Podcast Activity Logger is very simple - one PHP file and a .htaccess file.

I manage a podcast.

I know people who are involved with podcasts.

Whenever I talk to them about how successful it is, or the possibility of extending it further, I hear the response that they don't know if it's justified, because they can't tell how many people are actually listening to the audio.

Apple doesn't report usage information from iTunes, and so they resign themselves to maintaining this project that may either be vitally important or essentially worthless.

The solution seemed relatively obvious, but it's taken me a while to get around to it - use rewrite rules to process all MP3 file requests through a PHP script that then logs activity.


## What does the logging look like?

Thursday 01/08/13 7:37 PM - test.mp3

Thursday 01/08/13 7:38 PM - test.mp3


## How do I set it up?

Place the .htaccess file and the PHP script in the same directory as your audio. By default, the script writes the log file to the directory it is in, so make sure the write privileges are set up accordingly.


## I'm not very technical. Can I ask for help?

Sure. Although this script is so basic that I will just be helping you figure out your server configuration.
