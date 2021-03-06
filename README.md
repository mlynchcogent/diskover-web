# diskover-web - diskover's web file manager, storage analytics and file search engine

[![License](https://img.shields.io/github/license/shirosaidev/diskover-web.svg?label=License&maxAge=86400)](./LICENSE.txt)
[![Release](https://img.shields.io/github/release/shirosaidev/diskover-web.svg?label=Release&maxAge=60)](https://github.com/shirosaidev/diskover-web/releases/latest)
[![Sponsor Patreon](https://img.shields.io/badge/Sponsor%20%24-Patreon-brightgreen.svg)](https://www.patreon.com/diskover)
[![Donate PayPal](https://img.shields.io/badge/Donate%20%24-PayPal-brightgreen.svg)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=CLF223XAS4W72)

<img align="left" width="249" height="189" src="https://github.com/shirosaidev/diskover/blob/master/docs/diskover.png?raw=true" hspace="5" vspace="5" alt="diskover">

diskover-web is an open source web file manager, disk space usage, storage analytics and file search engine for [diskover](https://github.com/shirosaidev/diskover). It is designed to help you quickly search across your storage servers using your diskover Elasticsearch indices. With diskover-web you can visualize the file system meta data from your diskover crawls and get better insights into your data by viewing detailed disk usage analytics of your file systems.

diskover-web also supports file and directory tagging. Files and directories can be tagged for keep, archive or delete, or with custom tags, and from there you can use the diskover-web API to access file info for any data moving you wish to do.

With "smartsearches" in diskover-web, you can create any ES query and visualize those queries using the smartsearch analytics. Included are some common search queries such as image files, audio, video, documents, etc.

diskover-web allows exporting of file lists to json/csv, also the diskover-web REST API can be integrated into your pipeline and used to view or update data, such as tags, in your diskover indices.

It is written in HTML5, CSS3, PHP, Javascript, [jQuery](https://jquery.com/), [Bootstrap](http://getbootstrap.com/) and [D3.js](https://d3js.org).

## Screenshots

<img src="docs/diskover-web-dashboard-screenshot.png?raw=true" alt="diskover-web dashboard" width="400" align="left">
<img src="docs/diskover-web-filetree-screenshot.png?raw=true" alt="diskover-web file tree" width="400">
<img src="docs/diskover-web-treemap-screenshot.png?raw=true" alt="diskover-web treemap" width="400" align="left">
<img src="docs/diskover-web-hotdirs-screenshot.png?raw=true" alt="diskover-web hotdirs" width="400">
<img src="docs/diskover-web-heatmap-screenshot.png?raw=true" alt="diskover-web heatmap" width="400" align="left">
<img src="docs/diskover-web-tags-screenshot.png?raw=true" alt="diskover-web tags" width="400">
<img src="docs/diskover-web-dupes-screenshot.png?raw=true" alt="diskover-web dupes" width="400" align="left">
<img src="docs/diskover-web-smartsearches-screenshot.png?raw=true" alt="diskover-web smart searches" width="400">
<img src="docs/diskover-web-hardlinks-screenshot.png?raw=true" alt="diskover-web hardlinks" width="400" align="left">
<img src="docs/diskover-web-advancedsearch-screenshot.png?raw=true" alt="diskover-web advanced search" width="400">
<img src="docs/diskover-web-searchresults-screenshot.png?raw=true" alt="diskover-web search results" width="400" align="left">
<img src="docs/diskover-web-adminpanel-screenshot.png?raw=true" alt="diskover-web admin panel" width="400">


## Installation Guide

### Requirements

* `Linux or OS X/MacOS` (tested on Ubuntu 16.04/18.04, OS X 10.11.6)
* `PHP 7` (tested on PHP 7.1.10, 7.2.5)
* `Composer Dependency Manager for PHP` (install composer with apt or yum)
* `PHP client for Elasticsearch` ([elasticsearch-php](https://github.com/elastic/elasticsearch-php), tested on 5.3.2, installed when running composer install)
* `php-curl` (install with apt or yum, if you are running php7.1 or php7.2 install php7.x-curl)
* `Elasticsearch` (tested on Elasticsearch 5.4.2, 5.6.4)
* `Apache or Nginx` (if you don't want to use PHP built-in web server)
* `diskover` (Elasticsearch index created by diskover)

### Download

```sh
$ git clone https://github.com/shirosaidev/diskover-web.git
$ cd diskover-web
```
[Download latest version](https://github.com/shirosaidev/diskover-web/releases/latest)

### Install application dependencies

```sh
$ cd diskover-web
$ composer install
```

## User Guide

[Read the wiki](https://github.com/shirosaidev/diskover-web/wiki).


## License

See the [license file](https://github.com/shirosaidev/diskover-web/LICENSE).
