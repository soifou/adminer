Custom Adminer
=====================

Latest [Adminer][1] with a custom theme and some plugins according to my current taste. wThis project is a fork from [@hmphu][2].

## Overview

* Nice custom theme
* My own and useful(less?) plugins ; select2
* Filters for databases, tables and selects.
* SQL commands logged into files per databases (in `sql/`)
* Font ligatures with FiraCode for SQL editions

## Installation

```sh
$ make init
```

## Configuration

Adapt the DB servers in `private/servers.php` to suit your need.
Then run the `index.php` in your browser.

[1]: https://www.adminer.org/
[2]: https://github.com/hmphu/adminer