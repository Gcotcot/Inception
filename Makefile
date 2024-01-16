all:
	docker-compose -f srcs/docker-compose.yml build
down:
	docker-compose -f srcs/docker-compose.yml down
up:
	docker-compose -f srcs/docker-compose.yml up -d
data:
	rm -rf ~/../home/gcot/data/mariadb/ ~/../home/gcot/data/wordpress/
	mkdir ~/../home/gcot/data/mariadb ~/../home/gcot/data/wordpress
re:	fclean all

clean:
	docker stop $$(docker ps -qa)
	docker system prune -af

fclean:	clean data
