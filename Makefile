test:
	vendor/bin/phpunit --bootstrap tests/bootstrap.php tests
cs:
	vendor/bin/php-cs-fixer fix ${PWD} --level=psr2 --verbose --diff
