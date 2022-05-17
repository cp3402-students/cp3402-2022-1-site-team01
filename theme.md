# Theme

### A description of and guide to developing the Jazz Townsville theme.


#### Important Features
- __Header__ - The site header is consistent across all pages and includes navigation and the site logo.
- __Footer__ - Consistent across all pages, includes important information about the Townsville Jazz Club.
- __Templates__ - Three page templates exist, one with a sidebar and one without, and one with a sidebar and banner.
- __Sidebar__ - The sidebar displays a list of upcoming events and appears on the right of each page that has one of the sidebar templates.
- __Styles__ - All styling is done using SASS in two .scss files listed below.

#### Files That Have Been Changed
- _header.php_ - the site header, included on all pages of the site.
- _functions.php_ - write your custom php functions here.
- _footer.php_ - the site footer, included on all pages of the site.
- _single.php_ - defines how a single post looks.
- _src/sass/theme/_child_theme.scss_ - contains _all custom styling_ for the theme.
- _src/sass/theme/_child_theme_variables.scss_ - contains altered variables for bootstrap.

#### Other Files You can Change

Any other PHP files that affect the way WordPress looks. Note that these files inherit a lot from the parent understrap theme, so you may have to copy template files from the parent understrap folder to edit them in the Jazz Townsville theme.

Any styling, just ensure you do only edit styles in the two .scss files listed above, _src/sass/theme/_child_theme.scss_ and _src/sass/theme/_child_theme_variables.scss_.

#### Design Considerations

The design of the theme is apparent if you can see how it looks in your local environment. Some general guidelines for consistency are:

- keep to the colour and typography scheme. Our colour scheme is a deep red on black and our primary font is Futura. We want the site to look modern but have a mature and slightly romantic feel to it.
- Consider the target audience - we are trying to appeal to generally an older audience, so make sure text is easily readable, contrast is not too high, easy to understand and easy on the eyes.
- Consider the goals of the site - the purpose of the Jazz Townsville website is to draw users to sign up to the club and to provide information about the club and upcoming events. Our goal is to have 100 new members sign up via our online form by the end of 2022. In order for your work on the site to be effective in helping the Club, please keep the goal and purpose in mind.
