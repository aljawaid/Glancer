# Glancer

#### _Plugin for [Kanboard](https://github.com/fguillot/kanboard "Kanboard - Kanban Project Management Software")_

Glancer lets you quickly jump to a project, task or comment through a search bar at the bottom of the screen. Following the ['Getting Things Done' - GTD](https://en.wikipedia.org/wiki/Getting_Things_Done) methodology, productive users can glance in and out of tasks, comments and projects across the interface.


Features
-------------

#### Glancer Bar
- A new fixed bar across the bottom of the screen allowing users to search by Task ID, Comment ID and Project ID
- Number-type fields let you enter your relevant ID number and press `enter` on your keyboard.
- A hidden button appears on focus for non-keyboard users
- Dashboard Shortcut - Jumps straight to the `Tasks` section of the `Dashboard`, sorted by the last created task
#### Comments
- Revamp comments to make them look consistent across the interface
- Display comment ID in comments
- Add _'time ago'_ next to comment title
  - _less than a minute ago_
  - _less than 5 minutes ago_
  - _less than 10 minutes ago_
  - _around 15 minutes ago_
  - _around half an hour ago_
  - _around 45 minutes ago ago_
  - _around an hour ago_
  - _around 2 hours ago_
  - _around 3 hours ago_
  - _around 4 hours ago_
  - _around 5 hours ago_
  - _around 6 hours ago_
  - _around 12 hours ago_
  - _earlier today_
  - _yesterday_
  - _a few days ago_
  - _less than a week ago_
  - _about a week ago_
  - _over a week ago_
  - _about 10 days ago_
  - _about 2 weeks ago_
  - _just over 2 weeks ago_
  - _nearly 3 weeks ago_
  - _about 3 weeks ago_
  - _over 3 weeks ago_
  - _about a month ago_
  - _just over a month ago_
  - _over a month ago_
  - _about 2 months ago_
  - _over 2 months ago_
  - _about 3 months ago_
  - _just over 3 months ago_
  - _over 3 months ago_
  - _about 4 months ago_
  - _just over 4 months ago_
  - _about 5 months ago_
  - _just over 5 months ago_
  - _about 6 months ago_
  - _just over 6 months ago_
  - _over 6 months ago_
  - _a year ago_
  - _just over a year ago_
  - _over a year ago_
  - _about 2 years ago_
  - _over 2 years ago_
  - _about 3 years ago_
  - _over 3 years ago_
  - _about 4 years ago_
  - _over 4 years ago_
  - _about 5 years ag_
  - _over 5 years ago_
- Add task icon to task title for easier identification
- Replace menu dropdown with direct action buttons
  - Redesign Comment Action Buttons
  - Add Back to Top Button
      - Scroll smoothly to the top of the page _(applies to all `a` links)_
  - Buttons appear on only on hover
  - Add Project Board Button
- Button Order:
  - _Left_ - Back to Top
  - _Left_ - Board
  - _Right_ - Comment Link
  - _Right_ - Edit Comment
  - _Right_ - Delete Comment

Screenshots
----------

**Glancer Bar**

![Glancer Bar](../master/Screenshots/screenshot-glancer.png "Glancer Bar")

**Glancer Bar Button**

_or simply press `enter` on your keyboard_
![Glancer Bar Button](../master/Screenshots/screenshot-glancer-button.png "Glancer Bar Button")

**Comments in Tasks**

![Comment](../master/Screenshots/screenshot-comment.png "Comment")

**Comments in Tasks - Hover**

![Comment - Hover](../master/Screenshots/screenshot-comment-hover.png "Comment - Hover")

**Comments in Tasks - Highlighted**

![Highlighted Comment](../master/Screenshots/screenshot-comment-highlighted.png "Highlighted Comment")

_Highlighted comments will show the Glancer icon on the left_

![Glancer Icon](../master/Screenshots/glancer-icon-full-width.png)

**Comments in Project Activity & Dashboard Activity**

![Created Comment](../master/Screenshots/screenshot-project-activity-comment-created.png "Created Comment")

**Comments in Project Activity & Dashboard Activity - Hover**

![Created Comment - Hover](../master/Screenshots/screenshot-project-activity-comment-created.png "Created Comment - Hover")

Usage
-------------

Go to anywhere within Kanboard. Glancer will show across the bottom of the screen. If no ID is found, then the user dashboard will be shown.


Compatibility
-------------

- Requires [Kanboard](https://github.com/fguillot/kanboard "Kanboard - Kanban Project Management Software") ≥`1.2.20`

#### Other Plugins & Action Plugins
- _No known issues_
#### Core Files & Templates
- `07` Template overrides
- _No database changes_


Changelog
---------

Read the full [**Changelog**](../master/changelog.md "See changes")


Installation
------------

- **Install via [Kanboard](https://github.com/fguillot/kanboard "Kanboard - Kanban Project Management Software") Plugin Directory**
  - _Go to_ Kanboard: `Settings` -> `Plugins` -> `Plugin Directory`

**_or_**

- **Install via [Releases](../master/Releases/ "A copy of each release is saved in the folder") folder**
 - A copy of each release is saved in the Releases folder of the repository
 - Simply extract the `.zip` file into the `plugins` directory

**_or_**

- **Install via [GitHub](https://github.com/aljawaid "Find the correct plugin from the list of repositories")**
- Download the `.zip` file and decompress everything under the directory `plugins`
 - The `.zip` folder must not contain any branch names and must be exact case matching the plugin name

_Note: Plugin folder is case-sensitive._

**_or_**
- `git clone` (_or ftp upload_) and extract the `.zip` into this folder: `.\plugins\` (must be exact case)


Translations
------------

- English (UK)
- _Contributors welcome_


Authors & Contributors
----------------------

- [@aljawaid](https://github.com/aljawaid) - Author
- [Craig Crosby](https://github.com/creecros) - Contributor
- _Contributors welcome_


License
-------
- This project is distributed under the [MIT](../master/LICENSE "Read The license") license
