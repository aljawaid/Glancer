<h1 name="readme-top">Glancer</h1>
<p align="center">
    <img src="https://img.shields.io/github/v/release/aljawaid/Glancer?style=for-the-badge&color=brightgreen" alt="GitHub Latest Release (by date)" title="GitHub Latest Release (by date)">
    <img src="https://img.shields.io/github/downloads/aljawaid/Glancer/total?style=for-the-badge&color=orange" alt="GitHub All Releases" title="GitHub All Downloads">
    <img src="https://img.shields.io/github/directory-file-count/aljawaid/Glancer?style=for-the-badge&color=orange" alt="GitHub Repository File Count" title="GitHub Repository File Count">
    <img src="https://img.shields.io/github/repo-size/aljawaid/Glancer?style=for-the-badge&color=orange" alt="GitHub Repository Size" title="GitHub Repository Size">
    <img src="https://img.shields.io/github/languages/code-size/aljawaid/Glancer?style=for-the-badge&color=orange" alt="GitHub Code Size" title="GitHub Code Size">
</p>
<p align="center">
    <img src="https://img.shields.io/github/discussions/aljawaid/Glancer?style=for-the-badge&color=blue" alt="GitHub Discussions" title="GitHub Discussions">
    <img src="https://img.shields.io/github/commits-since/aljawaid/Glancer/latest?include_prereleases&style=for-the-badge&color=blue" alt="GitHub Commits Since Last Release" title="GitHub Commits Since Last Release">
    <img src="https://img.shields.io/github/commit-activity/m/aljawaid/Glancer?style=for-the-badge&color=blue" alt="GitHub Commit Monthly Activity" title="GitHub Commit Monthly Activity">
    <a href="https://github.com/kanboard/kanboard" title="Kanboard - Kanban Project Management Software"><img src="https://img.shields.io/badge/Plugin%20for-kanboard-D40000?style=for-the-badge" alt="Kanboard"></a>
</p>

Quickly jump to a project, task or comment through a bar at the bottom of the screen. Use the new copy to clipboard feature in different formats coupled with the new global shortcut icon to realise why Glancer was built for power users. Following the ['Getting Things Done' - GTD](https://en.wikipedia.org/wiki/Getting_Things_Done) methodology, productive users can glance through their workflow easily. 

<p align="right">[<a href="#readme-bottom">&#8595; Bottom</a>]</p>

## Features

**Glancer Bar**
- A new fixed bar across the bottom of the screen allowing users to search by Task ID, Comment ID and Project ID
- Number-type fields let you enter your relevant ID number and press `enter` on your keyboard.
- A hidden button appears on focus for non-keyboard users
- Dashboard Shortcut - Jumps straight to the `Tasks` section of the `Dashboard`, sorted by the last created task
- Today's Date
- Auto fading alerts when no results are found

**Glancer Bar - Shortcut Icon**
- Set a internal or external shortcut on the bar for direct access to your most used website. For users who have documentation or other websites which you use in line with your workflow, you can now use this shortcut for quickly glancing at other pages.
- Choose from the complete range of Kanboard core icons or keep the default book icon
- Allow to set the link privacy
- Allow to open in the same or a new window

**Comments**
- Copy content in different formats  to the clipboard in a single click
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

**Activities**
- Comment events have been redesign to be consistent with task comments
- Comment events are shown in `Project Overview` and `Activity Stream`
- Deleted Comments shown more clearly with original dates on hover

**Task Descriptions**
- Copy content in different formats  to the clipboard in a single click
  - `HTML` - _Coded format_
  - `Markdown` - _Markdown format_
  - `Formatted` - _As displayed on the screen_
  - `Line` - _Spaces without the line breaks, all content in one long line_
- Add task description indicators to quickly show without collapsing if the task has a description
- Remove default 'always open' on page load
- Add description title icon

**Task Navigation**
- Show total count for open tasks in the current project on the task page
- Show previous/next navigation buttons on task page

<p align="right">[<a href="#readme-bottom">&#8595; Bottom</a>] [<a href="#readme-top">&#8593; Top</a>]</p>

## Screenshots

**Glancer Bar**  

![Glancer Bar](../master/Screenshots/screenshot-glancer.png "Glancer Bar")

_Simply press `enter` on your keyboard_  
![Glancer Bar Button Closeup](../master/Screenshots/screenshot-glancer-bar-closeup.png "Glancer Bar Button Closeup")

**Glancer Plugin Settings**

![Glancer Plugin Settings](../master/Screenshots/screenshot-glancer-settings.png "Glancer Plugin Settings")

#### _[More screenshots](../master/screenshots.md)_

<p align="right">[<a href="#readme-bottom">&#8595; Bottom</a>] [<a href="#readme-top">&#8593; Top</a>]</p>

## Usage

Glancer will show across the bottom of the screen. If no ID is found, then the user dashboard will be shown.

<p align="right">[<a href="#readme-bottom">&#8595; Bottom</a>] [<a href="#readme-top">&#8593; Top</a>]</p>

## Installation & Compatibility

<details>
    <summary><strong>Installation</strong></summary>

- Install via the **[Kanboard](https://github.com/kanboard/kanboard "Kanboard - Kanban Project Management Software") Plugin Directory** or see [INSTALL.md](../master/INSTALL.md)
- Read the full [**Changelog**](../master/changelog.md "See changes") to see the latest updates

</details>
<details>
    <summary><strong>Compatibility</strong></summary>

- Requires [Kanboard](https://github.com/kanboard/kanboard "Kanboard - Kanban Project Management Software") ≥`1.2.20`
- **Other Plugins & Action Plugins**
  - _No known issues_
  - Compatible with [KanboardCSS](https://github.com/aljawaid/KanboardCSS), [PluginManager](https://github.com/aljawaid/PluginManager), [Bak2topbotm](https://github.com/creecros/Bak2topbotm), [Calendar](https://github.com/kanboard/plugin-calendar)
- **Core Files & Templates**
  - `06` Template overrides
  - _No database changes_

</details>
<details>
    <summary><strong>Translations</strong></summary>

- English (UK)
- _Starter template available_

</details>

<p align="right">[<a href="#readme-bottom">&#8595; Bottom</a>] [<a href="#readme-top">&#8593; Top</a>]</p>

## Authors & Contributors

- [@aljawaid](https://github.com/aljawaid) - Author
- [Craig Crosby](https://github.com/creecros) - Contributor
- _Contributors welcome_

<p align="right">[<a href="#readme-bottom">&#8595; Bottom</a>] [<a href="#readme-top">&#8593; Top</a>]</p>

## License

- This project is distributed under the [MIT License](../master/LICENSE "Read The MIT license")

<a name="readme-bottom"></a>
<p align="right">[<a href="#readme-top">&#8593; Top</a>]</p>
