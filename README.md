# Custom Adminer

[Adminer][1] with some plugins according to my current taste. This project is
initially a fork from [@hmphu][2].

## Overview

- Filters for databases, tables and selects.
- SQL commands logged into files per databases (in `sql/`)
- My own and useful(less?) plugins ; select2, perfectscrollbar

## Installation

```sh
make init
```

## Configuration

1. Adapt the database servers in `private/servers.php` to suit your need. See
   `private/servers.php.dist`
2. Run `index.php` in your browser.

---

[1]: https://github.com/adminerevo/adminerevo
[2]: https://github.com/hmphu/adminer
