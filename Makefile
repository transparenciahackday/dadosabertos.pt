serve:
	php -S 0.0.0.0:9000

deploy:
	rsync -ar --delete --progress . -e ssh dh:/home/rlaf/www/dadosabertos.pt/ --exclude ".git*"

dry-deploy:
	rsync -arn --delete --progress . -e ssh dh:/home/rlaf/www/dadosabertos.pt/ --exclude ".git*"
