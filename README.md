# restAPI
REST API project with Arrasmith, Mize, and Perkins

The main rest folder and format_functions foler should be placed in your htdocs folder for local testing.

Tim:
For documentation, there are two files in the rest folder: restDocs.html and adminDoc.html
restDocs is for User access which is just GET stuff
adminDocs will have all the User stuff plus the Add, Edit, Delete info.

Zach:
We need a little more functionality on the back-end so that the User can view the stats in different ways.
Right now all that they can do is view all of the stats or one to a few depending on what they pick to get by.
You had asked about viewing all teams with scores greater than something...we should add that.

The back-end files are in the v1 subfolder: api.php, admin.php, and api.class.php
api.php is the endpoint access for the user (localhost/rest/v1/ewu/  or www.mizesolutions.com/rest/v1/ewu/)
admin.php is the endpoit access for the admin (localhost/rest/v1/admin/  or www.mizesolutions.com/rest/v1/admin/)
api.class.php is the class file that holds the functions used by both endpoints.

To add functionality to either endpoint you have to create a coresponding function in the class.

