# Development

### A description of the Jazz Townsville theme development and deployment workflow.

#### Step 1. Setup WordPress
Your development of the Jazz Townsville theme begins with a WordPress installation populated with the [WordPress Theme Test Data](https://github.com/WPTT/theme-test-data). Simply right-click on [this link](https://raw.githubusercontent.com/WPTT/theme-unit-test/master/themeunittestdata.wordpress.xml) and click "save link as" (on Chrome). A helpful guide to the WordPress test data can be found [here](https://www.youtube.com/watch?v=eGT0Z3oafFA&ab_channel=CoreySchafer).

#### Step 2. Clone Parent and Jazz Townsville Theme
To begin developing the theme, you need the parent understrap theme and our Jazz Townsville theme. Clone the official [Understrap repository](https://github.com/understrap/understrap) into a folder called _understrap_ residing in the _wp-content/themes_ folder of your WordPress root directory (or download a zip instead). With the parent theme installed, clone our Jazz Townsville repository (cp3402-2022-1-site-team01) into a folder within _wp-content/themes_. Name this folder whatever you wish.

#### Step 3. Set up NodeJs and NPM
You're going to need [NodeJs](https://nodejs.org) installed on your local machine to make the Jazz Townsville theme actually work. We recommend installing the LTS Version. Once installed, test that nodejs and npm work by executing the commands `npm -v` and `node -v`. Npm (Node Package Manager) is the standard NodeJs package manager that comes pre-installed with NodeJs.

With NodeJs and npm installed, you can now actually boot up the Jazz Townsville theme. open a terminal into the folder that you cloned _this repository_ into. Run the command `npm install` to automatically download everything the theme needs to function. With that done, you then need to compile the CSS and JavaScript to actually load the styles. You can compile CSS and JS individually by running `npm run css` and `npm run js`, or together by running `npm run dist`.

You should now be able to view the Jazz Townsville theme in your local WordPress installation (don't forget to activate the theme).

#### Step 4. Changing stuff on the theme
As you edit the files you want to change (see theme.md for a guide to that), you will have to recompile the CSS and JS each time you make a change. You can either run `npm run dist` each time, or you can set up a _file watcher_. This service will automatically compile CSS and JS whenever it detects a change of the theme files (files must be saved before detection). You can set up a file watcher by simply running `npm run watch`. Once compiling has finished, you must reload your browser to view your changes (Unless you're using browser-sync, as mentioned below). To stop any file watcher, press `crl+c` to stop any file watchers.

#### Step 5. (Optional) Using browser-sync
Browser-sync is a helpful tool that can automatically reload your browser when changes to the local files are detected. Browser-sync works (in this project) by setting up a _proxy_ to your local web server. The address of this server may be different depending on what local environment you use, but it's pretty much just the address of your browser tab that's displaying your local WordPress installation. Find the file _src/build/browser-sync.config.js_ (inside the Jazz Townsville theme folder) and copy the address into the "proxy" field, replacing the current value.

You've now setup a browser-sync proxy! You can run the file watcher and browser-sync autoloader together by running `npm run watch-bs`. This will open a new browser tab with the autoloading script inside. You can tell the browser-sync tab from the original by looking at the address. The browser-sync tab should have an extra port number in there somewhere.

#### Step 6. Committing and pushing
Before you make any changes, create a new _Git branch_ to do your work on. Ensure you have the main branch "checked out" by running `git checkout main`. Then create your new branch (copied off main) by running `git checkout -b your_branch_name`. `-b` creates a new branch. Replace `your_branch_name` with a descriptive branch name that describes the changes that you will be making (for example, _change-background-colour_). Remember to use all lowercase and dashes instead of spaces.

"Stage" your changes by first running `git status`, to see what's been changed, then `git add file_changed` (or `git add -A` to stage all files). Then, "commit" your changes by using `git commit -m "your_commit_message"`. Here is a [helpful guide](https://www.freecodecamp.org/news/writing-good-commit-messages-a-practical-guide/) to writing a good commit message. Finally, "push" your changes to our repository by using `git push -u origin your_branch_name`. The `-u origin your_branch_name` creates a new branch on our remote GitHub repository and allows us to see your changes. After your first push, you won't need to use `-u origin your_branch_name`. You can just use `git push`, unless you create another branch.

#### Step 7. Creating a pull request
After making your changes and pushing them to our repository, you want them to actually be incorporated into our project instead of being left all by themselves in a lonely branch. We'd love to merge your branch with our _main_ branch, but first you need to make a _pull request_. Head over to our GitHub repository and go to the "Pull Requests" tab. Click on the green button that says "New Pull Request", then select _your branch_ on the right of the small arrow and _main_ on the left. Don't worry if it says that it can't automatically merge, we'll sort that out later. Just hit the green button again. Enter a title and description outlining what you have changed, and add us as reviewers on the right side. Finally, hit the down arrow next to the green button, and create a draft pull request. Fantastic!

#### Step 8. Pushing to the staging branch
In order for us to see your changes easily, you can make a pull request to the "staging" branch. Just repeat Step 7, but merge to _staging_ instead of _main_. Add us for review, then once your PR is reviewed, your changes will be automatically be loaded into our [Staging Website](http://54.79.204.77/jazztownsville). The staging site allows us to see what your changes look like on the actual Jazz Townsville site.

#### Step 9. Deploying to the production branch
To push to the production branch, simply go to the "Actions" tab in this repository, select the "Deploy to Production" workflow, and manually run it from the main branch using the "Run workflow" button. This will automatically update the Jazz Townsville [Production Website](http://3.25.82.197/jazztownsville/) with a distributable version of the Jazz Townsville theme. Note that this is done via the _dist_ branch, which is automatically updated with a distributable compilation of the child theme whenever there is a push to main, so any changes _must be merged to main first._

And that's it! You've now contributed something to the Jazz Townsville Theme. We look forward to seeing what you've done!
