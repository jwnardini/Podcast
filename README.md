
# Podcast Blog Template

### For podcasters who wish to create a feed of their content

#### By Jon Nardine and Blake Scott

## Description

_A Drupal-based app.  Administrator can publish episodes of their podcast, with an audio file capacity of 128MB per upload. Listeners can sign up, and log in to post feedback on each inidivual podcast post._

_This project was put together using Drupal and the Audiofield module._

## SetUp

Access the desktop with your git-friendly command line (https://git-scm.com/downloads), and run the command 
* `git clone https://github.com/jwnardine/Podcast.git`

Start your local server, then go to [http://localhost:8888/phpmyadmin](http://localhost:8888/phpmyadmin).

Click on the Import tab, and direct PHPMyAdmin to Podcast/sites/all/db-backup, and select the database zip file. Import it

Click on the Priveleges tab, and add a user with the following information:

username: podcast
password: podcast

Then go to [http://localhost:8888/](http://localhost:8888/) and follow the initial Drupal page setup if necessary.
The login info for the administrator is the same as the database login.

## Running / Development
To post a podcast, click "Add content" and use the content type "Podcast Episode" then use the file field to add your audio file! Up to 128MB per upload.

## Known Bugs

No known bugs at the moment.

## Support and Contact Details

Contact the authors through [gitHub](https://github.com/jwnardine)

## Further Reading / Useful Links

* [Drupal](http://www.drupal.com/)

### License

Licensed under the MIT license.

Copyright (c) 2016 **Jon Nardine and Blake Scott**
