all:
	hugo

dev:
	hugo server -p 3000 --disableFastRender -d dev