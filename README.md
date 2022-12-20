# Glancer

#### _Plugin for [Kanboard](https://github.com/fguillot/kanboard "Kanboard - Kanban Project Management Software")_

Quickly jump to a project, task or comment through a bar at the bottom of the screen. Use the new copy to clipboard feature in different formats coupled with the new global shortcut icon to realise why Glancer was built for power users. Following the ['Getting Things Done' - GTD](https://en.wikipedia.org/wiki/Getting_Things_Done) methodology, productive users can glance through their workflow easily. 


Features
-------------

#### Glancer Bar
- A new fixed bar across the bottom of the screen allowing users to search by Task ID, Comment ID and Project ID
- Number-type fields let you enter your relevant ID number and press `enter` on your keyboard.
- A hidden button appears on focus for non-keyboard users
- Dashboard Shortcut - Jumps straight to the `Tasks` section of the `Dashboard`, sorted by the last created task
- Today's Date
- Auto fading alerts when no results are found
#### Glancer Bar - Shortcut Icon _(v2.0+)_
- Set a internal or external shortcut on the bar for direct access to your most used website. For users who have documentation or other websites which you use in line with your workflow, you can now use this shortcut for quickly glancing at other pages.
- Choose from the complete range of Kanboard core icons or keep the default book icon
- Allow to set the link privacy
- Allow to open in the same or a new window
#### Comments
- Copy content in different formats  to the clipboard in a single click _(v2.0+)_
  - `HTML` - _Coded format_
  - `Markdown` - _Markdown format_
  - `Formatted` - _As displayed on the screen_
  - `Line` - _Spaces without the line breaks, all content in one long line_
- Revamp comments to make them look consistent across the interface
- Better usage of tooltips to provide supplementary information
- Display comment ID in comments
- Add _'time ago'_ next to comment title
- [Time Ago Relative Dates _- 51 translatable calculations_](../master/time-ago.md "View table of calculations")
- Add task icon to task title for easier identification
- Replace menu dropdown with direct action buttons
  - Redesign Comment Action buttons
  - Add Back to Top button within each comment
      - Scroll smoothly to the top of the page _(applies to all `a` links)_
  - Comment Action buttons appear on only on hover
  - Add Project Board button within each comment
- Button Order:
  - _Left_ - Back to Top
  - _Left_ - Board
  - _Right_ - Comment Link
  - _Right_ - Edit Comment
  - _Right_ - Delete Comment

#### Activities
- Comment events have been redesign to be consistent with task comments
- Comment events are shown in `Project Overview` and `Activity Stream`
- Deleted Comments shown more clearly with original dates on hover

#### Task Descriptions _(v2.0+)_
- NEW: Copy content in different formats  to the clipboard in a single click _(v2.0+)_
  - `HTML` - _Coded format_
  - `Markdown` - _Markdown format_
  - `Formatted` - _As displayed on the screen_
  - `Line` - _Spaces without the line breaks, all content in one long line_
- Add task description indicators to quickly show without collapsing if the task has a description
- Remove default 'always open' on page load
- Compatibility with [KanboardCSS](https://github.com/aljawaid/KanboardCSS)
- Add description title icon


Screenshots
----------

**Glancer Bar**  

![Glancer Bar](../master/Screenshots/screenshot-glancer.png "Glancer Bar")

_Simply press `enter` on your keyboard_  
![Glancer Bar Button Closeup](../master/Screenshots/screenshot-glancer-bar-closeup.png "Glancer Bar Button Closeup")

**Glancer Plugin Settings** _(v2.0+_)

![Glancer Plugin Settings](../master/Screenshots/screenshot-glancer-settings.png "Glancer Plugin Settings")

#### _[More screenshots](../master/screenshots.md)_


Usage
-------------

Glancer will show across the bottom of the screen. If no ID is found, then the user dashboard will be shown.


Compatibility
-------------

- Requires [Kanboard](https://github.com/fguillot/kanboard "Kanboard - Kanban Project Management Software") ≥`1.2.20`

#### Other Plugins & Action Plugins
- _No known issues_
- Compatibile with [KanboardCSS](https://github.com/aljawaid/KanboardCSS)
- Compatibile with [PluginManager](https://github.com/aljawaid/PluginManager)
#### Core Files & Templates
- `06` Template overrides
- _No database changes_


Changelog
---------

Read the full [**Changelog**](../master/changelog.md "See changes")


Installation
------------

- **Install via the [Kanboard](https://github.com/fguillot/kanboard "Kanboard - Kanban Project Management Software") Plugin Directory**
  - _Go to_ Kanboard: `Settings` &#10562; `Plugins` &#10562; `Plugin Directory`

**_or_**

- **Install via the [Releases](../master/Releases/ "A copy of each release is saved in the folder") folder**
 - A copy of each release is saved in the `/Releases` folder of the repository
 - Simply extract the `.zip` file into the `/plugins` directory

**_or_**

- **Install via [GitHub](https://github.com/aljawaid "Find the correct plugin from the list of repositories")**
- Download the `.zip` file and decompress everything under the directory `/plugins`
- The folder inside the `.zip` must not contain any branch names and must be exact case (matching the plugin name)

_Note: The `/plugins` folder is case-sensitive._

- **Install using Git CLI**
- `git clone` (_or ftp upload_) and extract the `.zip` file into this folder: `.\plugins\` (must be exact case)


Translations
------------

- English (UK)
- _Translation starter template included_
- _Contributors welcome_


Authors & Contributors
----------------------

- [@aljawaid](https://github.com/aljawaid) - Author
- [Craig Crosby](https://github.com/creecros) - Contributor
- _Contributors welcome_


License
-------
- This project is distributed under the [MIT License](../master/LICENSE "Read The MIT license")
