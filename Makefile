serve:
	php -S 127.0.0.1:9000

deploy:
	rsync -ar --delete --progress . -e ssh thd:~/apps/static-dadosabertos/ --exclude ".git*"

dry-deploy:
	rsync -arn --delete --progress . -e ssh thd:~/apps/static-dadosabertos/ --exclude ".git*"
