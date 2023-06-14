
init: upgrade ## Init project
	cp private/servers.php.dist private/servers.php

upgrade: ## Upgrade adminer to latest version
	curl -L https://www.adminer.org/latest-en.php > adminer.php
	#
	# Latest Adminer has issue while querying in a SQLite databse with PHP8.
	# This fork fix theses issues
	# curl -L https://github.com/bayrell-os/adminer/releases/download/4.8.2-fix/adminer-4.8.2-fix.php > adminer.php

.PHONY: init upgrade

.SILENT:
.DEFAULT_GOAL := help
help:
	@grep -E '(^[a-zA-Z_-]+:.*?##.*$$)|(^##)' Makefile | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[32m%-30s\033[0m %s\n", $$1, $$2}' | sed -e 's/\[32m##/[33m/'
.PHONY: help
