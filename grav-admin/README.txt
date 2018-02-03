Running the website:
1. Download and install MAMP
2. Open MAMP and click the Preferences button
3. Under the Ports tab, by default it should say Apache Port:8888, you don't need to change this, but you need to remember 8888
4. Under the Server tab, make sure the radio button next to Web Server is set on Apache
5. In the same tab, select the arrow button to the right of Document Root, choose the path where you are locally storing the website
6. Press OK and then click Start Servers
7. In a browser, in the URL bar, type in localhost:8888, you may have to click a folder or two for the website to appear,
depending on what path you chose in step 5
8. To access the admin panel, go to localhost:8888/.../grav-admin/admin. If the grav-admin folder is nested within other folders the path
may be longer, again it depends on the path specified in step 5

Note on changing configurations, pages, etc.:
- The only place that you will be changing things is grav-admin/user/, it's best to not change anything outside of the user folder
- Everything can be edited by opening up the files in a text editor, ie. TextEdit, Atom, Sublime Text, etc.
- For reference on Grav CMS or the markdown syntax used in editing pages, go to https://learn.getgrav.org/content/markdown
- For reference on the CSS library Bootstrap, go to https://getbootstrap.com/docs/4.0/getting-started/introduction/

Changing system configurations:
- All of the system configurations can also be changed within the admin panel's configuration tab of the website
(see Running the Website step 8)
1. Navigate to grav-admin/user/config, there are two files that really matter here, site.yaml and system.yaml
2. In site.yaml you can change the title of the entire website and the description for the website that appears in search engines
3. In system.yaml, most of the settings can stay at their default, you may also choose to turn on/off caching for files and
how long you want to cache those files

Changing the CSS (style of the website):
1. Navigate to grav-admin/user/themes/ams-wellness/css/custom.css, the document is commented to let you know what changes what
2. In the custom.css file you can change colours, font sizes, add a font, etc.

Changing the JavaScript:
1. Navigate to grav-admin/user/themes/ams-wellness/js/custom.js, the document is commented to let you know what changes what
2. The only change you may want to make is to get rid of the hover effect on the dropdown menu, you can just comment the code by
adding a /* to the beginning of the function and a */ to the end of the function

Changing the website's base template:
1. Navigate to grav-admin/user/themes/ams-wellness/templates/partials/pagebase.html.twig
2. In this file you can add/change a favicon image (the small image displayed in a browser's tab), change the content in the footer,
and access the code for the navigation bar's container (to change the actual navigation bar, see changing the navigation bar below)
3. If anything is changed in the navigation bar's container, you also need to make the exact same change in the file
grav-admin/user/themes/ams-wellness/templates/partials/modular.html.twig

Changing the navigation bar:
1. Navigate to grav-admin/user/themes/ams-wellness/templates/partials/navigation.html.twig
2. In this file you can change the functionality of the navigation bar if any new changes are required

Creating pages:
Option 1 - Admin panel
1. Login to the admin panel (see Running the Website step 8)
2. On the left hand sidebar, go to pages
3. In the top right hand corner, click add page, you can choose what type of page you want to create,
the other pages are all modular pages
4. Fill out the required information
Option 2 - Folder Architecture (recommended)
1. Navigate to grav-admin/user/pages
2. Simplest way is to copy an existing folder and paste it, change the name and the number, the number represents what order it will
appear in the navigation bar, inside the default.md file change the title of the page
3. Delete the sections you don't want or copy and paste more sections, follow the same folder naming format
4. Go to grav-admin/user/pages/somePage/modular.md and under custom either delete the section if you removed it or add in the
section's title under custom, you can also reorder them if you would like
Some tips for the section code
- copy and paste it from an already existing section
- if you want to add a new division in the webpage or a section, make sure you add the attribute markdown="1" in the opening tag
if you want to write markdown inside the tags
- check out the Bootstrap documentation linked above for drastic changes in style

Editing the content of a section:
1. Login to the admin panel (see Running the Website step 8)
2. On the left hand sidebar, go to pages
3. Click the + button beside a page until the _sections show
4. Click one of the _section# or _title
5. Add content using markdown syntax (see the link to the markdown syntax above) between the two div's where the original content is

Explaining the code for a page/section:
Here's some example code:

  Some sections have a different background color which is set in the line below, you can either get rid of the entire style="" or
  you can change the colour from #efefef which is a light grey to something else

  <div class="row justify-content-md-center pt-4" style="background-color: #efefef;">
  <div class="col-lg-4 col-md-6 col-sm-12" markdown="1">

    Everything within these two div's should be markdown syntax, and this is what will be shown on the webpage

  </div>

  To change the image that is shown, put the new image into the folder located at grav-admin/user/pages/images and change the home-bg.jpeg
  text to the name and extension of the new image file

  <div class="col-lg-4 col-md-6 col-sm-12 content-pics" style="background-image: url(images/home-bg.jpeg)">
  </div>
  </div>

  You can delete everything below this if you don't want the line in between the sections

  If you changed the background colour above, make sure you change it here as well

  <div class="row justify-content-md-center mb-4" style="background-color: #efefef;">
  <div class="col-lg-8 col-md-12 col-sm-12">
  <hr>
  </div>
  </div>

  Changing admin account:
  1. Login to the admin panel (see Running the Website step 8)
  2. On the left hand sidebar above Dashboard, click on Administrator
  3. You can now change the email, password, etc.
