# Custom Adminer

Latest [Adminer][1] with a [custom theme][2] and some plugins according to my current taste.
This project is initially a fork from [@hmphu][3].

## Overview

- Nice dark custom theme
- My own and useful(less?) plugins ; select2, perfectscrollbar
- Filters for databases, tables and selects.
- SQL commands logged into files per databases (in `sql/`)

## Installation

```sh
$ make init
```

## Configuration

Adapt the DB servers in `private/servers.php` to suit your need.
Then run the `index.php` in your browser.

## Update

In case of new release, update adminer:

```sh
$ make upgrade
```

[1]: https://www.adminer.org/
[2]: https://github.com/pepa-linha/Adminer-Design-Dark
[3]: https://github.com/hmphu/adminer
