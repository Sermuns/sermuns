.PHONY: all dev

all:
	hugo

dev:
	hugo server -D -p 3000 --disableFastRender -d dev