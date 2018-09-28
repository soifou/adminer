
init: upgrade ## Init project
	cp private/servers.php.dist private/servers.php

upgrade: ## Upgrade adminer to latest version
	curl -L https://www.adminer.org/latest-mysql-en.php > adminer.php

.PHONY: init upgrade

.SILENT:
.DEFAULT_GOAL := help
help:
	@grep -E '(^[a-zA-Z_-]+:.*?##.*$$)|(^##)' Makefile | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[32m%-30s\033[0m %s\n", $$1, $$2}' | sed -e 's/\[32m##/[33m/'
.PHONY: help