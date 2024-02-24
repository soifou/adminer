.SILENT:
.DEFAULT_GOAL := help
ADMINEREVO_VERSION=4.8.3

.PHONY: init
init: install ## Init project
	cp private/servers.php.dist private/servers.php

.PHONY: install
install: ## Upgrade adminer to latest version
	curl -L https://github.com/adminerevo/adminerevo/releases/download/v$(ADMINEREVO_VERSION)/adminer-$(ADMINEREVO_VERSION).php > adminer.php
	# HACK: Suppress annoying warnings with PHP 8.3
	sed -i '1a ini_set("display_errors", "0");' adminer.php

.PHONY: help
help: ## Show this help
	@grep -E '(^[a-zA-Z_-]+:.*?##.*$$)|(^##)' Makefile | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[32m%-30s\033[0m %s\n", $$1, $$2}' | sed -e 's/\[32m##/[33m/'
