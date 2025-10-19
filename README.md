# WP Snippet: Remove Tags from Posts

Removes the post_tag taxonomy from WordPress posts, hiding tags completely in the admin panel.

## Features

- Removes tags taxonomy from posts
- Clean admin interface (only categories visible)
- Lightweight solution (single function)
- No database modifications required

## Requirements

- WordPress 5.0 or higher
- PHP 7.4 or higher

## Installation

### Method 1: functions.php

1. Open your theme's `functions.php` file
2. Copy the entire content from `remove-tags-post.php`
3. Paste at the end of your `functions.php`
4. Save the file

### Method 2: Code Snippets Plugin

1. Install and activate the [Code Snippets](https://wordpress.org/plugins/code-snippets/) plugin
2. Go to Snippets → Add New
3. Copy content from `remove-tags-post.php` **WITHOUT the opening `<?php` tag**
4. Paste into the Code field
5. Activate the snippet

## Usage

Once activated, tags will be completely removed from posts in the admin panel. Only categories will be visible in the post editor and post list.

## Changelog

See [CHANGELOG.md](CHANGELOG.md) for version history.

## License

GPL v2 or later

## Author

[Torwald45](https://github.com/Torwald45)
