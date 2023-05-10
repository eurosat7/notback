default: test

test: rector phpstan

phpstan:
	vendor/bin/phpstan analyse -l 9 src

rector:
	php vendor/bin/rector -n
