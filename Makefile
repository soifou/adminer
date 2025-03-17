.SILENT:
.DEFAULT_GOAL := help
ADMINER_VERSION=5.0.5

# .PHONY: init
# init: install ## Init project
# 	cp private/DBServer.php.dist private/DBServer.php

.PHONY: install
install: ## Upgrade adminer to latest version
	curl -L https://github.com/vrana/adminer/releases/download/v$(ADMINER_VERSION)/adminer-$(ADMINER_VERSION).php > adminer.php

.PHONY: help
help: ## Show this help
	@grep -E '(^[a-zA-Z_-]+:.*?##.*$$)|(^##)' Makefile | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[32m%-30s\033[0m %s\n", $$1, $$2}' | sed -e 's/\[32m##/[33m/'
