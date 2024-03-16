.PHONY: all dev bind help

PORT=3000
BIND_ADDRESS=0.0.0.0
BASE_URL=http://192.168.1.112:3000

all:
	hugo

dev:
	hugo server -D -p $(PORT) --disableFastRender -d dev $(ARGS)

bind:
	make dev ARGS="--bind $(BIND_ADDRESS) --baseURL $(BASE_URL)"

help:
	@echo "all - Build the website using Hugo"
	@echo "dev - Start the Hugo server for development"
	@echo "bind - Start the Hugo server bound to $(BIND_ADDRESS) and with base URL $(BASE_URL)"
	@echo "You can pass additional arguments to the 'dev' command using ARGS=\"...\""